<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class UsersController extends Controller
{

    public function edit()
    {
        return view('user.edit')->with('user', Auth()->user());
    }

    public function update(Request $request)

    {
        $user = Auth()->user();
        $user->name= $request->name;
        $user->address= $request->address;
        $user->number= $request->number;
        $user->cellphone= $request->cellphone;
        $user->city= $request->city;
        $user->state= $request->state;
        $user->save();
            session()->flash('success','Seu usuário foi Editado com sucesso!');
            return redirect(route('user.edit'));
     }
}
