<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
  
     //Add image
     public function ajoutImage(){

        return view('ajoutImageVideos');
    }

    //Store image
    public function stockImage(Request $request){

        $video= new Video();

        $video->nomVideo = $request->input('nomVideo');

        if($request->hasfile('image')){
       
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $video->image= $filename;
        }

        $video->save();

        return redirect()->route('videos');
    }
    
	//View image
    public function vueImage(){

        $videos= Video::all();

        return view('videos', compact('videos'));
    }

    //Edit image
    public function editVideo($id){

        $video = Video::findOrFail($id);

        return view('editVideo', compact('video'));
    }

    // Update Image
    public function updateVideo($id, Request $request) {
    
        $video = Video::findOrFail($id);

        $video->nomVideo = $request->input('nomVideo');

        if($request->hasfile('image'))

        {
            $destination = 'public/images'. $video->image;

            if(File::exists($destination))
            
            {
                File::delete($destination);
            }
       
            $file= $request->file('image');

            $filename= date('YmdHi').$file->getClientOriginalName();

            $file-> move(public_path('public/images'), $filename);

            $video->image= $filename;

            $video->updateVideo();
        }

            $video->save();
        
        return redirect('/');
        }

    //Delete video
    public function suppVideo($id){

        $video = Video::findOrFail($id);

        $video->delete();

        return redirect('/');
    }   
}
