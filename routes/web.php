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

Route::get('/', function () {
    return view('welcome');


})->name('main');
//User
Route::get('/register','UserController@register')->name('userregister');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/school', 'MainController@school')->name('school');

//School
Route::get('/school', 'SchoolController@index')->name('listschool');
Route::post('/school/search','SchoolController@search')->name('searchschool');

//Center
Route::get('/center', 'CenterController@index')->name('listcenter');
Route::post('/center/search', 'CenterController@search')->name('searchcenter');


Route::get('/screening','ScreeningtestController@index')->name('screening');
Route::post('/screening/post', 'ScreeningtestController@post')->name('postscreening');


//Main
Route::get('/main','MainController@index')->name('mainpage');
Route::get('/mainscreening','MainController@mainscreening')->name('mainscreening');
Route::get('/applypkk','MainController@applypkk')->name('applypkk');
Route::get('/financesupport','MainController@financesupport')->name('financesupport');
Route::get('/emotionalsupport','MainController@emotionalsupport')->name('emotionalsupport');
Route::get('/covid19thrivedyslexia','MainController@covid19thrivedyslexia')->name('covid19thrivedyslexia');
Route::get('/homeschoolingduringcovid19','MainController@homeschoolingduringcovid19')->name('homeschoolingduringcovid19');


//Feedback
Route::post('/feedback/store', 'FeedbackController@store')->name('storefeedback');


Route::get('/forum/addforum','ForumController@addforum')->name('addforum');
Route::get('/forum/listforum','ForumController@listforum')->name('listforum');
Route::get('/forum/detailforum/{id}','ForumController@detailforum')->name('detailforum');
Route::post('/user/store', 'UserController@store')->name('userstore');
Route::post('/forum/store', 'ForumController@store')->name('storeforum');
Route::get('/upload', 'UploadController@index');
Route::post('/upload', 'UploadController@store');

//Dyslexia Info
Route::get('/dyslexiainfo/whatisdyslexia','DyslexiaController@whatisdyslexia')->name('whatisdyslexia');
Route::get('/dyslexiainfo/treatdyslexia','DyslexiaController@treatdyslexia')->name('treatdyslexia');
Route::get('/dyslexiainfo/mythsdyslexia','DyslexiaController@mythsdyslexia')->name('mythsdyslexia');
Route::get('/dyslexiainfo/methodteachingdyslexia','DyslexiaController@methodteachingdyslexia')->name('methodteachingdyslexia');
Route::get('/dyslexiainfo/dyslexiasignandsymptoms','DyslexiaController@dyslexiasignandsymptoms')->name('dyslexiasignandsymptoms');
Route::get('/dyslexiainfo/activitieswithdyslexiakids','DyslexiaController@activitieswithdyslexiakids')->name('activitieswithdyslexiakids');

//login
Route::post('/login','LoginController@login')->name('login');

Route::get('login/google', 'LoginController@redirectToProvider');
Route::get('login/google/callback', 'LoginController@handleProviderCallback');



//logout
Route::get('/logout','LoginController@logout')->name('logout');

//delete
//destroy{id} : pass id from list forum
Route::get('forum/destroy/{id}', 'ForumController@destroy')->name('destroyforum');

Route::get('/forum/edit/{id}', 'ForumController@edit')->name('editforum');


Route::post('/forum/update/{id}', 'ForumController@update')->name('updateforum');

//comment
Route::post('/comment/add', 'CommentController@store')->name('addcomment');
Route::get('/comment/delete/{id}', 'CommentController@destroy');

//admin
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/feedback', 'AdminController@feedback')->name('adminfeedback');
Route::get('/admin/screening', 'AdminController@screening')->name('adminscreening');
Route::get('/admin/forum', 'AdminController@forum')->name('adminforum');
Route::get('/admin/forum/delete/{id}','AdminController@destroyforum');
Route::get('/admin/forum/details/{id}', 'AdminController@detailforum')->name('admindetailforum');
Route::get('/admin/forum/comment/delete/{id}', 'AdminController@destroycomment');
Route::post('/admin/forum/comment/add', 'AdminController@storecomment')->name('adminaddcomment');


