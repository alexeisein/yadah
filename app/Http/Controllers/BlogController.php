<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use App\Model\User\Post;
use File;
use Image;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest('id')->paginate(6);
        return view('blog.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
                'title' => 'required|min:3|max:255',
                'subtitle' => 'max:225',
                'description' => 'required|min:10|max:3000',
                'slug' => 'required|unique:posts,slug|alpha_dash|max:100',
                'post_image' => 'mimes:jpeg,png,jpg|max:1999',
            ]);

            $posts = new Post;
            $posts->title = $request->title;
            $posts->subtitle = $request->subtitle;
            $posts->description = $request->description;
            $posts->slug = $request->slug;

            // Validate Image & rename
            if ($request->hasFile('post_image')) {
               $image = $request->file('post_image');
               $filename = time().'.'.$image->getClientOriginalExtension();//you can use postname or id intead of time()
               $location = public_path('yadah/images/post/'.$filename);

            // Delete current image before uploading new image
               // if ($posts->post_image !== 'avatar.jpg') {
               //     $file = 'images/post/'.$posts->post_image;
               //     if (File::exits($file)) {
               //         unlink($file);
               //     }
               // }

               Image::make($image)->save($location);
               $posts->post_image = $filename;

           }

            $posts->save();

            session()->flash('success', 'NEW BLOG: ' .strtoupper($posts->title) .' has been created !');

            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('blog.show', compact(['posts']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('blog.edit', compact(['posts']));
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

            $posts = Post::findOrFail($id);

            if ($request->slug == $posts->slug)
            {
                $this->validate($request,[
                        'title' => 'required|min:3|max:255',
                        'subtitle' => 'max:225',
                        'description' => 'required|min:10|max:3000',
                        'post_image' => 'mimes:jpeg,png,jpg|max:1999',
                    ]);

                // session()->flash('success', 'No modification has been made on this post');
                // return redirect()->back();

            }else{
                $this->validate($request,[
                    'title' => 'required|min:3|max:255',
                    'subtitle' => 'max:225',
                    'description' => 'required|min:10|max:3000',
                    'slug' => 'required|unique:posts,slug|alpha_dash|max:100',
                    'post_image' => 'mimes:jpeg,png,jpg|max:1999',
                    ]);

            }

        $posts = Post::findOrFail($id);

        $posts->title = $request->title;
        $posts->subtitle = $request->subtitle;
        $posts->description = $request->description;
        $posts->slug = $request->slug;

        // this is to check if there's a file
        if ($request->hasFile('post_image')) {
           $image = $request->file('post_image');
           $filename = time().'.'.$image->getClientOriginalExtension();//you can use postname or id intead of time()
           $location = public_path('yadah/images/post/'.$filename);

           // Delete current image before uploading new image
              // if ($posts->post_image > 1) {
              //     $file = 'images/post/'.$posts->post_image;
              //     if (File::exits($file)) {
              //         unlink($file);
              //     }
              // }

           Image::make($image)->save($location);
           $oldfile = $posts->post_image;
           $posts->post_image = $filename;
           Storage::delete($oldfile);


       }

        $posts->save();
        //$posts->update($request->all());

        session()->flash('success', 'Blog with the title: ' .strtoupper($posts->title) .' has been successfully updated');

        // return redirect()->back();
        return redirect()->route('blog.show', $posts->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();

        session()->flash('success', 'Blog with the title: ' .strtoupper($posts->title) .' Has been deleted successfully');
        return redirect()->route('blog.index');
    }
}
