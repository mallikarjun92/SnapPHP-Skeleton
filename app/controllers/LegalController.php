<?php

namespace App\Controllers;

use SnapPHP\Core\Controller;
use SnapPHP\Core\Annotations\Route;

class LegalController extends Controller
{
    /**
     * @Route(method="GET", path="/legal", name="legal")
     */
    public function index()
    {
        return $this->render('legal/index.html.twig', ['content' => 'Build all the legal pages in this controller']);
    }
}