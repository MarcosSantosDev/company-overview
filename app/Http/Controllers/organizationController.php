<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class organizationController extends Controller
{

    public function addOrganization(Request $request)
    {
      $organization = Organization::create($request->all());

      return redirect()->route('data.organization.list')->with('status', 'Empresa criada com sucesso!');
    }

    public function getOrganizations()
    {
      $organizations= Organization::all();

      return view('organization', ['organizations' => $organizations]);
    }

    public function editOrganization($id)
    {
        $organization = Organization::find($id);

        return view('auth.edit_organization', compact('organization', 'id'));
    }

    public function updateOrganization(Request $request, $id)
    {
        $inputs = $request->all();
        $organization = Organization::find($id);
        $organization->update($inputs);

        return redirect()->route('data.organization.list')->with('status','Dados atualizado com sucesso!');
    }

    public function deleteOrganization($id)
    {
      $organization = Organization::destroy($id);

      return redirect()->route('data.organization.list')->with('status','Empresa deletada com sucesso!');
    }

    public function details($id)
    {
      $title = 'Organização';
      $organization = json_decode(Organization::find($id));

      return view('details')->with(compact('organization', 'title'));
    }
}
