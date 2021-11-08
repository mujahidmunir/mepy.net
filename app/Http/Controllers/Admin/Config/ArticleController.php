<?php

namespace App\Http\Controllers\Admin\Config;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic;

class ArticleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $article = DB::table('v_articles')->orderBy('id', 'DESC')->get();

            return DataTables()->of($article)
                ->addIndexColumn()
                ->addColumn('action', function($article){
                    return '<a href="#" class="btn btn-squared btn-info mr-2 mb-2" data-id="'.$article->id.'" data-bs-toggle="modal" data-bs-target="#editData" id="button_edit"><i class="fas fa-edit"></i> Edit</a> '.
                    '<a href="#" class="btn btn-squared btn-danger mr-2 mb-2" data-id="'.$article->id.'" id="button_delete"><i class="fas fa-trash"></i> Hapus</a>';
                })

                ->addColumn('description', function($article){
                    return '<p style="text-align: justify">"'.html_entity_decode($article->description).'"</p>';
                })

                ->addColumn('thumb', function($article){
                   if ($article->category_id == 1) {
                       $data = '<img src="'.url('assets/images/thumb/profile/', $article->thumb).'" class="img-thumbnail" alt="..." style="width:100px; height:100px;"> ';
                   } elseif ($article->category_id == 2) {
                       $data = '<img src="'.url('assets/images/thumb/record/', $article->thumb).'" class="img-thumbnail" alt="..." style="width:100px; height:100px;"> ';
                   } elseif ($article->category_id == 3) {
                       $data = '<img src="'.url('assets/images/thumb/creativa/', $article->thumb).'" class="img-thumbnail" alt="..." style="width:100px; height:100px;"> ';
                   } elseif ($article->category_id == 4) {
                       $data = '<img src="'.url('assets/images/thumb/talent/', $article->thumb).'" class="img-thumbnail" alt="..." style="width:100px; height:100px;"> ';
                   } elseif ($article->category_id == 5) {
                       $data = '<img src="'.url('assets/images/thumb/entertainment/', $article->thumb).'" class="img-thumbnail" alt="..." style="width:100px; height:100px;"> ';
                   }
                    return $data;
                })

                ->rawColumns(['action', 'thumb', 'description'])
                ->make(true);
        }

        $data['category'] = $this->getCategory();
        return view('admin.article.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $count = Article::whereTitle($request->title)
        ->whereStatus(0)->count();
        if ($count > 0) {
           return response()->json(['status' => 3], 201);
        }

        $data =  [
            'category_id'   => $request->category_id,
            'title'         => $request->title,
            'description'   => $request->description,
            'status'        => 1
        ];

        $article = Article::create($data);
        if ($request->hasFile('thumb')) {

            $file = $request->file('thumb');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            if ($request->category_id == 1) {
                $upload_img->save(public_path("assets/images/thumb/profile/{$name}"), 80, 'png');
            } elseif ($request->category_id == 2) {
                $upload_img->save(public_path("assets/images/thumb/record/{$name}"), 80, 'png');
            } elseif ($request->category_id == 3) {
                $upload_img->save(public_path("assets/images/thumb/creativa/{$name}"), 80, 'png');
            } elseif ($request->category_id == 4) {
                $upload_img->save(public_path("assets/images/thumb/talent/{$name}"), 80, 'png');
            } elseif ($request->category_id == 5) {
                $upload_img->save(public_path("assets/images/thumb/entertainment/{$name}"), 80, 'png');
            }
             $article->update([
                 'thumb' => base64_encode($name)
             ]);
        }

        if ($article) {
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
        $article = Article::whereId($id)->first();
        return response()->json($article);
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

        $article = Article::whereId($id)->first();
        $article->title       = $request->title;
        $article->description = $request->description;
        $article->save();

        if ($request->hasFile('thumb')) {

            $file = $request->file('thumb');
            $image = ImageManagerStatic::make($file);
            $name = $file->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            if ($request->category_id == 1) {
                $upload_img->save(public_path("assets/images/thumb/profile/{$name}"), 80, 'png');
            } elseif ($request->category_id == 2) {
                $upload_img->save(public_path("assets/images/thumb/record/{$name}"), 80, 'png');
            } elseif ($request->category_id == 3) {
                $upload_img->save(public_path("assets/images/thumb/creativa/{$name}"), 80, 'png');
            } elseif ($request->category_id == 4) {
                $upload_img->save(public_path("assets/images/thumb/talent/{$name}"), 80, 'png');
            } elseif ($request->category_id == 5) {
                $upload_img->save(public_path("assets/images/thumb/entertainment/{$name}"), 80, 'png');
            }

             $article->update([
                 'image' => $name
             ]);
        }

        if ($article) {
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
        $article = Article::whereId($id)->first();
        $article->status = 0;
        $article->save();

        if ($article) {
            return response()->json(['status' => 1], 201);
          } else {
              return response()->json(['status' => 2], 202);
          }
    }
}
