<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('home')->with('customers', $customers);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        $del = Customer::destroy($id);

        return response()->json(['delete' => $del], 200);
    }
}
