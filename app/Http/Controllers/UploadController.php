<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Upload;
use App\Services\UploadService;

class UploadController extends Controller
{
    /**
     * Display a listing of the Medias.
     *
     * @return view
     */
    public function index(): View
    {
        $medias = Upload::latest()->paginate(10);
        return view('media.index', compact('medias'));
    }

    /**
     * Store a newly created Media in storage.
     *
     * @param Request $request
     * @return json
     */

    public function store(UploadRequest $request, UploadService $uploadService)
    {
        $uploadService->store($request->file('file'));
        return response()->json(['success' => 'Media uploaded successfully.']);

        // $path = $request->file('file')->store('public/media');
        // $url = url('/' . $path);

        // $media = new Upload();
        // $media->file_name = $request->file('file')->getClientOriginalName();
        // $media->file_path = $path;
        // $media->file_type = $request->file('file')->getMimeType();
        // $media->file_size = $request->file('file')->getSize();
        // $media->file_extension = $request->file('file')->getClientOriginalExtension();
        // $media->file_mime_type = $request->file('file')->getMimeType();
        // $media->disk = config('filesystems.default');
        // $media->url = $url;
        // $media->uploaded_by = auth()->user()->id;
        // $media->uploadable_id = auth()->user()->id;
        // $media->uploadable_type = get_class(auth()->user());
        // $media->save();

        // return back()
        //     ->with('success', 'Media uploaded successfully.')
        //     ->with('file', $media->file_name);
    }
}
