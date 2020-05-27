<?php


class PDOManager
{
    private const usernamelocal = "root";
    private const passwdlocal = "11022000";
    private const usernamedistant = "bergeedo";
    private const passwddistant = "v2rsUsd1";

    private const dsnlocal = "mysql:host=localhost;port=3308;dbname=lo07_2020";
    private const dsndistant = "mysql:host=localhost;dbname=lo07_2020";

    public static function getPDO(bool $local): PDO
    {
        if ($local == true) {
            $bdd = new PDO(self::dsnlocal, self::usernamelocal, self::passwdlocal);
        } else {
            $bdd = new PDO(self::dsndistant, self::usernamedistant, self::passwddistant);
        }

        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }

    // Fonction normalement dans biblio_bt.php, légérement modifiée par rapport au TP11 pour utiliser cette classe
    public static function panel_head(string $title, bool $local): PDO
    {

        if ($local == true) {
            $username = self::usernamelocal;
            $password = self::passwdlocal;
            $dsn = self::dsnlocal;
        } else {
            $username = self::usernamedistant;
            $password = self::passwddistant;
            $dsn = self::dsndistant;
        }

        try {
            $bdd = self::getPDO($local);
            $state = "Connexion réussie";
        } catch (Exception $e) {
            $state = $e->getMessage();
            $bdd = false;
        }

        $head = "
        <div class='panel panel-default'>
            <div class='panel-heading'>
                $title
            </div>
            <div class='panel-body'>
                Nom d'utilisateur : $username<br>
                Mot de passe : $password<br>
                DSN : $dsn<br>
                Retour : $state
            </div>
        </div>";

        echo $head;
        return $bdd;
    }
}