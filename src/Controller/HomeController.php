<?php
/**
 * Created by PhpStorm.
 * User: wilder16
 * Date: 29/10/18
 * Time: 15:13
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @route("/", name="Hello")
     */
    public function index()
    {
        return $this->render('home.html.twig', [

        ]);

    }
}