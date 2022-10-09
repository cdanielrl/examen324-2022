<?php

namespace App\Controllers;

class Carrera extends BaseController {
    public function index($id=false)
    {
        $carrera="";
        switch ($id) {
            case "bio":
                $carrera="Biolog&iacute;a";
                break;
            case "est":
                $carrera="Estad&iacute;stica";
                break;
            case "fis":
                $carrera="F&iacute;sica";
                break;
            case "inf":
                $carrera="Inform&aacute;tica";
                break;
            case "mat":
                $carrera="Matem&aacute;tica";
                break;
            case "qmc":
                $carrera="Qu&iacute;mica";
                break;
            default:
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            break;
        }
        $data = [
            'carrera' => $carrera,
        ];

        return view('templates/header')
        . view('templates/carrera',$data)
        . view('templates/footer');
    }
}