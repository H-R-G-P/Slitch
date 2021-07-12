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
     * @Route("", name="show_all_stuffs")
     */
    public function index() : Response
    {

    }
    /**
     * @Route("/add", name="add_stuff", methods={"GET", "POST"})
     */
    public function formAdd(Request $request) : Response
    {
        $stuff = new Stuff();
        $form = $this->createForm(StuffType::class, $stuff);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Adding stuff in database
            $stuff->setAddedAt(new \DateTime());

            $stuff->setUser($this->getUser());

            try {
                $handledText = (new TextProcessor())->clean($stuff->getText(), $stuff->getLanguage()->getName());
            }catch (\Exception $e) {
                return new Response($e->getMessage());
            }
            $stuff->setWords($handledText);

            $words = explode(' ', $handledText);
            $stuff->setWordCount(count($words));

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
    public function delete(int $id) : Response
    {

    }

    /**
     * @Route("/show/{id}", name="show_stuff", methods={"GET"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function show(int $id) : Response
    {

    }

    /**
     * @Route("/edit/{id}", name="edit_stuff", methods={"POST"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function edit(int $id) : Response
    {

    }

    /**
     * @Route("/edit/{id}", name="stuff_edit_form", methods={"GET"}, requirements={"id"="%app.id_regex%"})
     * @param int $id
     * @return Response
     */
    public function formEdit(int $id) : Response
    {

    }

    /**
     * @Route("/handle/{id}", name="page_handle_stuff", methods={"GET"}, requirements={"id"="%app.id_regex%"})
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