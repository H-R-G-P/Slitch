<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UserController
 * @Route("/user")
 * @package App\Controller
 */
class UserController extends AbstractController
{
    /**
     * @Route("/register", name="user_register", methods={"POST"})
     */
    public function register() : Response
    {
        return new Response();
    }

    /**
     * @Route("/register", name="user_register_form", methods={"GET"})
     */
    public function formRegister() : Response
    {
        return new Response();
    }

    /**
     * @Route("/login", name="user_login", methods={"POST"})
     */
    public function login() : Response
    {
        return new Response();
    }

    /**
     * @Route("/login", name="user_login_form", methods={"GET"})
     */
    public function formLogin() : Response
    {
        return new Response();
    }
}