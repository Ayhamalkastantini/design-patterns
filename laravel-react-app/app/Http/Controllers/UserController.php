<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        // set the model
        $this->model = new Repository($user);
    }

    public function index()
    {
        $users = $this->model->with('users')->getModel()->orderBy('created_at', 'desc')->get();

        return view('users.list', compact('users'));
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

    private function getRoleName(Role $roleName){
        DB::table('users')
            ->select('*')
            ->join('roles', 'roles.id', '=', 'users.id')
            ->where('roles.role_name', $roleName)
            ->get();
    }
}
