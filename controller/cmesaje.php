<?php
    class CMesaje{

        private $model;
        public function __construct($actiune, $parametri)
        {
            $this->model = new MMesaje();
            if ($actiune=="stergeMesaj") $this->stergeMesaj($parametri[0]);
            if ($actiune=="adaugaMesaj") $this->adaugaMesaj($parametri[0], $parametri[1]);
            if ($actiune=="salveazaMesaj") $this->salveazaMesaj($parametri[0], $parametri[1]);
            
            if ($actiune=="triggerModificaMesaj") $this->afiseazaMesaje($parametri[0]);
             else $this->afiseazaMesaje();
        }


        private function afiseazaMesaje($edit = NULL){
            $mesaje = $this->model->obtineMesaje();
            $view = new VMesaje();
            $view -> incarcaDatele($mesaje);
            echo $view -> oferaVizualizare($edit);
        }

        private function adaugaMesaj($utilizator, $mesaj){
            $this->model->adaugaMesaj($utilizator, $mesaj);
        }

        private function stergeMesaj($idMesaj){
            $this->model->stergeMesaj($idMesaj);
        }

        private function salveazaMesaj($id, $mesaj){
            $this->model->modificaMesaj($id, $mesaj);
        }


    }

?>