<?php

namespace App\Controller;

class WebController
{
    public function start()
    {
        $title = "Titulo da Página";
        $titulo_principal = "Titulo Principal";
        
        require VIEW . "Web/start.php";
    }

}