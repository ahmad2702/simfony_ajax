<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{

    /**
     * @Route("/search", name="search_user")
     * @Template("search.php.twig")
     */
    public function searchUser() {

        return ['vorschlag' => ""];

    }



    /**
     * @Route("/go", name="go")
     */
    public function searchStart(EntityManagerInterface $doctrine, Request $request) {
        // POST

        $request_user = $request->get('name');

        $find_user = $doctrine->getRepository('App:User')->findBy(['username' => strtolower($request_user)]);

        if (sizeof($find_user)!=0){
            return $this->redirect("/profile-".$request_user);
        }else{
            return $this->redirect("/404");
        }

    }



    /**
     * @Route("/search/{name}", name="get")
     *
     */
    public function searchGet(EntityManagerInterface $doctrine, $name) {
        // GET

        $name = preg_replace ( '/[^a-z0-9 ]/i', '', $name );
        $name = strtolower($name);

        if(strlen($name)<3){
            return new Response(json_encode(array(

            )));
        }





        $users = $doctrine->getRepository('App:User')->findAll();

        $user_found_list = array();

        foreach ($users as $user) {
            $username = $user->getUsername();

            if (strpos($username, $name) !== false) {
                array_push($user_found_list,array(
                    'user' => $user->getUsername(),
                ));
            }
        }

        if (sizeof($user_found_list)!=0){
            $user_found_list_output = array_slice($user_found_list, 0, 10);

            return new Response(json_encode(array(
                $user_found_list_output
            )));


        }else{

            return new Response(json_encode(array(

            )));

        }

    }

    /**
     * @Route("/404", name="not_found")
     * @Template("404.php.twig")
     */
    public function notFound() {

    }


    /**
     * @Route("/ajax", name="ajax_search")
     */
    public function ajaxSearch(Request $request) {
        //return ['message' => "Funktioniert!"];
        $request_user = $request->get('search');

        return $this->redirect("/search/".$request_user);
    }





}