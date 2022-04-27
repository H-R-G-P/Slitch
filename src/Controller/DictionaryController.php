<?php

namespace App\Controller;

use App\Entity\PairOfWords;
use App\Repository\StuffRepository;
use App\Service\DictionaryService;
use App\Service\TextProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DictionaryController extends AbstractController
{
    #[Route('/dictionary/{stuffId}', name: 'dictionary')]
    public function index(int $stuffId, StuffRepository $stuffRep, Request $request, TextProcessor $textProcessor, DictionaryService $dictServ): Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $stuffId,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $stuffId does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        $pairsOfWordsFromDict = $stuff->getPairsOfWords();
        $sortedWordsFromText = $textProcessor->getUniqWords(mb_strtolower($stuff->getText()), $stuff->getLanguage());

        if($pairsOfWordsFromDict->count() === 0){
            foreach ($sortedWordsFromText as $uniqWord) {
                $pairsOfWordsFromDict->add(new PairOfWords($uniqWord, $stuff));
            }

            $originalWordsFromDict = $sortedWordsFromText;
        }else {
            $originalWordsFromDict = [];
            foreach ($pairsOfWordsFromDict as $pair){
                if($pair !== null){
                    $originalWordsFromDict[] = $pair->getOriginal();
                }
            }
        }

        $usersWords = array_diff($originalWordsFromDict, $sortedWordsFromText);

        if ($request->query->get('sortBy') === 'quantityRepeats'){
            $sortedWordsFromText = $dictServ->sortByQuantityRepeats($stuff);

            $textWords = array_intersect($sortedWordsFromText, $originalWordsFromDict);
        }else{
            $textWords = array_intersect($sortedWordsFromText, $originalWordsFromDict);
        }

        $sortedWords = array_merge($textWords, $usersWords);
        foreach ($pairsOfWordsFromDict as $pair) {
            $key = array_search($pair->getOriginal(), $sortedWords);
            if ($key !== false){
                $sortedWords[$key] = $pair;
            }
        }

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
