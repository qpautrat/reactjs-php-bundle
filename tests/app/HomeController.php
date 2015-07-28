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

        $rjs = $this->get('reactjs_php.reactjs');
        $rjs->setComponent('Table', $data);

        return $this->render('home.html.php', array('rjs' => $rjs));
    }
}