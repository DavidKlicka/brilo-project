<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainContentController extends AbstractController
{
    public function show(): Response
    {
        $title = "David Klička - website";

        return $this->render('Layout/homepage.html.twig', ['title' => $title]);
    }
}