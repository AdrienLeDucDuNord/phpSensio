<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * Created by PhpStorm.
 * User: adrien.leduc
 * Date: 08/11/17
 * Time: 08:50
 */

class HomepageController extends Controller{

    /**
     * @Route("/homepage", name="homepage")
     */
    public function index(){
        return $this->render("homepage.html.twig");
    }
}