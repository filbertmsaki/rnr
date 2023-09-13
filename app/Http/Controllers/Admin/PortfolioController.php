<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $path = 'images/portfolio';

    public function index()
    {
        $portfolios = Portfolio::orderBy('arrangement', 'ASC')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $request->merge([
            'date' => date('Y-m-d', strtotime($request->date))
        ]);
        DB::beginTransaction();
        $portfolio = Portfolio::create($request->except('_token'));
        if ($request->hasFile('file')) {
            $product_images = upload_file('file', $this->path);
            if ($product_images) {
                foreach ($product_images as $image) {
                    File::create([
                        'file' => $image,
                        'filed_type' => Portfolio::class,
                        'filed_id' => $portfolio->id
                    ]);
                }
            }
        }
        DB::commit();
        return response()->json([
            'status' => Response::$statusTexts[Response::HTTP_OK],
            'message' => 'Portfolio Successful Created',
            'data' => []
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.portfolio.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::where('id', $id)->first();
        if ($portfolio) {
            $portfolio->delete();
            $portifolios = Portfolio::where('arrangement', '>=', $portfolio->arrangement)->get();
            foreach ($portifolios as $portifolio) {
                $portifolio->update([
                    'arrangement' => $portifolio->arrangement - 1
                ]);
            }
            if ($portfolio->files->count() > 0) {
                foreach ($portfolio->files as $image) {
                    delete_file($image->file);
                }
            }
            return redirect()->back()->with('success', 'Portfolio Successful Deleted');
        }
    }
}
