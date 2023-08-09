<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Autenticación por defecto
    |--------------------------------------------------------------------------
    |
    | Esta opción controla la autenticación "guard" por defecto y las opciones
    | de restablecimiento de contraseña para tu aplicación. Puedes cambiar
    | estos valores según sea necesario, pero son un buen punto de partida.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards de Autenticación
    |--------------------------------------------------------------------------
    |
    | A continuación, puedes definir cada guard de autenticación para tu aplicación.
    | Por supuesto, ya se ha definido una buena configuración por defecto que utiliza
    | el almacenamiento de sesiones y el proveedor de usuarios Eloquent.
    |
    | Todos los controladores de autenticación tienen un proveedor de usuarios.
    | Esto define cómo se obtienen los usuarios de tu base de datos u otros
    | mecanismos de almacenamiento utilizados por esta aplicación para persistir
    | los datos de tus usuarios.
    |
    | Soportado: "session"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Proveedores de Usuarios
    |--------------------------------------------------------------------------
    |
    | Todos los controladores de autenticación tienen un proveedor de usuarios.
    | Esto define cómo se obtienen los usuarios de tu base de datos u otros
    | mecanismos de almacenamiento utilizados por esta aplicación para persistir
    | los datos de tus usuarios.
    |
    | Si tienes múltiples tablas o modelos de usuarios, puedes configurar
    | múltiples fuentes que representen cada modelo / tabla. Luego, estas fuentes
    | pueden asignarse a cualquier guardia de autenticación adicional que hayas definido.
    |
    | Soportado: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Usuario::class,
            'table' => 'usuario', // Agrega esta línea para especificar la tabla correcta
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Restablecimiento de Contraseñas
    |--------------------------------------------------------------------------
    |
    | Puedes especificar múltiples configuraciones de restablecimiento de contraseña
    | si tienes más de una tabla o modelo de usuarios en la aplicación y deseas tener
    | ajustes de restablecimiento de contraseña separados según los tipos de usuario.
    |
    | El tiempo de vencimiento es el número de minutos en que cada token de restablecimiento
    | de contraseña se considerará válido. Esta característica de seguridad mantiene los
    | tokens de corta duración para que tengan menos tiempo para ser adivinados. Puedes
    | cambiar esto según sea necesario.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tiempo de Confirmación de Contraseña
    |--------------------------------------------------------------------------
    |
    | Aquí puedes definir la cantidad de segundos antes de que expire la
    | confirmación de contraseña y se le pida al usuario que vuelva a
    | ingresar su contraseña a través de la pantalla de confirmación.
    | Por defecto, el tiempo de espera es de tres horas.
    |
    */

    'password_timeout' => 10800,

];
