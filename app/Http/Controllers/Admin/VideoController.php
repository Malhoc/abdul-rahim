<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\VideoCreated;
use App\Models\Subscribe;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


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

        $video = Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_name' => $request->author_name,
            'book' => $request->book,
            'narrated_by' => $request->narrated_by,
            'video' => $videoPath,
            'slug' => Str::slug($request->title),
        ]);


        if($video){
            if(config('app.env') == 'production'){
                $newsletter = Subscribe::all();
                foreach ($newsletter as $key => $row) {
                    Mail::to($row->email)->send(new VideoCreated());
                }
            }
        }
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

    public function uploadLargeFiles(Request $request) {
        $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

        if (!$receiver->isUploaded()) {
            // file not uploaded
        }

        $fileReceived = $receiver->receive(); // receive file
        if ($fileReceived->isFinished()) { // file uploading is complete / all chunks are uploaded
            $file = $fileReceived->getFile(); // get file
            $extension = $file->getClientOriginalExtension();
            $fileName = str_replace('.'.$extension, '', $file->getClientOriginalName()); //file name without extenstion
            $fileName .= '_' . md5(time()) . '.' . $extension; // a unique file name

            $disk = Storage::disk(config('filesystems.default'));
            $path = $disk->putFileAs('videos', $file, $fileName);

            // delete chunked file
            unlink($file->getPathname());
            return [
                'path' => asset('storage/' . $path),
                'filename' => $fileName
            ];
        }

        // otherwise return percentage information
        $handler = $fileReceived->handler();
        return [
            'done' => $handler->getPercentageDone(),
            'status' => true
        ];
    }
}
