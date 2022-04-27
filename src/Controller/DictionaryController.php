<?php

namespace App\Controller;

use App\Repository\StuffRepository;
use App\Service\StatisticService;
use App\Service\TextProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DictionaryController extends AbstractController
{
    #[Route('/dictionary/{stuffId}', name: 'dictionary')]
    public function index(int $stuffId, StuffRepository $stuffRep, Request $request, TextProcessor $textProcessor, StatisticService $statServ): Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $stuffId,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $stuffId does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        $pairsOfWords = $stuff->getPairsOfWords();

        /*======== START SORTING  ========*/
        $uniqWords = $textProcessor->getUniqWords(mb_strtolower($stuff->getText()), $stuff->getLanguage());
        if($pairsOfWords->count() === 0){
            $pairsOfWords = [];
        }
        $originalWords = [];
        foreach ($pairsOfWords as $pair){
            if($pair !== null){
                $originalWords[] = $pair->getOriginal();
            }
        }

        $ownerWords = array_diff($originalWords, $uniqWords);
        if ($request->query->get('sortBy') === 'quantityRepeats'){
            $words = $textProcessor->getWords(mb_strtolower($stuff->getText()), $stuff->getLanguage());
            $wordsRepeats = $statServ->countRepeats($words);
            arsort($wordsRepeats, SORT_NUMERIC);
            $uniqWords = [];
            foreach ($wordsRepeats as $word => $repeats) {
                $uniqWords[] = $word;
            }
            $textWords = array_intersect($uniqWords, $originalWords);
        }else{
            $textWords = array_intersect($uniqWords, $originalWords);
        }

        $sortedWords = array_merge($textWords, $ownerWords);
        foreach ($pairsOfWords as $pair) {
            $key = array_search($pair->getOriginal(), $sortedWords);
            if ($key !== false){
                $sortedWords[$key] = $pair;
            }
        }
        /*======== END SORTING  ========*/
//        TODO: remove comments above and move code to somewhere

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
