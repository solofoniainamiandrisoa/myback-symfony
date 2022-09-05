<?php

namespace App\Controller;

use App\Entity\Action;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

class ActionController extends AbstractController
{
    /**
     * @Route("/action", name="app_action")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ActionController.php',
        ]);
    }

    /**
     * @Route("/action/insert_action", name="insert_action", methods={"POST"})
     */
    public function insert_action(Request $request): Response
    {

        date_default_timezone_set('Indian/Antananarivo');
        $action = new Action();
        $parameter = json_decode($request->getContent(), true);
        //dd($parameters);
        $action->setRefdeb($parameter['refdeb']);
        $action->setDateaction(new \DateTime(('@'.strtotime('now +1'))));
        $action->setTypeaction($parameter['typeaction']);
        $action->setAction($parameter['action']);
        $action->setTel($parameter['tel']);
        $action->setAdresseVoisi($parameter['adressevoisi']);
        $action->setLieu($parameter['lieu']);
        $action->setCr($parameter['cr']);
        $action->setLalt($parameter['lalt']);
        $action->setLon($parameter['lon']);
       
       



        $eme = $this->getDoctrine()->getManager();
        $eme->persist($action);
        $eme->flush();


        return $this->json('action bien inseer');

    }


    /**
     * @Route("/action/fetch_all_api", name="fetch_all_api", methods={"GET"})
     */

    public function fetch_all_api(): Response
    {

    
       
        $do = $this->getDoctrine()->getRepository(Action::class)->findall();
        //dd($data);
        foreach($do as $d){
            $res[] = [

                'refdeb' =>$d->getRefdeb(),
                'dateaction' =>$d->getDateaction(),
                'typeaction' =>$d->getTypeaction(),
                'action' =>$d->getAction(),
                'tel' =>$d->getTel(),
                'adresseVoisi' =>$d->getAdresseVoisi(),
                'lieu' =>$d->getLieu(),
                'cr' =>$d->getCr(),
                'lalt' =>$d->getLalt(),
                'lon' =>$d->getLon(),
                
              
            ];
        }

       return $this->json(
           $res
       );

    }
}
