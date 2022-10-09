    <h4>Universidad Mayor de San Andr&eacute;s</h4>
    <h5>Facultad de ciencias Puras y Naturales</h5>
    <div class="ur">
        <hr>
    Bienvenidos a la Facultad de Ciencias Puras y Naturales
    <hr>
    </div>
<?php
$carreras=["Biolog&iacute;a","Estad&iacute;stica","F&iacute;sica","Inform&aacute;tica","Matem&aacute;tica","Qu&iacute;mica"];
$ids=["bio","est","fis","inf","mat","qmc"];
for ($i = 0; $i < 6; $i++) {
    echo "<a href=\"carrera/".$ids[$i]."\">
        <button class=\"button\">".$carreras[$i]."</button>
    </a>";
}
    ?>