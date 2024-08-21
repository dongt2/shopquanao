<?php

namespace App\Http\Controllers\admin\products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    const PATH_VIEW = 'admin.products.';
    const PATH_UPLOAD = 'products';
    public function index()
    {
        $products = Product::query()->select('products.*', 'categories.name as category_name')
            ->join('categories', 'categories.id', '=', 'category_id')
            ->latest()
            ->paginate(10);
//        dd($products);
        return view(self::PATH_VIEW . __FUNCTION__, compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'name.required' => 'Tên sản phẩm không được để trống',
            'category_id.required' => 'Danh mục không được để trống',
            'price.required' => 'Giá sản phẩm không được để trống',
            'price.integer' => 'Giá sản phẩm phải là số',
            'price.min' => 'Giá sản phẩm phải lớn hơn 0',
            'quantity.required' => 'Số lượng sản phẩm không được để trống',
            'quantity.integer' => 'Số lượng sản phẩm phải là số',
            'quantity.min' => 'Số lượng sản phẩm phải lớn hơn 0',
            'description.required' => 'Mô tả sản phẩm không được để trống',
            'image.required' => 'Ảnh sản phẩm không được để trống',
            'image.image' => 'Ảnh sản phẩm phải là 1 file ảnh',
            'image.mimes' => 'Ảnh sản phẩm phải có định dạng jpeg, png, jpg, gif, svg',
            'image.max' => 'Ảnh sản phẩm không được vượt quá 2MB',
        ]);

        $linkImage = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image->move(public_path($destinationPath), $name);

            $linkImage = $destinationPath . $name;
        }
        $data = $request->all()
            + ['cover_image' => $linkImage];

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Thêm sản phẩm thành công');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view(self::PATH_VIEW . __FUNCTION__);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::query()->find($id);
        $categories = Category::all();

        return view(self::PATH_VIEW . __FUNCTION__, compact('product', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'name.required' => 'Tên sản phẩm không được để trống',
            'category_id.required' => 'Danh mục không được để trống',
            'price.required' => 'Giá sản phẩm không được để trống',
            'price.integer' => 'Giá sản phẩm phải là số',
            'price.min' => 'Giá sản phẩm phải lớn hơn 0',
            'quantity.required' => 'Số lượng sản phẩm không được để trống',
            'quantity.integer' => 'Số lượng sản phẩm phải là số',
            'quantity.min' => 'Số lượng sản phẩm phải lớn hơn 0',
            'description.required' => 'Mô tả sản phẩm không được để trống',
            'image.required' => 'Ảnh sản phẩm không được để trống',
            'image.image' => 'Ảnh sản phẩm phải là 1 file ảnh',
            'image.mimes' => 'Ảnh sản phẩm phải có định dạng jpeg, png, jpg, gif, svg',
            'image.max' => 'Ảnh sản phẩm không được vượt quá 2MB',
        ]);

        $product = Product::where('id', $id)->first();

        $linkImage = $product->cover_image;
        if ($request->hasFile('image')) {
            File::delete(public_path($product->cover_image));

            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'images/';
            $image->move(public_path($destinationPath), $name);

            $linkImage = $destinationPath . $name;
        }
        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'cover_image' => $linkImage
        ];

        Product::where('id', $id)->update($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Cập nhật sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::where('id', $id)->first();
        if ($product->first()->cover_image != null && $product->first()->cover_image != '') {
            File::delete(public_path($product->cover_image));

        }
        $product->delete();
        return redirect()->route('admin.products.index')
            ->with('success', 'Xóa sản phẩm thành công');
    }
}
