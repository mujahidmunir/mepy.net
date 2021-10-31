<?php

namespace App\Http\Controllers\Admin\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use Alert;
use App\Models\Slider;

class SlideController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $slide = DB::table('v_sliders')->orderBy('id', 'DESC')->get();

            return DataTables()->of($slide)
                ->addIndexColumn()
                ->addColumn('action', function($slide){
                    return '<a href="#" class="btn btn-squared btn-info mr-2 mb-2" data-id="'.$slide->id.'" data-bs-toggle="modal" data-bs-target="#editData" id="button_edit"><i class="fas fa-edit"></i> Edit</a> '.
                    '<a href="#" class="btn btn-squared btn-danger mr-2 mb-2" data-id="'.$slide->id.'" id="button_delete"><i class="fas fa-trash"></i> Hapus</a>';
                })

                ->addColumn('image', function($slide){
                    return '<img src="'.url('assets/images/slide/', $slide->image).'" class="img-thumbnail" alt="...">';
                })

                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        return view('admin.slide.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $count = Slider::whereTitle($request->title)
        ->whereStatus(0)->count();
        if ($count > 0) {
           return response()->json(['status' => 3], 201);
        }

        $data =  [
            'title'         => $request->title,
            'description'   => $request->description,
            'status'        => 1,
            'page'          => $request->page
        ];

        $slide = Slider::create($data);
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("assets/images/slide/thumb/{$name}"), 80, 'png');

            $file->move('assets/images/slide/',$name);


             $slide->update([
                 'image' => base64_encode($name)
             ]);
        }

        if ($slide) {
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
        $slide = Slider::whereId($id)->first();
        return response()->json($slide);
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

        $slide = Slider::whereId($id)->first();
        $slide->title       = $request->title;
        $slide->description = $request->description;
        $slide->page        = $request->page;

        $slide->save();

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("assets/images/slide/thumb/{$name}"), 80, 'png');

            $file->move('assets/images/slide/',$name);


             $slide->update([
                 'image' => $name
             ]);
        }

        if ($slide) {
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
        $slide = Slider::whereId($id)->first();
        $slide->status = 0;
        $slide->save();

        if ($slide) {
            return response()->json(['status' => 1], 201);
          } else {
              return response()->json(['status' => 2], 202);
          }
    }
}
