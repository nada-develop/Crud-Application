<?php

use Illuminate\Database\Seeder;
use App\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create(["name" => "Ali", "phone" => "0101234567", "address" => "El-Maadi", "email" => "ali@gmail.com", "city_id" => 1]);
        Customer::create(["name" => "Ahmed", "phone" => "0111234567", "address" => "El-Dokki", "email" => "Ahmed@gmail.com", "city_id" => 3]);
        Customer::create(["name" => "Hassan", "phone" => "0121234567", "address" => "El-Mohandeseen", "email" => "Hassan@gmail.com", "city_id" => 1]);
        Customer::create(["name" => "Mostafa", "phone" => "0151234567", "address" => "El-Haram", "email" => "Mostafa@gmail.com", "city_id" => 5]);
        Customer::create(["name" => "Hany", "phone" => "0161234567", "address" => "El-Giza", "email" => "Hany@gmail.com", "city_id" => 1]);
        Customer::create(["name" => "Shady", "phone" => "0191234567", "address" => "Miami", "email" => "Shady@gmail.com", "city_id" => 6]);
        Customer::create(["name" => "Adel", "phone" => "0171234567", "address" => "El-Maadi", "email" => "Adel@gmail.com", "city_id" => 2]);
        Customer::create(["name" => "Wael", "phone" => "0181234567", "address" => "El-Maadi", "email" => "Wael@gmail.com", "city_id" => 1]);
        Customer::create(["name" => "Nader", "phone" => "0121234567", "address" => "El-Maadi", "email" => "Nader@gmail.com", "city_id" => 4]);
        Customer::create(["name" => "Yasser", "phone" => "0101234567", "address" => "El-Maadi", "email" => "Yasser@gmail.com", "city_id" => 1]);
        Customer::create(["name" => "Ola", "phone" => "0111234567", "address" => "El-Maadi", "email" => "Ola@gmail.com", "city_id" => 6]);
        Customer::create(["name" => "Heba", "phone" => "0121234567", "address" => "El-Maadi", "email" => "Heba@gmail.com", "city_id" => 2]);
        Customer::create(["name" => "Mona", "phone" => "0151234567", "address" => "El-Maadi", "email" => "Mona@gmail.com", "city_id" => 1]);
        Customer::create(["name" => "Nada", "phone" => "0161234567", "address" => "El-Maadi", "email" => "Nada@gmail.com", "city_id" => 3]);
        Customer::create(["name" => "Walaa", "phone" => "0101234567", "address" => "El-Maadi", "email" => "Walaa@gmail.com", "city_id" => 4]);
        Customer::create(["name" => "Alaa", "phone" => "0121234567", "address" => "El-Maadi", "email" => "Alaa@gmail.com", "city_id" => 2]);
        Customer::create(["name" => "Yasmeen", "phone" => "0101234567", "address" => "El-Maadi", "email" => "Yasmeen@gmail.com", "city_id" => 1]);
    }
}
