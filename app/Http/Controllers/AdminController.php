<?php

    namespace App\Http\Controllers;

    use App\Models\Product;
    use Illuminate\Http\Request;

    class AdminController extends Controller
    {
        public function  __construct()
        {

            $this->middleware('is_admin');
        }

        function viewHome()
        {
            return view('admin/home');
        }

        function viewAllProduct()
        {
            $products = Product::all();
//            dd($products);
            return view('admin/product/index',['products'=>$products]);
        }

        function viewSettings(){
            return view('admin/settings');
        }

        function viewOrders(){

        }
        function viewDashboard(){

        }
    }
