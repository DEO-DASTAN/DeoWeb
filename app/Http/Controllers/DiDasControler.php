<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiDasControler extends Controller
{
      public function about()
      {
            return view('about');
      }

      public function contact()
      {
            return view('contact');
      }

      public function post_detail()
      {
            return view('post_detail');
      }

      public function blog_entries()
      {
            return view('blog_entries');
      }
      public function home()
      {
          return view('index');
      }

      public function login()
      {
          return view('login');
      }
}
