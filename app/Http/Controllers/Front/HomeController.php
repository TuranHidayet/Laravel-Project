<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function index(): View
    {
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }

    public function cars(){
        $cars = Car::where('status', 1)->paginate(6);

        return view('front.cars', compact('cars'));
    }

    public function car(string $id){
        $car = Car::find($id);

        return view('front.car', compact('car'));
    }

    public function blogs(){
        return view('front.blogs');
    }

    public function contact(){
        return view('front.contact');
    }

    public function users(){
        $users = User::all();
        return view('users', compact('users'));
    }
}
