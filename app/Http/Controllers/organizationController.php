<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class organizationController extends Controller
{

    
    public function addOrganization(Request $request)
    {
        
        $organization= new \App\Organization;
        
        $organization->title = $request->get('title');
        $organization->description = $request->get('description');
        
        if($organization){
            $organization->save();
            return redirect('organizations_list')->with('status', 'Empresa criada com sucesso!');
        }else{
            return redirect('organizations_list')->with('status', 'Todos os campos devem ser preenchidos!');
        }
    }
    
    public function getOrganization()
    {
        $organizations=\App\Organization::all();
        
        if($organizations){
            return view('organization_list', ['organizations' => $organizations]);
        }else{
            return view('organization_list');
        }    
    }

    public function editOrganization($id)
    {
        $organization = \App\Organization::find($id);
        
        return view('auth.edit_organization', compact('organization', 'id'));
    }

    public function updateOrganization(Request $request, $id)
    {
        $organization= \App\Organization::find($id);
        
        $organization->title=$request->get('title');
        $organization->description=$request->get('description');
        
        $organization->save();
        
        return redirect('organization_list')->with('success','Dados atualizado com sucesso!');
    }

    public function deleteOrganization($id)
    {
        $delete = \App\Organization::find($id);

        $delete->delete();
        return redirect('organization_list')->with('success','Empresa deletada com sucesso!');
    }
}