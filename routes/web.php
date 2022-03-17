<?php

use App\Events\MessageNotification;
use App\Http\Controllers\AstController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\SuperAdminController;
use App\Models\Post;
use App\Models\Quest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mugupp');
})->name('mugupp');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::middleware(['auth'])->group(
    function () {


        Route::get('/ast', [AstController::class, 'index'])->name('ast');

        Route::get(
            '/scoreboard',
            function () {
                return view('performance');
            }
        )->name('performance');

        Route::get('/creator', [CreatorController::class, 'index'])->name('make_books');

        Route::get('library', function () {
            return view('library', [Auth::user()->library]);
        })->name('library');

        Route::get('/apply', [AstController::class, 'apply'])->name('apply');

        Route::get('/payment', [PayController::class, 'index'])->name('paypage');

        Route::get('/cbt', [QuestController::class, 'index'])->name('begin');

        Route::get('/syllabus', function () {
            return view('syllabus');
        });

        Route::get('/chat', function () {
            return view('chat');
        })->name('chat');

        Route::get('/books', function () {
            return view('books');
        })->name('books');

        Route::get('/videos', function () {
            return view('videos');
        })->name('videos');

        Route::get('/profile', function () {
            return view('profile');
        })->name('profile');

        Route::get('/policy', function () {
            return view('policy');
        })->name('policy');

        Route::get('/listen', function () {
            return view('policy', ['listen' => true]);
        });

        Route::get('/notifications', function () {
            return view('notifications');
        })->name('notifications');

        Route::get('/terms', function () {
            return view('terms');
        })->name('terms');

        Route::get('/dashboard', function () {
            return view('dashboard', ['posts' => Post::paginate(4)]);
        })->name('dashboard');

        Route::post('/post', [PostController::class, 'store'])->name('post');
    }
);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/event', function () {
    event(new MessageNotification());
});


Route::get('/superadmin', [SuperAdminController::class, 'index']);

require __DIR__ . '/auth.php';
