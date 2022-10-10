<?php

namespace App\Controllers;

use App\Models\PersonaModel;
use CodeIgniter\Controller;

class PersonaController extends BaseController
{
    public function index()
    {
        $persona = new PersonaModel(); 
        $data['dataPersona']=$persona->findAll();
        return  view('templates/header')
        . view('lista_personas',$data)
        . view('templates/footer');
    }
    public function getPersona($ci)
    {
        $persona = new PersonaModel(); 
        $data['dataPersona']=$persona->find($ci);
        return  view('templates/header')
        . view('ver_persona',$data)
        . view('templates/footer');
    }
    public function addPersona()
    {
        $data['dataPersona']=false;
        return  view('templates/header')
        . view('form_persona',$data)
        . view('templates/footer');
    }
    public function updatePersona($ci=false)
    {if($ci) {
        $persona = new PersonaModel();
        $data['dataPersona']=$persona->find($ci);
        return  view('templates/header')
        . view('form_persona',$data)
        . view('templates/footer');
    } else {
        $persona = new PersonaModel();
        $data = [            
            'nombre_completo' => $this->request->getVar('nombre_completo'),
            'fecha_de_nacimiento' => $this->request->getVar('fecha_de_nacimiento'),
            'departamento' => $this->request->getVar('departamento')
        ];
        $persona->update($this->request->getVar('ci'),$data);
        return $this->index();
    }
    }
    public function savePersona()
    {
        $persona = new PersonaModel();
        $data = [
            'ci' => $this->request->getVar('ci'),
            'nombre_completo' => $this->request->getVar('nombre_completo'),
            'fecha_de_nacimiento' => $this->request->getVar('fecha_de_nacimiento'),
            'departamento' => $this->request->getVar('departamento')
        ];
        $persona->insert($data);
        return $this->index();
    }

    public function deletePersona($ci)
    {
        $persona = new PersonaModel();
        $persona->delete($ci);
        return $this->index();
    }
}

