<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalist = DB::select('select id,parent_id, title, keywords, description from categories');
        return view('others.admin-index.category',['datalist'=>$datalist]);
       /* $datalist = DB::table( table: 'users')->get();    ALTERNATİF*/

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){



DB::table('categories')->insert([
'parent_id' => $request->input('parent_id'),
'title' => $request->input( "title"),
'keywords' => $request->input( "keywords"),
'description' => $request->input( "description"),
'slug' => $request->input( "slug"),
'status' =>$request->input('status')

]);

  return redirect()->route('admin_category');



    }


    /* parent_id' => $request->input('parent_id'): parent_id sütununa $request değişkeninin parent_id anahtarından gelen değeri atar.*/

    /*Kod parçasındaki insert yöntemi, $request değişkeni üzerinden gelen istek verilerini kullanarak categories tablosuna yeni bir kayıt eklemektedir. Kayıt için kullanılan sütunlar ve değerler aşağıdaki gibi belirtilir:  */










    public function add()
    {
        $datalist = DB::table(  'categories')->get()->where('parent_id',0 );


        return view('others.admin-index.category_add',['datalist'=>$datalist]);
        //
    }





    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category,$id)
    {
       $data=Category::find($id);
        $datalist = DB::table(  'categories')->get()->where('parent_id',0 );
       return view('/others.admin-index.category_edit',['data'=>$data,'datalist'=>$datalist]);

    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, Category $category,$id)
    {

         $data = Category::Find($id);
         $data->parent_id =$request->input( 'parent_id');
         $data->title =$request->input(  'title');
         $data->keywords =$request->input( 'keywords');
         $data->description =$request->input(  'description');
         $data->slug =$request->input(  'stug');
         $data->status =$request->input(  'status');
         $data->save();

        return redirect()->route('admin_category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category,$id)
    {
        //
        DB::table('categories')->where( 'id','=',$id)->delete();
            return redirect()->route('admin_category');








    }
}
