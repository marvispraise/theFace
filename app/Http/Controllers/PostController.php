<?php

namespace App\Http\Controllers;

use App\Blog;
use App\SubscribedUser;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog_details($id)
    {
        $blogs= Blog::all();
        $blog = Blog::find($id);
        $relatedPosts = Blog::where('category', $blog->category)->where('id', '!=', $blog->id)->get();
//        dd($relatedPosts);

        return view('users.blog-details', ['blog' => $blog, 'relatedPosts' => $relatedPosts, 'blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);
        $input = new SubscribedUser();
        $input->email = $request->email;

        $input->save();

        return response()->json(['success'=>'You have successfully Subscribed, you will get an email soon !']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogView()
    {
        $blogs = Blog::all();
        return view('users.blog-list',['blogs' => $blogs]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
