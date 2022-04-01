<?php

namespace Gaurav\LaravelEnv\controllers;

use App\Http\Controllers\Controller;

class LaravelEnvController extends Controller
{
    public $envContainer = [];
    private $tempContainer = [];
    public function index()
    {
        $myfile = fopen(__DIR__."../../../../../.env", "r") or die(".env file is missing in your project.");
        while(!feof($myfile)) {
            $temp = explode('=', fgets($myfile));
            array_push($this->tempContainer, $temp);
        }
        fclose($myfile);
        $this->envContainer = $this->dataClean($this->tempContainer);
        return view('laravelEnv::laravelEnv', ['envContainer' => $this->envContainer]);
    }
    
    private function dataClean($payload)
    {
        foreach ($payload as $key => $value) {
            if (sizeof($value) < 2) {
                unset($payload[$key]);
            }
        }
        return $payload;
    }
    
    
}
