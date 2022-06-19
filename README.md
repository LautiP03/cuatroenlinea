
## Adaptación del ambiente de trabajo: Guía 4 en línea.
Esta es una guía para poder acceder y jugar al 4 en línea creado en PHP, tomando como punto de partida este repositorio de GitHub. 

## Requisitos previos.
Como requisitos previos para completar esta guía correctamente necesitaremos tener instalados una serie de requerimientos en nuestra computadora, los cuales son enumerados a continuación.

**1 - DDEV.**

Link para su descarga: https://ddev.readthedocs.io/en/stable/

**2 - Docker Desktop.**

Link para su descarga: https://www.docker.com/get-started/

**3 - Composer.** (La instalación de este punto es explicado posteriormente en la guía).

Para los dos primeros puntos principalmente asumimos que están instalados apropiadamente antes de comenzar la guía. 

## Clonar repositorio.

Como primer paso para completar el objetivo de esta guía debemos descargar los archivos y el código de este repositorio en nuestra computadora. 

Para ello, primeramente debemos crear una carpeta en cualquiera de nuestros directorios para organizar y elegir donde guardaremos la descarga.

Luego, abriremos la consola de Windows donde mediante el comando <code>cd</code> nos moveremos hacia la carpeta recién creada. Una vez allí, ejecutaremos el comando <code>git clone https://github.com/LautiP03/cuatroenlinea.git</code>. Podremos ver que se nos creará otra carpeta llamada **cuatroenlinea** dentro de la primer carpeta creada.

## Preparación y configuración de DDEV.

En esta sección debemos configurar el ambiente DDEV. Para ello primeramente debemos abrir el programa Docker Desktop y luego seguir esta serie de pasos enumerados:

1 - A partir del punto anterior, ejecutaremos la linea <code>cd cuatroenlinea</code> para movernos dentro de la carpeta que contiene todos los archivos de este repositorio.

2 - Después tendremos que ejecutar el comando <code>ddev config</code>, donde nos pedirá una serie de entradas de teclado para completar la configuración.
 
    A - En "Proyect Name: "  colocamos cualquier nombre, pero es recomendable que esté relacionado a este tema.

    B - En "Docroot Location: " simplemente lo dejamos sin completar, es decir, presionamos la tecla Enter.

    C - En "Proyect Type: " debemos colocar laravel y luego presionamos la tecla Enter.

3 - Debemos instalar composer. Por eso, hay que ejecutar el comando <code>ddev composer install</code>.

4 - Como último paso de esta sección debemos crear el archivo de ambiente del proyecto y una especie de contraseña de autenticación para el proyecto. Para ello, ejecutaremos los comandos <code>cp .env.example .env</code>  y <code>php artisan key:generate</code> en el orden escrito.

Una vez finalizados estos pasos correctamente, podemos pasar a la cuarta y última sección.

## Correr el programa del 4 en línea.

Una vez completados todos los pasos anteriormente explicados, toca ejecutar el comando <code>ddev start</code>.

En caso de obtener un error similar a **Unable to listen on required ports, port 433 is already in use**, una solución posible es (por experiencia propia) la indicada a continuación.

Este error en particular indica que el puerto 443, que es el puerto correspondiente al HTTPS, ya está en uso. Es por esto, que hay que buscar el proceso que está haciendo uso de este puerto y "matarlo" a través de una serie de comandos especificados a continuación en el orden correspondiente.

<code>netstat -ano | findstr :443</code>.

Luego de este comando nos fijamos y recordamos el número que se encuentra a la derecha del todo en la primera línea de respuesta (en este caso 10328) y ejecutamos el siguiente comando:

<code>taskkill /PID 10328 /F</code>.

Una vez hecho esto, probamos nuevamente el comando <code>ddev start</code> para continuar con la guía.

Luego de ejecutar <code>ddev start</code> deberíamos poder ver un mensaje en color verde similar a "Proyect can be reached at" seguido de un link https. Este link debemos copiarlo y pegarlo en la barra de búsqueda de nuestro navegador. De esta forma si hicimos todo correctamente tenemos que poder ver el sitio web de Laravel. Luego de esto agregamos /jugar/1 a la dirección anteriormente mencionada y presionamos Enter para poder visualizar el mismísimo 4 línea.

Con esto damos por terminada la guía, no se olvide de ejecutar <code>ddev stop</code> al momento cerrar todo, esta es la forma correcta y natural de hacerlo.