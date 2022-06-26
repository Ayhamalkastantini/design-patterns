<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Project;
use App\Models\Task;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // space that we can use the repository from
    protected $model;
    protected $customer;
    protected $project;

    public function __construct(Task $task,Customer $customer, Project $project)
    {
        // set the model
        $this->model = new Repository($task);
        $this->customer = new Repository($customer);
        $this->project = new Repository($project);
    }

    public function index()
    {
        $tasks = $this->model->with('project')->with('user')
            ->get();
        return view('tasks.list', compact('tasks'));
    }
    public function insert()
    {
        $customers =  $this->model->with('project')
            ->with('project')
            ->with('user')
            ->get();
        dump($customers);
        return view('tasks/add', compact('customers'));
    }


    public function store(Request $request)
    {
        $this->model->with('project')->create($request->all());

        return redirect()->route('tasks')->with('status', 'Project added');
    }

    public function show($id)
    {
        $tasks = $this->model->show($id);
        if($this->checkRole('Admin')){
            return view('tasks/show', compact('tasks'));
        }else{
            return $this->index();
        }
    }
    public function edit($id)
    {
        $data =  $this->model->with('project')->get();
        $tasks = Task::all($id);

        return view('tasks.edit', compact('tasks', 'data'));
    }
    public function update(Request $request, $id)
    {
        $this->model->update($request->all(), $id);
        return redirect('/edit')->with('success', 'task up to date.');
    }
    public function destroy($id)
    {
        if($this->checkRole('Admin')){
             $this->model->delete($id);
            return redirect('tasks/list');
        }else{
            return $this->index();
        }
    }
}
