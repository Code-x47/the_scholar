<?php

namespace App\Http\Controllers;

use App\Models\RawJournal;
use App\Models\MainJournal;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JournalController extends Controller
{

   public function UploadJournal(Request $request) {
      //Validate User Input
      $data = $request->validate([
         "author" => "Required",
         "title" => "Required",
         "file" => "required|mimes:pdf,doc,docx|max:2048",
         "summary" => "Required",
         "date" => "Required",
         "email"=>"Required",
         "volume" => "nullable",
         "phone" => "Required"
        ]);

      //Upload File
      $filename = $request->input('title');
      $file = $filename.".".$request->file('file')->getClientOriginalExtension();
      $request->file('file')->storeAs("Journals", $file, "public");

      //Create Data
       $data['file'] = $file;
       $data['user_id'] = auth()->user()->id;
       $data['departmaent'] = $request->dept;
   

      $data['slug'] = Str::slug($data['title'], '-');
    
      $journal = MainJournal::create($data);

      if ($request->expectsJson()) {
        return response()->json(['success' => true, 'journal' => $journal]);
      }


       return redirect()->back()->with('success','Uploaded Successfully');

}


   public function ViewJournals(MainJournal $raw) {
         return view('journal',compact('raw'));
   }

   public function JournalsByCategory() {
      $cat = MainJournal::get()->paginate('10');
      return view('category',compact($cat));
   }


   public function ViewSingleJournal() {
      
   }


   public function JournalSearchResult() {
       $result = $_GET['search'];
       $journal = MainJournal::where("title","like","%".$result."%")->get();
       return view("SearchPage",compact('journal'));
   }
   

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
}
