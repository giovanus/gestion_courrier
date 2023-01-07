<?php

namespace App\Http\Controllers;

use App\Models\Courrier;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
 $a=Courrier::latest()->first();


        $pdf = PDF::loadView('charge', [
            'nom' => $a->expediteur,
            'objet' => $a->objet,
            'code' => $a->code,
            'date' => $a->created_at
        ]);

        return $pdf->download('charge.pdf');
    }
}
