<?php
namespace App\Controller;

use App\Entity\TrackerLine;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{


    /**
     * @Route("/", name="start")
     * @Template("gesamt.php.twig")
     */
    public function index(EntityManagerInterface $doctrine) {

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


        return ['lines' => $entries];

    }



}