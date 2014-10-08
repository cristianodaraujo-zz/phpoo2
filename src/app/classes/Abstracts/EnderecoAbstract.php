<?php

namespace src\app\classes\Abstracts;

abstract class EnderecoAbstract {

    protected $telCobr;
    protected $ruaCobr;
    protected $numeroCobr;
    protected $complementoCobr;
    protected $bairroCobr;
    protected $cepCobr;
    protected $municipioCobr;
    protected $ufCobr;

    public function setTelCobr($telCobr) {
        $this->telCobr = $telCobr;
        return $this;
    }
    public function getTelCobr() {
        if($this->telCobr == null  && method_exists($this,'getCelular')) {
            return $this->getCelular();
        }
        elseif($this->telCobr == null && method_exists($this,'getFax')) {
            return $this->getFax();
        }
        else {
            return $this->telCobr;
        }
    }

    public function setBairroCobr($bairroCobr) {
        $this->bairroCobr = $bairroCobr;
        return $this;
    }
    public function getBairroCobr() {
        if($this->bairroCobr == null) {
            return $this->getBairro();
        }
        else {
            return $this->bairroCobr;
        }
    }

    public function setCepCobr($cepCobr) {
        $this->cepCobr = $cepCobr;
        return $this;
    }
    public function getCepCobr() {
        if($this->cepCobr == null) {
            return $this->getCep();
        }
        else {
            return $this->cepCobr;
        }
    }

    public function setComplementoCobr($complementoCobr) {
        $this->complementoCobr = $complementoCobr;
        return $this;
    }
    public function getComplementoCobr() {
        if($this->complementoCobr == null){
            return $this->getComplemento();
        }
        else {
            return $this->complementoCobr;
        }
    }

    public function setMunicipioCobr($municipioCobr) {
        $this->municipioCobr = $municipioCobr;
        return $this;
    }
    public function getMunicipioCobr() {
        if($this->municipioCobr == null){
            return $this->getMunicipio();
        }
        else {
            return $this->municipioCobr;
        }
    }

    public function setNumeroCobr($numeroCobr) {
        $this->numeroCobr = $numeroCobr;
        return $this;
    }
    public function getNumeroCobr()
    {
        if($this->numeroCobr == null){
            return $this->getNumero();
        }
        else {
            return $this->numeroCobr;
        }
    }

    public function setRuaCobr($ruaCobr) {
        $this->ruaCobr = $ruaCobr;
        return $this;
    }
    public function getRuaCobr() {
        if($this->ruaCobr == null){
            return $this->getRua();
        }
        else {
            return $this->ruaCobr;
        }
    }

    public function setUfCobr($ufCobr) {
        $this->ufCobr = $ufCobr;
        return $this;
    }
    public function getUfCobr() {
        if($this->ufCobr == null){
            return $this->getUf();
        }
        else {
            return $this->ufCobr;
        }
    }
} 