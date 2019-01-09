<h4>
    &iquest;Se pueden declarar en una clase propiedades sin  ning&uacute;n tipo
    de modificador? En caso afirmativo, &iquest;cual toma por defecto?
</h4>

<p style="color: blue;">
    NO se puede. Hay que ponerles un modificador o la palabra var (sin&oacute;nimo
    de public) (Aunque su uso va a quedarse deprecated).
</p>

<h4>
    &iquest;Se pueden declarar m&eacute;todos en una clase sin  ning&uacute;n tipo
    de modificador? En caso afirmativo, &iquest;cual toma por defecto?
</h4>

<p style="color: blue;">
    S&Iacute; se puede. Toma por defecto el public.
</p>

<h4>
    &iquest;Se podr&iacute;a crear un usuario sin especificar en la clase Usuario
    un m&eacute;todo constructor?
</h4>

<p style="color: blue;">
    S&Iacute; se puede. Llamar&iacute;a por defecto al constructor de la clase de
    la que hereda (Persona).
</p>

<h4>
    &iquest;Que diferencia existe entre un atributo declarado public y otro
    declarado private en la clase Persona a la hora de visualizarlo en la clase
    Usuario? Compru&eacute;balo:
</h4>

<p style="color: blue;">
    Puede acceder al atributo declarado public DIRECTAMENTE.
    Para acceder al atributo declarado private debe acceder por medio de un
    m&eacute;todo public (Ej __get).
</p>

<h4>
    &iquest;Funciona igual un atributo public que uno protected?
</h4>

<p style="color: blue;">
    NO, a un atributo public se puede acceder DIRECTAMENTE desde cualquier parte de
    la aplicaci&oacute;n mientras a un atributo protected solo se puede acceder
    DIRECTAMENTE desde la propia clase o una clase que herede de ella. Para acceder
    a un atributo protected desde otra clase que NO EST&Eacute; EN LA JERARQU&Iacute;A
    DE HERENCIA se debe usar un m&eacute;todo que acceda a &eacute;l.
</p>

<h4>
    Crea un array en el fichero index en el que puedas introducir Personas y Usuarios:
</h4>

<h4>
    Despu&eacute;s recorre ese array y muestra sus datos. &iquest;Que m&eacute;todo usar&aacute;s?
    (NOTA: Investiga como se usa instanceof en PHP):
</h4>

<p style="color: blue;">
    Dejar&eacute; que se active el M&Eacute;TODO M&Aacute;GICO __toString() al usar
    echo.
</p>