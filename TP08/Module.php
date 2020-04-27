<?php
include ("WebBean.php");

class Module implements WebBean
{
    private $sigle;
    private $label;
    private $cat;
    private $eff;

    /**
     * @return String
     */
    public function getSigle(): String
    {
        return $this->sigle;
    }

    /**
     * @param String $sigle
     */
    public function setSigle(String $sigle): void
    {
        $this->sigle = $sigle;
    }

    /**
     * @return String
     */
    public function getLabel(): String
    {
        return $this->label;
    }

    /**
     * @param String $label
     */
    public function setLabel(String $label): void
    {
        $this->label = $label;
    }

    /**
     * @return String
     */
    public function getCat(): String
    {
        return $this->cat;
    }

    /**
     * @param String $cat
     */
    public function setCat(String $cat): void
    {
        $this->cat = $cat;
    }

    /**
     * @return int
     */
    public function getEff(): int
    {
        return $this->eff;
    }

    /**
     * @param int $eff
     */
    public function setEff(int $eff): void
    {
        $this->eff = $eff;
    }

    public function __construct(String $sigle, String $label, String $cat, int $eff)
    {
        $this->setSigle($sigle);
        $this->setLabel($label);
        $this->setCat($cat);
        $this->setEff($eff);
    }

    public function __toString()
    {
        return "Module: $this->sigle $this->label $this->cat $this->eff ";
    }

    public function sauveXML($file)
    {
        return 'xml';
    }

    public function sauveTXT()
    {
        $result = $this->sigle;
        $result = $result . ';' . $this->label;
        $result = $result . ';' . $this->cat;
        $result = $result . ';' . $this->eff;
        return $result;
    }

    public function pageKO()
    {
        Charte::html_head_bootstrap('Modules et Cursus');
        echo 'Le formulaire est incorrecte';
        Charte::html_foot_bootstrap();
    }

    public function pageOK()
    {
        Charte::html_head_bootstrap('Modules et Cursus');
        echo 'Le formulaire est correcte';
        Charte::html_foot_bootstrap();
    }

    public function sauveBDR($table)
    {
        $result = "INSERT INTO &table& VALUES('$this->sigle','$this->label','$this->cat','$this->eff')";
        $result = str_replace('&table&', $table, $result);
        return $result;
    }

    public function valide()
    {
        if(isset($_GET['sigle'])){
            if(strlen($_GET['sigle']) == 4 ){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function createTable($label)
    {
        $base = "<div class=\"panel panel-success\">
                    <div class class=\"panel-heading\">
                        $label
                    </div>
                    <div class='panel-body'>
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                                <th scope=\"col\">Nom valeur</th>
                                <th scope=\"col\">Valeur</th>
                            </thead>
                            <tbody>
                                &here&
                            </tbody>
                        </table>
                    </div>
                 </div>";

        $pieces = '
        <tr>
            <td>&name&</td>
            <td>&valeur&</td>
        </tr>';

        $inner = '';

        $current = str_replace('&name&', 'Sigle', $pieces);
        $current = str_replace('&valeur&', $this->getSigle(), $current);
        $inner = $inner . $current;

        $current = str_replace('&name&', 'Label', $pieces);
        $current = str_replace('&valeur&', $this->getLabel(), $current);
        $inner = $inner . $current;

        $current = str_replace('&name&', 'Catégorie', $pieces);
        $current = str_replace('&valeur&', $this->getCat(), $current);
        $inner = $inner . $current;

        $current = str_replace('&name&', 'Effectif', $pieces);
        $current = str_replace('&valeur&', $this->getEff(), $current);
        $inner = $inner . $current;

        return str_replace('&here&', $inner, $base);
    }
}