<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $path = 'images/testimony';

    public function index()
    {
        $testimonies = Testimony::orderBy('arrangement', 'ASC')->get();
        return view('admin.testimonies.index', compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('file')) {
            $product_images = upload_file('file', $this->path);
            if ($product_images) {
                $request->merge([
                    'profile_url' => $product_images[0]
                ]);
            }
        }
        DB::beginTransaction();
        $testimonies = Testimony::where('arrangement', '>=', $request->arrangement)->get();
        foreach ($testimonies as $test) {
            $test->update([
                'arrangement' => $test->arrangement + 1
            ]);
        }
        $testimony = Testimony::create($request->except('_token'));
        DB::commit();
        return response()->json([
            'status' => Response::$statusTexts[Response::HTTP_OK],
            'message' => 'Testimony Successful Created',
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
        $testimony = Testimony::where('id', $id)->first();
        if ($testimony) {
            return view('admin.testimonies.edit', compact('testimony'));
        }
        return redirect()->back()->with('error', 'Unknown Error Occur.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $testimony = Testimony::where('id', $id)->first();
        if ($testimony) {




            if ($request->hasFile('file')) {
                $product_images = upload_file('file', $this->path);
                if ($product_images) {
                    $request->merge([
                        'profile_url' => $product_images[0]
                    ]);
                }
            }
            DB::beginTransaction();
            if ($request->arrangement != $testimony->arrangement ) {
                $testimonies = Testimony::where('arrangement', '>=', $request->arrangement)->get();
                foreach ($testimonies as $test) {
                    $test->update([
                        'arrangement' => $test->arrangement + 1
                    ]);
                }
            }

            $testimony->update($request->except('_token', '_method', 'id'));
            DB::commit();
            return response()->json([
                'status' => Response::$statusTexts[Response::HTTP_OK],
                'message' => 'Testimony Successful Updated',
                'data' => []
            ], Response::HTTP_OK);
        }
        return response()->json([
            'status' => Response::$statusTexts[Response::HTTP_BAD_REQUEST],
            'message' => 'Testimony data not found',
            'data' => []
        ], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
