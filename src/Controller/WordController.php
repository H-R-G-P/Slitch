<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class WordController
 * @Route("/word")
 * @package App\Controller
 */
class WordController extends AbstractController
{
    /**
     * @Route("/add", name="add_words", methods={"POST"})
     */
    public function add() : Response
    {
        return new Response();
    }

    /**
     * @Route("/add", name="add_words_form", methods={"GET"})
     */
    public function formAdd() : Response
    {
        return new Response();
    }

    /**
     * @Route("/delete", name="delete_words", methods={"POST"})
     */
    public function delete() : Response
    {
        return new Response();
    }

    /**
     * @Route("/delete", name="delete_words_form", methods={"GET"})
     */
    public function formDelete() : Response
    {
        return new Response();
    }
}