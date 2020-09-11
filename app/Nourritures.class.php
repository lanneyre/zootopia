<?php
class Nourritures extends Zoo implements NourrituresInterface
{
    protected $id;
    protected $nom;
    protected $quantite;
    protected $lieuStockage;

    public function __construct($nom, $quantite, $lieuStockage, $id = null )
    {
        $this->id = $id;
        $this->quantite = $quantite;
        $this->nom = $nom;
        $this->lieuStockage = $lieuStockage;
    }

    function alert($qte = 20){
        if($this->quantite <= $qte){
            echo "seuil limite atteind !";
        }
        echo "Il reste " . $this->quantite . " kg\n";
    }
}
