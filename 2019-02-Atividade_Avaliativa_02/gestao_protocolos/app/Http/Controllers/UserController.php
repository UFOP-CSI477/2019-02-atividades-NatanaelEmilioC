<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();

        return view('listAllUsers', [
            'users' =>$users
        ]);
    }

    public function listUser(User $user)
    {
        return view('listUser', [
            'user' => $user
        ]);
    }

    public function formAddUser()
    {
        return view('addUser');
    }

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->nome_cad;
        $user->email = $request->email_cad;
        $user->password = Hash::make($request->senha_cad);
        $user->save();

        return redirect()->route('users.listAll');
    }

    public function formEditUser(User $user)
    {
        return view('editUser', [
            'user' => $user
        ]);
    }

    public function edit(User $user,Request $request)
    {
        $user->name = $request->nome_edit;

        if(filter_var($request->email_edit, FILTER_VALIDATE_EMAIL)){
            $user->email = $request->email_edit;
        }

        if(!empty($request->senha_edit)){
            $user->password = Hash::make($request->senha_edit);
        }

        $user->save();

        return redirect()->route('users.listAll');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.listAll');
    }
}
