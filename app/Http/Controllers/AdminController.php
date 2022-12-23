<?php

    namespace App\Http\Controllers;

    use App\Imports\ProductsImport;
    use App\Models\Product;
    use Illuminate\Http\Request;
    use Maatwebsite\Excel\Facades\Excel;

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

        function importProductsExcel(Request $request){
            $fileExcel = $request->file('fileExcel');
            Excel::import(new ProductsImport, $fileExcel);
            return redirect()->back();
        }

        function viewSettings(){
            return view('admin/settings');
        }

        function viewOrders(){

        }
        function viewDashboard(){

        }
    }
