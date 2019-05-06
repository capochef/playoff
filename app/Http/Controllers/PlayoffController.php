<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayoffController extends Controller
{
    public function index()
    {
        $classifica = array();
        $prime = array();
        $seconde = array();
        $terze = array();

        $geo = array(
            'SIRBONS Cagliari' => '0',
            'CRUSADERS Cagliari' => '1',
            'THUNDERS Trento' => '2',
            'DRAGHI Udine' => '3',
            'LEONI Basiliano' => '4',
            '29ERS Alto Livenza' => '5',
            'MEXICANS Pederobba' => '6',
            'MULI Trieste' => '7',
            'FROGS Legnano' => '8',
            'HURRICANES Vicenza' => '9',
            'RAMS Milano' => '10',
            'LANCIERI Novara' => '11',
            'REDSKINS Verona' => '12',
            'ISLANDERS Venezia' => '13',
            'BLITZ Balangero' => '14',
            'ALLIGATORS Rovigo' => '15',
            'RAZORBACKS Piemonte' => '16',
            'WOLVERINES Piacenza' => '17',
            'ALFIERI Asti' => '18',
            'VIKINGS Cavallermaggiore' => '19',
            'BUCCANEERS Comacchio' => '20',
            'DOVES Bologna' => '21',
            'CHIEFS Ravenna' => '22',
            'RAVENS Imola' => '23',
            'PREDATORI GdT' => '24',
            'PIRATES Savona' => '25',
            'TITANS Broncos' => '26',
            'ANGELS Pesaro' => '27',
            'RAIDERS West Coast' => '28',
            'TRAPPERS Cecina' => '29',
            'GRIFONI Perugia' => '30',
            'VETERANS Grosseto' => '31',
            'LEGIO XIII Roma' => '32',
            'MINATORI Roma Sud' => '33',
            'FIGHTING DUCKS Roma' => '34',
            'MAD BULLS Barletta' => '35',
            'NAVY SEALS Bari' => '36',
            'BRIGANTI Napoli' => '37',
            '82ERS Napoli' => '38',
            'EAGLES Salerno' => '39',
            'ACHEI Crotone' => '40',
            'ELEPHANTS Catania' => '41',
        );

        $pesi_gironi = array(
            1 => 13.75,
            2 => 20.00,
            3 => 18.25,
            4 => 21.00,
            5 => 18.00,
            6 => 19.75,
            7 => 25.00,
            8 => 21.50,
            9 => 17.40,
            10 => 35.60,
        );

        $standings = file_get_contents('https://www.terzadivisione.com/2019-standings/');
        $standings = explode('<table', $standings);
        $standings = explode('</table>', $standings[1]);
        $standings = explode('GIRONE ', $standings[0]);

        $i = 1;
        unset($standings[0]);

        foreach ($standings as $k1 => $v1) {

            $data = explode('<tr>', $v1);

            $team = explode('</td>', $data[1]);
            $name = explode('>', $team[1]);
            $percentuale = explode('>', $team[5]);
            $percentuale = str_replace(',', '.', $percentuale[1]);

            $prime[$name[1]] = $percentuale*100000-$pesi_gironi[$k1];

            $team = explode('</td>', $data[2]);
            $name = explode('>', $team[1]);
            $percentuale = explode('>', $team[5]);
            $percentuale = str_replace(',', '.', $percentuale[1]);

            $seconde[$name[1]] = $percentuale*100000-$pesi_gironi[$k1];

            $team = explode('</td>', $data[3]);
            $name = explode('>', $team[1]);
            $percentuale = explode('>', $team[5]);
            $percentuale = str_replace(',', '.', $percentuale[1]);

            $terze[$name[1]] = $percentuale*100000-$pesi_gironi[$k1];

        }

        $geo_division = array();

        arsort($prime);
        arsort($seconde);
        arsort($terze);

        foreach ($prime as $key => $value) {
            $geo_division[$key] = $geo[$key];
        }
        foreach ($seconde as $key => $value) {
            $geo_division[$key] = $geo[$key];
        }
        $i = 0;
        foreach ($terze as $key => $value) {
            $i++;
            $geo_division[$key] = $geo[$key];
            if($i > 3)
                break;
        }

        asort($geo_division);

        list($nord, $sud) = array_chunk($geo_division, 12, true);

        $ts_nord = array();
        $ts_sud = array();

        foreach ($prime as $key => $value) {
            if(isset($nord[$key]))
                $ts_nord[] = $key;
            elseif(isset($sud[$key]))
                $ts_sud[] = $key;
        }
        foreach ($seconde as $key => $value) {
            if(isset($nord[$key]))
                $ts_nord[] = $key;
            elseif(isset($sud[$key]))
                $ts_sud[] = $key;
        }
        $i = 0;
        foreach ($terze as $key => $value) {
            $i++;
            if(isset($nord[$key]))
                $ts_nord[] = $key;
            elseif(isset($sud[$key]))
                $ts_sud[] = $key;
            if($i > 3)
                break;
        }
        
        return view('pages.grid', ['nord' => $ts_nord, 'sud' => $ts_sud]);
    }
}
