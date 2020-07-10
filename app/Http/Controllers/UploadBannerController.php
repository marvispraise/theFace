<?php

namespace App\Http\Controllers;

use App\Ad_Banner;
use App\AdBanner;
use App\Blog;
use App\Category;
use App\OrderItem;
use App\Product;
use App\Upload_Banner;
use App\Upload_Index_Banner;
use App\Upload_Section_Product_Image;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Webpatser\Uuid\Uuid;

class UploadBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    ////////////////////////
    ///
    public function viewBanner()
    {
        return view('admin/upload_banner');
    }

    public function imageUploadPost(Request $request)
    {

        request()->validate([
            'subtitle' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $image_upload = new Upload_Banner();

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName);

        $image_upload->image            = $imageName;
        $image_upload->subtitle            = $request->subtitle;
        $image_upload->title               = $request->title;
        $image_upload->description         = $request->description;
        $image_upload->save();

        return back()
            ->with('success','You have successfully upload image.');
    }

    public function listBanner(){
        $banners = Upload_Banner::all();
        return view('admin/list_banner', ['banners' => $banners]);
    }

    public function edit_banner($id){

        $banner = Upload_Banner::find($id);

        return view('admin/edit_banner', ['banner' => $banner]);
    }

    public function editBanner($id, Request $request) {
        request()->validate([
            'subtitle' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $cat = Upload_Banner::find($id);
        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
            $cat->image       = $imageName;

        }
        $cat->subtitle     = $request->get('subtitle');
        $cat->title     = $request->get('title');
        $cat->description     = $request->get('description');

        $cat->save();


        return redirect()->route('listBanner')
            ->with('success','Successfully updated.');
    }

    public function deleteBanner($id) {
        $cat = Upload_Banner::find($id);
        $cat->delete();


        return redirect()->route('listBanner')
            ->with('success','Successfully deleted.');
    }

    ///////////////////////////////////////
    ///
    public function view(){
        return view('admin/upload_index_banner');
    }

    public function imageUpload(Request $request){
        request()->validate([
            'text1' => 'required',
            'text2' => 'required',
            'text3' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image_upload = new Upload_Index_Banner();

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $image_upload->image     = $imageName;
        $image_upload->text1     = $request->get('text1');
        $image_upload->text2     = $request->get('text2');
        $image_upload->text3     = $request->get('text3');
        $image_upload->save();
        return back()
            ->with('success','You have successfully uploaded the image.');
    }

    public function list_index(){
        $banners = Upload_Index_Banner::all();
        return view('admin/list_index', ['banners' => $banners]);
    }

    public function edit_index($id){

        $banner = Upload_Index_Banner::find($id);

        return view('admin/edit_index', ['banner' => $banner]);
    }

    public function editIndex($id, Request $request) {
        request()->validate([
            'text1' => 'required',
            'text2' => 'required',
            'text3' => 'required',
        ]);

        $cat = Upload_index_Banner::find($id);
        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
            $cat->image       = $imageName;

        }

        $cat->text1     = $request->get('text1');
        $cat->text2     = $request->get('text2');
        $cat->text3     = $request->get('text3');
        $cat->save();

        return redirect()->route('list_index')
            ->with('success','Successfully updated.');
    }

    public function deleteIndex($id) {
        $cat = Upload_index_Banner::find($id);
        $cat->delete();


        return redirect()->route('list_index')
            ->with('success','Successfully deleted.');
    }


    /////////////////////////////////////////////
    ///
    public function viewSection(){
        return view('admin.upload_blog_post');
    }

    public function storeSectionImage(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $store = new Blog();
        $store->img               = $imageName;
        $store->unique_id               = Uuid::generate();
        $store->title               = $request->get('title');
        $store->category               = $request->get('category');
        $store->content               = $request->get('content');

        $store->save();

        return back()
            ->with('success','You have successfully upload image.');
    }

    public function list_section(){
        $banners = Blog::all();
        return view('admin/list_blog', ['banners' => $banners]);
    }

    public function edit_section($id){

        $banner = Blog::find($id);

        return view('admin.edit_blog', ['banner' => $banner]);
    }

    public function editSection($id, Request $request) {
        request()->validate([
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
        ]);

        $cat = Blog::find($id);
        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
            $cat->image       = $imageName;

        }
        $cat->title     = $request->get('title');
        $cat->category   = $request->get('category');
        $cat->content      = $request->get('content');
        $cat->save();

        return redirect()->route('list_blog')
            ->with('success','Successfully updated.');
    }

    public function deleteSection($id) {
        $cat = Blog::find($id);
        $cat->delete();


        return redirect()->route('list_blog')
            ->with('success','Successfully deleted.');
    }

    public function list_order(){
//        $orders = [];
//        $products = Product::all();
            $orders = OrderItem::all();


        return view('admin/list_order', ['orders' => $orders]);
    }

    public function deleteOrder($id) {
        $cat = OrderItem::find($id);
        $cat->delete();

        return redirect()->route('list_order')
            ->with('success','Successfully deleted.');
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
