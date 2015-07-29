<?php

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function homeAction(Request $request)
    {
        $data = array(
            'data' => array(
                array(1, 2, 3),
                array(4, 5, 6),
                array(7, 8, 9)
            )
        );

        return $this->render('home.html.twig', array('data' => $data));
    }
}