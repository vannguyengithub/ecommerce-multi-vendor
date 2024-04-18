<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Image;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function AllBlog() {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.blogs_all', compact('blogs'));
    }//end methods

    public function AddBlog() {
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blogs.blogs_add', compact('categories'));
    }//end methods

    public function StoreBlog(Request $request) {
        $request->validate([
            'blog_title' => 'required',
        ], [
            'blog_title.required' => 'Blog Title is Required',
        ]);


        if($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(430, 327)->save('upload/blogs/'.$name_gen);

            $save_url = 'upload/blogs/'.$name_gen;

            Blog::insert([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Blog Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog')->with($notification);
        }
    }// end methods

    public function EditBlog($id) {
        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blogs.blogs_edit', compact('blogs', 'categories'));
    }// end methods

    public function UpdateBlog(Request $request) {
        $blog_id = $request->id;

        if($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(430, 327)->save('upload/blogs/'.$name_gen);

            $save_url = 'upload/blogs/'.$name_gen;

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_description' => $request->blog_description,
                'blog_tags' => $request->blog_tags,
                'blog_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Blog Updated With Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.blog')->with($notification);
        } else {

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_description' => $request->blog_description,
                'blog_tags' => $request->blog_tags,
            ]);

            $notification = array(
                'message' => 'Blog Updated With Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.blog')->with($notification);
        }
    }//end methods

    public function DeleteBlog($id) {
        $blog = Blog::findOrFail($id);
        $img = $blog->blog_image;
        unlink($img);

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//end methods

    public function BlogDetails($id) {
        $allblogs  = Blog::latest()->limit(5)->get();
        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('frontend.blog_details', compact('blogs', 'allblogs', 'categories'));
    }//end Methods

    public function CategoryBlog($id) {
        $allblogs  = Blog::latest()->limit(5)->get();
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        $categoryname = BlogCategory::findOrFail($id);
        $blogpost = Blog::where('blog_category_id', $id)->orderBy('id', 'DESC')->get();
        return view('frontend.cat_blog_details', compact('blogpost', 'allblogs', 'categories', 'categoryname'));
    }// end Methods
}
