<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use Alert;
use App\Models\Gallery;
class CreativaController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $creativa = DB::table('v_creativa')->orderBy('id', 'DESC')->get();
            return DataTables()->of($creativa)
                ->addIndexColumn()
                ->addColumn('action', function($creativa){
                    return '<a href="#" class="btn btn-squared btn-info mr-2 mb-2" data-id="'.$creativa->id.'" data-bs-toggle="modal" data-bs-target="#editData" id="button_edit"><i class="fas fa-edit"></i> Edit</a> '.
                    '<a href="#" class="btn btn-squared btn-danger mr-2 mb-2" data-id="'.$creativa->id.'" id="button_delete"><i class="fas fa-trash"></i> Hapus</a>';
                })
                ->addColumn('image', function($creativa){
                    return '<img src="'.url('assets/images/gallery/creativa/', $creativa->image).'" style="width:200px; height: 200x;" class="img-thumbnail" alt="...">';
                })

                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        return view('admin.creativa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.creativa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = DB::table('v_creativa')->whereName($request->name)->whereStatus(0)->count();
        if ($count > 0) {
            return response()->json(['status' => 3], 201);
        }

        $data =  [
            'srticle_id' => 3,
            'name'       => $request->name,
            'job'        => null,
            'status'     => 1
        ];

        $creativa = Gallery::create($data);
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("assets/images/gallery/creativa/thumb/{$name}"), 80, 'png');

            $file->move('assets/images/gallery/creativa/',$name);


             $creativa->update([
                 'image' => base64_encode($name)
             ]);
        }

        if ($creativa) {
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
        $creativa = Gallery::whereId($id)->first();
        return response()->json($creativa);
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

        $creativa = Gallery::whereId($id)->first();
        $creativa->name = $request->name;
        $creativa->save();

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("assets/images/gallery/creativa/thumb/{$name}"), 80, 'png');

            $file->move('assets/images/gallery/creativa/',$name);


             $creativa->update([
                 'image' => base64_encode($name)
             ]);
        }

        if ($creativa) {
            alert()->success('Succeed','You have successfully updated data');
        } else {
            alert()->danger('Fail', 'You failed to add data');
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
        $creativa = DB::table('v_creativa')->whereId($id)->first();
        $creativa->status = 0;
        $creativa->save();

        if ($creativa) {
            return response()->json(['status' => 1], 201);
          } else {
              return response()->json(['status' => 2], 202);
          }
    }
}
