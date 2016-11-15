<?php namespace Jy\ExamenQuimicaSanguinea;

use Illuminate\Support\ServiceProvider;
use Jy\ExamenQuimicaSanguinea\Repo\EloquentExamenQuimicaSanguinea;
use Jy\Consulta\Repo\EloquentConsulta;


class ExamenQuimicaSanguineaServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jy/examen-quimica-sanguinea');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Jy\ExamenQuimicaSanguinea\Repo\ExamenQuimicaSanguineaInterface', function($app){
			return new EloquentExamenQuimicaSanguinea(
		 		$app,
		 		$app->make('Jy\Consulta\Repo\ConsultaInterface')
		 	);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
