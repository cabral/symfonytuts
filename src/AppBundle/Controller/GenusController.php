<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller
{
  /**
   * @Route("/genus/{genusName}")
   */
  public function ShowAction($genusName)
  {
    $notes = [
      'Octopus asked me a riddle, outsmarted me',
      'I counted 8 legs... as they wrapped around me',
      'Inked!'
    ];
    return $this->render('genus/show.html.twig', array(
      'name' => $genusName,
      'notes' => $notes
    ));
  }
}
