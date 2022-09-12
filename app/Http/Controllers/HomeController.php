<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Facade\FlareClient\View;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $posts = Post::orderBy('id','desc')->where('user_id',$user_id)->get();
        
        return view('home')->with('posts',$posts);
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('home');

    }
}
