<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Vereador;

class VereadorController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vereadores = Vereador::paginate(10);

        return view('admin.vereador.index', [
            'vereadores' =>$vereadores

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.vereador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'broken',
            'description',
            'body'
           
        ]);
        $validator = Validator::make($data,[
            'name' => 'required|string|max:100',
            'broken' => 'required|string|max:100',
            'description' => 'required|string|max:250',
            'body' => 'string'
            
        ]);

            if($validator->fails()){
            return redirect()->route('vereador.create')
            ->withErrors($validator)
            ->withInput();
            }
        
            $vereador = new Vereador;

            $vereador->name = $data['name'];
            $vereador->broken = $data['broken'];
            $vereador->description = $data['description'];
            $vereador->body = $data['body'];

            $vereador->save();

            return redirect()->route('vereador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vereador = Vereador::find($id);

        if($vereador){
            return view('admin.vereador.edit',[
                'vereador' => $vereador
            ]);
        }
       return redirect()->route('vereador.index');
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
        $vereador = Vereador::find($id);

        if($vereador){
 
         $data  = $request->only([
            'name',
            'broken',
            'description',
            'body'
         ]);

            if($vereador['name'] !== $data['name']){
                $validator = Validator::make($data,[
                    'name' => 'required|string|max:100',
                    'broken' => 'required|string|max:100',
                    'description' => 'required|string|max:250',
                    'body' => 'string'
                ]);
            }else{
                $validator = Validator::make($data,[
                    'name' => 'required|string|max:100',
                    'broken' => 'required|string|max:100',
                    'description' => 'required|string|max:250',
                    'body' => 'string'
                ]);
            }

            if($validator->fails()){

                return redirect()->route('vereador.edit',[
                    'vereador' => $id
                ])
                ->withErrors($validator)
                ->withInput();
                }
 
                $vereador->name = $data['name'];
                $vereador->broken = $data['broken'];
                $vereador->description = $data['description'];
                $vereador->body = $data['body'];

         $vereador->save();
 
     }
      return redirect()->route('vereador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vereador = Vereador::find($id);
        $vereador->delete();

        return redirect()->route('vereador.index');
        }
}
