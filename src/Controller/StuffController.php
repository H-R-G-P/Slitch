<?php


namespace App\Controller;

use App\Entity\EnglishUntranslatableWords;
use App\Entity\EnglishWords;
use App\Entity\Languages;
use App\Entity\PolishUntranslatableWords;
use App\Entity\PolishWords;
use App\Entity\Stuff;
use App\Form\StuffType;
use App\Repository\EnglishUntranslatableWordsRepository;
use App\Repository\EnglishWordsRepository;
use App\Repository\PolishUntranslatableWordsRepository;
use App\Repository\PolishWordsRepository;
use App\Repository\StuffRepository;
use App\Service\Helper;
use App\Service\TextProcessor;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class StuffController
 * @Route("/stuff")
 * @package App\Controller
 */
class StuffController extends AbstractController
{
    /**
     * @Route("/", name="show_all_stuffs")
     */
    public function index() : Response
    {
        $data = $this->getDoctrine()
            ->getRepository(Stuff::class)
            ->findBy(
                ['user' => $this->getUser()->getId()],
                ['addedAt' => 'DESC'],
            );

        return $this->render('stuff/index.html.twig', ['stuffs' => $data]);
    }

    /**
     * @Route("/add", name="add_stuff", methods={"GET", "POST"})
     */
    public function add(Request $request, TextProcessor $textProcessor) : Response
    {
        $stuff = new Stuff();
        $form = $this->createForm(StuffType::class, $stuff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set missing parameters
            try {
                $textInfo = $textProcessor->getInfo($stuff->getText(), $stuff->getLanguage());
            }catch (\Exception $e) {
                $this->addFlash('danger', $e->getMessage());
                return $this->redirectToRoute('show_all_stuffs');
            }
            $stuff->setWords($textInfo['string_of_words']);
            $stuff->setWordCount($textInfo['word_count']);
            $stuff->setUniqWordCount($textInfo['uniq_word_count']);
            $stuff->setAddedAt(new \DateTime());
            $stuff->setUser($this->getUser());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($stuff);
            $entityManager->flush();

            $this->addFlash('success', 'Stuff is added!');

            return $this->redirectToRoute('show_all_stuffs');
        }

        return $this->render('stuff/add.html.twig', [
            'additionForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete_stuff", methods={"GET"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function delete(int $id, StuffRepository $stuffRep) : Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $id,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $id does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($stuff);
        try {
            $entityManager->flush();

            $this->addFlash('success', 'Stuff deleted');
            return $this->redirectToRoute('show_all_stuffs');
        }catch (\Exception $e) {
            $this->addFlash('warning', 'Stuff not deleted');
            return $this->redirectToRoute('show_all_stuffs');
        }
    }

    /**
     * @Route("/show/{id}", name="show_stuff", methods={"GET"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function show(int $id, StuffRepository $stuffRep) : Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $id,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $id does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        return $this->render('stuff/show.html.twig', [
            'stuff' => $stuff,
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit_stuff", methods={"GET", "POST"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function edit(int $id, Request $request, StuffRepository $stuffRep, TextProcessor $textProcessor) : Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $id,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $id does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        $form = $this->createForm(StuffType::class, $stuff);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // Set missing parameters
                try {
                    $textInfo = $textProcessor->getInfo($stuff->getText(), $stuff->getLanguage());
                }catch (\Exception $e) {
                    $this->addFlash('danger', $e->getMessage());
                    return $this->redirectToRoute('show_all_stuffs');
                }
                $stuff->setWords($textInfo['string_of_words']);
                $stuff->setWordCount($textInfo['word_count']);
                $stuff->setUniqWordCount($textInfo['uniq_word_count']);
                $stuff->setAddedAt(new \DateTime());
                $stuff->setUser($this->getUser());

                $em = $this->getDoctrine()->getManager();
                try {
                    $em->flush();
                    $this->addFlash('success', 'Stuff edited');
                    return $this->redirectToRoute('show_all_stuffs');
                }catch (\Exception $e) {
                    $this->addFlash('warning', 'Stuff does not edited');
                }
            }
        }

        return $this->render('stuff/edit.html.twig', [
            'edit_form' => $form->createView(),
            'stuff_name' => $stuff->getName(),
        ]);
    }

    /**
     * @Route("/handle/en/{id}", name="handle_english_stuff_form", methods={"GET"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function handlePageEn(int $id, StuffRepository $stuffRep, EnglishWordsRepository $enWordsRep, EnglishUntranslatableWordsRepository $enUntranslatableWordsRep, TextProcessor $textProcessor, Helper $helper) : Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $id,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $id does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        try {
            $decodeText = html_entity_decode($stuff->getText(), ENT_QUOTES, 'utf-8');
            // TODO this code in function that will used in WordControllerService.php
            //-------------------------------------------------
            $uniqWords = $textProcessor->getUniqWords($decodeText, $stuff->getLanguage());
            $notLearnedWords = $helper::array_diff_inLowercase($uniqWords, $enWordsRep->findAll(), $enUntranslatableWordsRep->findAll());
            $uniqWordsObj = $textProcessor->getUniqWordsObj($decodeText, $stuff->getLanguage());
            $notLearnedWordsObj = array_intersect($uniqWordsObj, $notLearnedWords);
            //--------------------------------------------------
        }catch (\Exception $e) {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('show_all_stuffs');
        }

        if (count($notLearnedWordsObj) === 0)
        {
            $this->addFlash('info', 'All words in this stuff are learned.');
            $this->redirectToRoute('show_all_stuffs');
        }

        return $this->render('stuff/handle.html.twig', [
            'notLearnedWords' => $notLearnedWordsObj,
            'stuff' => $stuff,
        ]);
    }

    /**
     * @Route("/handle/en/{id}", name="handle_english_stuff", methods={"POST"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function handleEn(int $id, Request $request) : Response
    {// TODO Change if statement that redirect to here in index.html.twig, because it some logic in template
        $em = $this->getDoctrine()->getManager();
        if ($request->request->get('learnedWords'))
        {
            foreach ($request->request->get('learnedWords') as $learnedWord) {
                $word = new EnglishWords();
                $word->setWord($learnedWord);
                $em->persist($word);
            }
            $em->flush();
        }

        if ($request->request->get('untranslatableWords'))
        {
            foreach ($request->request->get('untranslatableWords') as $untranslatableWords) {
                $word = new EnglishUntranslatableWords();
                $word->setWord($untranslatableWords);
                $em->persist($word);
            }
            $em->flush();
        }

        return new Response();
    }

    /**
     * @Route("/handle/pl/{id}", name="handle_polish_stuff_form", methods={"GET"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function handlePagePl(int $id, StuffRepository $stuffRep, PolishWordsRepository $plWordsRep, PolishUntranslatableWordsRepository $plUntranslatableWordsRep, TextProcessor $textProcessor, Helper $helper) : Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $id,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $id does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        try {
            $decodeText = html_entity_decode($stuff->getText(), ENT_QUOTES, 'utf-8');
            $uniqWords = $textProcessor->getUniqWords($decodeText, $stuff->getLanguage());
            $notLearnedWords = $helper::array_diff_inLowercase($uniqWords, $plWordsRep->findAll(), $plUntranslatableWordsRep->findAll());
            $uniqWordsObj = $textProcessor->getUniqWordsObj($decodeText, $stuff->getLanguage());
            $notLearnedWordsObj = array_intersect($uniqWordsObj, $notLearnedWords);
        }catch (\Exception $e) {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('show_all_stuffs');
        }

        if (count($notLearnedWordsObj) === 0)
        {
            $this->addFlash('info', 'All words in this stuff are learned.');
            $this->redirectToRoute('show_all_stuffs');
        }

        return $this->render('stuff/handle.html.twig', [
            'notLearnedWords' => $notLearnedWordsObj,
            'stuff' => $stuff,
        ]);
    }

    /**
     * @Route("/handle/pl/{id}", name="handle_polish_stuff", methods={"POST"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function handlePl(int $id, Request $request) : Response
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->request->get('learnedWords'))
        {
            foreach ($request->request->get('learnedWords') as $learnedWord) {
                $word = new PolishWords();
                $word->setWord($learnedWord);
                $em->persist($word);
            }
            $em->flush();
        }

        if ($request->request->get('untranslatableWords'))
        {
            foreach ($request->request->get('untranslatableWords') as $untranslatableWords) {
                $word = new PolishUntranslatableWords();
                $word->setWord($untranslatableWords);
                $em->persist($word);
            }
            $em->flush();
        }

        return new Response();
    }
}