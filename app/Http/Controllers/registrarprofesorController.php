<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profesor;
use App\Semillero;
class registrarprofesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        $s=Semillero::all(); 
        $profesor=profesor::all(); 
        return view("profesor.index", ["semillero"=>$s,"profesor"=>$profesor]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s=Semillero::all(); 
        $profesor=new profesor;
        return view("profesor.create", ["semillero"=>$s,"profesor"=>$profesor]); 
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
        $s=Semillero::all(); 
         $consulta= profesor::where('name',$request->name)->first();

        if ($consulta == null) {
        $profesor = new profesor;

		$profesor->name=$request->name;
		$profesor->password=bcrypt($request->input('password'));
		$profesor->idSemillero=$request->idSemillero;
		$profesor->email=$request->email;
		
        if($profesor->save()){
            return redirect("/profesor");
        }else{
            return view("profesor.create",["profesor"=>$profesor,"semillero"=>$s]);
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
         $profesor = profesor::find($id);
        return view('profesor.show',['profesor'=>$profesor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s=Semillero::all(); 
        $profesor = profesor::find($id); //SELECT * FROM Productos WHERE id = $id
        return view("profesor.edit",["profesor"=>$profesor,"semillero"=>$s]);
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
        $profesor = profesor::find($id); 
        $profesor->name=$request->name;
		$profesor->password=bcrypt($request->input('password'));
		$profesor->idSemillero=$request->idSemillero;
		$profesor->email=$request->email;
        if($profesor->save()){
            return redirect("/profesor");
        }else{
            return view("profesor.edit",["profesor"=>$profesor]);
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
         profesor::destroy($id); 
        return redirect('/profesor');
    }
}
