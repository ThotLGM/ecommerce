<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Controller {

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
	public function information($idProduit=1)
	{
		//var_dump($idProduit);
		$this->load->helper('form', 'url');
		$this->load->model('Produit_model');
        $this->load->model('Commentaire_model');
		$produit = $this->Produit_model->findProduit($idProduit);
		$moyNote = $this->Produit_model->moyNote($idProduit);
		$nbCom = $this->Produit_model->countCom($idProduit);
		$commentaire = $this->Commentaire_model->AfficheCommentaire($idProduit);
		if (empty($produit))	{
			show_404();
		}
		$this->load->view('globals/header');
		$this->load->view('globals/sidebar');

		$this->load->library('form_validation');
		$this->form_validation->set_message('required', '{field}');
		$this->form_validation->set_rules('autor', 'Le nom n\'est pas valide', 'required|min_length[2]');
		$this->form_validation->set_rules('note', 'Une note doit être choisi', 'required|greater_than[0]|less_than[6]');
		$this->form_validation->set_rules('content', 'Un commentaire doit être rentré', 'required|max_length[500]');

		if ($this->form_validation->run() == TRUE)	{
       		$data = array(
		        'auteur' => $this->input->post('autor'),
		        'contenu' => $this->input->post('content'),
		        'note' => $this->input->post('note'),
		        'dateCommentaire' => date('Y-m-d H:i:s'),
		        'produit_id' => $idProduit
			);
			$this->Commentaire_model->insertCommentaire($data);
			$this->session->set_flashdata('success_com', 'Votre commentaire a bien été ajouté');
			redirect('produit/information/'.$idProduit);
        }
		$this->load->view('produit/produit', 
			['produit'=>$produit, 
			'commentaire'=>$commentaire,
			'nbCom'=>$nbCom,
			'moyNote'=>$moyNote]);
		$this->load->view('globals/footer');
	}
}
