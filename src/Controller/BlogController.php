<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("blog/{slug}",requirements={"slug"="[a-z0-9-]+"}, name="blog")
     *
     */
    public function show($slug ="Article Sans Titre")
    {
        $slug = str_replace( '-' , ' ',ucwords($slug));
        return $this->render('blog/index.html.twig', [
        'slug'=> $slug,
        ]);
    }
}
