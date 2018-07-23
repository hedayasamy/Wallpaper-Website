<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        
        $images = ['summer-morning-in-fort-collins (1).jpg', 'mountain-and-farm.jpg', 'pineridge-natural-area-late-summer.jpg', 'sea-and-the-horixon-1525085408nOc.jpg', 'yellow-summer-garden-flowers.jpg', 'White_Horse_Mountain.JPG', 'sun-in-the-sky-1493054829EpO.jpg'  ];

         $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $images, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        4/*limit per page*/
    );

        return $this->render('gallery/index.html.twig', [ 'images' => $pagination
             ,
        ]);
    }
}
