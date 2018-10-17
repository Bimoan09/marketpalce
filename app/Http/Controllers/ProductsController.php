<?php
namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $products=Product::when($request->keyword, function($query) use ($request){
            $query->where('name', 'like', "%{$request->keyword}%");
        })->paginate(5);
        return view('admin.product.index',compact('products'));
    }

    // $raws->when($request->has('category_id'), function ($query) use ($request) {
    //     return $query->where('category_id', $request->category_id);
    // });
    // $product = Product::when($request->keyword, function ($query) use ($request) {
    //     $query->where('namaproduct', 'like', "%{$request->keyword}%")
    //         ->orWhere('id', 'like', "%{$request->keyword}%")
    //         ->orWhere('tanggaldibuat', 'like', "%{$request->keyword}%");
    // })->paginate(5);
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menggunakan query builder
        //menemukan kategori id , setelah di temukan di redirect 
        //ke admin.product.create
        $categories=Category::pluck('name','id');
        return view('admin.product.create',compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $formInput=$request->except('image');
//        validation
        $this->validate($request,[
            'name'=>'required',
            'size'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
//        upload gambar, dimana ketika gamber di upload 
//          maka gamber akan tersimpan ke folder images
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }
        Product::create();
        return redirect()->route('product.index');
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
        $product=Product::find($id);
        $categories=Category::pluck('name','id');
        return view('admin.product.edit',compact(['product','categories']));
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
        $product=Product::find($id);
        $formInput=$request->except('image');
//        validation
        $this->validate($request,[
            'name'=>'required',
            'size'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
        //        upload gambar
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }
         $product->update($formInput);
        return redirect()->route('product.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
    public function uploadImages($productId,Request $request)
    {
            
        $product=Product::find($productId);
        //        upload gambar
        $image=$request->file('file');
        if($image){
            $imageName=time(). $image->getClientOriginalName();
            $image->move('images',$imageName);
            $imagePath= "/images/$imageName";
            $product->images()->create(['image_path'=>$imagePath]);
        }
        return "done";
        // Product::create($formInput);
    }
}







