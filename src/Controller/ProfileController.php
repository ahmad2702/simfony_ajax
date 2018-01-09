<?php
namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends Controller
{
    private $error_datum = "";
    private $error_strecke = "";
    private $error_zeit = "";

    private $datum = "";
    private $strecke = "";
    private $zeit = "";

    private $last;
    private $first;

    /**
     * @Route("profile-{name}", name="profile")
     * @Template("profile.php.twig")
     */
    public function profile(EntityManagerInterface $doctrine, $name) {
        $find_user = $doctrine->getRepository('App:User')->findBy(['username' => $name]);

        $all = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => $name], ['day' => 'DESC']);

        if(sizeof($find_user)!=0 and sizeof($all)!=0) {

            $this->last = $all[0];
            $this->first = $all[sizeof($all) - 1];


            $now = strtotime(date('Y-m-d') . ' 00:00:00');
            return [
                'lines' => $all, 'profileName' => $name, 'first' => $this->first, 'last' => $this->last,
                'datum' => $this->datum, 'strecke' => $this->strecke, 'zeit' => $this->zeit,

                'error_datum' => $this->error_datum, 'error_strecke' => $this->error_strecke, 'error_zeit' => $this->error_zeit,

                'profile_error' => "",

                'no_data' => "",

                'user_name'=> $find_user,

                'anzahl' => sizeof($all), 'now' => $now
            ];

        }elseif(sizeof($find_user)!=0 and sizeof($all)==0){

            $now = strtotime(date('Y-m-d') . ' 00:00:00');
            return [
                'lines' => $all, 'profileName' => $name, 'first' => $this->first, 'last' => $this->last,
                'datum' => $this->datum, 'strecke' => $this->strecke, 'zeit' => $this->zeit,

                'error_datum' => $this->error_datum, 'error_strecke' => $this->error_strecke, 'error_zeit' => $this->error_zeit,

                'profile_error' => "",

                'no_data' => "",

                'user_name'=> $find_user,

                'anzahl' => sizeof($all), 'now' => $now
            ];

        }else{

            $now = strtotime(date('Y-m-d').' 00:00:00');
            return [
                'lines' => $all, 'profileName' => $name, 'first'=> $this->first, 'last' => $this->last,
                'datum' => $this->datum, 'strecke' => $this->strecke, 'zeit' => $this->zeit,

                'error_datum'=>$this->error_datum, 'error_strecke'=>$this->error_strecke, 'error_zeit'=>$this->error_zeit,

                'profile_error' => "no_found",

                'no_data' => "",

                'user_name'=> $find_user,

                'anzahl'=> sizeof($all), 'now' => $now
            ];

        }





    }







}