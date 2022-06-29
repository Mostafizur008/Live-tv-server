<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Live\Channel;

class HomeController extends Controller
{
    public function Home()
    {
        $data ['allData'] = Channel::all();
        return view('frontend.home.view',$data);
    }
}
