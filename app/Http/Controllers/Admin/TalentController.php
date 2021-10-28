<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;
use Alert;
use App\Models\Gallery;
class TalentController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $talent = DB::table('v_talent')->orderBy('id', 'DESC')->get();
            return DataTables()->of($talent)
                ->addIndexColumn()
                ->addColumn('action', function($talent){
                    return '<a href="#" class="btn btn-squared btn-info mr-2 mb-2" data-id="'.$talent->id.'" data-toggle="modal" data-target="#modelId" id="buton_edit"><i class="fas fa-edit"></i> Edit</a> '.
                    '<a href="#" class="btn btn-squared btn-danger mr-2 mb-2" data-id="'.$talent->id.'" id="buton_hapus"><i class="fas fa-trash"></i> Hapus</a>';
                })

                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.talent.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.talent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = DB::table('v_talent')->whereName($request->name)->count();
        if ($count > 0) {
            return toast('talents are available','warning');
        }

        $data =  [
            'srticle_id' => 4,
            'name'       => $request->name,
            'job'        => null,
            'status'     => 1
        ];

        $talent = Gallery::create($data);
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("assets/images/gallery/talent/thumb/{$name}"), 80, 'png');

            $file->move('assets/images/gallery/talent/',$name);


             $talent->update([
                 'image' => base64_encode($name)
             ]);
        }

        if ($talent) {
            alert()->success('Succeed','You have successfully added data');
        } else {
            alert()->danger('Fail', 'You failed to add data');
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
        $talent = Gallery::whereId($id)->first();
        return view('admin.talent.edit');
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

        $talent = Gallery::whereId($id)->first();
        $talent->name = $request->name;
        $talent->save();

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("assets/images/gallery/talent/thumb/{$name}"), 80, 'png');

            $file->move('assets/images/gallery/talent/',$name);


             $talent->update([
                 'image' => base64_encode($name)
             ]);
        }

        if ($talent) {
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
        $talent = DB::table('v_talent')->whereId($id)->first();
        $talent->status = 0;
        $talent->save();

        if ($talent) {
            alert()->success('Succeed','You have successfully added data');
        } else {
            alert()->danger('Fail', 'You failed to add data');
        }
    }
}
