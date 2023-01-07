<?php

namespace App\Http\Controllers;

use App\Models\Courrier;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function create()
    {

         request()->validate([
            'exp'=>['required'],
            'objet'=>['required'],
            'codeC'=>['required'],

         ] );
$cour=Courrier::create([
            'expediteur'=>request('exp'),
            'objet'=>request('objet'),
            'code'=>request('codeC'),
]);
#dd($cour->code);

return redirect('/pdf') ;
    }
}
