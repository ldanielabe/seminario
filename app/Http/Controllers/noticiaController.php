<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\noticia;
use App\Semillero;
use Auth;
use Route;
class noticiaController extends Controller {
	public function index() {
		$noticia = noticia::all();
		$semillero = semillero::all();
		return view("profesor.noticia.index", ["noticia" => $noticia, "semillero" => $semillero]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$noticia = new noticia;
		$user = Auth::guard('profesor')->user()->idSemillero;
		$semillero = semillero::where('id',$user)->first();
		return view("profesor.noticia.create", ["noticia" => $noticia, "semillero" => $semillero]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$p = new noticia;

		$p->descripcion = $request->descripcion;
		$p->idSemillero = $request->idSemillero;

		if ($p->save()) {
			return redirect("/noticia");
		} else {
			return view("profesor.noticia.create", ["noticia" => $p]);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$noticia = noticia::find($id);
		
		return view('profesor.noticia.show', ['noticia' => $noticia]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$noticia = noticia::find($id); //SELECT * FROM Productos WHERE id = $id
		$user = Auth::guard('profesor')->user()->idSemillero;
		$semillero = semillero::where('id',$user)->first();
		return view("profesor.noticia.edit", ["noticia" => $noticia,"semillero" => $semillero]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$noticia = noticia::find($id);
		$noticia->descripcion = $request->descripcion;
		$noticia->idSemillero = $request->idSemillero;

		if ($noticia->save()) {
			return redirect("/noticia");
		} else {
			return view("profesor.noticia.edit", ["noticia" => $noticia]);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		noticia::destroy($id);
		return redirect('/noticia');
	}
}
