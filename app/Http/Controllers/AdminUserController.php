<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\RoleUser;
class AdminUserController extends Controller


{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {

        $data = User::all();
        return view('/others/users.users', [
            'data' => $data]);
    }

    public function add()
    {
        $data = DB::table( 'users')->get();


        return view('others.users.user_add',['data'=>$data]);
        //
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input( 'email'),
            'password' =>$request->input('password')


        ]);

        return redirect()->route('user_list');


    }

    public function addrole(Request $request, $id){

        $data= new RoleUser();
        $data->user_id= $id;
        $data->role_id= $request->role_id;
        $data->save();

        return redirect()->route('user_list');




    }






    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data=User::find($id);
        $roles=Role::all();
        return view ('/others/users.showuser',[
            'data'=>$data,
            'roles'=>$roles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

public function destroyrole($uid,$rid){

    $user =User::find($uid);
  $user->roles()->detach($rid);
    return redirect(route( 'user_list',['id'=>$uid]));

}



public function logout(Request $request){
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect(  '/');

}

}
