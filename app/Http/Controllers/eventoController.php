<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evento;
use App\Semillero;
use Auth;
use Route;
class eventoController extends Controller {


		public function index() {
		$evento = evento::all();
		$semillero = semillero::all();
		return view("profesor.evento.index", ["evento" => $evento, "semillero" => $semillero]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$evento = new evento;

		$user = Auth::guard('profesor')->user()->idSemillero;
		$semillero = semillero::where('id',$user)->first();
		
		return view("profesor.evento.create", ["evento" => $evento, "semillero" => $semillero]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$p = new evento;

		$p->descripcion = $request->descripcion;
		$p->idSemillero = $request->idSemillero;

		if ($p->save()) {
			return redirect("/evento");
		} else {
			return view("profesor.evento.create", ["evento" => $p]);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$evento = evento::find($id);
		
		return view('profesor.evento.show', ['evento' => $evento]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$evento = evento::find($id); //SELECT * FROM Productos WHERE id = $id
			$user = Auth::guard('profesor')->user()->idSemillero;
		$semillero = semillero::where('id',$user)->first();
		return view("profesor.evento.edit", ["evento" => $evento,"semillero" => $semillero]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$evento = evento::find($id);
		$evento->descripcion = $request->descripcion;
		$evento->idSemillero = $request->idSemillero;

		if ($evento->save()) {
			return redirect("/evento");
		} else {
			return view("profesor.evento.edit", ["evento" => $evento]);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		evento::destroy($id);
		return redirect('/evento');
	}
}
