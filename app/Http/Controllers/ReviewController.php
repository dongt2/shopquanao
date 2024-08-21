<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(StoreReviewRequest $request, Product $product)
    {
        $review = new Review([
            'user_id' => auth()->id(),
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        $product->reviews()->save($review);

        return response()->json(['success' => 'Đánh giá đã được thêm thành công!']);
    }

    public function index(Product $product)
    {
        $reviews = $product->reviews()->with('user')->get();
        return response()->json($reviews);
    }
}

