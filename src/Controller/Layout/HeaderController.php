<?php

namespace App\Controller\Layout;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HeaderController extends AbstractController
{
    public function show() : response
    {
        $menuItems = [
            ['link' => '#Home', 'title' => 'Home'],
            ['link' => '#About_me', 'title' => 'About me'],
            ['link' => '#My_work', 'title' => 'My work'],
        ];

        return $this->render('Layout/header.html.twig', ['menuItems' => $menuItems]);
    }
}