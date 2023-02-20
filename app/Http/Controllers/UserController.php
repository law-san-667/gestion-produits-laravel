<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function form_register()
    {
        if(isset($_GET['error'])){
            return view('form_register', ['error' => $_GET['error']]);
        }
        return view('form_register');
    }

    public function form_login()
    {
        if(isset($_GET['error'])){
            return view('form_login', ['error' => $_GET['error']]);
        }
        return view('form_login');
    }

    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            session(['user' => User::where('email', $request->email)->first()->id]);
            return redirect('/listProduits');
        } catch (QueryException $th) {
            if($th->errorInfo[1] == 1062){
                return redirect('/form_register?error=Account already exists !');
            }
            elseif($th->errorInfo[1] == 1048){
                return redirect('/form_register?error=Please fill all the fields');
            }
            else{
                return redirect('/form_register?error=Unknown error'.$th->errorInfo[1]);
            }
        }
    }

    public function login(Request $request)
    {
        try{
            $user = User::where('email', $request->email)->first();
            if($user == null)
                return redirect('/form_login?error=Account does not exist !');
            if ($user->password == $request->password) {
                session(['user' => $user->id]);
                return redirect('/listProduits');
            } else {
                return redirect('/form_login');
            }
        }catch(QueryException $th){
            if($th->errorInfo[1] == 1048){
                return redirect('/form_login?error=Please fill all the fields');
            }
            else{
                return redirect('/form_login?error=Unknown error'.$th->errorInfo[1]);
            }
        }
    }

    public function logout()
    {
        session()->forget('user'); 
        return redirect('/form_login');
    }


}
