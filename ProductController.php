<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::select('select * from products');
        return view('product/product_display',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function insert()
    {
        return view('product_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertform(Request $request)
    {
         $product = new Product();
        $product->productid = request('pid');
        $product->Name = request('pname');
        $product->model = request('model');
        $product->status = request('status');
        $destinationPath = 'images/';
        $fileName= $request->file->getClientOriginalName();
        $fileName= time().'.'.$fileName;
        $fileSize= $request->file->getClientSize();
        $request->file->storeAs('public/images',$fileName);
        $product->File=$fileName;
        $product->save();
        return redirect()->action('ProductController@index',['id'=>0]);
    }

    /**
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = DB::select('select * from products where id = ?',[$id]);
        return view('product/product_update',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $productid = $request->input('pid');
       $name = $request->input('pname');
         $model = $request->input('model');
        
        $status = $request->input('status');
        $editid = $request->input('editid');
        
        if($request->hasFile('image')!=""){
            $fileName= $request->image->getClientOriginalName();
            $fileName= time().''.$fileName;
            $fileSize= $request->image->getClientSize();
            $request->image->storeAs('public/images',$fileName);
            $file=$fileName;
        }else{
            $file = $request->input('file');
        }
        
           $data = array("name"=>$name,"model"=>$model,"status"=>$status,"file"=>$file,"productid"=>$productid);
         // Update
           product::updateData($editid, $data);
           Session::flash('message','Update successfully.');
           return redirect()->action('ProductController@index',['id'=>0]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        
         return redirect()->action('ProductController@index',['id'=>0]);
    }
}
