<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about');
    }

    public function register()
    {
        return "register page";
    }

    public function login()
    {
        return "login page";
    }

    public function product()
    {
        $products = ['name' => 'iphone', 'price' => 123];
        return view('about', compact('products'));
    }
}
