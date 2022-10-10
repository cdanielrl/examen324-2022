<table>
<thead>
    <th>C.I.</th>
    <th>Nombre completo</th>
    <th>Fecha de nacimiento</th>
    <th>Departamento</th>
    <th>Modificar</th>
    <th>Borrar</th>
</thead>
<tdata>
<?php
use App\Models\DepartamentoModel;
$departamento = new DepartamentoModel(); 
if($dataPersona) {
    ?>
    <tr>
    <td>
        <?=$dataPersona->ci;?>
    </td>
    <td>
        <?=$dataPersona->nombre_completo;?>
    </td>
    <td>
        <?=$dataPersona->fecha_de_nacimiento;?>
    </td>
    <td>
        <?=$departamento->find($dataPersona->departamento)->departamento;?>
    </td>
    <td>
    <a href="<?=base_url("persona/update/".$dataPersona->ci);?>">
    <button class="button">
        Modificar
        </button>
</a>
    </td>
    <td>
    <a href="<?=base_url("persona/delete/".$dataPersona->ci);?>">
    <button class="button">
        Borrar
        </button>
</a>
    </td>
    <?php
} else {
    ?>
    <td colspan="6">
        No hay datos
    </td>
    <?php
}
?>
</tdata>
</table>
<a href="<?=base_url("persona/add");?>">
    <button class="button">
        A&ntilde;adir
        </button>
</a>