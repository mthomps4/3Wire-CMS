<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;
use App\Comment;
use App\Tag;
use App\Category;

class blogpostController extends Controller
{
  public function index()
      {
        $posts = Blogpost::All();
        //For SideBar Content
        $tags = Tag::All();
        $categories = Category::All();
        $postsByDate = Blogpost::orderBy('created_at')->get();

        $posts_by_date = Blogpost::all()->groupBy(function($date) {
          return $date->created_at->format('F-Y');
        });

        return view('blog.index', compact('posts', 'tags', 'categories', 'postsByDate', 'posts_by_date'));
      }

  public function show(Blogpost $blogpost)
    {
      $blogpost->load('comments');
      $blogpost->load('tags');
      $blogpost->load('categories');

      //For SideBar Content
      $tags = Tag::All();
      $categories = Category::All();
      $postsByDate = Blogpost::orderBy('created_at')->get();

      $posts_by_date = Blogpost::all()->groupBy(function($date) {
        return $date->created_at->format('F-Y');
      });

      return view('blog.post', compact('blogpost', 'tags', 'categories', 'postsByDate', 'posts_by_date'));
    }


    //ADMIN ROUTE CONTROLLERS
    public function showDashboard()
    {
      return view('blog.admin.dashboard');
    }

}
