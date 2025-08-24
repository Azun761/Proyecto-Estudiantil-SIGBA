El proyecto como dice la descripcion es de un gestor de eventos.

En la carpeta de HTML se encontraran los index de cada apartado, por los momentos se ha creado el login y el Mainboard. 
Aun hay inconvenientes en la conexion de la base de datos debido a que se debe usar una version antigua (PHP 5.6.40) por lo tanto no se ha podido avanzar correctamente debido a mi inexperiencia

Hay varios objetivos que se desean lograr. Los ordenare por importancia para poder hacer un orden

1.- Lograr el inicio de sesion con el insertado a la base de datos un usuario admin sencillo para el desarrllo.
2.- Hacer que el usuario admin pueda hacer la creacion de usuario facilmente (Form para la creacion del mismo estoy trabajando en ello)
El mismo con solo tomar los datos de identidad (Cedula) debe arrastrar los datos filiatorios necesarios del usuario de la misma persona como una herencia. (Tengo la idea de hacer esa accion con un trigger)
3.- Creacion del Mainboard interactivo. Es decir dependiendo de los diferentes permisos que tienen los usuarios tendran diferentes opciones a la hora de representarlo en la pantalla (Estos permisos son
enumerados del 1 al 3 siento el 3 el superusuario). Las opciones estan en discusion del proyecto aun.
4.- Hacer acciones de generacion de eventos, los usuarios con permisos de nivel 2 o mayor podran hacer la creacion de eventos, el mismo arrojara un codigo de evento para que los "Colaboradores" o "Analistas"
puedan ingresar al evento y comenzar su gestion.
5.- Panel de busqueda para el evento. Al iniciar/ingresar al evento los usuarios deben poder ingresar cedulas de los trabajadores de la empresa y se encontrara toda la informacion del usuario en pantalla para 
realizar una entrega (Que sera otro formulario mas sencillo).

Por los momentos estos son los puntos mas concretos de trabajar, para poder luego ir a las ramas y pulir mas el proyecto. Mis mayores agradecimientos a la persona que se tomo el tiempo de leer esto.
