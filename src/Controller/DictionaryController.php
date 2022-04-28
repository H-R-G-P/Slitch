<?php

namespace App\Controller;

use App\Dto\TypeOfSortingDTO;
use App\Repository\StuffRepository;
use App\Service\DictionaryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DictionaryController extends AbstractController
{
    #[Route('/dictionary/{stuffId}', name: 'dictionary')]
    public function index(int $stuffId, StuffRepository $stuffRep, Request $request, TypeOfSortingDTO $typeOfSorting, DictionaryService $dictionaryService): Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $stuffId,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $stuffId does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        if ($request->query->get('sortBy') === 'quantityRepeats') {
            $typeOfSorting->setByQuantityRepeats();
        }else{
            $typeOfSorting->setByTextOrder();
        }

        $sortedWords = $dictionaryService->getSortedWords($stuff, $typeOfSorting);

        return $this->render('dictionary/index.html.twig', [
            'pairs_of_words' => $sortedWords,
            'stuff' => $stuff,
            'selected_sorting' => $request->query->get('sortBy'),
        ]);
    }

    #[Route('/dictionary/create/{stuffId}', name: 'create_dictionary')]
    public function create(int $stuffId, StuffRepository $stuffRep): Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $stuffId,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $stuffId does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        return new Response("Create new dictionary");
    }

    #[Route('/dictionary/show-pdf/{stuffId}', name: 'show_dictionary_pdf')]
    public function showPdf()
    {

    }

    #[Route('/dictionary/edit/{stuffId}', name: 'edit_dictionary')]
    public function edit()
    {

    }
}
