<?php

namespace App\Controller;
// se importa las librerias necesarias
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

// se extiende de abstractController para adquirir metodos
class randNumController extends AbstractController{

     /**
     * @Route("/random/by-month/{year}",  methods={"GET"})
     */
       public function randMonth($year){
           // retorna un valor entero random entre 1 y 1000 para cada mes del año
           if($year>0 && $year%1==0) {
                $arr= [];
                for($i=1;$i<=12;$i++){
                    array_unshift($arr,rand(1,1000));
                }
                return new JsonResponse(["monthValue" => $arr]);
           }else{
               return new JsonResponse(["Error" => -1]);
           }

    }

     /**
     * @Route("/random/by-day/{month}", methods={"GET"})
     */
    public function randDay($month){
        //retorna un valor entero random entre 500 y 800 para cada día del mes
        if($month>=1 && $month<=12 && $month%1==0) {
            $arr= [];
            for($i=1;$i<=30;$i++){
                array_unshift($arr,rand(500,800));
            }
            
            return new JsonResponse(["dayValue" => $arr]);

       }else{
           
            return new JsonResponse(["Error" => -1]);

    }

}

    
  
}

?>