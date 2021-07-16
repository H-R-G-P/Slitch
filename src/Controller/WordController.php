<?php


namespace App\Controller;

use App\Dto\Words;
use App\Entity\LearnedWords;
use App\Entity\UntranslatableWords;
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
        $words = new Words();

        $form = $this->createForm(WordsType::class, $words);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $service->addWordsToDb(
                $words,
                $this->getDoctrine()->getManager(),
                $this->getDoctrine()->getRepository(LearnedWords::class),
                $this->getDoctrine()->getRepository(UntranslatableWords::class)
            );

            $this->addFlash('success', 'Words added');

            return $this->redirectToRoute('add_words');
        }

        return $this->render('word/add.html.twig', [
            'adding_form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete", name="delete_words")
     */
    public function delete() : Response
    {
        return new Response();
    }
}