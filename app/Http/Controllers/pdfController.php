<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\User;
class pdfController extends Controller
{
    public function index(){
        $usuarios= User::where('id','<',100)->get();
        //$usuarios= User::get();
        //return view('pdf.users', compact('usuarios'));
        /* */
        $pdf   = PDF::loadView('pdf.users', compact('usuarios'));
        return $pdf->download('user-list.pdf');
        /* */
    }
}
