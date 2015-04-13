<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$prenom = 'Matthieu';
		//$this->load->helper('url');
		$this->load->helper('text');
		$this->load->helper('captcha');
		$slider = $this->Produit_model->slider(4);
		$produit = $this->Produit_model->findLimit(6);
		//var_dump($produit);
		$this->load->view('globals/header');
		$this->load->view('globals/sidebar');
		$this->load->view('accueil', ['slider'=>$slider, 'produit'=>$produit]);//, ['firstname'=>$prenom]);
		$this->load->view('globals/footer');
	}
}
