<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name}", name="hello_page", requirements={"name"="[A-Za-z\-]+"})
     * @param string $name
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function hello(string $name = 'no name supplied')
    {
        return $this->render('hello/index.html.twig', [
            'person_name' => $name,
        ]);
    }
}
