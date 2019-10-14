<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$pdf = new Pdf();

		//$content= $this->blade->view()->make('example');
		$content= $this->blade->view()->make('welcome_message', ['name' => 'John Doe']);
		echo $content;
		/*$pdf->writeHtml($content);
		$pdf->Output();*/
	}

	public function getListUsers()
	{

		$data = User::orderBy('id', 'desc')->get();
		/*pretty_dump([1,2,3]);
		Util::pretty_dump([1,2,3]);
		exit();
		$detail_user = User::find(1)->Details()->get();*/
		json_output($data);
	}

	public function addUser()
	{

		$data = $this->input->post();	

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if($this->form_validation->run() == FALSE)
		{

			$errors = validation_errors();
			json_output(['error'=>$errors]);
		}
		else
		{
			$user = User::create([
				'name'        => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'created_at'     => date('Y-m-d H:i:s'),
				'updated_at'     => date('Y-m-d H:i:s')
			]);

			if ($user->exists) {
				json_output(['success'=>true]);	
			} 
			else 
			{
				json_output(['error'=>'error in creation of user']);
			}	
		}
	}
}
