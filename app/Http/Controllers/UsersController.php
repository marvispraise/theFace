<?php

namespace App\Http\Controllers;

use App\AdBanner;
use App\BestSeller;
use App\Blog;
use App\Category;
use App\FeaturedProduct;
use App\HotDeal;
use App\Product;
use App\Upload_Banner;
use App\Upload_Index_Banner;
use App\UploadIndexBanner;
use Darryldecode\Cart\Facades\CartFacade;
use App\Upload_Section_Product_Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function home(){

        $index_banners = UploadIndexBanner::all();
        $banners = Upload_Banner::latest()->limit(1)->get();
        $blogs = Blog::all();
        $hDeals = HotDeal::all();
       // dd($hDeals[0]->end_date - time());
      $hDeals = HotDeal::where("end_date",">",time())->get();

     // dd($hDeals);
        $hotDeals = array();
        foreach ($hDeals as $hDeal){
            $hotDeals[] = array(
                'date' => $hDeal->end_date,
                'products' => Product::where('unique_id', $hDeal->product_id)->get()
            );
        }

        $fProducts = array();
        $featuredProducts = FeaturedProduct::all();
        foreach ($featuredProducts as $featuredProduct){
            $fProducts[] = array(
                'products' => Product::where('unique_id', $featuredProduct->product_id)->get()
            );
        }

        $bestSellers = array();
        $sellers = BestSeller::all();
        foreach ($sellers as $seller){
            $bestSellers[] = array(
                'bSellers' => Product::where('unique_id', $seller->product_id)->get()
            );
        }



        return view('users/index',[
            'index_banners' => $index_banners,
            'fProducts' => $fProducts,
            'bestSellers' => $bestSellers,
            'banners'  => $banners,
            'blogs'  => $blogs,
            'hotDeals' => $hotDeals
        ]);
    }

    public function about(){
       return view('users.about') ;
    }

    public function contact(){
        return view('users.contact');
    }
//

}
