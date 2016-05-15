<?php

namespace App\Controller;

use MiniMVC\Controller\Controller;
use MiniMVC\View\View;

class AboutController extends Controller
{
    public function indexAction()
    {
        return new View();
    }
}
