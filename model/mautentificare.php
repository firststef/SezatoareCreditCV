<?php
class BD{
    private static $conexiune_bd = NULL;
    public static function obtine_conexiune(){
        if (is_null(self::$conexiune_bd))
        {
            self::$conexiune_bd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        }
        return self::$conexiune_bd;
    }
}

class MAutentificare{
    public function adaugaUtilizator($utilizator, $parola){ //create
        $sql = "INSERT INTO utilizatori (utilizator, parola, created_at, updated_at) VALUES (:utilizator, :parola, :created_at, :updated_at)";
        $cerere = BD::obtine_conexiune()->prepare($sql);
        return $cerere -> execute ([
            'utilizator' => $utilizator,
            'parola' => $parola,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function valideazaUtilizator($utilizator, $parola)
    {
        $sql = "select * from utilizatori where utilizator=:utilizator and parola=:parola";
        $cerere = BD::obtine_conexiune()->prepare($sql);
        $cerere -> execute ([
            'utilizator' => $utilizator,
            'parola' => $parola
        ]);
        return $cerere->rowCount()==1;
    }
}

