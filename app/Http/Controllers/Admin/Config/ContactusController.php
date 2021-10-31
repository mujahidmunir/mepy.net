<?php

namespace App\Http\Controllers\Admin\Config;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $contacts = Contacts::orderBy('id', 'DESC')->get();

            return DataTables()->of($contacts)
                ->addIndexColumn()
                // ->addColumn('action', function($categories){
                //     return '<a href="#" class="btn btn-squared btn-info mr-2 mb-2" data-id="'.$categories->id.'" data-bs-toggle="modal" data-bs-target="#editData" id="button_edit"><i class="fas fa-edit"></i> Edit</a> '.
                //     '<a href="#" class="btn btn-squared btn-danger mr-2 mb-2" data-id="'.$categories->id.'" id="button_delete"><i class="fas fa-trash"></i> Hapus</a>';
                // })
                ->make(true);
        }
        return view('admin.contacts.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Contacts::whereName($request->name)
        ->whereMessage($request->message)->count();
        if ($count > 0) {
           return response()->json(['status' => 3], 201);
        }

        $data =  [
            'name'          => $request->name,
            'email'         => $request->email,
            'subject'       => $request->subject,
            'message'       => $request->message,

        ];

        $contacts = Contacts::create($data);

        if ($contacts) {
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
