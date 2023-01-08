<?php

// Nombre del archivo a analizar
$filename = "ejemplo.txt";

// Abrir el archivo en modo de lectura
$handle = fopen($filename, "r");

// Leer el contenido del archivo en una cadena
$contents = fread($handle, filesize($filename));

// Cerrar el archivo
fclose($handle);

// Crear una lista de virus conocidos
$virus_list = array("troyano", "troyano2", "troyano3");

// Buscar cualquier coincidencia de virus en el contenido del archivo
foreach ($virus_list as $virus) {
  if (strpos($contents, $virus) !== false) {
    echo "Se ha detectado un virus (" . $virus . ") en el archivo " . $filename;
    break;
  }
}
