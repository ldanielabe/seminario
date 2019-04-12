<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semillero;
use App\proyecto;
class SemillerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        $semillero=Semillero::all(); 
        return view("semillero.index", ["semillero"=>$semillero]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semillero=new Semillero;
        return view("semillero.create", ["semillero"=>$semillero]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$consulta= null;
         $consulta= Semillero::where('nombre',$request->nombre)->first();

        if ($consulta == null) {
        $s = new Semillero;

		$s->nombre=$request->nombre;
		$s->mision=$request->mision;
		$s->vision=$request->vision;
		$s->objetivos=$request->objetivos;
		$s->lineasInvestigacion=$request->lineasInvestigacion;
        $s->detalles=$request->detalles;
        $s->juego=$request->juego;
        if($s->save()){
            return redirect("/semilleros");
        }else{
            return view("semillero.create",["semillero"=>$s]);
        }
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p=proyecto::all(); 
         $semillero = Semillero::find($id);
        return view('semillero.show',['semillero'=>$semillero,'proyecto'=>$p]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semillero = Semillero::find($id); //SELECT * FROM Productos WHERE id = $id
        return view("semillero.edit",["semillero"=>$semillero]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $semillero = Semillero::find($id); 
        $semillero->nombre=$request->nombre;
		$semillero->mision=$request->mision;
		$semillero->vision=$request->vision;
		$semillero->objetivos=$request->objetivos;
		$semillero->lineasInvestigacion=$request->lineasInvestigacion;
        $semillero->detalles=$request->detalles;
        $semillero->juego=$request->juego;
        if($semillero->save()){
            return redirect("/semilleros");
        }else{
            return view("semillero.edit",["semillero"=>$semillero]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Semillero::destroy($id); 
        return redirect('/semilleros');
    }
}
