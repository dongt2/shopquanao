<?php

namespace App\Http\Controllers\admin\categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->paginate(10);

        return view('admin.categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:categories,name'
        ],[
            'name.required' => 'Không được để trống tên',
            'name.string' => 'Category name must be a string',
            'name.max' => 'Không được vượt quá 20 kí tự',
            'name.unique' => 'Tên danh mục đã tồn tại',
        ]);

        $data = [
          'name' => $request->name,
            'created_at' => now(),
        ];
//        dd($data);
        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được tạo thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::where('id', $id)->first();

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|unique:categories,name'
        ],[
            'name.required' => 'Không được để trống tên',
            'name.string' => 'Category name must be a string',
            'name.max' => 'Không được vượt quá 20 kí tự',
            'name.unique' => 'Tên danh mục đã tồn tại',
        ]);

        $data = [
            'name' => $request->name,
            'updated_at' => now(),
        ];

        Category::where('id', $request->id)->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được cập nhật thành công');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Danh mục đã được xóa thành công');
    }
}
