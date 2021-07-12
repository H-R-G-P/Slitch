<?php


namespace App\Controller;

use App\Entity\Languages;
use App\Entity\Stuff;
use App\Form\StuffType;
use App\Repository\StuffRepository;
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
    public function add(Request $request) : Response
    {
        $stuff = new Stuff();
        $form = $this->createForm(StuffType::class, $stuff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set missing parameters
            try {
                $textInfo = (new TextProcessor())->getInfo($stuff->getText(), $stuff->getLanguage());
            }catch (\Exception $e) {
                return new Response($e->getMessage());
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
    public function edit(int $id, Request $request, StuffRepository $stuffRep) : Response
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
                    $textInfo = (new TextProcessor())->getInfo($stuff->getText(), $stuff->getLanguage());
                }catch (\Exception $e) {
                    return new Response($e->getMessage());
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
     * @Route("/handle/{id}", name="handle_stuff_form", methods={"GET"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function handlePage(int $id) : Response
    {

    }

    /**
     * @Route("/handle/{id}", name="handle_stuff", methods={"POST"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function handle(int $id) : Response
    {

    }
}