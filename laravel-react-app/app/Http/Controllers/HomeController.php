<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleTrait;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    // space that we can use the repository from
    protected $user;
    protected $role;
    protected $project;
    protected $customer;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, Role $role, Project $project, Customer $customer)
    {
        $this->middleware('auth');
        $this->user = new Repository($user);
        $this->role = new Repository($role);
        $this->project = new Repository($project);
        $this->customer = new Repository($customer);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view::make('home');
    }
    public function projects()
    {
        $projects = Project::all();
        return view::make('projects')
            ->with('project', $projects);
    }
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
}
