<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Models\Property;
use App\Models\Multi_image;
use App\Models\Privacy;
class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.home');
    }
    public function pages()
    {
        return view('front.page.page');
    }
    public function blogs()
    {
        return view('front.blog.blog');
    }
    public function blogDetails()
    {
        return view('front.blog.blog_details');
    }
    public function about()
    {
        $privacy=Privacy::select('id','name','image','title')->get();
        return view('front.about.about',compact('privacy'));
    }
    public function contact()
    {
        return view('front.contact.contact');
    }

}
