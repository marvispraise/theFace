<?php

namespace App\Http\Controllers;

use App\BestSeller;
use App\Category;
use App\FeaturedProduct;
use App\HotDeal;
use App\Product;
use App\Testimonial;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /////////////////////////////////////////////

    public function category()
    {
        return view('admin/category');
    }

    public function categoryUpload(Request $request)
    {
        request()->validate([
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $category = new Category();
        $category->image = $imageName;
        $category->unique_id      = Uuid::generate();
        $category->category_name      = $request->category;
        $category->save();

        return back()
            ->with('success','Successfully uploaded.');
    }

    public function listCategory(){
        $categories = Category::all();
        return view('admin/list_category', ['categories' => $categories]);
    }

    public function editCat($id){

        $category = Category::find($id);

        return view('admin/edit_cat', ['category' => $category]);
    }

    public function editCategory($id, Request $request) {
        request()->validate([
            'category' => 'required',

        ]);

        $cat = Category::find($id);
        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
            $cat->image       = $imageName;

        }
        $cat->category_name     = $request->get('category');

        $cat->save();


        return redirect()->route('listCategory')
            ->with('success','Successfully updated.');
    }

    public function deleteCategory($id) {
        $cat = Category::find($id);
        $cat->delete();


        return redirect()->route('listCategory')
            ->with('success','Successfully deleted.');
    }



    public function view (){
        $categories = Category::all();
        return view('admin/product', ['categories' => $categories]);
    }


//
//    public function editCategory(){
//        return view('admin/edit_category');
//    }

    public function store (Request $request){

        request()->validate([
            'category' => 'required',
            'name' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time(). '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $store = new Product();
        $store->product_image           = $imageName;
        $store->unique_id               = Uuid::generate();
        $store->category_id             = $request->category;
        $store->name                    = $request->name;
        $store->price                   = $request->price;
        if ($request->discount){
            $store->discount            = $request->discount;
        }else{
            $store->discount = 0;
        }
        if ($request->availability){
            $store->availability               = $request->availability;
        }else{
            $store->availability               = 0;
        }
        $store->save();

        if ($request->featuredProduct){
            $fProduct = new FeaturedProduct();
            $fProduct->product_id = $store->unique_id;
            $fProduct->save();
        }

        if ($request->bestSeller){
            $bSeller = new BestSeller();
            $bSeller->product_id = $store->unique_id;
            $bSeller->save();
        }

        return back()
            ->with('success','Successfully Uploaded Product.');

    }

    public function list_product(){
        $products = Product::all();
        return view('admin/list_product', ['products' => $products]);
    }

    public function edit_product($id){

        $product = Product::find($id);
        $categories = Category::all();

        return view('admin/edit_product', ['product' => $product, 'categories' => $categories]);
    }

    public function editProduct($id, Request $request) {
        request()->validate([
            'category' => 'required',
            'name' => 'required',
            'price' => 'required',
            'availability' => 'required',

        ]);

        $store = Product::find($id);

        if($request->has("image")){

            $imageName = time(). '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
            $store->product_image       = $imageName;

        }

        $store->category_id             = $request->category;
        $store->name                    = $request->name;
        $store->price                   = $request->price;
        if ($request->discount){
            $store->discount            = $request->discount;
        }else{
            $store->discount = 0;
        }
        if ($request->availability){
            $store->availability               = $request->availability;
        }else{
            $store->availability               = 0;
        }
        $store->save();

        return redirect()->route('list_product')
            ->with('success','Successfully updated.');
    }

    public function deleteProduct($id) {
        $cat = Product::find($id);
        $cat->delete();


        return redirect()->route('list_product')
            ->with('success','Successfully deleted.');
    }

    /////////////////////////////////////////////////////////////////////
    ///
    public function viewTest() {
        return view('admin/testimonial');
    }

    public function upTest(Request $request) {
        request()->validate([
            'testimony' => 'required',
            'testifier' => 'required',
        ]);

        $test = new Testimonial();
        $test->testimony             = $request->testimony;
        $test->testifier             = $request->testifier;
        $test->save();

        return back()
            ->with('success','Successfully Uploaded Product.');
    }

    public function listTest(){
        $tests = Testimonial::all();
        return view('admin/list_test',['tests' => $tests]);
    }

    public function edit_test($id){

        $test = Testimonial::find($id);

        return view('admin/edit_test', ['test' => $test]);
    }

    public function editTest($id, Request $request) {
        request()->validate([
            'testimony' => 'required',
            'testifier' => 'required',
        ]);

        $cat = Testimonial::find($id);
        $cat->testimony     = $request->get('testimony');
        $cat->testifier     = $request->get('testifier');

        $cat->save();


        return redirect()->route('listTest')
            ->with('success','Successfully updated.');
    }

    public function deleteTest($id) {
        $cat = Testimonial::find($id);
        $cat->delete();


        return redirect()->route('listTest')
            ->with('success','Successfully deleted.');
    }

    ///////////////////////////////

    public function productDetails($id){
        $product = Product::find($id);
        $relatedProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->get();
        return view('users.single-product', ['product' => $product, 'relatedProducts' => $relatedProducts]);

    }

    public function viewProduct($category){
//        $testimonials = Testimonial::all();
//        $sProducts = Product::where('special_product',1);
        $categories = Category::all();
        $cat= Category::find($category);
        $categoryProducts = array();
            $categoryProducts[] = array(
                'category_id' => $cat->unique_id,
                'category_name' => $cat->category_name,
                'category_image' => $cat->image,
                'category_products' =>  Product::where('category_id', $cat->unique_id)->get()
            );

        return view('users.shop',
            [
                'categories' => $categories,
                'categoryProducts' => $categoryProducts,
                'cat' => $cat,
            ]);

    }


    public function search(Request $request){

         $searchs = Product::where('name','LIKE', '%'.$request->search.'%')->get();
//        dd($search_results);

        return view('users.search',
            [
                'searchs' => $searchs,
            ]);


    }
     public function searchP(Request $request){

         if($request->ajax()) {

             $data = Product::where('name', 'LIKE', '%'. $request->product.'%')
                 ->get();

             $output = '';

             if (count($data)>0) {

                 $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                 foreach ($data as $row){

                     $output .= '<li class="list-group-item">'.$row->name.'</li>';
                 }

                 $output .= '</ul>';
             }
             else {

                 $output .= '<span class="list-group-item">'.'No results'.'</span>';
             }

             return $output;
         }


//            return view('users.search',
//                [
//                    'searchs' => $searchs,
//                ]);


    }


    public function hotDeal()
    {
        $data['products']= Product::all();
        return view('admin.hot_deal',$data);
    }

    public function saveHotDeal(Request $request){

        request()->validate([
            'product' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $cat = new HotDeal();
        $cat->product_id     = $request->get('product');
        $cat->start_date     = strtotime($request->get('start_date'));
        $cat->end_date     = strtotime($request->get('end_date'));

        $cat->save();


        return redirect()->route('hotDeal')
            ->with('success','Successfully Added Hot Deal Product.');

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
