<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function getUsers()
    {
        $users=\App\Register::all();
        
        if($users){
            return view('list_func', ['users' => $users]);
        }else{
            return view('list_func');
        }
    }

    public function addUser(Request $request)
    {
     
        $register= new \App\Register;

        $register->name = $request->get('name');
        $register->email = $request->get('email');
        $register->password = $request->get('password');
        $validatePassword = $request->get('validatePassword');
        
        if($register->password === $validatePassword){
            $register->save();
            return redirect('list_func')->with('success', 'Funcionario cadastrado com sucesso!');
        }else{
            return redirect('register')->with('success', 'Senhas não coecidem!');
        }
    }

    public function editUser($id)
    {
        $user = \App\Register::find($id);

        return view('auth.edit', compact('user', 'id'));
    }
 
    public function updateUser(Request $request, $id)
    {
        $user= \App\Register::find($id);

        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=$request->get('password');

        $user->save();
    
        return redirect('list_func')->with('success','Funcionario atualizado com sucesso!');
    }

    public function deleteUser($id)
    {
        $deleted = \App\Register::find($id);

        $deleted->delete();
        return redirect('list_func')->with('success','Funcionario deletado com sucesso!');
        
    }
}