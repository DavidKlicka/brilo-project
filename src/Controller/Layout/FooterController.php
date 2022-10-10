<?php

namespace App\Controller\Layout;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FooterController extends AbstractController
{
    public function show() : response
    {
        $copyright = "© David Klička 2022";

        return $this->render('Layout/footer.html.twig', ['copyright' => $copyright]);
    }
}