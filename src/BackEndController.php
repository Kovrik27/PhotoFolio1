<?php
declare(strict_types=1);

namespace App;
use App\Model;
use App\View;
use App\Helper as h;

class BackEndController
{
    private \App\Model $model;
    private \App\BackEndView $view;

public function __construct()
{
    $this->model = new \App\Model();

    $this->view = new \App\BackEndView();


}

function showLoginPanel()
{
    echo $this->twig->render('login-panel.twig');
}
public function checkLogin(string $login, string $password):bool
{
    if ($login == '1' and $password == '1')
    {
        return true;
    }
    else if($login == '2' and $password == '2')
    {
        return false;
    }
}
public function  showAdminPanel()
{
    $this->view->AdminView();
}
public function Login()
{
    if (!isset($_POST['btnLogin']))
    {
        echo 'что-то';
    }
    else {


        if($this->checkLogin($_POST['username'], $_POST['password'])==true)
        {
            $_SESSION['user'] = 'admin';
            $this->view->showAdminPanel();
        }
        else
        {
            $_SESSION['user'] = 'user';
            echo 'кто-то';
              echo $this->twig->render('template/frontend/layout.twig');
        }
        }
    }

}