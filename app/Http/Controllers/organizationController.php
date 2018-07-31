<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class organizationController extends Controller
{


    public function addOrganization(Request $request)
    {

        $organization= new Organization;

        $organization->title = $request->get('title');
        $organization->description = $request->get('description');
        // $organization->date = new Date();

        if($organization){
            $organization->save();
            return redirect()->route('data.organization.list')->with('status', 'Empresa criada com sucesso!');
        }else{
            return redirect()->route('data.organization.list')->with('status', 'Todos os campos devem ser preenchidos!');
        }
    }

    public function getOrganization()
    {
        $organizations= Organization::all();

        if($organizations){
            return view('organization', ['organizations' => $organizations]);
        }else{
            return view('organization');
        }
    }

    public function editOrganization($id)
    {
        $organization = Organization::find($id);

        return view('auth.edit_organization', compact('organization', 'id'));
    }

    public function updateOrganization(Request $request, $id)
    {
        $organization= Organization::find($id);
        $organization->title=$request->get('title');
        $organization->description=$request->get('description');

        $organization->save();
        return redirect()->route('data.organization.list')->with('success','Dados atualizado com sucesso!');
    }


    public function deleteOrganization($id)
    {
        $organization = Organization::find($id);
        $users = \App\Workers::all();

        foreach($users as $user){
            if($user->id_company == $id){
                $user->delete();
            }
        }

        $organization->delete();

        return redirect()->route('data.organization.list')->with('success','Empresa deletada com sucesso!');
    }

    public function findUsersOrganization($id)
    {
        $users=\App\Workers::all();

        $usersOfTheOrganization = [];

        foreach ($users as $user) {
            if($user->id_company == $id){
                array_push($usersOfTheOrganization, $user);
            }
        }

        if($usersOfTheOrganization){
            return view('workers_list')->with(compact('usersOfTheOrganization', 'id'));
        }else{
            return view('workers_list')->with(compact('usersOfTheOrganization', 'id'));
        }
    }

    public function addUser($id)
    {
        return view('auth.register_user')->with(compact('id'));
    }

    public function show($id)
    {
      $title = 'Organização';

      $organization = DB::table('organizations')
                          ->where('id', '=', $id)
                          ->get();

      return view('details')->with(compact('id','organization', 'title'));
    }
}
