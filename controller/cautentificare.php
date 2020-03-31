<?php
class CAutentificare{

    private $model;
    public function __construct($actiune, $pagina_autentificare, $parametri)
    {
        $this->model = new MAutentificare();
        if ($actiune=="autentificare") $this->valideazaUtilizator($parametri[0], $parametri[1]);
        else if ($actiune=="inregistrare") $this->adaugaUtilizator($parametri[0], $parametri[1]);

        $this->afiseaza($pagina_autentificare);
    }

    private function afiseaza($pagina_autentificare){
        $view = new VAutentificare();
        echo $view -> oferaVizualizare($pagina_autentificare);
    }

    private function adaugaUtilizator($utilizator, $parola){
        if ($this->model->adaugaUtilizator($utilizator, $parola) != false){
            $_SESSION["utilizator"] = $utilizator;
            header("Location: index.php");
        }
    }

    private function valideazaUtilizator($utilizator, $parola){
        if ($this->model->valideazaUtilizator($utilizator, $parola) != false){
            $_SESSION["utilizator"] = $utilizator;
            header("Location: index.php");
        }
    }
}

?>