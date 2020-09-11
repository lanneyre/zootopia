<?php
class Planning extends Zoo implements PlanningInterface
{
    protected $soigneur;
    protected $date;
    protected $statut;
    protected $affectation;

    public function __construct($soigneur, $date, $statut, $affectation = null)
    {
        $this->soigneur = $soigneur;
        $this->date = $date;
        $this->statut = $statut;
        $this->affectation = $affectation;
    }

    static function alertNombreMinimumSoigneur($nb){
        
        if($nb < 3){
            echo "Impossible de donner des vacances";
        } else {
            echo "qu'il se barre";
        }
    }
}
