<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DemoController extends AbstractController
{
    #[Route('/hello', name: 'hello')]
    public function hello(): Response
    {
        return $this->render('hello.html.twig');
    }

    #[Route('/live', name: 'live')]
    public function live(): Response
    {
        return $this->render('live.html.twig');
    }

    #[Route('/live2', name: 'live2')]
    public function live2(): Response
    {
        return $this->render('live2.html.twig');
    }
}
