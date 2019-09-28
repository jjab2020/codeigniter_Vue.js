<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Coolpraz\PhpBlade\PhpBlade;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
class MY_Controller extends CI_Controller {

	protected $views = APPPATH . 'views';
	protected $cache = APPPATH . 'cache';
	protected $dotenv;
	protected $blade;
	protected $capsule;

	public function __construct(){
		parent::__construct();
		$this->blade = new PhpBlade($this->views, $this->cache);
		$this->dotenv = Dotenv\Dotenv::create(APPPATH);
		$this->dotenv->load();

		$this->capsule = new Capsule;

		$this->capsule->addConnection([
			'driver'    => 'mysql',
			'host'      =>  getenv('DB_HOST'),
			'database'  =>  getenv('DB_NAME'),
			'username'  =>  getenv('DB_USER'),
			'password'  =>  getenv('DB_PASS'),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		]);

		$this->capsule->setEventDispatcher(new Dispatcher(new Container));

		// Make this Capsule instance available globally via static methods... (optional)
		$this->capsule->setAsGlobal();

		// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
		$this->capsule->bootEloquent();


	}
}
