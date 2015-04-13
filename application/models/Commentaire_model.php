<?php
class Commentaire_model extends CI_Model	{

	public function insertCommentaire($data)	{
		$this->db->insert('commentaire', $data);
	}

	public function AfficheCommentaire($idProduit)	{
		$requete = $this->db->get_where('commentaire', array('produit_id' => $idProduit));
		return $requete->result('Produit_model');
	}
	
}