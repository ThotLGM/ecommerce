<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marque extends CI_Controller {

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
	public function produit_marque($id=1)
	{
		$this->load->helper('text');
		$marque = $this->Produit_model->findMarque($id);
		$produit = $this->Produit_model->findProduitMarque($id);
		//var_dump($marque);
		$this->load->view('globals/header');
		$this->load->view('globals/sidebar');
		$this->load->view('marque/marque', ['marque'=>$marque, 'produit'=>$produit]);//, ['firstname'=>$prenom]);
		$this->load->view('globals/footer');
	}
}
