<?php

namespace App\Http\Controllers;

use App\Models\MainJournal;
use Illuminate\Http\Request;

class AdminController extends Controller
{

   public function AdminDashboard() {
     return view('admin.test');
   }

  
   public function UploadMainJournal(Request $request) {
       $validated = $request->validate([
          "title" => "required",
          "author" => "required",
          "summary" => "required",
          "file" => "required",
          "date" => "required",
       ]);

       $file = time().".".$request->file->getClientOrignalExtension();

       $request->file->store('MainJournal',$file);

       $validated['file'] = $file;

       MainJournal::create($validated);
       
       return redirect()->back()->with('success', 'Uploaded Successfully');
   }



   public function EditJournal($id) {
     $journal = MainJournal::find($id);
     return view('admin.update',compact('journal'));
   }


   public function UpdateJournal(Request $request) {
     
   }

   public function SuspendJournal($id) {

   }



}
