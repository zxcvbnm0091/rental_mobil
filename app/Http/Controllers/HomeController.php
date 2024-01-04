<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $vehicles = Car::all();

        $cars = $vehicles->where('jenis_kendaraan', 'mobil');
        $motorcycles = $vehicles->where('jenis_kendaraan', 'motor');
        return view('frontend.homepage', compact('cars', 'motorcycles'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required',
        ]);

        Message::create($data);

        return redirect()->back()->with([
            'message' => 'Pesan anda berhasil dikirim',
            'alert-type' => 'success'
        ]);
    }

    public function detail(Car $car)
    {
        return view('frontend.detail', compact('car'));
    }
}
