<?php

namespace App\Controller;

use App\Repository\StuffRepository;
use App\Service\TextProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DictionaryController extends AbstractController
{
    #[Route('/dictionary/{stuffId}', name: 'dictionary')]
    public function index(int $stuffId, StuffRepository $stuffRep, Request $request, TextProcessor $textProcessor): Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $stuffId,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $stuffId does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        $dictionary = $stuff->getdictionary();
        if ($dictionary === null){
            return $this->redirectToRoute('create_dictionary', ['stuffId' => $stuff->getId()]);
        }

        $uniqWords = $textProcessor->getUniqWords($stuff->getText(), $stuff->getLanguage());
        if(!$pareOfWords = $dictionary->getPareOfWords()){
            $pareOfWords = [];
        }
        $originalWords = [];
        foreach ($pareOfWords as $pare){
            if($pare !== null){
                $originalWords[] = $pare->getOriginal();
            }
        }

        $ownerWords = array_diff($originalWords, $uniqWords);
        $textWords = array_intersect($uniqWords, $originalWords);
        $sortedWords = array_merge($textWords, $ownerWords);
        foreach ($pareOfWords as $pare) {
            $key = array_search($pare->getOriginal(), $sortedWords);
            if ($key !== false){
                $sortedWords[$key] = $pare;
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
}
