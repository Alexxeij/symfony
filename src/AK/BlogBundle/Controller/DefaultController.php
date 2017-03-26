<?php

namespace AK\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AKBlogBundle:Default:index.html.twig');
    }
}
