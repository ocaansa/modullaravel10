<?php

namespace App\Http\Controllers;

use App\Charts\EmployeesChart;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(EmployeesChart $chart)
    {
     $pageTitle = 'Home';
     $icon = 'bi bi-person-circle';
        return view('home',[
            'pageTitle' => $pageTitle,
            'icon' => $icon,
            'chart' => $chart->build()
        ]);
    }
}
