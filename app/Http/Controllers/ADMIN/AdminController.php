<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Models\Assignment;


class AdminController extends Controller
{
    //Home
    public function show(){
        return view('admin.pages.upload');
    }
    public function showExisted(){
        $getData = Assignment::all();
        if(count($getData)>0){
            return view('admin.pages.show',compact('getData'));
        }
        return redirect('/');
    }

    //Uploading
    public function doUpload(UploadRequest $request){
        // echo 'coming in doupload';
        $exists = Assignment::where('column_1', '1')->get(); // Made column_1 Unique
        if(count($exists)>0){
            return redirect('/showExisted')->with('status','File Already Exists');
        }
        $incoming = $request->getFile();
        // echo '<pre>';
        // print_r($incoming);
        // die();
            foreach($incoming as $key=>$value){
                // echo "<pre>";
                // print_r($value);
                $data['column_1'] = $value[0];
                $data['column_2'] = $value[1];
                $data['column_3'] = $value[2];
                $data['column_4'] = $value[3];
                $data['column_5'] = $value[4];
                $data['column_6'] = $value[5];
                $data['column_7'] = $value[6];
                $data['column_8'] = $value[7];
                $data['column_9'] = $value[8];
                // dd($data);
                $upload = Assignment::create($data);
            }
            return redirect('/showExisted');
    }
}
