<?php
class CategorieAnimaux extends Zoo implements CategorieAnimauxInterface
{
    protected $id;
    protected $nom;
    protected $nourriture;

    public function __construct($nom, $nourriture, $id = null )
    {
        $this->id = $id;
        $this->nourriture = $nourriture;
        $this->nom = $nom;
    }
}
