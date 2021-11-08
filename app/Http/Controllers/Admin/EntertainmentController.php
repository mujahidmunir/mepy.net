<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use App\Models\Gallery;
class EntertainmentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $entertainment = DB::table('v_entertainment')->orderBy('id', 'DESC')->get();
            return DataTables()->of($entertainment)
                ->addIndexColumn()
                ->addColumn('action', function($entertainment){
                    return '<a href="#" class="btn btn-squared btn-info mr-2 mb-2" data-id="'.$entertainment->id.'" data-bs-toggle="modal" data-bs-target="#editData" id="button_edit"><i class="fas fa-edit"></i> Edit</a> '.
                    '<a href="#" class="btn btn-squared btn-danger mr-2 mb-2" data-id="'.$entertainment->id.'" id="button_delete"><i class="fas fa-trash"></i> Hapus</a>';
                })

                ->addColumn('image', function($creativa){
                    return '<img src="'.url('assets/images/gallery/entertainment/', $creativa->image).'" class="img-thumbnail" alt="...">';
                })

                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        $data['article'] = $this->getArticleEntertainment();
        return view('admin.entertainment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.entertainment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = DB::table('v_entertainment')->whereName($request->name)->whereStatus(0)->count();
        if ($count > 0) {
            return response()->json(['status' => 3], 201);
        }

        $data =  [
            'srticle_id' => $request->srticle_id,
            'status'     => 1
        ];

        $entertainment = Gallery::create($data);
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("assets/images/gallery/entertainment/thumb/{$name}"), 80, 'png');

            $file->move('assets/images/gallery/entertainment/',$name);


             $entertainment->update([
                 'image' => $name
             ]);
        }

        if ($entertainment) {
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
        $entertainment = Gallery::whereId($id)->first();
        return response()->json($entertainment);
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

        $entertainment = Gallery::whereId($id)->first();
        $entertainment->srticle_id = $request->srticle_id;
        $entertainment->save();

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("assets/images/gallery/entertainment/thumb/{$name}"), 80, 'png');

            $file->move('assets/images/gallery/entertainment/',$name);


             $entertainment->update([
                 'image' => $name
             ]);
        }

        if ($entertainment) {
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
        $entertainment = DB::table('v_entertainment')->whereId($id)->first();
        $entertainment->status = 0;
        $entertainment->save();

        if ($entertainment) {
            return response()->json(['status' => 1], 201);
          } else {
              return response()->json(['status' => 2], 202);
          }
    }
}
