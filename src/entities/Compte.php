<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity @Table(name="Compte")
 **/

class Compte 
{
     /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="integer") **/
    private $numero;

    /** @Column(type="integer") **/
    private $rib;

    /** @Column(type="integer", nullable=true) **/
    private $solde;

    /** @Column(type="string", nullable=true) **/
    private $dateOuve;

    /** @Column(type="string", nullable=true) **/
    private $fraisOuv;

    /** @Column(type="integer", nullable=true) **/
    private $remuneration;
 
    /** @Column(type="string", nullable=true) **/
    private $date_debut;

    /** @Column(type="string", nullable=true) **/
    private $date_fin;

    /** @Column(type="string", nullable=true) **/
    private $agios;

    /**
     * Many compte have one client. This is the owning side.
     * @ManyToOne(targetEntity="Client", inversedBy="compte")
     * @JoinColumn(name="id_Client", referencedColumnName="id")
     */
    private $id_Client;

    /**
     * Many compte have one entreprise. This is the owning side.
     * @ManyToOne(targetEntity="Entreprise", inversedBy="comptes")
     * @JoinColumn(name="entreprise_id", referencedColumnName="id")
     */
    private $id_entreprise;

    /**
     * Many compte have one typeCompte. This is the owning side.
     * @ManyToOne(targetEntity="TypeCompte", inversedBy="comptes")
     * @JoinColumn(name="typeCompte_id", referencedColumnName="id")
     */
    private $typeCompte;

    public function __construct()
    {
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
 

    public function getRib()
    {
        return $this->rib;
    }

    public function setRib($rib)
    {
        $this->rib = $rib;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    public function getDateOuve()
    {
        return $this->dateOuve;
    }

    public function setDateOuve($dateOuve)
    {
        $this->dateOuve = $dateOuve;
    }

    public function getFraisOuv()
    {
        return $this->fraisOuv;
    }

    public function setFraisOuv($fraisOuv)
    {
        $this->fraisOuv = $fraisOuv;
    }

    public function getDate_debut()
    {
        return $this->date_debut;
    }

    public function setDate_debut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    public function getDate_fin()
    {
        return $this->date_fin;
    }

    public function setDate_fin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    public function getAgios()
    {
        return $this->agios;
    }

    public function setAgios($agios)
    {
        $this->agios = $agios;
    }

    public function getRemuneration()
    {
        return $this->remuneration;
    }

    public function setRemuneration($remuneration)
    {
        $this->remuneration = $remuneration;
    }

    public function getId_Client()
    {
        return $this->id_Client;
    }

    public function setId_Client($id_Client)
    {
        $this->id_Client = $id_Client;
    }

    public function getIdEtreprise()
    {
        return $this->id_entreprise;
    }

    public function setIdEntreprise($id_entreprise)
    {
        $this->id_entreprise = $id_entreprise;
    }

    public function getTypeCompte()
    {
        return $this->typeCompte;
    }

    public function setTypeCompte($typeCompte)
    {
        $this->typeCompte = $typeCompte;
    }
    

}
?>