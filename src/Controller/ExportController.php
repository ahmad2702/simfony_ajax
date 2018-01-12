<?php
/**
 * Created by PhpStorm.
 * User: akhmad.sadullaev
 * Date: 10.01.18
 * Time: 16:24
 */

namespace App\Controller;

use App\Entity\User;
use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ExportController extends Controller
{

    /**
     * @Route("/all/gesamtUebersicht", name="all_data")
     * @Template("search.php.twig")
     */
    public function exportAllAsJson(EntityManagerInterface $doctrine) {

        $entries = array();
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('App\Entity\User')->findAll();

        foreach ($users as $user) {
            $allUserEntries = $em->getRepository('App\Entity\TrackerLine')
                ->findBy(['username' =>$user->getUsername()]);

            $distance = 0;
            foreach ($allUserEntries as $entry) {
                $distance += $entry->getStrecke();
            }
            $totalDates = count($allUserEntries);

            array_push($entries,array(
                'user' => $user->getUsername(),
                'distance' => $distance,
                'totalDates' => $totalDates));
        }


        $response = new Response();
        $response->setContent(json_encode(array(
            'data_gesamtUebersich' => $entries,
        )));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }





}