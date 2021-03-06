<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
			[
                'fullName' => 'Abul Basar',
                'contact_person' => 'Sazhadur',
                'ident_no' => '1325963265898',
                'designation' => 'Manager',
                'mobile_no' => '01822121572',
                'alt_phone' => '01685825753',
                'email' => 'basar@gmail.com',
                'status' => 'active',
                'district' => 'Kushtia',
                'thana' => 'Kushtia sadar',
                'userType' => 'Office',
                'area' => 'South',
                'address' => 'Mahendropur, Kumerkhali-kushtia',
                'conectionType' => 'dedicated',
                'mikrotikName' => 'CL 01',
                'billingType' => 'Post Paid',
                'idNo' => '46697526',
                'package' => 'Package 1',
                'mikroTikRadius' => 'Mikrotik Yes',
                'startDate' => '2021-03-28',
                'password' => bcrypt('12345678'),
                'expireDate' => '2023-10-28',
                'monthlyBill' => '2000',
                'lineCharge' => '300',
                'discount' => '100',
                'total' => '2200',
                'fiberMeter' => '150',
                'fiberCode' => '6655899',
                'rjMeter' => '5050',
                'boxNo' => '45',
                'device' => 'Microtik',
                'deviceMac' => '6655899',
                'deviceWarrenty' => '3',
                'deposit' => '800',
                'router' => '4578',
                'routerMac' => '4596',
                'routerWarranty' => '5',
                'sellingPrice' => '1100',
                'reference' => 'Mehedi Hasan',
                'reseller' => 'Amazon',
                'note' => 'Shofique Shahariar',
                'lineMan' => 'Habibur Rahaman',
                'securityDeposit' => '3000',
                'locationPoint' => 'Kumerkhali'
                
				
                
            ],
            [
                'fullName' => 'Ziarul Haque',
                'contact_person' => 'Rejaul',
                'ident_no' => '789632658325',
                'designation' => 'CEO',
                'mobile_no' => '01685698524',
                'alt_phone' => '01685698567',
                'email' => 'ziarul@gmail.com',
                'status' => 'active',
                'district' => 'Dhaka',
                'thana' => 'Romna',
                'userType' => 'Factory',
                'area' => 'West',
                'address' => 'Baromile, Veramara-kushtia',
                'conectionType' => 'dedicated',
                'mikrotikName' => 'CL 02',
                'billingType' => 'Pre Paid',
                'idNo' => '46697526',
                'package' => 'Package 1',
                'mikroTikRadius' => 'Mikrotik No',
                'startDate' => '2021-03-28',
                'password' => bcrypt('12345678'),
                'expireDate' => '2023-10-28',
                'monthlyBill' => '2000',
                'lineCharge' => '300',
                'discount' => '100',
                'total' => '2200',
                'fiberMeter' => '150',
                'fiberCode' => '6655899',
                'rjMeter' => '5050',
                'boxNo' => '45',
                'device' => 'Microtik',
                'deviceMac' => '6655899',
                'deviceWarrenty' => '3',
                'deposit' => '800',
                'router' => '4578',
                'routerMac' => '4596',
                'routerWarranty' => '5',
                'sellingPrice' => '1100',
                'reference' => 'Mehedi Hasan',
                'reseller' => 'Amazon',
                'note' => 'Shofique Shahariar',
                'lineMan' => 'Habibur Rahaman',
                'securityDeposit' => '3000',
                'locationPoint' => 'Kumerkhali'
                
				
                
            ],
            [
                'fullName' => 'Mukhlechur Rahaman',
                'contact_person' => 'Anishchur Rahaman',
                'ident_no' => '798953265898',
                'designation' => 'CEO',
                'mobile_no' => '01758664575',
                'alt_phone' => '01685825753',
                'email' => 'makhchur@gmail.com',
                'status' => 'active',
                'district' => 'Dhaka',
                'thana' => 'Dhanmondi',
                'userType' => 'Office',
                'area' => 'East',
                'address' => 'Court Para, Kushtia',
                'conectionType' => 'shared',
                'mikrotikName' => 'CL 02',
                'billingType' => 'Post Paid',
                'idNo' => '46697526',
                'package' => 'Package 1',
                'mikroTikRadius' => 'Mikrotik Yes',
                'startDate' => '2021-03-28',
                'password' => bcrypt('12345678'),
                'expireDate' => '2023-10-28',
                'monthlyBill' => '2000',
                'lineCharge' => '300',
                'discount' => '100',
                'total' => '2200',
                'fiberMeter' => '150',
                'fiberCode' => '6655899',
                'rjMeter' => '5050',
                'boxNo' => '45',
                'device' => 'Microtik',
                'deviceMac' => '6655899',
                'deviceWarrenty' => '3',
                'deposit' => '800',
                'router' => '4578',
                'routerMac' => '4596',
                'routerWarranty' => '5',
                'sellingPrice' => '1100',
                'reference' => 'Mehedi Hasan',
                'reseller' => 'Amazon',
                'note' => 'Shofique Shahariar',
                'lineMan' => 'Habibur Rahaman',
                'securityDeposit' => '3000',
                'locationPoint' => 'Kumerkhali'
                
				
                
            ],
            [
                'fullName' => 'Rafiquzzaman',
                'contact_person' => 'Md Mamun',
                'ident_no' => '9685963265898',
                'designation' => 'Accountent',
                'mobile_no' => '01858121569',
                'alt_phone' => '01685825753',
                'email' => 'rafique@gmail.com',
                'status' => 'active',
                'district' => 'active',
                'thana' => 'Kushtia sadar',
                'userType' => 'Office',
                'area' => 'South',
                'address' => 'Mahendropur, Kumerkhali-kushtia',
                'conectionType' => 'dedicated',
                'mikrotikName' => 'CL 01',
                'billingType' => 'Post Paid',
                'idNo' => '46697526',
                'package' => 'Package 1',
                'mikroTikRadius' => 'Mikrotik Yes',
                'startDate' => '2021-03-28',
                'password' => bcrypt('12345678'),
                'expireDate' => '2023-10-28',
                'monthlyBill' => '2000',
                'lineCharge' => '300',
                'discount' => '100',
                'total' => '2200',
                'fiberMeter' => '150',
                'fiberCode' => '6655899',
                'rjMeter' => '5050',
                'boxNo' => '45',
                'device' => 'Microtik',
                'deviceMac' => '6655899',
                'deviceWarrenty' => '3',
                'deposit' => '800',
                'router' => '4578',
                'routerMac' => '4596',
                'routerWarranty' => '5',
                'sellingPrice' => '1100',
                'reference' => 'Mehedi Hasan',
                'reseller' => 'Amazon',
                'note' => 'Shofique Shahariar',
                'lineMan' => 'Habibur Rahaman',
                'securityDeposit' => '3000',
                'locationPoint' => 'Kumerkhali'
                
				
                
            ]
            	
        ]);
    }
}
