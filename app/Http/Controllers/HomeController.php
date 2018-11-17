<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        //$customers = Customer::all();
        $customers = Customer::paginate(5);
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
           'name'       => 'required|string|max:50',
           'lastname'   => 'required|string|max:50',
           'email'      => ['required','email',Rule::unique('customers')->ignore($request->id)],
           'phone'      => 'required',
           'creditcard' => 'required|numeric|digits:16'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'save' => 'error',
                'msg' => $validator->messages()->first()
            ], 200);
        }

        if ($request->update == 'save') {
            $customer = new Customer; // Cliente Nuevo
        } else {
            $customer = Customer::find($request->id); // Actualizar Cliente
        }

        $customer->name = $request->name;
        $customer->lastname = $request->lastname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->creditcard = $request->creditcard;

        $save = $customer->save();

        return response()->json(['save' => $save], 200);
    }
}
