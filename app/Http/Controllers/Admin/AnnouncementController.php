<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    $datalist = DB::table( 'announcements')->get();
        return view('others.admin-index.announcement',['datalist'=>$datalist]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        DB::table('announcements')->insert([
            'subject' => $request->input('subject'),
            'content' => $request->input( 'content'),

        ]);

        return redirect()->route('admin_announcements');


    }

    public function add()
    {

        return view('others.admin-index.announcement_add');
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
    public function show(string $id)
    {
        //
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
        //
    }

   public function list(){

       $datalist = DB::table( 'announcements')->get();
       return view('layouts.homeannounce',['datalist'=>$datalist]);


   }


}
