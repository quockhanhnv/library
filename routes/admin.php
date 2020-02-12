<?php 

Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
use Illuminate\Http\Request;

Route::group(['prefix' => 'subjects', 'middleware' => 'isAdmin' ], function() {
	 Route::get('/', 'Admin\SubjectController@index')->name('subject.index');

	Route::get('/add', 'Admin\SubjectController@add')->name('subject.add');

	Route::get('/edit/{id}', 'Admin\SubjectController@edit')->name('subject.edit');

	Route::post('/save', 'Admin\SubjectController@save')->name('subject.save');

	Route::get('/remove/{id}', 'Admin\SubjectController@remove')->name('subject.remove');

});

Route::group(['prefix' => 'practicerooms', 'middleware' => 'isAdmin'], function() {
	Route::get('/', 'Admin\PracticeroomController@index')->name('practiceroom.index');
	Route::get('/add', 'Admin\PracticeroomController@add')->name('practiceroom.add');

	Route::get('/edit/{id}', 'Admin\PracticeroomController@edit')->name('practiceroom.edit');

	Route::get('/remove/{id}', 'Admin\PracticeroomController@remove')->name('practiceroom.remove');

	Route::post('/save', 'Admin\PracticeroomController@save')->name('practiceroom.save');
});

Route::group(['prefix' => 'majors', 'middleware' => 'isAdmin'], function() {
	 Route::get('/', 'Admin\MajorController@index')->name('major.index');

	 Route::get('/add', 'Admin\MajorController@add')->name('major.add');

	 Route::get('/edit/{id}', 'Admin\MajorController@edit')->name('major.edit');

	Route::get('/remove/{id}', 'Admin\MajorController@remove')->name('major.remove');

	Route::post('/save', 'Admin\MajorController@save')->name('major.save');
	
});

Route::group(['prefix' => 'majors', 'middleware' => 'isAdmin'], function() {
	 Route::get('/', 'Admin\MajorController@index')->name('major.index');

	 Route::get('/add', 'Admin\MajorController@add')->name('major.add');

	 Route::get('/edit/{id}', 'Admin\MajorController@edit')->name('major.edit');

	Route::get('/remove/{id}', 'Admin\MajorController@remove')->name('major.remove');

	Route::post('/save', 'Admin\MajorController@save')->name('major.save');
	
});

Route::group(['prefix' => 'users', 'middleware' => 'isAdmin'], function() {
	 Route::get('/', 'Admin\UserController@index')->name('user.index');

	 Route::get('/add', 'Admin\UserController@add')->name('user.add');

	 Route::get('/edit/{id}', 'Admin\UserController@edit')->name('user.edit');

	Route::get('/remove/{id}', 'Admin\UserController@remove')->name('user.remove');

	Route::post('/save', 'Admin\UserController@save')->name('user.save');

	Route::get('/profile', 'Admin\UserController@profile')->name('user.profile');
	
});

Route::group(['prefix' => 'classes', 'middleware' => 'isAdmin'], function() {
	 Route::get('/', 'Admin\ClassController@index')->name('class.index');

	 Route::get('/add', 'Admin\ClassController@add')->name('class.add');

	 Route::get('/edit/{id}', 'Admin\ClassController@edit')->name('class.edit');

	Route::get('/remove/{id}', 'Admin\ClassController@remove')->name('class.remove');

	Route::post('/save', 'Admin\ClassController@save')->name('class.save');
	
});

Route::group(['prefix' => 'register', 'middleware' => 'isAdmin'], function() {
	 Route::get('/', 'Admin\RegisterController@index')->name('register.index');

	 Route::get('/schedule', 'Admin\RegisterController@schedule')->name('register.schedule');

	 Route::get('/add', 'Admin\RegisterController@add')->name('register.add');

	 Route::get('/edit/{id}', 'Admin\RegisterController@edit')->name('register.edit');

	Route::get('/remove/{id}', 'Admin\RegisterController@remove')->name('register.remove');

	Route::post('/save', 'Admin\RegisterController@save')->name('register.save');
	
});

Route::group(['prefix' => 'shares', 'middleware' => 'isAdmin'], function() {
	 Route::get('/', function(){
	 	return view('admin.shares.index');
	 })->name('share.index');
	
});

 ?>