<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getData(){
        // VARIABILI PER EFFETTUARE LA RICHIESTA ALL'ENDPOINT GOOGLE
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?';
        $destination = 'destinations=';
        $destinationAddress = '45.68840596879788, 9.66026932466043';

        $origin = '&origins=';
        $originAddress = '45.662006649894195, 9.678898482331485';

        //$origin = '&origins='.'MM6H+QH%20Azzano%20San%20Paolo%20Provincia%20di%20Bergamo';


        //$departure_origin = trim($origin, '%');

        //Faccio la chiamata all'endpoint Google per receuperare i dati
        $result = Http::get($url.$destination.$destinationAddress.$origin.$originAddress.$api_key)['rows'];

        // // Creo la risposta da inviare al frontEnd in un array
         $response = array(
            'success' => true,
            'result' => $result,
            'origins' => $originAddress,
            'destinations' => $destinationAddress
         );
        // // Ritorno la risposta in un formato JSON
        return response()->json($response);
 
    }
    public function home(){

        return view('home');
        
    }
   
}
