<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\WinkPages;

class GithubController extends Controller
{
    public function index()
    {
        return view('github/home');
    }

    public function laravel()
    {
        $data['page'] = WinkPages::where('slug', "=", 'laravel')->first();
        return view('github/laravel', $data);
    }

    public function tailwind()
    {
        $data['page'] = WinkPages::where('slug', "=", 'tailwind')->first();
        return view('github/tailwind', $data);
    }

    public function gardening()
    {
    	$data['page'] = WinkPages::where('slug', "=", 'gardening')->first();
        return view('github/gardening', $data);
    }

    public function london()
    {
    	$data['page'] = WinkPages::where('slug', "=", 'london')->first();
        return view('github/london', $data);
    }
}
