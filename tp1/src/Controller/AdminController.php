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

class AdminController extends Controller{

    /**
     * @Route("/admin", name="admin")
     */
    public function index(){
        return $this->render("user.html.twig");
    }
}