<?php
class Produit_model extends CI_Model	{

	public function displayImage()	{
		return base_url().'assets/images/'.$this->image;
	}

	public function slider($nb)	{
		$requete = $this->db->order_by('prix', 'DESC');
		$requete = $this->db->get('produit', $nb);
		return $requete->result('Produit_model');
	}

	public function findLimit($nb=5)	{
		/*$requete = $this->db->get('produit', $nb);
		//$this->db->limit($nb);
		return $requete->result('Produit');*/
		//var_dump($requete->result('Produit'));
		//$requete2 = $this->db->query('SELECT * FROM  produit');
		//var_dump($requete2->result('Produit'));
		$sql = 'SELECT * FROM  produit LIMIT ?';
		$query = $this->db->query($sql,[$nb]);
		return $query->result('Produit_model');
	}

	public function findMarques($nb=5)	{
		$requete = $this->db->get('marque', $nb);
		return $requete->result('Produit_model');
	}

	public function findProduitMarque($idMarque)	{
		$requete = $this->db->get_where('produit', array('produit.marque_id' => $idMarque));
		return $requete->result('Produit_model');
		//var_dump($requete);
	}

	public function findMarque($idMarque)	{
		$requete = $this->db->get_where('marque', array('marque.id' => $idMarque));
		return $requete->unbuffered_row('Produit_model');
		//var_dump($requete);
	}

	public function findProduit($idProduit)	{
		$requete =$this->db->select('produit.*, marque.nom');
		$requete = $this->db->join('marque', 'marque.id = produit.marque_id');
		$requete = $this->db->get_where('produit', array('produit.id' => $idProduit));
		return $requete->unbuffered_row('Produit_model');
	}
}