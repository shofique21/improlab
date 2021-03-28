<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\CustomerCollection;
use Illuminate\Notifications\Notifiable;
use App\Models\Customer;
use DB;
class CustomerController extends Controller
{
   public function index(){

      $customers = DB::select('select * from customers');
      return response()->json($customers);

      // $customers = Customer::findOrFail(1);
      // return response()->json($customers);
      // return new CustomerCollection(Customer::all());
   }
    public function store(Request $request)
    {

     
      $validator = Validator::make($request->all(), [
        'fullName' => ['required', 'string', 'max:255'],
        'mobile_no' => ['required', 'string', 'max:13'],
        'status' => ['required', 'string', 'max:13'],
        'district' => ['required', 'string', 'max:255'],
        'thana' => ['required', 'string', 'max:255'],
        'userType' => ['required', 'string', 'max:255'],
        'area' => ['required', 'string', 'max:255'],
        'conectionType' => ['required', 'string', 'max:255'],
        'mikrotikName' => ['required', 'string', 'max:255'],
        'idNo' => ['required', 'string', 'max:255'],
        'package' => ['required', 'string', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    if ($validator -> passes()){
      $customer = new Customer([
        'fullName' => $request->get('fullName'),
        'contact_person' => $request->get('contact_person'),
        'ident_no' => $request->get('ident_no'),
        'designation' => $request->get('designation'),
        'mobile_no' => $request->get('mobile_no'),
        'alt_phone' => $request->get('alt_phone'),
        'email' => $request->get('email'),
        'status' => $request->get('status'),
        'district' => $request->get('district'),
        'thana' => $request->get('thana'),
        'userType' => $request->get('userType'),
        'area' => $request->get('area'),
        'address' => $request->get('address'),
        'conectionType' => $request->get('conectionType'),
        'mikrotikName' => $request->get('mikrotikName'),
        'billingType' => $request->get('billingType'),
        'idNo' => $request->get('idNo'),
        'package' => $request->get('package'),
        'mikroTikRadius' => $request->get('mikroTikRadius'),
        'startDate' => $request->get('startDate'),
        'password' =>  Hash::make($request->get('password')),
        'expireDate' => $request->get('expireDate'),
        'monthlyBill' => $request->get('monthlyBill'),
        'lineCharge' => $request->get('lineCharge'),
        'discount' => $request->get('discount'),
        'total' => $request->get('total'),
        'fiberMeter' => $request->get('fiberMeter'),
        'fiberCode' => $request->get('fiberCode'),
        'rjMeter' => $request->get('rjMeter'),
        'boxNo' => $request->get('boxNo'),
        'deviceMac' => $request->get('deviceMac'),
        'deviceWarrenty' => $request->get('deviceWarrenty'),
        'deposit' => $request->get('deposit'),
        'router' => $request->get('router'),
        'routerMac' => $request->get('routerMac'),
        'routerWarranty' => $request->get('routerWarranty'),
        'sellingPrice' => $request->get('sellingPrice'),
        'reference' => $request->get('reference'),
        'reseller' => $request->get('reseller'),
        'note' => $request->get('note'),
        'lineMan' => $request->get('lineMan'),
        'securityDeposit' => $request->get('securityDeposit'),
        'locationPoint' => $request->get('locationPoint'),
        'contact_person' => $request->get('contact_person'),
      ]);

      $customer->save();

      return response()->json('success');
     }
    }
}
