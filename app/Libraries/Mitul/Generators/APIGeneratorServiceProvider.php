<?php

namespace App\Libraries\Mitul\Generators;

use App\Libraries\Mitul\Generators\Commands\APIGeneratorCommand;
use Illuminate\Support\ServiceProvider;

class APIGeneratorServiceProvider extends ServiceProvider
{

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('mitul.generate.api', function ($app)
		{
			return new APIGeneratorCommand();
		});

		$this->commands('mitul.generate.api');
	}

}
