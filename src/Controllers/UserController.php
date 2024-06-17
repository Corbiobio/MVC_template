<?php
namespace MVC\Controllers;

use MVC\Models\UserManager;

class UserController extends _TemplateController
{

    private UserManager $UserManager;

    function __construct()
    {
        parent::__construct();
        $this->UserManager = new UserManager();
    }

    //methode
    function showPage()
    {
        $users = $this->UserManager->get_all();
        $user = $this->UserManager->get_one("svdfsbdvw");
        require VIEWS . "./page/home.php";
    }
}


