<?php

namespace Controllers;

use MVC\Router;

class LoginController
{
    public static function login(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }
        //render a la vista
        $router->render('auth/login', [
            'titulo' => 'Iniciar sesión',
        ]);
    }
    public static function logout(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }
        //render a la vista
        $router->render('auth/logout', [
            'titulo' => 'Iniciar sesión',
        ]);
    }

    public static function crear(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }
        //render a la vista
        $router->render('auth/crear', [
            'titulo' => 'Iniciar sesión',
        ]);
    }

    public static function olvide(Router $router)
    {
        echo "desde olvide";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }
        //render a la vista
        $router->render('', [
            'titulo' => 'Iniciar sesión',
        ]);
    }
    public static function reestablecer(Router $router)
    {
        echo "desde reestablecer";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }
        //render a la vista
        $router->render('', [
            'titulo' => 'Iniciar sesión',
        ]);
    }
    public static function mensaje()
    {
        echo "desde mensaje";
    }
    public static function confirmar()
    {
        echo "desde confirmar";
    }
}
