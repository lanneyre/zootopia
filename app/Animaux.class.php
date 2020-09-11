<?php
class Animaux extends Zoo implements AnimauxInterface
{
    protected $id;
    protected $race;
    protected $nom;
    protected $besoinNourriture;
    protected $categorie;

    public function __construct($nom, $race, $besoinNourriture, $categorie, $id = null )
    {
        $this->id = $id;
        $this->race = $race;
        $this->nom = $nom;
        $this->besoinNourriture = $besoinNourriture;
        $this->categorie = $categorie;
    }
}
