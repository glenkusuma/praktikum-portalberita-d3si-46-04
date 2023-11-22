<?php
namespace App\Http\Controllers;
class ShippingController extends Controller
{
    public function index()
    {
        $data = [
            [
                "id" => 1,
                "name" => "Jasa Ekspedisi A",
                "address" => "Jl. Jendral Sudriman No. 10, Kajarta Pusat",
                "phone_number" => "021-23456789",
            ],
            [
                "id" => 2,
                "name" => "Jasa Ekspedisi B",
                "address" => "Jl. Gatot Subroto No. 20, Kajarta Selatan",
                "phone_number" => "021-23456789",
            ],
            [
                "id" => 3,
                "name" => "Jasa Ekspedisi C",
                "address" => "Jl. MH Thamrin No. 30, Kajarta Pusat",
                "phone_number" => "021-34567890",
            ],
        ];

        return view("shipping.index")->with(compact('data'));
    }
}
