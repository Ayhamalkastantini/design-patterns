<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Repositories\Repository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // space that we can use the repository from
    protected $model;

    public function __construct(Project $project)
    {
        // set the model
        $this->model = new Repository($project);
    }

    public function index()
    {
        $ProjectList = $this->model->with('customer')->orderBy('deadline', 'desc')->get();

        return view('projects.list', compact('ProjectList'));

    }

    public function insert()
    {
        return view('projects/add');
    }

    public function indexObserver()
    {
        $project = Project::create([
            'title' => 'Platinum 1',
            'description' => '1010',
            'status' => '1010',
            'company_name' => '1010',
            'deadline' => Carbon::now(),
        ]);
    }
    public function store(Request $request)
    {
        $this->model->create($request->all());

        return redirect()->route('projects')->with('status', 'Project added');
    }

    public function show($id)
    {
        $projects = $this->model->show($id);
        return view('projects.show', compact('projects'));
    }
    public function edit($id)
    {
        $projects = Project::find($id);

        return view('projects.edit', compact('projects'));
    }
    public function update(Request $request, $id)
    {
        $this->model->update($request->all(), $id);
        return redirect('/edit')->with('success', 'Project up to date.');
    }
    public function destroy($id)
    {
        return $this->model->delete($id);
    }
}
