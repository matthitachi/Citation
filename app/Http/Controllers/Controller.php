<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $style = 'apa';
        $source = 'website';
        session(['style' => $style]);
        session(['source' => $source]);

        return view('pages.website', array('style'=>$style, 'source'=>$source));
    }

    public function ama($source){
        $style = 'ama';
        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }
    public function apa($source){
        $style = 'apa';
        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));;
    }
    public function chicago($source){
        $style = 'chicago';
        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }
    public function mla($source){
        $style = 'mla';

        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }
    public function acs($source){
        $style = 'acs';
        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }
    public function asa($source){
        $style = 'asa';

        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }
    public function ieee($source){
        $style = 'ieee';

        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }
    public function bluebook($source){
        $style = 'bluebook';

        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }
    public function aspa($source){
        $style = 'apsa';

        session(['style' => $style]);
        session(['source' => $source]);

        return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }
     public function havard($source){
         $style = 'harvard';

         session(['style' => $style]);
         session(['source' => $source]);

         return view("pages.{$source}", array('style'=>$style, 'source'=>$source));
    }

    public function cite(){
        $url = 'https://api.citation-api.com/2.1/rest/cite/';

        $data = $_POST;
        $style = $data['style'];
        $source = $data['source'];
        $data_string = json_encode($_POST);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Content-Length: '.strlen($data_string)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);
        if($result->status == 'ok') {
            session(['result' => $result->data]);
        }
        echo json_encode($result);

      //echo $url;
    }

    public function result($source, $style){
        //$style = session('style');
        //$source = session('source');
        return view("pages.result", array('style'=>$style, 'source'=>$source));
    }

}
