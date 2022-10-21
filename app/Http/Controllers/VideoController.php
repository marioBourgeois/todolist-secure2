<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller

{
    public function index () {

        $videos = Video::all();

        return view('videos', compact('videos'));

    }

     /* //store video
     public function stockVideo(Request $request){
        
        $request->validate([
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $fileName = $request->video->getClientOriginalName();
        $filePath = 'videos/' . $fileName;

        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));

         // File URL to access the video in frontend
         $url = Storage::disk('public')->url($filePath);

         if ($isFileUploaded) {
            $video = new Video();
            $video->path = $filePath;
            $video->save();
 
            return back()
            ->with('success','Video has been successfully uploaded.');
        }
     } */


    public function dashboard(){

        return view('dashboard');

    }
}
