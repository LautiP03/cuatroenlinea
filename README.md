
## Adaptación del ambiente de trabajo: Guía 4 en línea.
Esta es una guía para poder acceder y jugar al 4 en línea creado en PHP, tomando como punto de partida este repositorio de GitHub. 

## Requisitos previos.
Como requisitos previos para completar esta guía correctamente necesitaremos tener instalados una serie de requerimientos en nuestra computadora, los cuales son enumerados a continuación.

1 - DDEV

Link para su descarga: https://ddev.readthedocs.io/en/stable/

2 - Docker Desktop.

Link para su descarga: https://www.docker.com/get-started/

3 - Composer. (Este punto es explicado posteriormente en la guía).

Para los dos primeros puntos principalmente asumimos que están instalados apropiadamente antes de comenzar la guía. 

## Clonar repositorio.

Como primer paso para completar el objetivo de esta guía debemos descargar los archivos y el código de este repositorio en nuestra computadora. 

Para ello, primeramente debemos crear una carpeta en cualquiera de nuestros directorios para organizar donde guardaremos la descarga.

Luego, abriremos la consola de Windows donde mediante el comando cd nos moveremos hacia la carpeta recién creada. Una vez allí, ejecutaremos el comando git clone https://github.com/LautiP03/cuatroenlinea.git

### Preparación y configuración de DDEV.

En esta sección debemos configurar el ambiente DDEV. Para ello primeramente debemos abrir el programa Docker Desktop y luego seguir esta serie de pasos enumerados:

1 - A partir del punto anterior, ejecutaremos la linea cd cuatroenlinea para movernos dentro de la carpeta que contiene todos los archivos de este repositorio.

2 - Después tendremos que ejecutar el comando ddev config, donde nos pedirá una serie de entradas de teclado para completar la configuración. 
    A - En "Proyect Name: " podemos colocar cualquier nombre, pero es recomendable que esté relacionado a este tema para no enredarnos. Por ejemplo: cuatroenlinea.

    B - En "Docroot Location: " simplemente lo dejamos sin completar, es decir, presionamos la tecla Enter.

    C - En "Proyect Type: " debemos colocar laravel y luego presionamos la tecla Enter.

3 - Debemos instalar composer. Por eso, hay que ejecutar el comando ddev composer install.

4 - Como último paso de esta sección debemos crear el archivo de ambiente del proyecto y una especie de contraseña de autenticación para el proyecto. Para ello, ejecutaremos los comandos cp .env.example .env y php artisan key:generate en el orden escrito.

Una vez finalizados estos pasos correctamente, podemos pasar a la cuarta y última sección.

## Correr el programa del 4 en línea.

