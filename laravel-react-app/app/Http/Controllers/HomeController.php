<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleTrait;
use App\Models\Customer;
use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Auth;
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
}
