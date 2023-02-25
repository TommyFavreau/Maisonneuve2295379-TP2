<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Etudiant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::select()
            ->paginate(15);
        return view('blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'sometimes|max:150',
            'body' => 'sometimes|max:255',
            'title_fr' => 'sometimes|max:150',
            'body_fr' => 'sometimes|max:255',
            'date' => 'sometimes|date_format:Y-m-d|before:tomorrow|after:yesterday',
            'user_id' => 'sometimes|exists:users',
        ]);

        if (empty($request->title) && empty($request->body) && empty($request->title_fr) && empty($request->body_fr)) {
            return redirect()->route('blog.create')->withErrors(trans('lang.error_modify'));
        } else {
            $user_id = (Auth::user()) ? Auth::user()->id : null;
            $title = ($request->title) ? $request->title : "";
            $body = ($request->body) ? $request->body : "";
            $title_fr = ($request->title_fr) ? $request->title_fr : "";
            $body_fr = ($request->body_fr) ? $request->body_fr : "";
            $date = Carbon::now();


            $newPost = Blog::create([
                'title' => $title,
                'body'  => $body,
                'title_fr' => $title_fr,
                'body_fr'  => $body_fr,
                'user_id' => $user_id,
                'date' => $date
            ]);
        }
        return redirect(route('blog.show', $newPost->id, ['blog' => $newPost]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        // $query = Blog::select()
        // ->where('id', '=', $blog)
        // ->get();

        return view('blog.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {

        return view('blog.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'sometimes|max:150',
            'body' => 'sometimes|max:255',
            'title_fr' => 'sometimes|max:150',
            'body_fr' => 'sometimes|max:255',
            'date' => 'sometimes|date_format:Y-m-d|before:tomorrow|after:yesterday',
            'user_id' => 'sometimes|exists:users',
        ]);

        if (empty($request->title) && empty($request->body) && empty($request->title_fr) && empty($request->body_fr)) {
            return redirect()->route('blog.edit', $blog->id)->withErrors(trans('lang.error_modify'));
        } else {

            // $user_id = (Auth::user()) ? Auth::user()->id : null;
            $title = ($request->title) ? $request->title : "";
            $body = ($request->body) ? $request->body : "";
            $title_fr = ($request->title_fr) ? $request->title_fr : "";
            $body_fr = ($request->body_fr) ? $request->body_fr : "";
            // $date_modified = Carbon::now();

            $blog->update([
                'title' => $title,
                'title_fr' => $title_fr,
                'body' => $body,
                'body_fr' => $body_fr,
            ]);
        }
        return redirect(route('blog.show', $blog->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect(route('blog.index'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myBlogs(Blog $blog, User $user)
    {
        $user = Auth::User()->id;
        $blogs = Blog::where('user_id', '=', $user)
            ->paginate(15);

        return view('blog.user', ['blogs' => $blogs, 'user' => $user]);
    }
}
