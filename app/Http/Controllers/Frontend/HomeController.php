<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use View;


class HomeController extends Controller
{

   public function index()
   {
      $latest_news = Blog::where('category', 'Latest News')->where('status', 1)->orderby('created_at', 'desc')->take(4)->get();
      return View::make('frontend.index', compact('latest_news'));
   }

   public function About()
   {
     
      return View::make('frontend.about');
   }


   public function Services()
   {
     
      return View::make('frontend.services');
   }


   public function Portfolio()
   {
     
      return View::make('frontend.portfolio');
   }

   public function Blog()
   {
     
      return View::make('frontend.blog');
   }

   public function Contact()
   {
     
      return View::make('frontend.contact');
   }
   // News Details
   public function viewNews(Blog $blog)
   {
      return view('frontend.newsDetails', compact('blog'));
   }


}
