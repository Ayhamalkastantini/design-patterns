<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
//         $this->roleName = $this->getRoleName('');
    }

    public function view(){
        $users = DB::table('users')
            ->select('*')
            ->from('users')
            ->get();
        return view('user',['users'=>$users]);
    }

    public function insert(){
        $urlData = DB::table('users')
            ->select('*')
            ->from('users')
            ->get();;
        return view('user');
    }

    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $data=array('name'=>$name,"email"=>$email,"password"=>$password);
        DB::table('users')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
    private function getRoleName(Role $roleName){
        DB::table('users')
            ->select('*')
            ->join('roles', 'roles.id', '=', 'users.id')
            ->where('roles.role_name', $roleName)
            ->get();
    }
}
