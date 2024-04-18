<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory() {
        $blogcategory = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all', compact('blogcategory'));
    } // end Methods

    public function AddBlogCategory() {
        return view('admin.blog_category.blog_category_add');
    } // end Methods

    public function StoreBlogCategory(Request $request) {
        $request->validate([
            'blog_category' => 'required',
        ], [
            'blog_category.required' => 'blog category Name is Required',
        ]);
        BlogCategory::insert([
            'blog_category' => $request->blog_category,
        ]);
        $notification = array(
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.blog.category')->with($notification);
    } // end Methods

    public function EditBlogCategory($id) {
        $blogcategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit', compact('blogcategory'));
    } // end Methods

    public function UpdateBlogCategory(Request $request) {
        $blog_category_id = $request->id;

        BlogCategory::findOrFail($blog_category_id)->update([
            'blog_category' => $request->blog_category,
        ]);

        $notification = array(
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    } //end Methods

    public function DeleteBlogCategory($id) {
        // $blogcategory = BlogCategory::findOrFail($id);
        BlogCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
