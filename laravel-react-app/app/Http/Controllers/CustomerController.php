<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Repositories\Repository;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // space that we can use the repository from
    protected $model;

    public function __construct(Customer $customer)
    {
        // set the model
        $this->model = new Repository($customer);
    }


    public function index(Request $request)
    {
        $customers = $this->model->all();

        return view('customers.list', compact('customers'));
    }
    public function insert()
    {
        $customers =  $this->model->with('user')
            ->select('customers.*', 'users.*')
            ->join('users', 'customers.user_id', '=', 'users.id')->get();

        return view('customers/add', compact('customers'));
    }


    public function store(Request $request)
    {
        $this->model->create($request->all());

        return redirect()->route('customers')->with('status', 'customer added');
    }


    public function show($id)
    {
        $customers = $this->model->show($id);
        return view('customers.show', compact('customers'));
    }

    public function edit($id)
    {
        $data =  $this->model->with('user')
            ->select('customers.*', 'users.*')
            ->join('users', 'users.id', '=', 'customers.user_id')->get();
        $customers = Customer::find($id);

        return view('customers.edit', compact('customers', 'data'));
    }

    public function destroy($id)
    {
        $this->model->delete($id);
        return redirect('customers');

    }
}
