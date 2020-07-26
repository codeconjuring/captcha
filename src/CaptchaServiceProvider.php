<?php

namespace codeconjuring\captcha;

use Illuminate\Support\ServiceProvider;

class CaptchaServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/view','captcha');

		$this->mergeConfigFrom(__DIR__.'/config/config.php','captcha');

		$this->publishes([
			__DIR__.'/view' => resource_path('views/codeconjuring/captcha')
		]);
	}

	public function register()
	{
		
	}
}