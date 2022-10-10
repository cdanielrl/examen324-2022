<?php
namespace App\Models;
use CodeIgniter\Model;
class DepartamentoModel extends Model {
    protected $DBGroup = 'default';
    protected $table      = 'departamento';
    protected $primaryKey = 'codigo';
    protected $returnType = 'object';

    protected $codigo;
    protected $abreviatura;
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
