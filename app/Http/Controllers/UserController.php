<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserRoleUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * Displays a list of all users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::all();
      
       return view('user.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('user.createuser',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
   
        $request->validated();        
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        // dd($user);
        return redirect('/users');

     
    
   
      
    }


    public function show_user_roles($id)
    {
        $user = User::find($id);
        return view('user.user_roles',compact('user'));

    }
    /**
     * Display the specified resource.
     * Displays profile for logged in user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {   
        $user = $user;
        return view('user.userprofile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
         if(Auth::user()->hasPermissionTo('manage users'))
        {
            $user = User::find($id);
            $roles = Role::pluck('name','name')->all();
            $userRole = $user->roles->pluck('name','name')->all();
            return view('user.user-edit',compact('user','roles','userRole'));
        }else{
            abort(404);
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRoleUpdateRequest $request, $id)
    {
       
      
         $input = $request->all();  
         $user = User::find($id);
         $user->update($input);
         // deletes the roles which the user has
         DB::table('model_has_roles')->where('model_id',$id)->delete();
         // Then assign new roles from the form
         $user->assignRole($request->input('roles'));
         return redirect('/users')->with('success',$user->name .' Profile Updated');
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
