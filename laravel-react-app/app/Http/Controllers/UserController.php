<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleTrait;
use App\Models\Project;
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
    use CheckRoleTrait;

    public function __construct(User $user)
    {
        // set the model
        $this->model = new Repository($user);
    }

    public function index()
    {
        $users = $this->model->with('users')->getModel()->orderBy('created_at', 'desc')->get();

        if($this->checkRole('Admin')){
            return view('users.list', compact('users'));
        }else{
            return redirect('/');
        }
    }

    public function show($id)
    {
        $users = $this->model->show($id);

        if($this->checkRole('Admin')){
            return view('users.show', compact('users'));
        }else{
            return redirect('/');
        }
    }

    public function insert(){

        if($this->checkRole('Admin')){
            $userRole = $this->model->with('role')
                ->select('users.*','roles.*')
                ->join('roles','roles.id','=','users.role_id')
                ->get();
            return view('users.add', compact('userRole'));
        }else{
            return redirect('/');
        }

    }

    public function store(Request $request)
    {
        $this->model->create($request->all());

        return redirect()->route('users')->with('status', 'user added');

    }
    public function edit($id)
    {
        $users = User::find($id);

        if($this->checkRole('Admin')){
            return view('users.edit', compact('users'))->with('message', 'User updated');
        }else{
            return redirect('/');
        }
    }

    public function destroy($id)
    {
        if($this->checkRole('Admin')){
            $this->model->delete($id);
            return redirect()->route('users')->with('status', 'user deleted');
        }else{
            return redirect('/');
        }

    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
