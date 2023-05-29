<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('adminpanel.pages.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('adminpanel.pages.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|required',
            'author_name' => 'string|required',
            'book' => 'string|required',
            'narrated_by' => 'string|required',
            'video' => 'file|required',

        ]);
        $name = null;
        $videoFile = $request->file('video');
        $videoPath = $videoFile->store('videos','public');

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_name' => $request->author_name,
            'book' => $request->book,
            'narrated_by' => $request->narrated_by,
            'video' => $videoPath,
        ]);

        return redirect()->route('admin.videos.index');
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
    public function edit(Video $video)
    {
        return view("adminpanel.pages.videos.edit",  compact('video'));

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
        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|required',
            'author_name' => 'string|required',
            'book' => 'string|required',
            'narrated_by' => 'string|required',
            'video' => 'file|required',

        ]);

        $video = Video::find($id);

        $video->title = $request->title;
        $video->description = $request->description;
        $video->author_name = $request->author_name;
        $video->book = $request->book;
        $video->narrated_by = $request->narrated_by;

        $name = null;
        $videoFile = $request->file('video');
        $videoPath = $videoFile->store('videos','public');
        $video->video = $videoPath;
        $video->save();
        return redirect('admin.videos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        if($video){
            $video->delete();
            return redirect()->back()->with(['success'=>'Successfully deleted!']);
        } else {
            return redirect()->back()->with(['error'=>'Record does not exist!']);
        }


    }
}
