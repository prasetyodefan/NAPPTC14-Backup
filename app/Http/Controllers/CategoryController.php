<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;





class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        
        //dd($categories->toArray());
        
        return view('admin.categories',compact('categories'));
        
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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:3',
        ]);

        // Store the category with the name field
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        // Ambil kategori berdasarkan ID
        $category = Category::findOrFail($id);

        // Kembalikan tampilan dengan kategori
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $category = Category::findOrFail($id);

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // validate form
        $request->validate([
            'name' => 'required|min:5'
        ]);

        // find category
        $category = Category::findOrFail($id);

        // update category
        $category->update($request->only('name'));

        // redirect to index
        return redirect()->route('admin.categories.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        // find category
        $category = Category::findOrFail($id);

        // delete category
        $category->delete();

        // redirect to index
        return redirect()->route('admin.categories.index')->with('success', 'Data berhasil dihapus');
    }
}
