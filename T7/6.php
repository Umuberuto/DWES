<h3>
    Comprobar si existi&oacute; el 29 de febrero de 2004 y el mismo d&iacute;a del
    a&ntilde;o 2005 usando la funci&oacute;n checkdate() y el operador ternario ...?...:...
</h3>
<?php
   echo (checkdate(02, 29, 2004)) ? '<p>Existi&oacute; el d&iacute;a 29 de Febrero '
           . 'del a&ntilde;o 2004 ya que 2004 fue un a&ntilde;o bisiesto.</p>' :
           '<p>No existi&oacute; el d&iacute;a 29 de Febrero del a&ntilde;o 2004 ya '
           . 'que 2004 no fue un a&ntilde;o bisiesto.</p>';
   echo (checkdate(02, 29, 2005)) ? '<p>Existi&oacute; el d&iacute;a 29 de Febrero del'
           . ' a&ntilde;o 2005 ya que 2005 fue un a&ntilde;o bisiesto.</p>' : '<p>No '
           . 'existi&oacute; el d&iacute;a 29 de Febrero del a&ntilde;o 2005 ya que 2005 '
           . 'no fue un a&ntilde;o bisiesto.</p>';
?>