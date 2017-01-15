<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;
use App\Comment;
use App\Tag;
use App\Category;
use DB;

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
      $blogposts = Blogpost::orderBy('created_at')->get();
      return view('blog.admin.dashboard', compact('blogposts'));
    }

    public function addpost()
    {
      return view('blog.admin.addpost');
    }

    public function store(Request $request)
    {
      $post = new Blogpost();
      $post->title = $request->title;
      $post->body = htmlentities($request->body);
      $post->author = $request->author;
      $post->imageURL = $request->imageURL;
      $post->save();

      //Tags
      //$masterTagList = Tag::All()->pluck('name');
      $masterTagList = Tag::All();
      //New Blog Post Tag Requests
      $tagInput = $request->tags;
      $tagInput = strtolower($tagInput);

      $NewPostTags = explode('#', $tagInput);
      $NewPostTags = array_filter($NewPostTags);
      $NewPostTags = array_map('trim', $NewPostTags);

      foreach($NewPostTags as $Tag){
          $TagEntry = Tag::firstOrNew(['name' => $Tag]);
          $TagEntry->tagCount += 1;
          $TagEntry->save();

          $post->tags()->attach($TagEntry);
      }

      //Categories
      $masterCategoryList = Category::All();
      $CategoryInput = $request->categories;
      $CategoryInput = strtolower($CategoryInput);

      $NewPostCategories = explode('#', $CategoryInput);
      $NewPostCategories = array_filter($NewPostCategories);
      $NewPostCategories = array_map('trim', $NewPostCategories);

      foreach($NewPostCategories as $Category){
          $CategoryEntry = Category::firstOrNew(['name' => $Category]);
          $CategoryEntry->categoryCount += 1;
          $CategoryEntry->save();

          $post->categories()->attach($CategoryEntry);
      }
      return redirect('/dashboard');
    }

    public function editpost(Blogpost $blogpost)
    {
      return view('blog.admin.edit', compact('blogpost'));
    }

    public function update(Request $request, Blogpost $blogpost)
    {
      $blogpost = Blogpost::find($request->blogpostID);
      $blogpost->title = $request->title;
      $blogpost->body = htmlentities($request->body);
      $blogpost->author = $request->author;
      $blogpost->imageURL = $request->imageURL;
      $blogpost->save();

      //Tags
      //$masterTagList = Tag::All()->pluck('name');
      $masterTagList = Tag::All();
      //New Blog Post Tag Requests
      $tagInput = $request->tags;
      $tagInput = strtolower($tagInput);

      $NewPostTags = explode('#', $tagInput);
      $NewPostTags = array_filter($NewPostTags);
      $NewPostTags = array_map('trim', $NewPostTags);

      $TagList = array();
      foreach($NewPostTags as $Tag){
          $TagEntry = Tag::firstOrNew(['name' => $Tag]);
          $TagEntry->tagCount += 1;
          $TagEntry->save();
          array_push($TagList, $TagEntry);
      }
      $ids = array();
      foreach($TagList as $ID){
        array_push($ids, $ID->id);
      }
      $blogpost->tags()->sync($ids);

      //Categories
      $masterCategoryList = Category::All();
      $CategoryInput = $request->categories;
      $CategoryInput = strtolower($CategoryInput);

      $NewPostCategories = explode('#', $CategoryInput);
      $NewPostCategories = array_filter($NewPostCategories);
      $NewPostCategories = array_map('trim', $NewPostCategories);

      $CatList = array();
      foreach($NewPostCategories as $Category){
          $CategoryEntry = Category::firstOrNew(['name' => $Category]);
          $CategoryEntry->categoryCount += 1;
          $CategoryEntry->save();
          array_push($CatList, $CategoryEntry);
      }
      $catIds = array();
      foreach($CatList as $ID){
        array_push($catIds, $ID->id);
      }
      $blogpost->categories()->sync($catIds);

      return redirect('/dashboard');
    }

}//End
