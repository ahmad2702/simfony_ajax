<?php

namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Validator\Constraints\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class EditController extends Controller
{

    private $error_datum = "";
    private $error_strecke = "";
    private $error_zeit = "";

    private $datum = "";
    private $strecke = "";
    private $zeit = "";

    /**
     * @Route("profil-{name}", name="add_newData")
     * @Template("profile.php.twig")
     */
    public function add(EntityManagerInterface $doctrine, $name, Request $request, ObjectManager $manager) {

        $current_user = $this->getUser()->getUsername();

        if($current_user == $name){

            $this->datum = $request->get('datum');
            $this->strecke = $request->get('strecke');
            $this->zeit = $request->get('zeit');


            $this->datum = trim(strip_tags($this->datum));
            $this->strecke = trim(strip_tags($this->strecke));
            $this->zeit = trim(strip_tags($this->zeit));

            if(strtotime($this->datum) == FALSE or strtotime($this->datum)>strtotime(date('Y-m-d').' 00:00:00')){
                $this->error_datum = "Error: Datum leer oder nicht korrekt!";
                $this->datum = "";
            }
            if(is_numeric($this->strecke)==FALSE or $this->strecke<0 or $this->strecke==0){
                $this->error_strecke = "Error: Laufstrecke leer oder nicht korrekt!";
                $this->strecke = "";
            }
            if(strtotime("1970-01-01 ".$this->zeit) == FALSE or strtotime("1970-01-01 ".$this->zeit)<0 or strtotime("1970-01-01 ".$this->zeit) ==0){
                $this->error_zeit = "Error: Laufzeit leer oder nicht korrekt!";
                $this->zeit = "";
            }

            $speed_test = 0;
            if(is_numeric($this->strecke)!=FALSE and strtotime("1970-01-01 ".$this->zeit) != FALSE){
                $speed_test = $speed_test + ($this->strecke)/(strtotime("1970-01-01 ".$this->zeit)/3600);

                if($speed_test>40){
                    $this->error_strecke = "Die Geschwindigkeit darf nicht groesser als 40 km/h sein";
                    $this->error_zeit = "Die Geschwindigkeit darf nicht groesser als 40 km/h sein";
                }
            }




            if($this->error_datum=="" and $this->error_strecke == "" and $this->error_zeit == ""){
                //$newData = new TrackerLine($name, new DateTime($this->datum), $this->strecke, strtotime("1970-01-01 ".$this->zeit));
                $newData = new TrackerLine();
                $newData->setUsername($name);
                $newData->setDay(new \DateTime($this->datum));
                $newData->setStrecke($this->strecke);
                $newData->setZeit(strtotime("1970-01-01 ".$this->zeit));

                $manager->persist($newData);

                $manager->flush();

                $all = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => $name], ['day' => 'DESC']);
                return $this->redirect('/profile-'.$name);

            }else{
                $all = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => $name], ['day' => 'DESC']);

                $last = "";
                $first = "";
                if(sizeof($all)!=0){
                    $last= $all[0];
                    $first = $all[sizeof($all)-1];
                }


                $now = strtotime(date('Y-m-d').' 00:00:00');

                return [
                    'lines' => $all, 'profileName' => $name, 'first'=> $first, 'last' => $last,
                    'datum' => $this->datum, 'strecke' => $this->strecke, 'zeit' => $this->zeit,

                    'error_datum'=>$this->error_datum, 'error_strecke'=>$this->error_strecke, 'error_zeit'=>$this->error_zeit,

                    'profile_error' => "",

                    'anzahl'=> sizeof($all), 'now' => $now
                ];
            }

        }else{
            return $this->redirect('/profile-'.$name);
        }




    }


    /**
     * @Route("delete-{name}", name="remove_newData")
     * @Template("profile.php.twig")
     * @IsGranted("ROLE_USER")
     */
    public function remove(EntityManagerInterface $doctrine, $name, Request $request, ObjectManager $manager) {

        $current_user = $this->getUser()->getUsername();

        if($current_user == $name){
            $id = $request->get('id_toRemove');

            $findElement = $doctrine->getRepository('App:TrackerLine')->findOneBy(['id' => $id]);

            if($findElement != null){
                $manager->remove($findElement);
                $manager->flush();
            }

        }

        return $this->redirect('/profile-'.$name);

    }






}