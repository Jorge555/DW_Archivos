<?php
 /******************************************************************
  * Programa     : Contador Sencillo                               *
  * Desarrollado : Ferca Network                                   *
  * Sitio Web    : http://www.ferca.com                            *
  * Licencia     : GPL (Gnu Public License)                        *
  * Creado en    : 10 abril 2003                                   *
  * Modo de uso  : Subir ficheros al sitio                         *
  *                Permisos de escritura (+777) para contador.dat  *
  *                Ahora a funcionar ...                           *
  ******************************************************************/
  $ca = "contador.dat";
  $fp = fopen($ca,"r");
  $ct = trim(fread($fp,filesize($ca)));
  if ($ct != "") $ct++;
  else $ct = 1;
  @fclose($fp);
  $fp = fopen($ca,"w");
  @fputs($fp,$ct);
  for($i=0;$i<strlen($ct);$i++) {
    $imgnum = substr($ct,$i,1);
    $contador .= "<img alt='$imgnum' src='$imgnum.gif'>";
  }
  @fclose($fp);
  print $contador;
?>
