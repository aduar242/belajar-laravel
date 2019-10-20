<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // pengecekan autotentifikasi
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $product = Product::count();
        $request->user()->authorizeRoles(['employee', 'manager', 'admin']);
        return view('home', compact('product'));
    }

    /*
  public function someAdminStuff(Request $request)
  {
    $request->user()->authorizeRoles('manager');
    return view(‘some.view’);
  }
  */
}
