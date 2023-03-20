<h1>Miniproyecto reto inteliti 2023</h1>

<p>Aplicativo sencillo para registrar los datos de una historia
médica de un paciente y se genere una breve recomendación de salud.</p>

<p>Dicho aplicativo está desarrollado en el framework Laravel version 8.83 junto con el framework front-end Livewire versión 2.12, para ser desplegado en PHP 7.4.33. Este aplicativo puede funcionar en xampp, wampp, lampp o usando 'php artisan serve' (teniendo en cuenta que las variables de entorno del ejecutable de PHP estén bien y que mysql o mariadb haya sido instalado). Para efectos practicos se usó laragon en su versión 6 para mejor despliegue, sin embargo puede ser usado con Docker si desea. </p>


<h2>Pasos para desplegar aplicativo:</h2>

<ol>
    <li>Copiar el repositorio https://github.com/gricardo1986/miproyecto.git</li>
    <li>En consola clonar repositorio, con el siguiente comando "git clone https://github.com/gricardo1986/miproyecto.git"
        y luego seleccionar la carpeta donde fue clonado "cd miproyecto"
    </li>
    <li>Usar comandos "composer install" para instalación de componentes y librerías necesarias para poder correr el aplicativo</li>
    <li>Crear la base de datos con el nombre de su preferencia (normalmente 'miproyecto') desde consola mysql/mariadb o desde phpmyadmin, heidisql, dbeaver, mysqlworkbench, o cualquier entorno de cliente que soporte mysql/mariadb
    <li>Luego correr en la consola el comando "php artisan migrate --seed" para crear la base de datos y registros dummies para mejor visualización de datos por defecto</li>
    <li>Direccionar en el navegador web de su elección 'http://localhost/<nombre>' ó 'http://127.0.0.1/<nombre>' y el nombre del aplicativo. Si usó 'php artisan serve' sería "http://127.0.0.1:8000/<nombre>". Si usó laragon desde su interfaz buscando el item 'www' aparecerá el nombre del aplicativo y este hará la apertura o si prefiere escribir en el navegador "http://<nombre>.test/" también hará el despliegue.
</ol>
