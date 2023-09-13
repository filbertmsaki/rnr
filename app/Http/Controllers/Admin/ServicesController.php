<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $path = 'images/service';
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
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
        $service = Service::create($request->except('_token'));
        if ($request->hasFile('file')) {
            $product_images = upload_file('file', $this->path);
            if ($product_images) {
                foreach ($product_images as $image) {
                    File::create([
                        'file' => $image,
                        'filed_type' => Service::class,
                        'filed_id' => $service->id
                    ]);
                }
            }
        }

        DB::commit();
        return response()->json([
            'status' => Response::$statusTexts[Response::HTTP_OK],
            'message' => 'Service Successful Created',
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
        $service = Service::where('id', $id)->first();
        if ($service) {
            return view('admin.services.edit', compact('service'));
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
            'short_description' => 'required',
            'description' => 'required',
        ]);
        $service = Service::where('id', $id)->first();
        if ($service) {
            DB::beginTransaction();
            if ($request->hasFile('cover_photos')) {
                $cover_photo = upload_file('cover_photos', $this->path);
                $request->merge([
                    'cover_photo' => $cover_photo
                ]);
                if ($service->cover_photo) {
                    delete_file($service->cover_photo);
                }
            }
            $service->update($request->except('_token', '_method', 'id'));
            DB::commit();
            return redirect()->back()->with('success', 'Service Updated Successfull');
        }
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::where('id', $id)->first();
        if ($service) {
            if ($service->cover_photo != null) {
                delete_file($service->cover_photo);
            }
            $service->delete();
            if ($service->files->count() > 0) {
                foreach ($service->files as $image) {
                    delete_file($image->file);
                }
            }
            return redirect()->back()->with('success', 'Service Successful Deleted');
        }
    }
}
