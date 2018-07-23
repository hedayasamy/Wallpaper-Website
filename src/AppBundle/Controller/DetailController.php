<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class DetailController extends Controller
{
	/**
	 * @Route("/view", name="view")
	 */
	public function indexAction(Request $request)
	{
		$image = 'summer-morning-in-fort-collins (1).jpg';

		return $this->render('details/index.html.twig', ['image' => $image, ]);

	}

}


?>