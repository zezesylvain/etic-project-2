<?php

namespace App\Http\Controllers;

use App\Models\Actualite;

//use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function about(){

        //$data1 = Actualite::get()->toArray();
        $data = Actualite::with('auteur')
                    ->get()->toArray();
        //dd($data, $data1);
        return view('about', [
                                'nom' => "ZEZE",
                                'prenom' => 'Sylvain',
                                'donneesActualite' => $data
                            ]);
    }

}
