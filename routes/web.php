<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\GoalController;



Route::get('/', [WebsiteController::class, 'home'])->name('index');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
// Pagination gallery
Route::get('/gallery/gallery_data', [WebsiteController::class, 'gallery_data'])->name('gallery_data');

Route::get('/donate', [WebsiteController::class, 'donate'])->name('donate');
// Pagination donate

Route::get('/donate/fetch_data', [WebsiteController::class, 'fetch_data'])->name('fetch_data');

Route::get('/event/event_fetch_data', [WebsiteController::class, 'event_fetch_data'])->name('event_fetch_data');

Route::get('/member/member_fetch_data', [WebsiteController::class, 'member_fetch_data'])->name('member_fetch_data');

Route::get('/events', [WebsiteController::class, 'event'])->name('events');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/member', [WebsiteController::class, 'member'])->name('member');
Route::post('/member-store', [MemberController::class, 'memberStore'])->name('memberStore');



Route::get('causes', function () {
    return view('causes');
})->name('causes');

Route::get('blog-single', function () {
    return view('blog-single');
})->name('blog-single');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('contact', function () {
    return view('contact');
})->name('contact');


// Authentication Route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginCheck'])->name('loginCheck');
Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('ShowRegisterForm', [RegisterController::class, 'ShowRegisterForm'])->name('ShowRegisterForm');
Route::post('/ShowRegisterForm', [RegisterController::class, 'RegisterStore'])->name('RegisterStore');

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
// Authentication Route


Route::group(['middleware' => ['auth', 'is_verify_email']], function () {

    Route::get('/dashboard', [InformationController::class, 'dashboard'])->name('dashboard');

    Route::get('changeStatus', [MemberController::class, 'changeStatus'])->name('changeStatus');

    Route::get('/change-password-form', function () {
        return view('admin.users.changePassword');
    })->name('updatePasswordForm');

    Route::post('/change-password', [AuthController::class, 'updatePassword'])->name('updatePassword');

    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/information', InformationController::class);
    Route::resource('admin/slider', SliderController::class);
    Route::resource('admin/event', EventController::class);
    Route::resource('admin/gallery', GalleryController::class);
    Route::resource('admin/member', MemberController::class);
    Route::resource('admin/donation', DonationController::class);
    Route::resource('admin/message', MessageController::class);
    Route::resource('admin/goal', GoalController::class);
});
