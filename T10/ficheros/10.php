<h4>
    <p>
        Realizar los programas necesarios para que se nos muestre un formulario
        similar al de la figura, pero formateado con etiquetas CSS, el cual nos
        permita realizar las siguientes opciones:
    </p>
    <?php
        if ($_SERVER['REQUEST_URI']=="/DWES/T10/ficheros/10.php"){
            echo '<img src="../img/10.JPG">';
        } else {
            echo '<img src="./img/10.JPG">';
        }
    ?>
    <ul>
        
        <li>
            <p>
                Al meter el nombre y una clave (oculta) en el formulario y pulsar
                ACCEDER se enviar&aacute; al servidor el cual comprobar&aacute;
                - en el fichero que le indiquemos en el atributo action del
                formulario - si los datos que introducimos existen en un fichero
                fiche.tsv (antes deber&aacute; comprobar si ese fichero de datos
                existe). Puede ocurrir:
            </p>
            <ul>
                <li>
                    <p>
                        Que encuentre que el usuario y la clave existan en el
                        fichero en cuyo caso nos redirige a otro programa usando
                        Location donde nos muestra un mensaje dici&eacute;ndonos
                        USUARIO AUTORIZADO y nos da la bienvenida.
                    </p>
                </li>
                <li>
                    <p>
                        Que no encuentre al usuario y su clave y nos da un mensaje
                        diciendo ACCESO DENEGADO y nos muestra una opci&oacute;n
                        de Reintentar para volver de nuevo al programa de partida
                        y volver a intentarlo.
                    </p>
                </li>
            </ul>
        </li>
        
        <li>
            <p>
                Si en la pantalla de partida deseamos dar a Registrarse para
                registrarnos se llama a otro programa que nos muestra una pantalla
                similar a la de arriba para introducir nombre y la clave pero que
                en su atributo action tiene un fichero distinto al de antes en el
                cual el servidor deber&aacute; comprobar:
            </p>
            <ul>
                <li>
                    <p>
                        Que el fichero fiche.tsv (que contiene usuarios y
                        contrase&ntilde;as) existe y si es as&iacute; llamar&aacute;
                        a una funci&oacute;n buscar a la que le pasa el nombre y
                        la clave para que busque en el fichero al usuario y nos
                        devuelva si est&aacute; o no: 
                    </p>
                    <ul>
                        <li>
                            <p>
                                En el caso de que est&eacute; nos dar&aacute; un
                                mensaje diciendo que no puede dar de alta a un
                                usuario que ya existe.
                            </p>
                        </li>
                        <li>
                            <p>
                                Si no existe llama a una funci&oacute;n alta en
                                la que abre el fichero fiche.tsv para a&ntilde;adir
                                ese nuevo usuario y luego nos indicar&aacute; en
                                un mensaje que ha sido dado de alta y la fecha.
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        Que el fichero fiche.tsv no exista y entonces llama
                        tambi&eacute;n a la funci&oacute;n alta y le da de alta.
                    </p>
                </li>
            </ul>
        </li>
        <li>
            <p>
                En cualquiera de los casos anteriores se podr&aacute;
                Volver al programa inicial.
            </p>
        </li>
    </ul>
</h4>