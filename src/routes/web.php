<?php

Route::get('captcha',function(){
	return 'captcha';
});
Route::get('image',function(){
	return view('captcha::image');
});
Route::get('load_image',function(){
	return codeconjuring\captcha\CaptchaImage::load();
});