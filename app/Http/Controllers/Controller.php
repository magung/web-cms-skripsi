<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $url;
    public function __construct()
    {
        if(config('app.env') === 'production') {
            $this->url   = 'http://localhost:8000';
        }else{
            $this->url   = 'http://localhost:8000';
        }
    }

    public function curl($path, $type ,$data = array(), $urlCni = false){
    	$url = $this->url.$path;
    	if ($type == 'POST') {
    		$response = Http::post($url, $data);            
    	}else{
    		$response = Http::get($url);
    	}
    	return $response->json();
    }
}
