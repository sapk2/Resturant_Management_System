<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $menu=Menu::all();
        $dish=Dishes::all();
        return view('/',compact('menu','dish'));
    }
}
