<?php

namespace App\Controller;

use App\Repository\StuffRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DictionaryController extends AbstractController
{
    #[Route('/dictionary/{stuffId}', name: 'dictionary')]
    public function index(int $stuffId, StuffRepository $stuffRep): Response
    {
        $stuff = $stuffRep->findOneBy([
            'id' => $stuffId,
        ]);
        if (!$stuff) {
            $this->addFlash('info', "Stuff with id: $stuffId does not exist");
            return $this->redirectToRoute('show_all_stuffs');
        }

        $dictionary = $stuff->getdictionary();

        /*if ($dictionary === null){
            $dictServ = new DictionaryService();

            $dictionary = $dictServ->create();
        }*/

        return $this->render('dictionary/index.html.twig', [
            'dictionary' => $dictionary,
            'stuff' => $stuff,
        ]);
    }
}
