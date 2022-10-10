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
foreach($dataPersona as $fila) {
    ?>
    <tr>
    <td>
        <?=$fila->ci;?>
    </td>
    <td>
        <?=$fila->nombre_completo;?>
    </td>
    <td>
        <?=$fila->fecha_de_nacimiento;?>
    </td>
    <td>
        <?=$departamento->find($fila->departamento)->departamento;?>
    </td>
    <td>
        <a href="<?=base_url("persona/update/".$fila->ci);?>">
    <button class="button">
        Modificar
        </button>
</a>
    </td>
    <td>
    <a href="<?=base_url("persona/delete/".$fila->ci);?>">
    <button class="button">
        Borrar
        </button>
</a>
    </td>
    <?php
}
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