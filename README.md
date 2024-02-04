# :closed_lock_with_key: Ejercicio de sesión en PHP

## ES

### Objetivo
Crear un login/logout con sesiones de PHP.

### Instrucciones
Existe una página 'pages/index.php' que contiene un formulario de login donde se deberá ingresar un nombre de usuario y una contraseña. La información obtenida, deberá pasarse al archivo 'src/login.php' donde estará toda la lógica de verificación de usuario y contraseña.

Las claves de acceso serán estáticas, esto quiere decir que, por esta vez, crearemos una variable que contenga el nombre de usuario y una variable con la constraseña, ya que normalmente esto va en una base de datos.

Cuando las claves son incorrectas o el formulario llega vacío nos mostrará el siguiente mensaje: 'El usuario o la contraseña son incorrectas'.

Cuando las claves coincidan con nuestras claves definidas anteriormente, va a redirigir a la página 'pages/authPage.php' y nos mostrará un mensaje de 'Usuario y contraseña correctos' y abajo mostrará la información ya definida en dicha página. Luego desarrollarás la lógica que termine la sesión a través del botón 'logout' y la lógica la desarrollarás en el archivo 'src/logout.php'.

Cuando intentes acceder a la página 'pages/authPage.php' directamente desde la ruta del navegador, y si no has realizado el login, te redirigirá automáticamente a la página del login.

### Bonus
Si has terminado el ejercicio, puedes intentar ponerle validaciones al formulario.

--- 

## EN

### Purpose
Ceeate a login/logout with PHP sessions.

### Instructions
There is a page 'pages/index.php' that contains a login form where a username and password must be entered. The information obtained must be passed to the 'src/login.php' file where all the user and password verification logic will be.

The access keys will be static, this means that, for this moment, we will create a variable that contains the username and a variable with the password, since this normally goes in a database.

When the passwords are incorrect or the form arrives empty, it will show us the following message: 'The username or password is incorrect.'

When the keys match our previously defined keys, it will redirect us to the 'pages/authPage.php' page and show us a 'Correct username and password' message and the information already defined on authPage will be displayed below. You will then develop the logic that ends the session via the 'logout' button and develop the logic in the 'src/logout.php' file.

When you try to access the 'pages/authPage.php' page directly from the browser path, and if you have not logged in, it will automatically redirect you to the login page.

### Bonus
If you have finished the exercise, you can try to add validations to the form.


