<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\City;
class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $customers_list = Customer::all(); // Before SoftDelete -> "SELECT * FROM customers"  ---  After SoftDelete ->  "SELECT * FROM customers WHERE deleted_at = NULL"
        return view('customers.list', compact('customers_list'));
        //return dd($customers_list);
    }

    public function indexTrash(){
        $trash_list = Customer::onlyTrashed()->get();
        return view('customers.trash_list', compact('trash_list'));
    }

    public function create(){
        $cities = City::all();
        return view('customers.new', compact('cities'));
        //return $cities;
    }

    public function store(Request $request){
        //request   $_GET   $_POST
        //Request   $_GET   $_POST  $_FILES
        // $request->input('cname'); // = request('cname');
        // return $request->file('cimage')->getClientOriginalName();
        // return $request->file('cimage')->getClientOriginalExtension();
        // return $request->file('cimage')->getMimeType();
        // return $request->file('cimage')->getSize();
        // Start File Upload
        $image_name = $request->file('cimage')->getClientOriginalName();
        $request->file('cimage')->storeAs('public/customers/', $image_name);
        // End File Upload
        $cust = new Customer();
        $cust->image = $image_name;
        $cust->name = request('cname');
        $cust->phone = request('cphone');
        $cust->address = request('caddress');
        $cust->email = request('cemail');
        $cust->city_id = request('city');
        $cust->save();
        return redirect('/customers');
    }

    public function edit($id){
        $customer = Customer::find($id);
        $cities = City::all();
        return view('customers.edit', compact('customer', 'cities'));
    }

    public function update($id){
        $cust = Customer::find($id);
        $cust->name = request('cname');
        $cust->phone = request('cphone');
        $cust->address = request('caddress');
        $cust->email = request('cemail');
        $cust->city_id = request('city');
        $cust->save();
        return redirect('/customers');
    }

    public function show($id){
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function destroy($id){
        $cust = Customer::find($id);
        $cust->delete(); // Before SoftDelete -> "DELETE FROM customers WHERE id = $id" --- After SoftDelete -> "UPDATE customers SET deleted_at = now() WHERE id = $id"
        return redirect('/customers');
    }

    public function restore($id){
        //$cust = Customer::find($id); // Before SoftDelete -> "SELECT * FROM customers WHERE id = $id" --- After SoftDelete -> "SELECT * FROM customers WHERE deleted_at = null AND id = $id"
        Customer::onlyTrashed()->where('id', $id)->restore();
        return redirect('/customers/trash');
    }

    public function deleteForever($id){
        Customer::onlyTrashed()->where('id', $id)->forceDelete(); // After SoftDelete -> "DELETE FROM customers WHERE id = $id"
        return redirect('/customers/trash');
    }

    public function search_by_phone(){
        return view('customers.search_by_phone');
    }

    public function results_by_phone(){
        $query = request('query');
        $customers = Customer::where('phone', $query)->get();
        return view('customers.search_by_phone', compact('customers'));
    }

    public function search_by_name(){
        return view('customers.search_by_name');
    }

    public function results_by_name(){
        $query = request('query');
        /*
        SELECT * FROM customers WHERE name LIKE $query%

        DB -> Ahmed Ali Hassan Mohamed

        query -> Ahmed Ali             $query%        "Starts with"
        query -> Hassan Mohamed        %$query        "Ends with"
        query -> Ali Hassan            %$query%       "Contains"
        */
        $customers = Customer::where('name', 'LIKE', "%$query%")->get();
        return view('customers.search_by_name', compact('customers'));
    }

    public function search_advanced(){
        return view('customers.search_advanced');
    }

    public function results_advanced(){
        $query = request('query');
        $customers = Customer::where('name', 'LIKE', "%$query%")
        ->orWhere('phone', 'LIKE', "%$query%")
        ->orWhere('address', 'LIKE', "%$query%")
        ->orWhere('email', 'LIKE', "%$query%")
        ->get();
        // SELECT * FROM customers WHERE name LIKE %$query% OR phone LIKE %$query% OR address LIKE %$query% OR email LIKE %$query%
        return view('customers.search_advanced', compact('customers'));
    }
}


