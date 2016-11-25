<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\COmponent\HttpFoundation\Response;

class GenusController
{
  /**
   * @Route("/genus/{genusName}")
   */
  public function ShowAction($genusName)
  {
    return new Response('The Genus:' .genusName);
  }
}
