<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route(path="/default", name="default", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'pass_info_twig_to_js' => 'data from twig to js',
            'controller_name' => 'DefaultController',
        ]);
    }
}
