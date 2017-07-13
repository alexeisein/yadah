<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Model\User\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::latest()->paginate(10);
        return view('blog.tag.index', compact(['tags']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $tags = Tag::create($request->all());

        session()->flash('success', strtoupper($tags->name) .' Tag has been created');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('blog.tag.edit', compact(['tag']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        if ($request->name == $tag->name || $request->slug == $tag->slug) {
            session()->flash('success', 'No changes made !');
            return redirect()->back();
        }else{
            $this->validate($request,[
                    'name' => 'required|unique:tags,name|max:225',
                    'slug' => 'required|unique:tags,slug|alpha_dash|max:100',
                ]);
        }

        $tag->update($request->all());
        session()->flash('success', 'Tag with the title: ' .strtoupper($tag->name) .' has been successfully updated');

        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        session()->flash('success', 'Tag with the title: ' .strtoupper($tag->name) .' Has been deleted successfully');
        return redirect()->route('tag.index');
    }
}
