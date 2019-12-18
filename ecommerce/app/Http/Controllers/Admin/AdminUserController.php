<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = User::find(Auth::user()->getAuthIdentifier());
//        return $users;
        return view('backend.admin.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $users = User::all();
        return view('backend.users.user', compact('users'));
    }
    public function backup($id)
    {

//        $user = Auth::user();
//        $permission = $user->roles()->pluck('name')->toArray();
//        foreach ($permission as $per){
//            if($user->hasRole($per)){
//                echo "true";
//            }
//        }

//        $user = Auth::user()->hasRole('Accountant');
//        $name = Auth::user()->email;
//        $role = Role::all()->pluck('name');
//        $permission = Auth::user()->roles()->pluck('name')->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users = User::find($id);
//        $users = User::where('id',$id)->get();
        $roles = Role::all();

        $selectedRoles = $users->roles()->pluck('name')->toArray();
//        $selectedRoles = Auth::user()->roles()->pluck('name')->toArray();
        return view('backend.users.userEdit', compact('users', 'roles', 'selectedRoles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
//        $user->roles()->attach($request->get('role'));

        $user->assignRole($request->get('role'));
        return redirect(url('admin/users/edit', $id))->with('status', 'Add role successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
