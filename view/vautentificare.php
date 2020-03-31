<?php
class VAutentificare{
    private $sablon;

    public function __construct()
    {
        $this->sablon_login = DIRECTOR_SITE.SLASH.'view'.SLASH.'vautentificare.tpl';
        $this->sablon_register = DIRECTOR_SITE.SLASH.'view'.SLASH.'vinregistrare.tpl';
    }

    public function oferaVizualizare($pagina_autentificare){
        ob_start();
        if ($pagina_autentificare == "autentificare")
            include($this->sablon_login);
        else if ($pagina_autentificare == "inregistrare")
            include($this->sablon_register);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }

}