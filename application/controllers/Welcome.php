<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
//Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
//Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
class Welcome extends CI_Controller {

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
		$this->load->view('sistem/header');
		$this->load->view('welcome_message');
		$this->load->view('sistem/footer');
	}
	public function enviar_mensaje(){
		//var_dump($_POST);

		//$mensaje="Un client ah enviado los siguientes datos nombre ".$_POST['name']." - Telefono : ".$_POST['phone']." - Correo : ".$_POST['email']." - mensaje : ".$_POST['message'] ;
	
		//var_dump($mensaje);
		$this->load->library('email');
		 $this->email->from("pescafelipe@gmail.com");
		 $this->email->subject("aaaaaa");
		 $this->email->message("aaaaa");
var_dump($this->email->send());
       
	}
	public function envio(){

	}
}
