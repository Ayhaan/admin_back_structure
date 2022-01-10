<?php

namespace App\Http\Controllers;

use App\Models\Porfolio;
use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    public function index()
    {
        // $portfolios = Porfolio::all();
        return view("admin.portfolio.main");
    }

    public function create()
    {
        //
    }
    
    public function store()
    {
        //
    }
}
