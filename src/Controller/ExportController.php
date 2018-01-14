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

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



class ExportController extends Controller
{

    /**
     * @Route("/export/{username}/{fileName}.{_format}", defaults={"_format": "json"}, requirements={"_format": "json|csv"})
     */
    public function exportAsFile(User $user, EntityManagerInterface $doctrine, $username, $fileName,$_format) {

        $data=[];


        $conn = $this->get('database_connection');
        $stmt =  $conn->prepare("select * from tracker_line WHERE username =:domain_name" );
        $stmt->bindValue(':domain_name', $username);
        $stmt->execute();
        $data['form'] = $stmt->fetchAll(PDO::FETCH_ASSOC);



            $response = new Response();
            $response->setContent(json_encode( $data['form'], JSON_PRETTY_PRINT ));
            $response->headers->set('Content-Type', 'application/json');

            $this->generateUrl('blog_show', array('slug' => 'my-blog-post'), UrlGeneratorInterface::ABSOLUTE_URL);
            return $response;



    }





}