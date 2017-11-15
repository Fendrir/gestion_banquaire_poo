<?php

class Operation
{

    private $sens;
    private $montant;
    private $commentaire;
    private $date;
    
    
    public function __construct($montant)
    {
        
        $this->setMontant($montant);
        $this->setDate(date("F j, Y, g:i a"));
        
        if($montant == 0){

            $this->setCommentaire("erreur le montant est à 0");
            echo $this->getCommentaire();

        }elseif($montant>0){

            $this->setSens("Crédit");
            $this->setCommentaire($this->getSens()." : ".$this->getMontant()." ");
            echo $this->getCommentaire();

        }else{

            $this->setSens("Débit");
            $this->setCommentaire($this->getSens()." : ".$this->getMontant()." ");
            echo $this->getCommentaire();
            
        }
        
        echo $this->getDate()."</br>";

    }


    public function setDate($date)
    {
        $this->date=$date;
    }

    public function getDate()
    {
        return $this->date;
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
        return $this->sens;
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