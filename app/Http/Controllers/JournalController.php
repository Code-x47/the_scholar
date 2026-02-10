<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Volume;
use App\Models\Article;
use App\Models\Journal;
use App\Models\Category;
use App\Models\MainJournal;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class JournalController extends Controller
{

//    public function ViewJournals(MainJournal $raw) {
//          return view('users.journals',compact('raw'));
//    }

//    public function JournalsByCategory() {
//       $cat = MainJournal::get()->paginate('10');
//       return view('category',compact($cat));
//    }


//    public function ViewSingleJournal() {
      
//    }


//    public function JournalSearchResult() {
//        $result = $_GET['search'];
//        $journal = MainJournal::where("title","like","%".$result."%")->get();
//        return view("SearchPage",compact('journal'));
//    }
   

   public function Socials() {
      $socials = MainJournal::where("category","socials & humanity");
      return view("users.social-sci",compact('socials'));
   }

   public function BusinessAndFinance() {
      $biz = MainJournal::where("category","Business & Finance");
      return view("users.biz&fin",compact('biz'));
   }

   public function ScienceAndTech() {
      $sci = MainJournal::where("category","Business & Finance");
      return view("users.biz&fin",compact('sci'));
   }

   public function MultiDiscipline() {
      $multi = MainJournal::where("category","Business & Finance");
      return view("users.biz&fin",compact('multi'));
   }

   public function All_Journal() {
      $category = Category::get();
      return view('users.journals',compact('category'));
   }
   
   public function JournalArticles(Request $request, $id) {
    
    $journal = Journal::findOrFail($id);

    $search = $request->query('search');
    $sort   = $request->query('sort', 'latest');

    $articles = Article::query()

        //  Journal filter (Article → Issue → Volume → Journal)
        ->whereHas('issue.volume', function ($q) use ($journal) {
            $q->where('journal_id', $journal->id);
        })

        //  Only published
        ->where('status', 'published')

        //  SEARCH
        ->when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('abstract', 'like', "%{$search}%")
                  ->orWhere('keywords', 'like', "%{$search}%");
            });
        })

        //  SORTING
        ->when($sort, function ($query) use ($sort) {
            match ($sort) {
                'title_asc'  => $query->orderBy('title', 'asc'),
                'title_desc' => $query->orderBy('title', 'desc'),
                'downloads'  => $query->orderByDesc('download_count'),
                default      => $query->orderByDesc('published_at'),
            };
        })

        //  Eager load
        ->with(['issue.volume'])

        //  Pagination
        ->paginate(20)
        ->withQueryString();

    return view('users.current_issues', compact('journal', 'articles', 'sort', 'search'));
}




   

   public function ViewArticle($id) {
       $article = Article::findOrFail($id);
       $journal = Journal::findOrFail($id);
       $volume = Volume::findOrFail($id);
       $issue = Issue::findOrFail($id);
       
       $article = Article::with(['issue.volume.journal'])->findOrFail($id);

        $similarArticles = Article::where('id', '!=', $article->id)
        ->where('status', 'published')
        ->whereHas('issue.volume', function ($q) use ($article) {
            $q->where('journal_id', $article->issue->volume->journal_id);
        })
        // ->whereHas('keywords', function ($q) use ($article) {
        //     $q->whereIn(
        //         'keywords.id',
        //         $article->keywords->pluck('id')
        //     );
        // })
        ->with('issue.volume')
        ->take(5)
        ->get();

       
      return view('users.article',compact('article','journal','volume','issue','similarArticles'));
   }

   public function ViewArticle2() {
      return view('users.article2');
   }

   public function download(Article $article){
     return Storage::download($article->pdf_path);
   }


   

   public function Archive($id) {
    $journal = Journal::with([
        'volumes.issues' => function ($q) {
            $q->orderByDesc('issue_number');
        }
    ])->findOrFail($id);

    return view('users.archives', compact('journal'));


   }




   public function articles($id){
    $issue = Issue::with('volume.journal')->findOrFail($id);
    
    $articles = Article::where('issue_id', $id)
        ->where('status', 'published')
        ->paginate(20);

    return view('users.issue_articles', compact('issue', 'articles'));
}


public function show(Volume $volume)
{
    $volume->load('issues.articles');

    if ($volume->issues->count() === 1) {
        return view('volumes.articles', [
            'issue' => $volume->issues->first()
        ]);
    }

    return view('users.archives', compact('volume'));
}

}


