<?php

Auth::routes();

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function () {
	return view('threads.create');
});

Route::get('/greeting/{id}', function ($id) {
	$greetings = ['Sjáumst', 'Ciao' , 'Aloha', 'Hola', 'ello bub'];
	#return $greetings[$id];
	return view('threads.greeting', ['viewBreyta' => $greetings[$id]]);
})->where('id', '[0-4]');

#Route::get('/greeting/{id}/message/{count}', function ($id, $count) {
#	return view('threads.greeting', compact('id', 'count'));
#});