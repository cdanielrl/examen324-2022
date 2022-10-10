<?php
namespace App\Models;
use CodeIgniter\Model;
class PersonaModel extends Model {
    protected $DBGroup = 'default';
    protected $table      = 'persona';
    protected $primaryKey = 'ci';
    protected $returnType = 'object';
    protected $allowedFields = ['ci', 'nombre_completo','fecha_de_nacimiento','departamento'];

    protected $ci;
    protected $nombre_completo;
    protected $fecha_de_nacimiento;
    protected $departmento;

    public function __get($key)
    {
        if (property_exists($this, $key)) {
            return $this->{$key};
        }
    }

    public function __set($key, $value)
    {
        if (property_exists($this, $key)) {
            $this->{$key} = $value;
        }
    }
}
