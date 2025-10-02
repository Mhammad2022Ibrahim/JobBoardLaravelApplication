<?php

use App\Models\Comment;
use App\Models\POST;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');

// Route::controller(JobController::class)->group(function () {
//     // Route::get('/jobs', 'index')->name('jobs.index');
//     //or we can do like this
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create')->name('jobs.create');
//     Route::get('/jobs/{job}', 'show')->name('jobs.show');
//     Route::post('/jobs', 'store')->name('jobs.store');
//     Route::get('/jobs/{job}/edit', 'edit')->name('jobs.edit');
//     Route::patch('/jobs/{job}', 'update')->name('jobs.update');
//     Route::delete('/jobs/{job}', 'destroy')->name('jobs.destroy');
// });

// Single line to replace all the above routes for JobController
Route::resource('jobs', JobController::class
// , ['except' => ['destroy']]
//or we can use only to specify which routes we want to include
// Route::resource('jobs', JobController::class, ['only' => ['index', 'show']]
//->names('jobs') // to specify the names of the routes
);

// //Index
// // Route::get('/jobs', function () {
// //     // $jobs = Job::all();
// //     // $jobs = Job::with('employer')->get(); // Eager load the employer relationship, this is lazy loading
// //     // $jobs = Job::with('employer')->paginate(3);
// //     $jobs = Job::with('employer')->latest()->simplePaginate(3);
// //     // $jobs = Job::with('employer')->cursorPaginate(3);
// //     return view('jobs.index', [
// //         'jobs' => $jobs
// //     ]);
// // });

// Route::get('/jobs', [JobController::class, 'index']);
    

// //Create
// Route::get('/jobs/create', [JobController::class, 'create']);

// //Show
// // Route::get('/jobs/{id}', function ($id) {
// //     $job = Job::find($id);
// //     // dd($job);
    
// //     return view('jobs.show', ['job' => $job]);
// // });

// //or second method for Show
// Route::get('/jobs/{job}', [JobController::class, 'show']);


// //Store
// Route::post('/jobs', [JobController::class, 'store']);
// //Edit
// // Route::get('/jobs/{id}/edit', function ($id) {
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// //Update
// Route::patch('/jobs/{job}', [JobController::class, 'update']);

// //Destroy
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


// Contact
// Route::get('/contact', function () {
//     return view('contact');
// });

// or we can use view
Route::view('/contact', 'contact');

// Route::get('/posts', function () {
//     return view('posts',[
//         'posts' => POST::all()
//     ]);
// });

Route::get('/posts', function () {
    // $posts = POST::with(['employer', 'comments'])->get();
    $posts = POST::with(['employer', 'comments'])->paginate(4);
    return view('posts',[
        'posts' => $posts
    ]);
});


//Auth
Route::get('/register', [RegisterController::class, 'create']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class,'create']);
Route::post('/login', [LoginController::class,'store']);
Route::post('/logout', [LoginController::class,'destroy']);
