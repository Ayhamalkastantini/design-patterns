<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
        $givenUser = $this->model->all();

        dd($givenUser);
    }
}
