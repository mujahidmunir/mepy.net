<?php

namespace App\Http\Controllers\Admin\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use Alert;
use App\Models\Category;

class CategoriesController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $categories = DB::table('v_categories')->orderBy('id', 'DESC')->get();

            return DataTables()->of($categories)
                ->addIndexColumn()
                // ->addColumn('action', function($categories){
                //     return '<a href="#" class="btn btn-squared btn-info mr-2 mb-2" data-id="'.$categories->id.'" data-bs-toggle="modal" data-bs-target="#editData" id="button_edit"><i class="fas fa-edit"></i> Edit</a> '.
                //     '<a href="#" class="btn btn-squared btn-danger mr-2 mb-2" data-id="'.$categories->id.'" id="button_delete"><i class="fas fa-trash"></i> Hapus</a>';
                // })
                 ->addColumn('action', function($categories){
                    return '<a href="#" class="btn btn-squared btn-info mr-2 mb-2" data-id="'.$categories->id.'" data-bs-toggle="modal" data-bs-target="#editData" id="button_edit"><i class="fas fa-edit"></i> Edit</a> ';
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $count = Category::whereName($request->name)->count();
        if ($count > 0) {
           return response()->json(['status' => 3], 201);
        }

        $data =  [
            'name'          => $request->name,
            'slug'          => $request->slug,
        ];

        $categories = Category::create($data);

        if ($categories) {
            return response()->json(['status' => 1], 201);
          } else {
              return response()->json(['status' => 2], 202);
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::whereId($id)->first();
        return response()->json($categories);
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
        $categories = Category::whereId($id)->first();
        $categories->name       = $request->name;
        $categories->slug       = $request->slug;
        $categories->save();

        if ($categories) {
            return response()->json(['status' => 1], 201);
          } else {
              return response()->json(['status' => 2], 202);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::whereId($id)->first();
        $categories->status = 0;
        $categories->save();

        if ($categories) {
            return response()->json(['status' => 1], 201);
          } else {
              return response()->json(['status' => 2], 202);
          }
    }
}
