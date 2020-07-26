<?php

Route::get('captcha',function(){
	return 'captcha';
});
Route::get('image',function(){
	return view('captcha::image');
});