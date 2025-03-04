<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\roomController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('layouts.profile');
    Route::get('/editprofile', [ProfileController::class, 'editprofile'])->name('layouts.editprofile');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/adduser', [UserController::class, 'create'])->name('adduser.create');
    Route::post('/adduser', [UserController::class, 'store'])->name('adduser.store');
    Route::get('/allbooking', [BookingController::class, 'allbooking'])->name('formbooking.allbooking');
    Route::get('/editbooking', [BookingController::class, 'editbooking'])->name('formbooking.editbooking');
    Route::get('/addbooking', [BookingController::class, 'addbooking'])->name('formbooking.addbooking');
    Route::get('/allcustomers', [CustomersController::class, 'allcustomers'])->name('customers.allcustomers');
    Route::get('/editcustomer', [CustomersController::class, 'editcustomer'])->name('customers.editcustomer');
    Route::get('/addcustomer', [CustomersController::class, 'addcustomer'])->name('customers.addcustomer');
    Route::get('/allroom', [roomController::class, 'allroom'])->name('room.allroom');
    Route::get('/editroom', [roomController::class, 'editroom'])->name('room.editroom');
    Route::get('/addroom', [roomController::class, 'addroom'])->name('room.addroom');
    Route::get('/allstaff', [StaffController::class, 'allstaff'])->name('staff.allstaff');
    Route::get('/editstaff', [StaffController::class, 'editstaff'])->name('staff.editstaff');
    Route::get('/addstaff', [StaffController::class, 'addstaff'])->name('staff.addstaff');
    Route::get('/pricing', [PricingController::class, 'pricing'])->name('pricing.pricing');
    Route::get('/editpricing', [PricingController::class, 'editpricing'])->name('editpricing');
    Route::get('/addpricing', [PricingController::class, 'addpricing'])->name('pricing.addpricing');
    Route::get('/chat', [AppController::class, 'chat'])->name('app.chat');
    Route::get('/incomingcall', [AppController::class, 'incomingcall'])->name('app.call.incomingcall');
    Route::get('/videocall', [AppController::class, 'videocall'])->name('app.call.videocall');
    Route::get('/voicecall', [AppController::class, 'voicecall'])->name('app.call.voicecall');
    Route::get('/compose', [AppController::class, 'compose'])->name('app.emails.compose');
    Route::get('/inbox', [AppController::class, 'inbox'])->name('app.emails.inbox');
    Route::get('/mailview', [AppController::class, 'mailview'])->name('app.emails.mailview');
    Route::get('/calendrier', [CalendrierController::class, 'calendrier'])->name('calendrier.calendrier');
    Route::get('/blog', [BlogController::class, 'blog'])->name('blog.blog');
    Route::get('/blogview', [BlogController::class, 'blogview'])->name('blog.blogview');
    Route::get('/editblog', [BlogController::class, 'editblog'])->name('blog.editblog');
    Route::get('/addblog', [BlogController::class, 'addblog'])->name('blog.addblog');
    Route::get('/assetslist', [AssetsController::class, 'assetslist'])->name('Assets.assetslist');
    Route::get('/addassets', [AssetsController::class, 'addassets'])->name('Assets.addassets');
    Route::get('/editassets', [AssetsController::class, 'editassets'])->name('Assets.editassets');
    Route::get('/activities', [ActivitiesController::class, 'activities'])->name('Activities.activities');
    Route::get('/expensereport', [ReportController::class, 'expensereport'])->name('Reports.expensereport');
    Route::get('/inoicereport', [ReportController::class, 'inoicereport'])->name('Reports.report');
    Route::get('/companysetting', [SettingsController::class, 'companysetting'])->name('settings.companysetting');
    Route::get('/changepassword', [SettingsController::class, 'changepassword'])->name('settings.changepassword');
    Route::get('/emailsetting', [SettingsController::class, 'emailsetting'])->name('settings.emailsetting');
    Route::get('/invoicesetting', [SettingsController::class, 'invoicesetting'])->name('settings.invoicesetting');
    Route::get('/leavetype', [SettingsController::class, 'leavetype'])->name('settings.leavetype');
    Route::get('/localisation', [SettingsController::class, 'localisation'])->name('settings.localisation');
    Route::get('/notification', [SettingsController::class, 'notification'])->name('settings.notification');
    Route::get('/rolepermission', [SettingsController::class, 'rolepermission'])->name('settings.rolepermission');
    Route::get('/salarysetting', [SettingsController::class, 'salarysetting'])->name('settings.salarysetting');
    Route::get('/themesetting', [SettingsController::class, 'themesetting'])->name('settings.themesetting');
});


require __DIR__.'/auth.php';