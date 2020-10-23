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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//all header(frontend page)routes start from here
Route::get('/','Frontend\FrontendController@index');
Route::get('aboutUs','Frontend\FrontendController@AboutUs')->name('aboutUs');
Route::get('project','Frontend\FrontendController@Project')->name('project');
Route::get('experience','Frontend\FrontendController@Experience')->name('experience');
Route::get('training','Frontend\FrontendController@Training')->name('training');
Route::get('skill','Frontend\FrontendController@Skill')->name('skill');
Route::get('contactUs','Frontend\FrontendController@ContactUs')->name('contactUs');
Route::post('Contact.Store','Frontend\FrontendController@Store')->name('Contact.Store');

// group middleware start from here
Route::group(['middleware' => ['test']], function () {
//all header(backend page)routes start from here
Route::prefix('users')->group(function () {
Route::get('/all','Backend\UserController@index')->name('users.all');
Route::get('/create','Backend\UserController@create')->name('users.create');
Route::post('/store','Backend\UserController@store')->name('users.store');
Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
Route::get('/destroy/{id}','Backend\UserController@destroy')->name('users.destroy');
});

// Profile Routes start from here
Route::prefix('profile')->group(function () {
Route::get('/user','Backend\ProfileController@index')->name('profile.user');
Route::post('/store','Backend\ProfileController@store')->name('profile.store');
Route::get('/edit','Backend\ProfileController@edit')->name('profile.edit');
Route::post('/update','Backend\ProfileController@update')->name('profile.update');
Route::get('/change-password','Backend\ProfileController@ChangePassword')->name('change.password');
Route::post('/update-password','Backend\ProfileController@UpdatePassword')->name('update.password');
});

//Logo routes start from here
Route::prefix('logos')->group(function () {
Route::get('/view','Backend\LogoController@index')->name('logos.view');
Route::get('/create','Backend\LogoController@create')->name('logos.create');
Route::post('/store','Backend\LogoController@store')->name('logos.store');
Route::get('/edit/{id}','Backend\LogoController@edit')->name('logos.edit');
Route::post('/update/{id}','Backend\LogoController@update')->name('logos.update');
Route::get('/destroy/{id}','Backend\LogoController@destroy')->name('logos.destroy');
});

//Sliders routes start from here
Route::prefix('sliders')->group(function () {
Route::get('/view','Backend\SliderController@index')->name('sliders.view');
Route::get('/create','Backend\SliderController@create')->name('sliders.create');
Route::post('/store','Backend\SliderController@store')->name('sliders.store');
Route::get('/edit/{id}','Backend\SliderController@edit')->name('sliders.edit');
Route::post('/update/{id}','Backend\SliderController@update')->name('sliders.update');
Route::get('/destroy/{id}','Backend\SliderController@destroy')->name('sliders.destroy');
});

//contact routes start from here
Route::prefix('contacts')->group(function () {
Route::get('/view','Backend\ContactController@index')->name('contacts.view');
Route::get('/create','Backend\ContactController@create')->name('contacts.create');
Route::post('/store','Backend\ContactController@store')->name('contacts.store');
Route::get('/edit/{id}','Backend\ContactController@edit')->name('contacts.edit');
Route::post('/update/{id}','Backend\ContactController@update')->name('contacts.update');
Route::get('/destroy/{id}','Backend\ContactController@destroy')->name('contacts.destroy');
});

//about routes start from here
Route::prefix('about')->group(function () {
Route::get('/view','Backend\AboutController@index')->name('about.view');
Route::get('/create','Backend\AboutController@create')->name('about.create');
Route::post('/store','Backend\AboutController@store')->name('about.store');
Route::get('/edit/{id}','Backend\AboutController@edit')->name('about.edit');
Route::post('/update/{id}','Backend\AboutController@update')->name('about.update');
Route::get('/destroy/{id}','Backend\AboutController@destroy')->name('about.destroy');
});

//project routes start from here
Route::prefix('project')->group(function () {
Route::get('/view','Backend\ProjectController@index')->name('project.view');
Route::get('/create','Backend\ProjectController@create')->name('project.create');
Route::post('/store','Backend\ProjectController@store')->name('project.store');
Route::get('/edit/{id}','Backend\ProjectController@edit')->name('project.edit');
Route::post('/update/{id}','Backend\ProjectController@update')->name('project.update');
Route::get('/destroy/{id}','Backend\ProjectController@destroy')->name('project.destroy');
});

//DeveloperInfo routes start from here
Route::prefix('developerInfo')->group(function () {
Route::get('/view','Backend\DeveloperInfoController@index')->name('developerInfo.view');
Route::get('/create','Backend\DeveloperInfoController@create')->name('developerInfo.create');
Route::post('/store','Backend\DeveloperInfoController@store')->name('developerInfo.store');
Route::get('/edit/{id}','Backend\DeveloperInfoController@edit')->name('developerInfo.edit');
Route::post('/update/{id}','Backend\DeveloperInfoController@update')->name('developerInfo.update');
Route::get('/destroy/{id}','Backend\DeveloperInfoController@destroy')->name('developerInfo.destroy');
});

//Learning Source routes start from here
Route::prefix('source')->group(function () {
Route::get('/view','Backend\LearningSourceController@index')->name('source.view');
Route::get('/create','Backend\LearningSourceController@create')->name('source.create');
Route::post('/store','Backend\LearningSourceController@store')->name('source.store');
Route::get('/edit/{id}','Backend\LearningSourceController@edit')->name('source.edit');
Route::post('/update/{id}','Backend\LearningSourceController@update')->name('source.update');
Route::get('/destroy/{id}','Backend\LearningSourceController@destroy')->name('source.destroy');
 });

 //skill routes start from here
Route::prefix('skill')->group(function () {
Route::get('/view','Backend\SkillController@index')->name('skill.view');
Route::get('/create','Backend\SkillController@create')->name('skill.create');
Route::post('/store','Backend\SkillController@store')->name('skill.store');
Route::get('/edit/{id}','Backend\SkillController@edit')->name('skill.edit');
Route::post('/update/{id}','Backend\SkillController@update')->name('skill.update');
Route::get('/destroy/{id}','Backend\SkillController@destroy')->name('skill.destroy');
});


//experience routes start from here
Route::prefix('experience')->group(function () {
Route::get('/view','Backend\JobExperienceController@index')->name('experience.view');
Route::get('/create','Backend\JobExperienceController@create')->name('experience.create');
Route::post('/store','Backend\JobExperienceController@store')->name('experience.store');
Route::get('/edit/{id}','Backend\JobExperienceController@edit')->name('experience.edit');
Route::post('/update/{id}','Backend\JobExperienceController@update')->name('experience.update');
Route::get('/destroy/{id}','Backend\JobExperienceController@destroy')->name('experience.destroy');
});

//Training routes start from here
Route::prefix('training')->group(function () {
Route::get('/view','Backend\TrainingController@index')->name('training.view');
Route::get('/create','Backend\TrainingController@create')->name('training.create');
Route::post('/store','Backend\TrainingController@store')->name('training.store');
Route::get('/edit/{id}','Backend\TrainingController@edit')->name('training.edit');
Route::post('/update/{id}','Backend\TrainingController@update')->name('training.update');
Route::get('/destroy/{id}','Backend\TrainingController@destroy')->name('training.destroy');
});



//User Email route
Route::prefix('email')->group(function () {
Route::get('user-email.view','Frontend\FrontendController@UserEmailView')->name('user-email.view');
Route::get('/user-email.destroy/{id}','Frontend\FrontendController@destroy')->name('user-email.destroy');
});
});
// group middleware End here
