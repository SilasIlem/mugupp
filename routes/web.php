<?php

use App\Events\MessageNotification;
use App\Http\Controllers\AstController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\SuperAdminController;
use App\Models\Book;
use App\Models\Comment;
use App\Models\Community;
use App\Models\Course;
use App\Models\District;
use App\Models\DistrictProfile;
use App\Models\Follower;
use App\Models\Impression;
use App\Models\MuguppNotification;
use App\Models\Notification;
use App\Models\SavedPost;
use App\Models\Thread;
use App\Models\Todo;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
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
    return view('mugupp', ['districts' => District::with(['artisans', 'profile'])->paginate(4), 'courses' => Course::paginate(5)]);
})->name('mugupp');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::middleware(['auth'])->group(
    function () {
        //Dashboard
        Route::get('/dashboard', function () {
            return view('dashboard', ['todos' => Todo::where('user_id', '=', Auth::user()->id)->get(), 'notes' => MuguppNotification::all()]);
        })->name('dashboard');

        Route::get('/settings', function () {
            return view('settings');
        })->name('settings');

        Route::get('/creator', [CreatorController::class, 'index'])->name('create-book');

        Route::get('library', function () {
            return view('books.library', ['books' => Book::all()]);
        })->name('library');

        Route::get('/chat', function () {
            return view('chat');
        })->name('chat');

        Route::get('/contacts', function () {
            return view('contacts');
        })->name('contacts');

        Route::get('/books', function () {
            return view('books.books');
        })->name('books');

        Route::get('/view-book/{slug}', function ($slug) {
            return view('books.book-view', ['book' => Book::where('slug', '=', $slug)->with(['parts'])->firstorFail()]);
        })->name('view-book');

        Route::get('/read/{book_slug}/{slug?}', function ($book_slug, $slug) {
            if ($slug != null) {
                return view('books.read-book', [
                    'slug' => $slug,
                    'book' => Book::where('slug', '=', $book_slug)->firstorFail()
                ]);
            } else {
                return view('book.read-book', ['book' => Book::where('slug', '=', $book_slug)->firstorFail()]);
            }
        })->name('read-book');

        Route::get('/study', function () {
            // return view('study', [Study::where('user_id', '=', Auth::user()->id)->firstorFail()]);
            return view('study');
        })->name('study');

        Route::get('/booths', function () {
            return view('booths');
        })->name('booths');

        Route::get('/community/{slug}', function ($slug) {
            return view('community', ['community' => Community::where('slug', '=', $slug)->firstorFail()]);
        })->name('community');

        Route::get('/districts', function () {
            return view('districts', ["districts" => District::with(['profile', 'artisans'])->get()]);
        })->name('districts');

        Route::get('/district/{slug}', function ($slug) {
            if ($slug == "central") {
                return view('central', ['district' => DistrictProfile::find(1), 'communities' => Community::all()]);
            }
            return view('district', ['district' => District::where('slug', '=', $slug)->with(['profile', 'artisans'])->firstOrFail(), 'districts' => District::all()]);
        })->name('district');

        Route::get('/explorer', function () {
            return view('explorer');
        })->name('explorer');

        Route::get('/todo', function () {
            return view('todo');
        })->name('todo');

        Route::get('/activity', function () {
            return view('activity');
        })->name('activity');

        Route::get('/events', function () {
            return view('events');
        })->name('events');

        Route::get('/thehall', function () {
            return view('hall');
        })->name('hall');

        Route::get('/videos/upload', function () {
            return view('videos.video_upload');
        })->name('video');

        Route::get('/quests', function () {
            return view('quests');
        })->name('questions');

        Route::get('/profile/{slug?}', function ($slug = null) {
            if ($slug = null) {
                return view('profile');
            } else {
                return view('profile', ['user' => User::where('uid', '=', $slug)->firstOrFail()]);
            }
        })->name('profile');

        Route::get('/listen', function () {
            return view('policy', ['listen' => true]);
        });

        Route::get('/mailbox', function () {
            return view('mailbox');
        })->name('mail');

        Route::get('/unseen-notifications/{id}', function ($id) {
            $notes = Notification::where('recipient_id', '=', $id)->where('seen', '=', false)->paginate(4);
            foreach ($notes as $note) {
                $note->seen = true;
                $note->save();
            }
            return $notes;
        });

        Route::get('/unread-notifications', function () {
            return Notification::where('recipient_id', '=', Auth::user()->id)->where('read', '=', false)->get();
        });

        Route::get('/read-notification/{id}', function ($id) {
            $note = Notification::where('recipient_id', '=', Auth::user()->id)->where('id', '=', $id)->firstOrFail();
            $note->read = true;
            $note->save();

            return 'read';
        });

        Route::get('/notifications', function () {
            return view('notifications');
        })->name('notifications');

        Route::get('/academe', function () {
            return view('academe', ['books' => Book::all(), 'thread' => Thread::with(['topic'])->firstorFail(), 'suggestions' => User::where('id', '!=', Auth::user()->id)->paginate(5), 'topics' => Topic::with(['views', 'threads', 'community'])->get()]);
        })->name('academe');

        Route::get('/follow/{id}', function ($id) {
            if (Follower::all()->isNotEmpty()) {
                if (Follower::where('source_id', '=', Auth::user()->id)->where('target_id', '=', $id)->get()->isNotEmpty()) {
                    return 'already followed';
                }
                Follower::create([
                    'source_id' => Auth::user()->id,
                    'target_id' => $id,
                    'type' => 'friends'
                ]);
                return 1;
            }
        });

        Route::get('/unfollow/{id}', function ($id) {
            if (Follower::all()->isNotEmpty()) {
                if (Follower::where('source_id', '=', Auth::user()->id)->where('target_id', '=', $id)->get()->isNotEmpty()) {
                    $follower = Follower::where('source_id', '=', Auth::user()->id)->where('target_id', '=', $id)->firstorFail();
                    $follower->delete();
                    return 1;
                }

                return 'not followed';
            }
        });

        Route::get('/topic/{slug}', function ($slug) {
            return view('topic', ['topic' => Topic::where('slug', '=', $slug)->with(['threads', 'views', 'events'])->firstorFail()]);
        })->name('topic');

        Route::get('/post', [PostController::class, 'show']);

        Route::post('/story', [StoryController::class, 'store']);

        Route::post('/post', [PostController::class, 'store'])->name('post');

        Route::get('/submit-comment/{id}', function ($id, Request $request) {
            Comment::create([
                'user_id' => Auth::user()->id,
                'post_id' => $id,
                'body' => $request->comment
            ]);

            return $request->comment;
        });

        Route::get('/impressed/{id}', function ($id) {
            if (Impression::all()->isNotEmpty()) {
                if (Impression::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get()->isNotEmpty()) {
                    return 'already impressed';
                }
            }

            Impression::create([
                'user_id' => Auth::user()->id,
                'post_id' => $id
            ]);
            return [1, Impression::where('post_id', '=', $id)->firstorFail()->user->name, sizeof(Impression::where('post_id', '=', $id)->get())];
        });

        Route::get('/unimpressed/{id}', function ($id) {
            if (!Impression::all()->isEmpty()) {
                if (Impression::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get()->isNotEmpty()) {
                    $impression = Impression::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get()[0];
                    $impression->delete();
                    return [1, Impression::where('post_id', '=', $id)->firstorFail()->user->name, sizeof(Impression::where('post_id', '=', $id)->get())];
                }
            }
            return 0;
        });

        Route::get('/save-post/{id}', function ($id) {
            if (Auth::user()->savedposts->contains(SavedPost::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get()[0]->id)) {
                return 'already saved';
            } else {
                SavedPost::create([
                    'user_id' => Auth::user()->id,
                    'post_id' => $id
                ]);
                return 'newly saved';
            }
        });

        Route::get('/unsave-post/{id}', function ($id) {
            if (Auth::user()->savedposts->contains(SavedPost::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get()[0]->id)) {
                SavedPost::where('user_id', '=', Auth::user()->id)->where('post_id', '=', $id)->get()[0]->delete();
                return 'deleted';
            } else {
                return 'not-saved';
            }
        });
        //AST

        Route::get('/apply', [AstController::class, 'apply'])->name('apply');

        Route::get('/payment', [PayController::class, 'index'])->name('paypage');

        Route::get('exam-results', [AstController::class, 'exam'])->name('exam');

        Route::get('/cbt', [QuestController::class, 'index'])->name('begin');

        Route::get('/syllabus', function () {
            return view('ast.syllabus');
        })->name('syllabus');

        Route::get('/scoreboard', function () {
            return view('performance');
        })->name('performance');
    }
);

Route::get('/event', function () {
    event(new MessageNotification());
});

Route::get('/ast', [AstController::class, 'index'])->name('ast');

Route::get('/superadmin', [SuperAdminController::class, 'index']);

require __DIR__ . '/auth.php';
