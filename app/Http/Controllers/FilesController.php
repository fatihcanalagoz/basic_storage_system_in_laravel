<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilesController extends Controller
{
    public function __construct(){
        return $this->middleware('login', ['except' => ['login']]);
    }
    public function index (){
        return view('files');
    }

    public function fileUpload(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,docx,ppt,png,jpg,jpeg,pptx|max:20428'
        ]);
        $currentdate = date('Y-m-d');
        $files = $request->file('file');
        $filesize = $files->getSize();
        $formattedSize =number_format($filesize / 1048576,2);
        $extension=$files->getClientOriginalExtension();
        $filename = $files->getClientOriginalName();
        $fileNameLast = Str::slug($filename,'-');
        $files->move(public_path('uploads'),$fileNameLast);
        $model = File::create([
            'filename' => $filename,
            'filetype' => $extension,
            'filesize' => $formattedSize
        ]);

 
        return view('upload');
    }
    public function getFiles(){
        $models = File::all();
        return view('files',compact('models'));
    }
    public function get_pdf(){
        $models = File::whereFiletype('pdf')->get();
        return view('pdf',compact('models'));

    }
    public function get_doc(){
        $models = File::whereFiletype('docx')->get();
        return view('doc',compact('models'));

    }
    public function get_ppt(){
        $models = File::whereFiletype('pptx')->get();
        return view('ppt',compact('models'));

    }
    public function fileDelete($id){
        $models = File::findOrFail($id);
        $models->delete();
        return redirect()->back();
    }
    public function fileEdit(Request $request,$id){
        $models = File::findOrFail($id);
        $models->filename = $request->query('filename');
        $models->update();

        return redirect()->back()->with('success','Dosya ismi değiştirildi.');
    }

    public function login(Request $request){
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
}
