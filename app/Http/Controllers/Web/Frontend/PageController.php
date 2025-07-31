<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function course()
    {
        return view('frontend.layouts.course.index');
    }
    public function courseDetail(){
        return view('frontend.layouts.course.detail');
    }

}
