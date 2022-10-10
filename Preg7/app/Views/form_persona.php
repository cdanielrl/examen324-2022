<form action="<?php if($dataPersona) { echo base_url("persona/update"); }else {echo base_url("persona/store");}?>" method="POST" id="formPersona" onsubmit="return validar();">
<div>
<label for="ci">C.I.</label><span id="ci_info" class="error-message"></span>
<input name="ci" id="ci" type="text" <?php if($dataPersona) {echo "value=\"".$dataPersona->ci."\""; }?>>
</div>
<div>
<label for="nombre_completo">Nombre Completo</label><span id="nombre_completo_info" class="error-message"></span>
<input name="nombre_completo" id="nombre_completo" type="text" <?php if($dataPersona) {echo "value=\"".$dataPersona->nombre_completo."\""; }?>>
</div>
<div>
<label for="fecha_de_nacimiento">Fecha de Nacimiento (YYYY/MM/DD)</label><span id="fecha_de_nacimiento_info" class="error-message"></span>
<input name="fecha_de_nacimiento" id="fecha_de_nacimiento" type="text" <?php if($dataPersona) {echo "value=\"".$dataPersona->fecha_de_nacimiento."\""; }?>>
</div>
<div>
<label for="departamento">Departamento</label><span id="departamento_info" class="error-message"></span>
<select name="departamento" id="departamento">
<option disabled <?php if(!$dataPersona) {echo "selected"; }?>>Elija el departamento</option>
    <?php
    use App\Models\DepartamentoModel;
    $departamento = new DepartamentoModel(); 
    $departamentos=$departamento->findAll();
    foreach($departamentos as $d) {
        if($dataPersona && $dataPersona->departamento==$d->codigo) {
            ?>  
            <option selected value="<?=$d->codigo?>"><?=$d->departamento?></option>
            <?php
        } else {
            ?>          
        <option value="<?=$d->codigo?>"><?=$d->departamento?></option>
        <?php
        }
    }
    ?>
</select>
</div>
<div>
<input type="submit" name="enviar" value="Enviar" class="button">
</div>
</form>