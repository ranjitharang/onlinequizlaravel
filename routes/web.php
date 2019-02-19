<?php

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



Route::get('blade', function () {
    return view('child');
});

// Route::get('greeting', function () {
//     return view('child', ['name' => 'Samantha']);
// });

//Route::get('greeting', function () {
//    return view('child', ['records' => [1,2,3,4]]);
//});

//Route::get('greeting', function () {
//	return view('child', ['i' => 1]);
//});

Route::get('/form',function() {
   return view('form');
});

Route::get('greeting', function () {
	return view('child', ['users' => [1,2,3,4,5]]);
});

Route::get('ID/{id}',function($id) {
   echo 'ID: '.$id;
});

Route::get('user/profile', 'UserController@showProfile')->name('profile');

Route::get('/role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);

Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath',
]);

Route::get('/foo/bar','UriController@index');

Route::get('/register',function() {
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('/', 'CookieController@index');
Route::post('/contact/store', 'CookieController@store');

Route::get('json',function() {
   return response()->json(['name' => 'Ranjitha Rangan', 'state' => 'Kerala']);
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

Route::get('view-records','StudViewController@index');

Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

//session handelling
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

//validation controlling
Route::get('/validation','ValidationController@showform');
Route::get('/validationtest','ValidationController@validateform');
 
Route::get('/message', function()
{
  return view('message');
});

Route::post('/getmessage', function()
{
  echo "hai";
});

//file uploading
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfiletest','UploadFileController@showUploadFile');

//contact form
Route::get('/create', function()
{
  return view('create');
});
Route::post('/store','ContactController@insert');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//db migrations
Route::get('/', function () {
    return view('index');
});
Route::resource('shares', 'ShareController');

Route::get('/', function () {
    //
});

Route::get('/', function () {
    return view('tasks');
});

//crud operations
Route::resource('products','ProductController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('student','StudentController');
Auth::routes();

Route::resource('teacher','TeacherController');
Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('pagination', 'PaginationController@index');

Route::get('/users', 'PaginationController@getUsers')->name('users');

Route::get('users', function () {
    $users = App\User::paginate(4);
    return response()->json($users);
  });

Route::get('ajaxRequest', 'HomeController@ajaxRequest');

Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');

Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Route::get('/admin', function(){
  return view('admin_template');
});
Route::get('/answers', function(){
  return view('answers');
});
Route::get('/quizlogin', function(){
  return view('quizlogin');
});
Route::get('/quizregister', function(){
  return view('quizregister');
});


//Project Routes
//Route::get('my-home', 'HomeController@myHome');
//Route::get('my-users', 'HomeController@myUsers');
