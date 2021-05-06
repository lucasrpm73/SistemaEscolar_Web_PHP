<?php
class area{
    private $idArea;
    private $nomeArea;

    public function getIdArea(){
        return $this->idArea;
    }
    public function setIdArea($idArea){
        $this->idArea = $idArea;
    }
    public function getNomeArea(){
        return $this->nomeArea;
    }
    public function setNomeArea($nomeArea){
        $this->nomeArea = $nomeArea;
    }
}
?>