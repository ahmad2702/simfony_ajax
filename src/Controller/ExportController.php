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


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use PDO;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



class ExportController extends Controller
{

    /**
     * @Route("/export/{username}/{fileName}.{_format}", requirements={"_format": "json|csv"})
     * @IsGranted("ROLE_USER")
     */
    public function exportAsFile(User $user, Request $request, EntityManagerInterface $doctrine, $username, $fileName,$_format) {

        $data=[];


        $conn = $this->get('database_connection');
        $stmt =  $conn->prepare("select * from tracker_line WHERE username =:domain_name" );
        $stmt->bindValue(':domain_name', $username);
        $stmt->execute();
        $data['form'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($_format==="json"){
            $response = new Response();
            $response->setContent(json_encode( $data['form'], JSON_PRETTY_PRINT ));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }elseif ($_format==="csv"){

            $output = fopen("diary.csv","w");


            foreach (  $data['form'] as $file) {
                $result = [];
                array_walk_recursive($file, function($item) use (&$result) {
                    $result[] = $item;
                });
                fputcsv($output, $result);
            }

            $response = new BinaryFileResponse("diary.csv");
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);

            return $response;


        }


        return $this->redirect('/404');


    }





}