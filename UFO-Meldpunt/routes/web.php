<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DonationController;

use App\Models\User;


use App\Livewire\CreatePost;


Route::get('/create-post', CreatePost::class)
    ->middleware(['auth', 'verified'])
    ->name('livewire.create-post');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/donate', [DonationController::class, 'showForm'])->name('donate.form');
Route::post('/donate', [DonationController::class, 'processDonation'])->name('donate.process');
Route::get('/thanks', [DonationController::class, 'thankYou'])->name('thanks');




Route::get('/test-email', function () {
    $user = User::first(); // make sure this user exists
    $postId = 1;

    // this is the mail the user will recieve once it makes a new post
    Mail::to('admin@example.com')->send(new \App\Mail\NewSightingMail($user));

    // sends a message to the admin at the same time about the same post
    Mail::raw("User {$user->name} ({$user->email}) has sent a new picture to evaluate.\nPost ID: {$postId}" ,function($message)use ($user, $postId) {
        $message->to('admin@example.com')
                ->subject('New image posted');
    });
    return 'Emails sent! succesfully';
});



Route::get('/testmail', function () {
Mail::raw('A new user has registered!', function ($message) {
    $message->to('admin@example.com')
            ->subject('New User Registration');
});
});



Route::get('/home',function (){
    return view('homepage');
});

Route::post('/upload-images', [UploadController::class, 'store'])->name('upload.images');

require __DIR__.'/auth.php';