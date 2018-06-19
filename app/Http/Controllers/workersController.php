<?php

namespace App\Http\Controllers;

use App\Workers;
use Illuminate\Http\Request;

class workersController extends Controller
{
 

    public function addUser(Request $request, $id)
    {
     
        $worker= new Workers;

        $worker->id_company = $id;
        $worker->name = $request->get('name');
        $worker->email = $request->get('email');
        $worker->password = $request->get('password');
        $validatePassword = $request->get('validatePassword');
        
        if($worker->password === $validatePassword){
            
            $worker->save();
    
            return redirect()->action('organizationController@findUsersOrganization', ['id' => $id]);
        }else{
            return redirect()->back()->with('status', 'Senhas não coecidem!');
        }
    }
    
    public function editUser($id)
    {
        $user = Workers::find($id);

        return view('auth.edit_user', compact('user', 'id'));
    }

    
    public function updateUser(Request $request, $id)
    {
        $user= Workers::find($id);

        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=$request->get('password');

        $user->save();

        return redirect()->action('organizationController@findUsersOrganization', ['id' => $user->id_company]);   
    }

    
    public function deleteUser($id)
    {
        $user = Workers::find($id);

        $user->delete();
        
        return redirect()->action('organizationController@findUsersOrganization', ['id' => $user->id_company]);
    }
}   