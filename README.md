# laboratorio-dos-programacion
¿De qué forma manejaste el login de usuarios? Explica con tus palabras porque en tu página funciona de esa forma.
El login de usuarios se manejó mediante un formulario en HTML donde el usuario ingresa su nombre y contraseña. Estos datos se envían a un archivo PHP (login.php), el cual realiza una consulta a la base de datos para verificar si existe un usuario con esas credenciales. Si los datos coinciden, se inicia una sesión utilizando session_start() y se redirige al usuario al dashboard. Funciona de esta forma porque valida la información contra datos almacenados previamente, permitiendo que solo usuarios registrados puedan acceder al sistema.



¿Por qué es necesario para las aplicaciones web utilizar bases de datos en lugar de variables?
Las bases de datos son necesarias porque permiten almacenar información de manera permanente. En este proyecto, los usuarios y los datos ingresados se guardan en MySQL, lo que permite que la información se mantenga aunque se cierre la aplicación. Las variables solo almacenan datos temporalmente mientras el programa está en ejecución, por lo que no serían útiles para guardar usuarios o registros.



¿En qué casos sería mejor utilizar bases de datos para su solución y en cuáles utilizar otro tipo de datos temporales como cookies o sesiones?
Las bases de datos se utilizan cuando se necesita guardar información de forma permanente, como los usuarios registrados y los datos ingresados en el sistema. En cambio, las sesiones se utilizan para mantener al usuario logueado mientras navega en la aplicación, y las cookies pueden usarse para recordar información como preferencias. En este proyecto se utilizó base de datos para almacenar la información y sesiones para controlar el acceso del usuario.



Describa brevemente sus tablas y los tipos de datos utilizados en cada campo; justifique la elección del tipo de dato para cada uno.
Se utilizaron dos tablas principales. La tabla 'usuarios' contiene los campos: id (INT AUTO_INCREMENT) para identificar cada usuario de forma única, usuario (VARCHAR(50)) para almacenar el nombre, y password (VARCHAR(50)) para la contraseña. La tabla 'datos' contiene: id (INT AUTO_INCREMENT), nombre (VARCHAR(50)), edad (INT) y correo (VARCHAR(100)). Se eligieron estos tipos de datos porque INT es adecuado para números y permite identificadores únicos, mientras que VARCHAR permite almacenar texto de longitud variable.
