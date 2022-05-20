<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response as Res;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AyanshGroupController extends Controller
{
    public function index(){return view('live.index');}
    public function about_us(){return view('live.pages.about_us');}
    public function contact_us(){return view('live.pages.contact');}
    public function faq(){return view('live.pages.faq');}
    public function gallery(){return view('live.pages.gallery');}
    public function locations(){return view('live.pages.locations');}
    public function menu(){return view('live.pages.menu');}
    public function services(){return view('live.pages.services');}
    public function order_now(){return view('live.pages.order_now');}
    public function reservations(){return view('live.pages.reservations');}
}
