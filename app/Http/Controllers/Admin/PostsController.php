<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\File;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $path = 'images/post';
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.posts.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cover_photos' => 'required',
        ]);
        DB::beginTransaction();
        if ($request->hasFile('cover_photos')) {
            $cover_photo = upload_file('cover_photos', $this->path);
            $request->merge([
                'cover_photo' => $cover_photo
            ]);
        }
        $post = Post::create($request->except('_token'));
        if ($request->hasFile('file')) {
            $product_images = upload_file('file', $this->path);
            if ($product_images) {
                foreach ($product_images as $image) {
                    File::create([
                        'file' => $image,
                        'filed_type' => Post::class,
                        'filed_id' => $post->id
                    ]);
                }
            }
        }
        if ($post) {
            foreach ($request->category_id as $category_id) {
                PostCategory::create([
                    'post_id' => $post->id,
                    'category_id' => $category_id
                ]);
            }
        }
        DB::commit();
        return response()->json([
            'status' => Response::$statusTexts[Response::HTTP_OK],
            'message' => 'Post Successful Created',
            'data' => []
        ], Response::HTTP_OK);
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
        $post = Post::where('id', $id)->first();
        if ($post) {
            $categories = Category::orderBy('name', 'ASC')->get();

            return view('admin.posts.edit', compact('post', 'categories'));
        }
        return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = Post::where('id', $id)->first();
        if ($post) {
            DB::beginTransaction();
            if ($request->hasFile('cover_photos')) {
                $cover_photo = upload_file('cover_photos', $this->path);
                $request->merge([
                    'cover_photo' => $cover_photo
                ]);
                if ($post->cover_photo) {
                    delete_file($post->cover_photo);
                }
            }
            $post->update($request->except('_token','_method','id'));
            if ($post) {
                if (!empty($request->category_id)) {
                    $post_categories = PostCategory::where('post_id', $post->id)->get();
                    foreach ($post_categories  as  $post_category) {
                        $post_category->delete();
                    }
                }
                foreach ($request->category_id as $category_id) {
                    PostCategory::create([
                        'post_id' => $post->id,
                        'category_id' => $category_id
                    ]);
                }
            }
            DB::commit();
            return redirect()->back()->with('success', 'Post Updated Successfull');
        }
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('id', $id)->first();
        if ($post) {
            if ($post->cover_photo != null) {
              delete_file($post->cover_photo);
            }
            $post->delete();
            if ($post->files->count() > 0) {
                foreach ($post->files as $image) {
                    delete_file($image->file);
                }
            }
            return redirect()->back()->with('success', 'Post Successful Deleted');
        }
    }
}
