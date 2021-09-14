<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $sizes = ProductSize::all();
        $colors = ProductColor::all();
        return view('dashboard.products.create', compact('categories', 'sizes', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'weight' => 'required|numeric',
            'kondisi' => 'required',
            'files' => 'required|max:2048',
            'category' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            if (Auth::user()->store?->id) {
                $newProduct =  Product::create([
                    'name' => $request->name,
                    'store_id' => Auth::user()->store->id,
                    'slug' => Str::slug($request->name,),
                    'description' => $request->description,
                    'price' => $request->price,
                    'product_rate' => $request->product_rate,
                    'stock' => $request->stock,
                    'weight' => $request->weight,
                    'kondisi' => $request->kondisi,
                    'status' => $request->status ? 'publish' : 'draft',
                ]);
    
    
                $this->addMultipleVariant($request->file('files'), new ProductImage(), 'image', $newProduct, 'attach');
                $this->addMultipleVariant($request->category, new Category(), 'category', $newProduct, 'attach');
                $this->addMultipleVariant($request->size, new ProductSize(), 'size', $newProduct, 'attach');
                $this->addMultipleVariant($request->color, new ProductColor(), 'color', $newProduct, 'attach');
            return redirect()->route('dashboard.product.index')->with('success', 'Product Created.');

            }else {
                return redirect()->route('dashboard.product.index')->with('info', 'Please Regist Your Store!');
            }
        


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $sizes = ProductSize::all();
        $colors = ProductColor::all();
        return view('dashboard.products.edit', compact('categories', 'sizes', 'colors', 'product'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'weight' => 'required|numeric',
            'kondisi' => 'required',
            'category' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
        $product->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name,),
            'description' => $request->description,
            'price' => $request->price,
            'product_rate' => $request->product_rate,
            'stock' => $request->stock,
            'weight' => $request->weight,
            'kondisi' => $request->kondisi,
            'status' => $request->status ? 'publish' : 'draft',

        ]);
        $this->addMultipleVariant($request->file('files'), new ProductImage(), 'image', $product, 'attach');
        $this->addMultipleVariant($request->category, new Category(), 'category', $product, 'edit');
        $this->addMultipleVariant($request->size, new ProductSize(), 'size', $product, 'edit');
        $this->addMultipleVariant($request->color, new ProductColor(), 'color', $product, 'edit');


        return redirect()->back()->with('success', 'Product Berhasil Diupdate.');

    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addMultipleVariant($items, $model, $variant, $newProduct, $mode)
    {
        $files = [];
        $categorys = [];
        $sizes = [];
        $colors = [];

        if ($items) {

            foreach ($items as $item) {
                if ($items && $variant == "image") {
                    if ($item->isValid()) {
                        $nama_image = md5(now() . "_") . $item->getClientOriginalName();
                        $item->storeAs("/public/img/products_image", $nama_image);
                        $files = $model->create([
                            'product_id' => $newProduct->id,
                            'image_name' => $nama_image,
                        ]);
                    }
                } elseif ($items && $variant == "category") {
                    $newItems = $model->firstOrCreate(
                        ['slug' => Str::slug($item)],
                        ['name' => $item],
                    );
                    if ($mode == 'attach') {
                        $newProduct->categorys()->attach($newItems->id);
                    } else {
                        $categorys[] = [
                            'category_id' => $newItems->id,
                        ];
                    }
                } elseif ($items && $variant == "color") {
                    $newItems = $model->firstOrCreate([
                        'color' => $item,
                    ]);

                    if ($mode == 'attach') {
                        $newProduct->colors()->attach($newItems->id);
                    } else {
                        $colors[] = [
                            'color_id' => $newItems->id,
                        ];
                    }
                } elseif ($items && $variant == "size") {
                    $newItems = $model->firstOrCreate([
                        'size' => $item,
                    ]);
                    if ($mode == 'attach') {
                        $newProduct->sizes()->attach($newItems->id);
                    } else {
                        $sizes[] = [
                            'size_id' => $newItems->id,
                        ];
                    }
                }
            }
        }
        if (!empty($files)) {  
            $latestImageProduct =  $model->where('product_id', $newProduct->id)->first();
            $latestImageProduct->update(['is_thumbnail' => 1]);
        }

        // dd($items);
        if ($items && $mode == "edit"  && $variant == "category") {
            $newProduct->categorys()->sync($categorys);
        } elseif ($items && $mode == "edit"  && $variant == "size") {
            $newProduct->sizes()->sync($sizes);
        } elseif ($items && $mode == "edit"  && $variant == "color") {
            $newProduct->colors()->sync($colors);
        }
    }
}
