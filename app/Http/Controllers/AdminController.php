<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Journal;
use App\Models\Volume;
use App\Models\Issue;
use App\Models\Article;
use App\Models\Author;
use App\Models\Reference;
use App\Services\ValidationService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class AdminController extends Controller
{

   public function AdminDashboard() {
   
     return view('admin.adminDashboard');
   }
   
   public function AdminManager() {
    $category = Category::get();
    $journal = Journal::get();
    $volume =  Volume::get();
    $issue =  Issue::get();
    $article =  Issue::get();

    $render = [  
                 'category' => $category,
                 'journal' => $journal,
                 'volume' => $volume,
                 'issue' => $issue,
                 'article' => $article
                    ];
    return view('admin.adminManager',$render);
   }
  



   public function UpdateJournal(Request $request) {
     
   }

   public function SuspendJournal($id) {

   }

   public function CreateCategory(Request $request, ValidationService $validate) {
        $validated = $validate->ValidateCategory($request->only('name'));

         Category::create($validated);
         return redirect()->back();
   }


   public function CreateJournal(Request $request, ValidationService $validate) {
    
     
       $validated = $validate->validateJournal($request->only('title','description','publisher','category_id'));
        
       $validated['slug'] = Str::slug(
          $validated['slug'] ?? $validated['title']
          );
       $validcat = $validated['category_id'] = $request->category_id;
       
        Journal::create($validated);
        return redirect()->back();
   }

   public function CreateVolume(Request $request) {
    $validated = $request->validate([
      "volume" => "required",
      "year" => "required",
      "journal_id" =>"required",
      "volume_label" => "required"
    ]);

    
    

       Volume::create([
        'volume_number'    => $validated['volume'],
        'publication_year' => $validated['year'],
        'journal_id'       => $validated['journal_id'],
        'volume_label'     => $validated['volume_label'],
       ]);

    return redirect()->back();
   }


   public function CreateIssue(Request $request) {

   $validated = $request->validate([
      "number" => "required",
      "title" => 'nullable|string|max:255',
      "date" => "required",
      "status" => "required",
      "volume_id" => "required"
      
    ]);

 

    Issue::create([
      "issue_number" => $validated['number'],
      "title" => $validated['title'],
      "publication_date" => $validated['date'],
      "status" => $validated['status'],
      "volume_id" => $validated['volume_id'],
    ]);

    return redirect()->back();
   }

   public function CreateArticle($id) {
      $issue = Issue::find($id);
      return view('admin.create_article',compact('issue'));
   }


   public function AddArticle(Request $request) {
      
      $validated = $request->validate([
            "title" => "required",
            "abstract" => "required",
            "content" => "required",
            "file" => "required",
            "date" => "required",
            "issueId" => "required",
            "status" => "required" 
            
         ]);


      $path = $request->file('file')->store('articles');

      Article::create([
      'title' => $validated['title'],
      'abstract' => $validated['abstract'],
      'content' => $validated['content'],
      'published_at' => $validated['date'],
      'pdf_path' => $path,
      'issue_id' => $validated['issueId'],
      'status' => $validated['status']
      ]);

      return redirect()->route('admin.manager');
   }


   public function AddAuthor($id) {
      $article = Article::findOrFail($id);
      return view('admin.addAuthor',compact('article'));
   }


   public function storeAuthor(Request $request){
    
     $validated = $request->validate([
        'articleId' => 'required|exists:articles,id',

        'fname' => 'required|string',
        'lname' => 'required|string',
        'email' => 'nullable|email',
        'country' => 'nullable|string',

        'author_order' => 'required|integer',
        'is_corresponding' => 'nullable|boolean',
    ]);

    // 1️⃣ Fetch article
    $article = Article::findOrFail($validated['articleId']);

    // 2️⃣ Create or reuse author (ONLY author fields here)
    $author = Author::firstOrCreate(
        [
            'email' => $validated['email'], // unique-ish identifier
        ],
        [
            'first_name' => $validated['fname'],
            'last_name'  => $validated['lname'],
            'country'    => $validated['country'],
        ]
    );

    // 3️⃣ Attach author to article via pivot table
    $article->authors()->attach($author->id, [
        'author_order' => $validated['author_order'],
        'is_corresponding' => $request->boolean('is_corresponding'),
    ]);

    return redirect()->back()->with('success', 'Author added successfully.');
}

   public function AddReference($id) {
      $article = Article::findOrFail($id);
      return view('admin.addReference',compact('article'));
   }

   public function CreateReference(Request $request) {
    
     $data = $request->validate([
        'reference_order' => 'required|integer|min:1',
        'citation' => 'required|string',
        'doi' => 'nullable|string',
        'url' => 'nullable|url',
        'articleId' => 'required'
        ]);
        
        Reference::create([
         "reference_order" => $data['reference_order'],
         "citation" => $data['citation'],
         "doi" => $data['doi'],
         "url" => $data['url'],
         "article_id" => $data['articleId']
        ]);

      return redirect()->back()->with('success', 'Reference added');

   }

  

  




   
   
}
