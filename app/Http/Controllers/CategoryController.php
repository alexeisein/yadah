<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Model\User\Category;

class CategoryController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('blog.category.index', compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $categories = Category::create($request->all());

        session()->flash('success', strtoupper($categories->name) .' Category has been created');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('blog.category.edit', compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //$categories = Category::findOrFail($category);

        if ($request->slug == $category->slug && $request->name == $category->name) {

            session()->flash('success', 'No changes made !');
            return redirect()->back();

        }else{
            $this->validate($request,[
                    'name' => 'required|unique:categories,slug|max:225',
                    'slug' => 'required|unique:categories,slug|alpha_dash|max:100',
                ]);
        }

        $category->update($request->all());

        session()->flash('success', 'Category with the title: ' .strtoupper($category->name) .' has been successfully updated');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', 'Category with the title: ' .strtoupper($category->name) .' Has been deleted successfully');
        return redirect()->route('category.index');
    }
}
