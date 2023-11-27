<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/balance', function () {

    return "Sizning balansingiz $120";

});

Route::get("/getName", function () {
    return "Nasriddin Afandi";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/posts', function(){

    $posts = [
        [
            "title" => "Birinchi maqola",
            "content" => "lorem ipsum dolor sit amet lorem lorem203 vel commodo sit amet",
        ],
        [
            "title" => "Ikkinchi maqola",
            "content" => "lorem ipsum dolor sit amet lorem lorem203 vel commodo sit amet",
        ]
    ];

    return $posts;
});



Route::get('/users', function(){
    $users = User::all();

    return view('users', ['users' => $users]);
});

Route::get('/users/{id}', function($id){
    $user = User::where('id', '=', $id)->first();
    return view('single_user', ['user' => $user]);
});






Route::get('/home', function(){
    $posts = DB::table('posts')->select('id', 'title', 'content','created_at')->get();
    $cover = [
        'title' => "Samarali o'qish",
        'subtitle' => "O'qishni samarali tashlik qilish yo'llari"
    ];
    return view('post.index', ['posts' => $posts, 'cover' => $cover]);
})->name('home');

Route::get('/about', function(){
    return view('post.about');
})->name('about');

Route::get('/post', function(){
    return view('post.post');
})->name('post');

Route::get('/contact', function(){
    return view('post.contact');
})->name('contact');


Route::get('/db', function(){

    $users = DB::table('users')->select('id', 'name', 'email', 'password')->get();

    return $users;
});

Route::get('/insert', function(){
    DB::table('users')->insert([
        'name' => 'Umidjon',
        'email' => 'umidjon@gmail.com',
        'password' => '12345678'
    ]);
});

Route::get('/update', function(){
    DB::table('users')->where('id', '7')->update([
        'password' => 'wa204810'
    ]);
    return "Data updated successfully";
});

Route::get('/delete', function(){
    DB::table('users')->where('id', '7')->delete();

    return "User deleted successfully";
});

Route::get('/foydalanuvchilar/{id}', function($id) {
    $user = DB::table('users')->where('id', $id)->get();
    return $user;
});









use App\Http\Controllers\CarsController;

Route::get('/cars', [CarsController::class, 'index'])->name("cars.index");
Route::get('/cars/create', [CarsController::class, 'create'])->name("cars.create");
Route::post('/cars', [CarsController::class, 'store'])->name("cars.store");


Route::get('/cars/{id}', [CarsController::class, 'show'])->name("cars.show");
Route::delete('/cars/{id}', [CarsController::class, 'destroy'])->name("cars.destroy");
