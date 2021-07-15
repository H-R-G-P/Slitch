<?php


namespace App\Controller;

use App\Dto\Text;
use App\Form\TextType;
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
        $form = $this->createForm(TextType::class, new Text());

        return $this->render('word/add.html.twig', [
            'adding_form' => $form->createView(),
        ]);
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