<?php


namespace App\Controller;

use App\Entity\Stuff;
use App\Form\StuffType;
use App\Repository\LearnedWordsRepository;
use App\Repository\StuffRepository;
use App\Repository\UntranslatableWordsRepository;
use App\Service\StuffControllerService;
use App\Service\TextProcessor;
use DateTime;
use Exception;
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
                // TODO Replace array to Data Transfer Object
                $textInfo = $textProcessor->getInfo($stuff->getText(), $stuff->getLanguage());
            }catch (Exception $e) {
                $this->addFlash('danger', $e->getMessage());
                return $this->redirectToRoute('show_all_stuffs');
            }
            $stuff->setWords($textInfo['string_of_words']);
            $stuff->setWordCount($textInfo['word_count']);
            $stuff->setUniqWordCount($textInfo['uniq_word_count']);
            $stuff->setAddedAt(new DateTime());
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
        }catch (Exception $e) {
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
                    // TODO Replace array to Data Transfer Object
                    $textInfo = $textProcessor->getInfo($stuff->getText(), $stuff->getLanguage());
                }catch (Exception $e) {
                    $this->addFlash('danger', $e->getMessage());
                    return $this->redirectToRoute('show_all_stuffs');
                }
                $stuff->setWords($textInfo['string_of_words']);
                $stuff->setWordCount($textInfo['word_count']);
                $stuff->setUniqWordCount($textInfo['uniq_word_count']);
                $stuff->setAddedAt(new DateTime());
                $stuff->setUser($this->getUser());

                $em = $this->getDoctrine()->getManager();
                try {
                    $em->flush();
                    $this->addFlash('success', 'Stuff edited');
                    return $this->redirectToRoute('show_all_stuffs');
                }catch (Exception $e) {
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
     * @Route("/handle/{id}", name="handle_stuff_form", methods={"GET"}, requirements={"id"="%app.id_regex%"})
     *
     * @param int $id
     * @param StuffRepository $stuffRep
     * @param LearnedWordsRepository $lwr
     * @param UntranslatableWordsRepository $uwr
     *
     * @return Response
     */
    public function handleForm(int $id, StuffRepository $stuffRep, LearnedWordsRepository $lwr, UntranslatableWordsRepository $uwr) : Response
    {
        $service = new StuffControllerService();

        $stuff = $stuffRep->findOneBy([
            'id' => $id,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $id does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        try {
            $notLearnedWords = $service->getNotLearnedWords($stuff, $lwr, $uwr);
        }catch (Exception $e) {
            $this->addFlash('danger', $e->getMessage());
            return $this->redirectToRoute('show_all_stuffs');
        }

        if (count($notLearnedWords) === 0)
        {
            $this->addFlash('info', 'All words in this stuff are learned.');
            $this->redirectToRoute('show_all_stuffs');
        }

        return $this->render('stuff/handle.html.twig', [
            'notLearnedWords' => $notLearnedWords,
            'stuff' => $stuff,
        ]);
    }

    /**
     * @Route("/handle/{id}", name="handle_stuff", methods={"POST"}, requirements={"id"="%app.id_regex%"})
     *
     * @param int $id
     * @param Request $request
     *
     * @return Response
     */
    public function handle(int $id, Request $request) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $stuffRepository = $this->getDoctrine()->getRepository(Stuff::class);
        $service = new StuffControllerService();

        $service->addWordsToDb($request, $em, $id, $stuffRepository);

        return new Response();
    }
}