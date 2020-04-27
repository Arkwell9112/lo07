<?php


class Cursus
{
    private $listeModules;

    public function __construct()
    {
        $this->listeModules = array();
    }

    public function addModule(Module $mod){
        $this->listeModules[$mod->getSigle()] = $mod;
    }

    public function __toString()
    {
        return "Cursus, Attributs:listeModules:" . var_dump($this->listeModules);
    }

    public function affiche(){
        $result = 'Modules : <br>';
        foreach ($this->listeModules as $keys => $values){
            $result = $result . '(' . $values->getSigle() . ',';
            $result = $result . $values->getLabel() . ',';
            $result = $result . $values->getCat() . ',';
            $result = $result . $values->getEff() . ')<br>';
        }
        return $result;
    }
}