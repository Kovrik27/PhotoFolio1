<?php
declare(strict_types=1);

namespace App;


class BackEndView
{
    public $loader;
    public $twig;

    public function __construct()
    {
        $this->loader = new \Twig\Loader\FilesystemLoader('template/backend/');
        $this->twig = new \Twig\Environment($this->loader, [
            //'cache' => '/path/to/compilation_cache',
        ]);
    }

   public function Obratno()
{
    echo $this->twig->render('layout.twig');
}

public function showLoginPanel()
{
    echo $this->twig->render('login-panel.twig');
}

public function AdminView()
{
    $this->view->render('admin-page.twig');
}

public function LoginView()
{
    $this->view->ShowLoginPanel();
}

public function showAdminPanel()
{
    return $this->twig->render('admin-page.twig');
}

}