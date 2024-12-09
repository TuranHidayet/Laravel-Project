<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Service;
use App\Models\User;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function index(): View
    {
        $cars = Car::where('status', 1)->get();
        return view('front.home', compact('cars'));
    }

    public function about(){
        return view('front.about');
    }

    public function cars(){
        $cars = Car::where('status', 1)->paginate(6);

        return view('front.cars', compact('cars'));
    }

    public function car(string $id){
        $car      = Car::find($id);
        $features = json_decode($car->features);
        $services = Service::whereStatus(1)->get();

        return view('front.car', compact('car', 'features', 'services'));
    }

    public function blogs(){
        $cars = Car::where('status', 1)->get();
        return view('front.blogs', compact('cars'));
    }

    public function contact(){
        return view('front.contact');
    }

    public function users(){
        $users = User::all();
        return view('users', compact('users'));
    }
}
