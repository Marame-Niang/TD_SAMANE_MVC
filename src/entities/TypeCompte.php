<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="typeCompte")
 */
class TypeCompte
{
    /** @Id @Column(type="integer") @GeneratedValue     **/
    private $id;

    /** @Column(type="string") **/
    private $libelle;

    /**
     * One typeCompte has many compte. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="compte")
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

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
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