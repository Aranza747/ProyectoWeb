# ProyectoWeb

Aula virtual para la Escuela Nacional Preparatoria No. 6 "Antonio Caso".

**Descripción:**
  - Creamos una plataforma virtual que pueda servir de ayuda a nuestra escuela permitiendo una sana relación profesor-alumno donde todas las acciones sean supervisadas por un moderador y/o administrador. Servirá para que se tenga una dinámica académica donde se puedan llevar a cabo las actividades académicas necesarias para que nuestros alumnos sean capaces de cursar el ciclo escolar satisfactoriamente y con los menores inconvenientes posibles.

  - Consideramos es importante debido a que nos encontramos en una situación donde los métodos de enseñanza tradicionales no son efectivos por lo que fue pertinente crear esta aula virtual para que la enseñanza a nivel bachillerato, de la ENP 6, pudiera continuar forjando estudiantes de excelencia.
  
  - Para obtener nuestros resultados hemos utilizado principalmente:
      1. Lenguajes de programación tales como:
          * PHP
          * JavaScript
      2. Otras tecnologías utilizadas:
          * CSS
          * HTML
          * MariaDB

**Instalación:**
  - Programas necesarios: 
 
      * Editor de texto Visual Studio Code: 
          1. Ingresar a esta liga: https://code.visualstudio.com/Download y seleccionar la opción que más se adecúe a su sistema operativo.
          2. Windows: abrir el instalador, aceptar los términos y condiciones, verificar la dirección de donde se guarda el programa en su computadora y continuar, aceptar el nombre predeterminado y continuar, se puede seleccionar la opción de tener acceso directo en el escritorio y continuar, dar clic en "Instalar" y finalmente dar clic en "Finalizar".
          4. Linux: abrir la carpeta donde se encuentre el archivo descargado, ingresar la siguiente línea: "sudo -l dpkg (ruta del archivo)" y ya se instala el programa.
          5. Registrarse en Visual Studio Code.
  
      * Servidor de Apache (XAMPP):
          1. Ingresar a esta liga: https://www.apachefriends.org/es/download.html y seleccionar la opción que más se adecúe a su sistema operativo en la versión 7.
          2. Windows: abrir el instalador, aceptar, aceptar, ok, darle clic a siguiente, deseleccionar las opciones "FTP, Mail Server, Towncat y Pearl" y continuar, dejar la ruta predeterminada y continuar, seleccionar idioma de preferencia y continuar, deseleccionar la única opción y continuar, darle clic a siguiente.
          2. Linux: darle permiso de ejecución al runner con esta línea: sudo chmod +x más xampp, después poner sudo ./xampp, darle clic a siguiente cuando se abra el panel de instalación y continuar, seleccionar solo la opción de "Core Files" y continuar, aceptar, deseleccionar la única opción y continuar, darle clic a siguiente y se empieza a instalar.
          3. Cuando se abra el panel de control activar "Apache" y "MySQL".
  
      * Plataforma digital GitHub: ingresar a https://github.com/ y crear una cuenta/iniciar sesión.

      * Controlador de Versiones Git: 
          1. Ingresar a esta liga: https://git-scm.com/downloads y seleccionar la opción que más se adecúe a su sistema operativo.
          1. Linux: ingresar la siguiente línea: "sudo apt install git" y presionar "s" o "y" en la siguiente petición.
          2. Windows: abrir el instalador, continuar después de leer los términos y condiciones, verificar la dirección de donde se guarda el programa en su computadora y continuar, se puede seleccionar la opción de tener acceso directo en el escritorio, descativar la opción que contenga "GUE" y continuar, se puede cambiar el nombre predeterminado de git y continuar, seleccionar la opción que tenga "Nano" y continuar, seleccionar la opción que contenga "Bash" y continuar, seleccionar la opción que tenga "Bin" y continuar, dejar la opción de "Let Git Decide" y continuar, darle clic a la opción *recomendada* en el ambiente y continuar, dejar la opción predeterminada de OpenSSL y continuar, se puede dejar la opción predeterminada de commits y continuar, se puede dejar la opción predeterminada de TTY y continuar, seleccionar la opción "Default" o "Rebase" y continuar, dejar la opción "Git Credential Manager" y continuar, seleccionar cualquier opción y continuar, no seleccionar ninguna opción y continuar, dar clic en "Instalar".
      
      * Navegadores tales como: Google Chrome, Opera, Firefox.
      
      * Terminal: 
          1. Windows: Microsoft Store.
          2. Buscar "windows terminal" e instalarla.

**Ejecución**
*Para ejecutar un comando se escribe la línea y se presiona la tecla Enter.

    1. Crear una carpeta en esta ruta: C:/xampp/htdocs con el nombre de preferencia.
    2. Abrir la terminal y arrastrar la carpeta a la terminal para tomar la ruta.
    3. Escribir "git init" para inicializar la carpeta.
    4. Escribir "git clone https://github.com/Aranza747/ProyectoWeb.git
    5. Copiar el archivo de la base de datos llamado "aula2.sql" ubicada en la carpeta docs en la siguiente ruta: C:/xampp/mysql/bin
    6. Abrir una nueva pestaña de la terminal y escribir la siguiente línea: C:\xampp\mysql\bin en windows y a /opt/lampp/bin en linux.
    7. Ejecutar el comando ./mysql -u root;
    8. Ejecutar el comando CREATE DATABASE aula2;
    11. Luego mysql -u root --default-character-set=utf8;
    12. SET names 'utf8';
    13. USE aula2;
    14. SOURCE aula2.sql;
    15. Una vez clonada la carpeta en el repositorio con la base de datos importada, abrir el archivo iniciarSesion.html
    16. Abrir XAMPP y verificar que los rubros antes mencionados estén activados.
    17. Crear una cuenta dando clic en el enlace "cree una" e ingrese su número de cuenta si es alumno o RFC si es profesor.
    18. Inicie sesión con su nueva cuenta.
    19. Únase a un curso o créelo y comience a utilizar las funcionalidades disponibles.
    20. De haber un problema, por favor contáctese con el equipo a: 

**Créditos**

- Castro Valentina
    * Calendario
    * Crear Tareas
    * Ingresar Curso 
    * Desplegar materias
    * Desplegar módulos
    * Desplegar temas
    * Crear temas 
    * Crear tareas
    * Crear módulos
    * Implementación de sesiones
    * Realización de wireframes
    * Creación de base de datos  
- Pueblita Araceli Michel
    * ola
- Mariana
    * ola
- Reyes Romero Gloria Aranza
    * Maquetado HTML
    * Hasheo
    * Diseño
    * Foro 
    * Documentación
    * Perfil inicial

// le ponen sus nombres completos pofavo, creo están en orden alfabético pero no me sé todos sus apellidos T0T

          
