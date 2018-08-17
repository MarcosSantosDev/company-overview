<?php
namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class workersController extends Controller
{
    public function addUser(Request $request, $id)
    {
      if($request->isMethod('post'))
      {
        $inputs = $request->all();

        $dataForm = [
          'organization_id' => $id,
          'name'            => $inputs['name'],
          'email'           => $inputs['email']
        ];

        $createUser = Worker::create($dataForm);

        return redirect()->route('data.users.find', compact('id'));
      }
      return view('auth.register_user')->with(compact('id'));
    }

    public function editUser($id)
    {
      $user = Worker::find($id);

      return view('auth.edit_user', compact('user', 'id'));
    }

    public function updateUser(Request $request, $id)
    {
      $inputs = $request->all();

      $user = Worker::find($id);
      $user->update(['name' => $inputs['name'], 'email' => $inputs['email']]);

      return redirect()->action('workersController@findUser', ['id' => $user->organization_id]);
    }

    public function deleteUser($id)
    {
      Worker::destroy($id);

      return redirect()->back();
    }

    public function findUser($id)
    {
      $users = Organization::find($id)->with('workers')->get()->first();

      return view('workers_list')->with(compact('users', 'id'));
    }
}
