<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="Entreprise")
 */

class Entreprise 
{
 /** @Id @Column(type="integer") @GeneratedValue     **/
private $id;

    /** @Column(type="string") **/
private $nom_entreprise;

    /** @Column(type="string") **/
private $tel_entreprise;

 /** @Column(type="string") **/
private $email_entreprise;

 /** @Column(type="integer") **/
private $budget_entreprise;

 /** @Column(type="string") **/
private $adr_entreprise;

/** @Column(type="string") **/
private $login;
 
    /** @Column(type="string") **/
private $password;

/**
     * One entreprise has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="id_entreprise")
     */
private $compte;

public function __construct()
    {
        $this->compte = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom_entreprise;
    }

    public function setNom($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
    }

    public function getTel()
    {
        return $this->tel_entreprise;
    }

    public function setTel($tel_entreprise)
    {
        $this->tel_entreprise = $tel_entreprise;
    }

    public function getEmail()
    {
        return $this->email_entreprise;
    }

    public function setEmail($email_entreprise)
    {
        $this->email_entreprise = $email_entreprise;
    }

    public function getBudjet()
    {
        return $this->budget_entreprise;
    }

    public function setBudjet($budget_entreprise)
    {
        $this->budget_entreprise = $budget_entreprise;
    }

    public function getAdresse()
    {
        return $this->adr_entreprise;
    }

    public function setAdresse($adr_entreprise)
    {
        $this->adr_entreprise = $adr_entreprise;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getCompte()
    {
        return $this->compte;
    }

    public function setCompte($compte)
    {
        $this->compte = $compte;
    }
}