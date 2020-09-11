<?php
class Soigneur extends Zoo implements SoigneurInterface
{
    protected $id;
    protected $prenom;
    protected $nom;
    protected $grade;
    protected $specialite;

    public function __construct($prenom, $nom, $grade, $specialite, $id = null )
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->grade = $grade;
        $this->specialite = $specialite;
    }

    public function nourrir($animal, $qte)
    {
        $animal->categorie->nourriture->quantite -= $qte;
        $animal->categorie->nourriture->alert();
    }

    public function conges()
    {
        
    }
}
