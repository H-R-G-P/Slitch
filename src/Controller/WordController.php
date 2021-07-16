<?php


namespace App\Controller;

use App\Form\WordsType;
use App\Service\WordControllerService;
use Exception;
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
     * @Route("/add", name="add_words")
     *
     * @param Request $request
     *
     * @return Response
     *
     * @throws Exception
     */
    public function add(Request $request) : Response
    {
        $service = new WordControllerService;
        $form = $this->createForm(WordsType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($service->addWordsToDb($request)) {
                $this->addFlash('success', 'Words added');
            } else {
                $this->addFlash('warning', 'Words does not added');
            }
        }

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
}