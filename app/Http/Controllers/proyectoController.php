<?php

namespace App\Http\Controllers;

use App\proyecto;
use App\Semillero;
use Illuminate\Http\Request;
use Auth;
use Route;

class proyectoController extends Controller {
	public function index() {
		$proyecto = proyecto::all();
		$semillero = semillero::all();
		return view("profesor.proyecto.index", ["proyecto" => $proyecto, "semillero" => $semillero]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$proyecto = new proyecto;
		$user = Auth::guard('profesor')->user()->idSemillero;
		$semillero = semillero::where('id',$user)->first();
		return view("profesor.proyecto.create", ["proyecto" => $proyecto, "semillero" => $semillero]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$p = new proyecto;

		$p->descripcion = $request->descripcion;
		$p->idSemillero = $request->idSemillero;

		if ($p->save()) {
			return redirect("/proyecto");
		} else {
			return view("profesor.proyecto.create", ["proyecto" => $p]);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$proyecto = proyecto::find($id);
		
		return view('profesor.proyecto.show', ['proyecto' => $proyecto]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$proyecto = proyecto::find($id); //SELECT * FROM Productos WHERE id = $id
		$user = Auth::guard('profesor')->user()->idSemillero;
		$semillero = semillero::where('id',$user)->first();
		return view("profesor.proyecto.edit", ["proyecto" => $proyecto,"semillero" => $semillero]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$proyecto = proyecto::find($id);
		$proyecto->descripcion = $request->descripcion;
		$proyecto->idSemillero = $request->idSemillero;

		if ($proyecto->save()) {
			return redirect("/proyecto");
		} else {
			return view("profesor.proyecto.edit", ["proyecto" => $proyecto]);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		proyecto::destroy($id);
		return redirect('/proyecto');
	}
}
