<?php
namespace MVC\Controllers;

use MVC\Validator;

class _TemplateController
{

    protected Validator $validator;

    function __construct()
    {
        $this->validator = new Validator();
    }
}


