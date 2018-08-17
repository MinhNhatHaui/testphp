<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::findOrFail('1');
        return view('user.index')->with(['data'=>$data]);
    }

    public function update(Request $request)
    {
        $filename = User::find('1')->image;
        if ($request->hasFile('avatar')) {
            $filename = $request->id . $request->avatar->getClientOriginalName();
            $request->file('avatar')->storeAs('\public', $filename);
        }

        $user = User::find('1');
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->sdt = $request->sdt;
        $user->image = $filename;
        $user->dob = $request->dob;

        $res = $user->save();
        return redirect(route('user.index'));
    }
}
