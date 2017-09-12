<?php

Auth::routes();

Route::get('/threads', function() {
	return view('threads.index');
});

Route::get('/threads/create', function () {
	return view('threads.create');
});

Route::get('/greeting/{id}', function ($id) {
return view('threads.greeting', ['id' => $id]);
});

Route::get('/greeting/{id}/message/{count}', function ($id, $count) {
return view('threads.greeting', compact('id', 'count'));
});