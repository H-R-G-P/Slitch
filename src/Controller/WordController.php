<?php


namespace App\Controller;

use App\Dto\Text;
use App\Form\TextType;
use App\Service\WordControllerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
     *
     * @param Request $request
     *
     * @return Response
     */
    public function add(Request $request) : Response
    {
        $service = new WordControllerService;

        if ($service->addWordsToDb($request)) {
            $this->addFlash('success', 'Words added');
        } else {
            $this->addFlash('warning', 'Words does not added');
        }

        return $this->redirectToRoute('add_words_form');
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