<?php


namespace App\Controller;

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
     * @Route("/add", name="add_stuff", methods={"POST"})
     */
    public function add() : Response
    {

    }

    /**
     * @Route("/add", name="stuff_add_form", methods={"GET"})
     */
    public function formAdd() : Response
    {

    }

    /**
     * @Route("/delete/{id}", name="delete_stuff", methods={"GET"})
     * @param int $id
     * @return Response
     */
    public function delete(int $id) : Response
    {

    }

    /**
     * @Route("/show/{id}", name="show_stuff", methods={"GET"})
     * @param int $id
     * @return Response
     */
    public function show(int $id) : Response
    {

    }

    /**
     * @Route("/edit/{id}", name="edit_stuff", methods={"POST"})
     * @param int $id
     * @return Response
     */
    public function edit(int $id) : Response
    {

    }

    /**
     * @Route("/edit/{id}", name="stuff_edit_form", methods={"GET"})
     * @param int $id
     * @return Response
     */
    public function formEdit(int $id) : Response
    {

    }

    /**
     * @Route("/handle/{id}", name="page_handle_stuff", methods={"GET"})
     * @param int $id
     * @return Response
     */
    public function handlePage(int $id) : Response
    {

    }

    /**
     * @Route("/handle/{id}", name="handle_stuff", methods={"POST"})
     * @param int $id
     * @return Response
     */
    public function handle(int $id) : Response
    {

    }
}