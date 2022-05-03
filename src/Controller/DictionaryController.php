<?php

namespace App\Controller;

use App\Dto\TypeOfSortingDTO;
use App\Entity\PairOfWords;
use App\Entity\Stuff;
use App\Repository\PairOfWordsRepository;
use App\Repository\StuffRepository;
use App\Service\DictionaryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DictionaryController extends AbstractController
{
    /**
     * @Route("/dictionary/{stuffId}", name="dictionary", requirements={"stuffId"="%app.id_regex%"})
     *
     * @param int $stuffId
     * @param StuffRepository<Stuff> $stuffRep
     * @param Request $request
     * @param TypeOfSortingDTO $typeOfSorting
     * @param DictionaryService $dictionaryService
     *
     * @return Response
     *
     * @throws \Exception
     */
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

        if($stuff->getPairsOfWords()->count() === 0) {
            $dictionaryService->setDictionaryFromText($stuff, $this->getDoctrine()->getManager());
        }

        $sortedWords = $dictionaryService->getSortedWords($stuff, $typeOfSorting, $stuff->getPairsOfWords());

        return $this->render('dictionary/index.html.twig', [
            'pairs_of_words' => $sortedWords,
            'stuff' => $stuff,
            'selected_sorting' => $request->query->get('sortBy'),
        ]);
    }

    /**
     * @Route("/dictionary/show-pdf/{stuffId}", name="show_dictionary_pdf", requirements={"stuffId"="%app.id_regex%"})
     *
     * @param int $stuffId
     *
     * @return Response
     */
    public function showPdf(int $stuffId): Response
    {
        return new Response('PDF');
    }

    /**
     * @Route("/dictionary/update/orig/{pairId}", name="update_orig_pair_of_words", methods={"PUT"}, requirements={"pairId"="%app.id_regex%"})
     *
     * @param int $pairId
     * @param PairOfWordsRepository<PairOfWords> $pairOfWordsRep
     * @param Request $request
     *
     * @return Response
     */
    public function updateOriginalInPair(int $pairId, PairOfWordsRepository $pairOfWordsRep, Request $request): Response
    {
        $pair = $pairOfWordsRep->findOneBy([
            'id' => $pairId
        ]);
        if (!$pair) {
            return new Response("Pair of words with id: $pairId does not exist");
        }

        $updatedWord = $request->get('orig');

        if ($pair->getOriginal() === $updatedWord) {
            return new Response("");
        }else{
            $em = $this->getDoctrine()->getManager();

            if (trim($updatedWord) === '') {
                $em->remove($pair);
                $em->flush();

                return new Response('refresh');
            }

            $pair->setOriginal($updatedWord);
            $em->flush();

            return new Response("");
        }
    }

    /**
     * @Route("/dictionary/update/trans/{pairId}", name="update_trans_pair_of_words", methods={"PUT"}, requirements={"pairId"="%app.id_regex%"})
     *
     * @param int $pairId
     * @param PairOfWordsRepository<PairOfWords> $pairOfWordsRep
     * @param Request $request
     *
     * @return Response
     */
    public function updateTranslationInPair(int $pairId, PairOfWordsRepository $pairOfWordsRep, Request $request): Response
    {
        $pair = $pairOfWordsRep->findOneBy([
            'id' => $pairId
        ]);
        if (!$pair) {
            return new Response("Pair of words with id: $pairId does not exist");
        }

        $updatedWord = $request->get('trans');

        if ($pair->getTranslation() === $updatedWord) {
            return new Response("");
        }else{
            $em = $this->getDoctrine()->getManager();
            $pair->setTranslation($updatedWord);
            $em->flush();

            return new Response("");
        }
    }

    /**
     * @Route("/dictionary/delete/{pairId}", name="delete_pair_of_words", methods={"DELETE"}), requirements={"pairId"="%app.id_regex%"})
     *
     * @param int $pairId
     * @param PairOfWordsRepository<PairOfWords> $pairOfWordsRep
     *
     * @return Response
     */
    public function deletePair(int $pairId, PairOfWordsRepository $pairOfWordsRep): Response
    {
        $pair = $pairOfWordsRep->findOneBy([
            'id' => $pairId
        ]);
        if (!$pair) {
            return new Response("Pair of words with id: $pairId does not exist");
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($pair);
        $em->flush();

        return new Response("");
    }
}
