<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\miembro;
use App\noticia;
use App\Semillero;
use Auth;
use Route;
class miembroController extends Controller {

	public function inicio(){
		$semillero=Semillero::all(); 
		$noticia = noticia::all();
        return view("index", ["semillero"=>$semillero,"noticia" => $noticia]); 
	}
	
	public function index() {
		$semillero = Semillero::all();
		
		$miembro = miembro::all();
		//$user = Auth::guard('profesor')->user()->idSemillero;
		//$semillero = semillero::where('id',$user);
		//$miembro = miembro::where('id',$user);
		return view("profesor.miembro.index", ["miembro" => $miembro,"semillero" => $semillero]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$miembro = new miembro;
		$user = Auth::guard('profesor')->user()->idSemillero;
		$semillero = semillero::where('id',$user)->first();
		return view("profesor.miembro.create", ["miembro" => $miembro, "semillero" => $semillero]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$p = new miembro;

		$p->nombre = $request->nombre;
		$p->codigo = $request->codigo;
		$p->idSemillero = $request->idSemillero;

		if ($p->save()) {
			return redirect("/miembro");
		} else {
			return view("profesor.miembro.create", ["miembro" => $p]);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$miembro = miembro::find($id);
		return view('profesor.miembro.show', ['miembro' => $miembro]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$miembro = miembro::find($id); //SELECT * FROM Productos WHERE id = $id
		$semillero = Semillero::all();
		//$user = Auth::guard('profesor')->user()->idSemillero;
		//$semillero = semillero::where('id',$user)->first();
		return view("profesor.miembro.edit", ["miembro" => $miembro, "semillero" => $semillero]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$miembro = miembro::find($id);
		$miembro->nombre = $request->nombre;
		$miembro->codigo = $request->codigo;
		$miembro->idSemillero = $request->idSemillero;

		if ($miembro->save()) {
			return redirect("/miembro");
		} else {
			return view("profesor.miembro.edit", ["miembro" => $miembro]);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		miembro::destroy($id);
		return redirect('/miembro');
	}
}
