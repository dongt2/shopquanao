<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(12);

//        $categoriesHeader = Product::query()->select('products.*','categories.id' , 'categories.name as category_name')
//            ->join('categories', 'categories.id', '=', 'category_id')
//            ->get();

//        dd($categoriesHeader);
        return view('user.home', compact('products'));
    }


    public function search(Request $request)
    {
        $products = Product::where('name', 'like', '%'.$request->search.'%')->get();

        return response()->json([
            'message' => 'success',
            'data' => $products,
            'status' => 200
        ], 200);
    }

    public function category(string $id)
    {


        $categories = Product::query()->select('products.*','categories.id' , 'categories.name as category_name')
            ->join('categories', 'categories.id', '=', 'category_id')
            ->where('category_id', $id)
            ->paginate(12);

        return view('user.product.product', compact( 'categories'));

    }

    public function show(string $id)
    {
        $product = Product::find($id);
        $reviews = $product->review()->with('user')->get();
        $user = auth()->user();


        return view('user.product.show', compact('product', 'reviews', 'user'));
    }

    public function store(StoreReviewRequest $request, Product $product)
    {
        $review = new Review([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        $product->review()->save($review);

        return redirect()->route('product.show', $product->id)->with('success', 'Đánh giá đã được thêm thành công!');
    }
}
