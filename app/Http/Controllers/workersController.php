<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workersController extends Controller
{
 
    public function getUsers()
    {
        $users=\App\Workers::all();
        
        if($users){
            return view('workers_list', ['users' => $users]);
        }else{
            return view('workers_list');
        }
    }


    public function addUser(Request $request)
    {
     
        $worker= new \App\Workers;

        $worker->name = $request->get('name');
        $worker->email = $request->get('email');
        $worker->password = $request->get('password');
        $validatePassword = $request->get('validatePassword');
        
        if($worker->password === $validatePassword){
            $worker->save();
            return redirect('workers_list')->with('status', 'Funcionario cadastrado com sucesso!');
        }else{
            return redirect('register')->with('status', 'Senhas não coecidem!');
        }
    }

    
    public function editUser($id)
    {
        $user = \App\Workers::find($id);

        return view('auth.edit', compact('user', 'id'));
    }
 
    
    public function updateUser(Request $request, $id)
    {
        $user= \App\Workers::find($id);

        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=$request->get('password');

        $user->save();
    
        return redirect('workers_list')->with('success','Funcionario atualizado com sucesso!');
    }

    
    public function deleteUser($id)
    {
        $deleted = \App\Workers::find($id);

        $deleted->delete();
        return redirect('workers_list')->with('success','Funcionario deletado com sucesso!');
        
    }
}