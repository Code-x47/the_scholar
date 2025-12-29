<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::controller(UsersController::class)->group(function() {
 Route::view('user-register','users.register');
 Route::post('register','UserRegister')->name('user.register');

  Route::view('user-login','users.login');
 Route::post('login','UserLogin')->name('user.login');
});


Route::prefix("j")->controller(JournalController::class)->group(function() {
       Route::post("uploadRaw","UploadRawJournal")->name('user.upload');
       Route::get("viewJournal","ViewJournals")->name("user.view_journals");
       Route::get("viewsingle/{id}","viewSingleJournal")->name("user.view_single");
       Route::get("journalcategory/{slug}","JournalsByCategory")->name('user.j_category');
       Route::view("submit-journal","users.submitJournal")->name('journal.form');
       Route::post("journal-submit","UploadJournal")->name('submit.form');
       Route::get('social&Human',"Socials")->name('journal.socials');
       Route::get('biz&fin',"BusinessAndFinance")->name('journal.biz');
       Route::get('sci&tech',"ScienceAndTech")->name('journal.sci');
       Route::get('multi',"MultiDiscipline")->name('journal.multi');

});


Route::prefix("a")->controller(AdminController::class)->group(function() {
       Route::get("admin","AdminDashboard")->name("a.admin_dash");
       Route::post("upload_journal","UploadMainJournal")->name("a.upload_journal");
});
