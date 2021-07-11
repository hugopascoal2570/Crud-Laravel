<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Leis;
use App\Page;


class LeisController extends Controller
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
        $leis = Leis::paginate(10);

        return view('admin.leis.index', [
            'leis' =>$leis

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.leis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //pegando os dados dos arquivos e verificando se ele é válido
    if($request->file('archive')->isValid()){

        $data = $request->only([
            'number',
            'description',
            'year',
            'data_publication',
            'archive'
            
           
        ]);
        $validator = Validator::make($data,[
            'number' => 'required|int',
            'description' => 'required|string|max:250',
            'year' => 'required|int',
            'data_publication' => 'required|date',
            'archive' => 'required'
            
        ]);

            if($validator->fails()){
            return redirect()->route('leis.create')
            ->withErrors($validator)
            ->withInput();
            }

            $leis = new Leis;

            $leis->number = $data['number'];
            $leis->description = $data['description'];
            $leis->year = $data['year'];
            $leis->data_publication = $data['data_publication'];
            $leis->archive = $data['archive'];

            
            if($request->file('archive')) {
               
                $request->file('archive')->store('leis');
            }

        $leis->save();
        

            return redirect()->route('leis.index');

    } 
}
    
    public function update(Request $request, $id)
    {
        $leis = Leis::find($id);

        if($leis){
 
         $data  = $request->only([
            'number',
            'description',
            'year',
            'data_publication',
            'archive'
         ]);

            if($leis['number'] !== $data['number']){
                $validator = Validator::make($data,[
                    'number' => 'required|int',
                    'description' => 'required|string|max:250',
                    'year' => 'required|int',
                    'data_publication' => 'required|date',
                    'archive' => 'required'
                ]);
            }else{
                $validator = Validator::make($data,[
                    'number' => 'required|int',
                    'description' => 'required|string|max:250',
                    'year' => 'required|int',
                    'data_publication' => 'required|date',
                    'archive' => 'required'
                ]);
            }
            if($leis['archive'] != $data['archive']){
                $validator = Validator::make($data,[
                    'number' => 'required|int',
                    'description' => 'required|string|max:250',
                    'year' => 'required|int',
                    'data_publication' => 'required|date',
                    'archive' => 'required'
                ]);
            }
            if($request->file('archive')) {
               
                $request->file('archive')->store('leis');
            }

            if($validator->fails()){

                return redirect()->route('leis.edit',[
                    'leis' => $id
                ])
                ->withErrors($validator)
                ->withInput();
                }
 
                $leis->number = $data['number'];
                $leis->description = $data['description'];
                $leis->year = $data['year'];
                $leis->data_publication = $data['data_publication'];
                $leis->archive = $data['archive'];

                    $data = $request->all();

                $leis->save();
 
     }
      return redirect()->route('leis.index');
    }


    public function destroy($id)
    {
        $leis = Leis::find($id);
       
        $leis->delete($leis['archive']);

        return redirect()->route('leis.index');
    }
}
