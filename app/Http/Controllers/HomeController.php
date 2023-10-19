<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class HomeController extends Controller
{
    public function Index()
    {

       return view('Index');

    }
    public function Store(Request $req)
    {

$req->validate([
    'std_name'=>'required',
    'std_image'=>'required | image | mimes:jpg,jpeg,png | max:1024'
],
[
    'std_image.image'=> 'Image Extension Should be JPG, JPEG and PNG only.',
    'std_image.max'=> 'Image Size Should be less than 1MB.'
]);
$obj =new student();
$obj->student_name =$req->input('std_name');
        git init
if($req->hasFile('std_image'))
{
   $img= $req->file('std_image');
   $name=$img->getClientOriginalName();
   $fileName = 'public/Image/'. $name;
   $img->move('public/Image/',$fileName);
   $obj->student_image =$fileName;

}
$obj->save();
return redirect()->back()->with('status','Image uploaded successfully.');

    }
}
