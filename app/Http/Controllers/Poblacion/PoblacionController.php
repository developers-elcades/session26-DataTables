<?php

namespace Market\Http\Controllers\Poblacion;

use Illuminate\Http\Request;
use Market\Http\Requests;
use Market\Http\Controllers\Controller;
use Market\Models\Poblacion\CallesPoblaciones;




class PoblacionController extends Controller
{
    //

	public function index()
	{

		$CallesPoblaciones = CallesPoblaciones::all()->take(10);
        return View('poblacion/index')->with('CallesPoblaciones',$CallesPoblaciones);

	}

}
