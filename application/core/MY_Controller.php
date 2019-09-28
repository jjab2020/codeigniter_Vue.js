<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Coolpraz\PhpBlade\PhpBlade;
class MY_Controller extends CI_Controller {

	protected $views = APPPATH . 'views';
	protected $cache = APPPATH . 'cache';
	protected $dotenv;
	protected $blade;

	public function __construct(){
		parent::__construct();
		$this->blade = new PhpBlade($this->views, $this->cache);
		$this->dotenv = Dotenv\Dotenv::create(APPPATH);
        $this->dotenv->load();

	}
}
