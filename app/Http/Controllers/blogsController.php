<?php

namespace App\Http\Controllers;

use App\blogs;
use App\Http\Resources\blog as blogResource;
use Illuminate\Http\Request;

class blogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Blogs
        $blogs = blogs::paginate(15);
        //return the blogs as a resource
        return blogResource::collection($blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = $request->isMethod('put') ? blogs::findOrFail($request->blog_id) : new blogs;
        $blog->id = $request->input('blog_id');
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        if ($blog->save()) {
            return new blogResource($blog);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get single blog
        $blog = blogs::findOrFail($id);
        //return the blog as a resource
        return new blogResource($blog);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get single blog
        $blog = blogs::findOrFail($id);

        if ($blog->delete()) {
            return new blogResource($blog);
        }

    }
}
