<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
class AdminController extends Controller
{
    //

    public function index(){

       return view('/others.admin-index.adminm');


    }

/*admin üylelik kontrolü*/

    public function loginadmincheck (Request $request):\Illuminate\Http\RedirectResponse
    {
       /* $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);
 */

 return redirect()->intended('/admin');


     /*   if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }


 */
       /* return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

        */
    }



public function show($id){

        $data=User::find($id);
        $roles=Role::all();
        return view ('others.admin-index.show',[
            'data'=>$data,
            'roles'=>$roles
        ]);
    }







    public function addrole(Request $request, $id){

    $data= new RoleUser();
    $data->user_id= $id;
    $data->role_id= $request->role_id;
    $data->save();
    return redirect(route('show',[$id=>$id]));
    }


    public function list()
    {
        $data = User::all();
        return view('/others/admin-index.list', [
            'data' => $data]);
    }




}
