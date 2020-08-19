<?php
namespace src\model;

use libs\system\Model;

class CompteRepository extends Model{

	protected $db;
    public function __construct()
    {
      parent::__construct();
    }

    public function addCompte($compte)
	{
		if($this->db != null)
		{
			$this->db->persist($compte);
			$this->db->flush();

			return $compte->getId();
		}
	}

	public function addClient($client)
	{
		if($this->db != null)
		{
			$this->db->persist($client);
			$this->db->flush();

			return $client->getId();
		}
	}

	public function addEntreprise($entreprise)
	{
		if($this->db != null)
		{
			$this->db->persist($entreprise);
			$this->db->flush();

			return $entreprise->getId();
		}
	}


    public function getCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->find(array('id' => $id));
		}
	}

	public function getClient($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Client')->find(array('id' => $id));
		}
	}

	public function getEntreprise($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Entreprise')->find(array('id' => $id));
		}
	}

	public function getTypeCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('TypeCompte')->find(array('id' => $id));
		}
	}


}
