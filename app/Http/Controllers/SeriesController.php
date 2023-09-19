<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    protected $series = ['Only Murders in the building',
                        'Chicago Fire',
                        'Chicago PD'];

    public function index(Request $request)
    {       
        return response('Hello World - Series Controller',200);
    }

    public function listAll(Request $request)
    {       
        return view('list',['title'=> 'Lista de series que assisto','series' => $this->series]); 
    }

    public function list(Request $request)
    {       
        $serieIndex = $request->id;
        $includeSerie = $request->include ? false : true;
        
        if(!$includeSerie){
            unset($this->series[$serieIndex]);
        }

        return view('list',['title'=> 'Lista de series que assisto','series' => $this->series]); 
    }
}
