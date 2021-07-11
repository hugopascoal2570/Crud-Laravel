<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){

        $loggedId = intval(Auth::id());

        $user  = User::find($loggedId);
        
        if($user){
            return view ('admin.profile.index',[
        'user' => $user
            ]);
        }

        return redirect()->route('admin');
    }


        public function save(Request $request){
            $loggedId = intval(Auth::id());
            $user = User::find($loggedId);
    
           if($user){
    
            $data  = $request->only([
               'name',
               'email',
               'password',
               'password_confirmation' 
            ]);
            $validator = Validator::make([
                'name' => $data['name'],
                'email' => $data['email']
            ], [
                'name' =>['required','string','max:100'],
                'email' =>['required','string','max:100']
            ]);
    
                // alteração do nome
                $user ->name = $data['name'];
                // alteração do email 
                // Primeiro, verificamos se o email foi alterado
                if($user->email != $data['email']){
                    // verificar se o novo email já existe
                    $hasEmail = User::where('email', $data['email'])->get();
                    if(count($hasEmail)=== 0){
                        $user->email = $data['email'];
                        }else{
                            $validator->errors()->add('email',__('validation.unique',[
                                'attribute' =>'email'
                            ]));
    
                        }
                    }
                    // alteração da senha
                    // verifica se o usuário digitou senha
                    if(!empty($data['password'])){
                        // fazendo verificação da senha
                        if(strlen($data['password']) >=4){
                            // verifica se a confirmação está ok
                            if($data['password'] === $data['password_confirmation']){
                            // altera a senha
                            $user->password = Hash::make($data['password']);
                        }else{
                            $validator->errors()->add('password',__('validation.confirmed',[
                                'attribute' =>'password',
                                
                            ]));       
                        }
                        
                    }else{
                        $validator->errors()->add('password',__('validation.min.string',[
                            'attribute' =>'password',
                            'min'=> 4
                        ]));
                    }
    
            }
            if(count($validator->errors() ) >0){
                return redirect()->route('profile', [
                    'user' => $loggedId
                ])->withErrors($validator);
            }
            $user->save();

            return redirect()->route('profile')
            ->with('warning', 'Informações alterado com sucesso!');
    
        }
         return redirect()->route('profile');
    }
         
    }

