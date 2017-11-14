<?php

class Operation
{

    private $sens;
    private $montant;
    private $commentaire;
    private $date;
    // date("F j, Y, g:i a");
    
    public function __construct($montant,$commentaire)
    {
        $this->commentaire=$commentaire;
        $this->montant=$montant;
        $this->date=date("F j, Y, g:i a");
        
        if($montant == 0){

            echo "erreur le montant est à 0";

        }elseif($montant>0){

            $this->setSens("débit");

        }else{

            $this->setSens("crédit");

        }
    }

    public function setMontant($montant)
    {
        $this->montant=$montant;

    }

    public function getMontant()
    {
        return $this->montant;

    }

    public function setSens($sens)
    {
        $this->sens=$sens;
    }

    public function getSens()
    {
        return $this->montant;
    }

    public function setCommentaire($commentaire)
    {
        $this->commentaire=$commentaire;
    }

    public function getCommentaire()
    {
        return $this->commentaire;
    }
}