<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'name'       => 'required|alpha|max:50',
           'lastname'   => 'required|alpha|max:50',
           'email'      => 'required|email|unique:customers',
           'phone'      => 'required|numeric|digits:10',
           'creditcard' => 'required|numeric|digits:16'
        ]);

        if ($validator->fails()) {
            //Session::flash('error', $validator->messages()->first());
            //return redirect()->back()->withInput();
            return response()->json([
                'save' => 'error',
                'msg' => $validator->messages()->first()
            ], 200);
        }

        $customer = new Customer;

        $customer->name = $request->name;
        $customer->lastname = $request->lastname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->creditcard = $request->creditcard;

        $save = $customer->save();

        $name = $request->input('name');
        return response()->json(['save' => $save], 200);
    }
}
