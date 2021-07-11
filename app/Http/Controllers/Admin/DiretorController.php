<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Diretor;
use PhpParser\Node\Scalar\MagicConst\Dir;

class DiretorController extends Controller
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

        $diretores = Diretor::paginate(10);

        return view('admin.diretores.index', [
            'diretores' =>$diretores

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.diretores.create');
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
            'office',
            'body'
           
        ]);
        $validator = Validator::make($data,[
            'name' => 'required|string|max:100',
            'broken' => 'required|string|max:100',
            'office' => 'required|string|max:100',
            'body' => 'string'
            
        ]);

            if($validator->fails()){
            return redirect()->route('diretor.create')
            ->withErrors($validator)
            ->withInput();
            }
        
            $diretor = new Diretor();

            $diretor->name = $data['name'];
            $diretor->broken = $data['broken'];
            $diretor->office = $data['office'];
            $diretor->body = $data['body'];

            $diretor->save();

            return redirect()->route('diretor.index');
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
        $diretor = Diretor::find($id);

        if($diretor){
            return view('admin.diretores.edit',[
                'diretor' => $diretor
            ]);
        }
       return redirect()->route('diretor.index');
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
        $diretor = Diretor::find($id);

        if($diretor){
 
         $data  = $request->only([
            'name',
            'broken',
            'office',
            'body'
         ]);

            if($diretor['name'] !== $data['name']){
                $validator = Validator::make($data,[
                    'name' => 'required|string|max:100',
                    'broken' => 'required|string|max:100',
                    'office' => 'required|string|max:250',
                    'body' => 'string'
                ]);
            }else{
                $validator = Validator::make($data,[
                    'name' => 'required|string|max:100',
                    'broken' => 'required|string|max:100',
                    'office' => 'required|string|max:250',
                    'body' => 'string'
                ]);
            }

            if($validator->fails()){

                return redirect()->route('diretor.edit',[
                    'diretor' => $id
                ])
                ->withErrors($validator)
                ->withInput();
                }
 
                $diretor->name = $data['name'];
                $diretor->broken = $data['broken'];
                $diretor->office = $data['office'];
                $diretor->body = $data['body'];

         $diretor->save();
 
     }
      return redirect()->route('diretor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diretor = Diretor::find($id);
        $diretor->delete();

        return redirect()->route('diretor.index');
        }
    }

