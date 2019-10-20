<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\facades\Response;
use App\User;
class ejemploDatatableController extends Controller
{
    public function index(){
        //$users=User::all();
        return view('datatable.index');
    }
    public function indexAjax(){
        return datatables()->eloquent(User::query())
        ->addColumn('btn', function ($user) {
            return view('datatable.botones', compact('user'));
        })
        //->addColumn('btn','datatable.botones')
		->rawColumns(['btn'])
		->toJson();
    }
    public function show($id)
    {

    }
    public function edit($id)
    {

    }
}
