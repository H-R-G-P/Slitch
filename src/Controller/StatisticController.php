<?php


namespace App\Controller;

use App\Dto\Texts;
use App\Form\TextsType;
use App\Vo\Statistic;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class StatisticController
 * @Route("/stat")
 * @package App\Controller
 */
class StatisticController extends AbstractController
{
    /**
     * @Route("/", name="statistics", methods={"POST", "GET"})
     *
     * @param Request $request
     *
     * @return Response
     */
    public function getStats(Request $request) : Response
    {
        $stats = new Statistic();
        $texts = new Texts();

        $form = $this->createForm(TextsType::class, $texts);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (count($texts) === 0){
                $texts->addText('');
            }elseif (count($texts) > 1){
                $stats->setMatchesAllPerc($texts);
                $stats->setMatchesPerc($texts);
            }
            if (count($texts) > 0){
                $stats->setUniqWordsCount($texts);
                $stats->setRepetition($texts);
            }

            /* do logic */

            $texts->resetKeys();
            $form = $this->createForm(TextsType::class, $texts);

            return $this->render('statistic/page.html.twig', [
                'texts_form' => $form->createView(),
                'stats' => $stats,
            ]);
        }

        return $this->render('statistic/page.html.twig', [
            'texts_form' => $form->createView(),
            'stats' => $stats,
        ]);
    }
}