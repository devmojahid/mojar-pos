<?php
namespace App\Services;

use App\Models\Upload;
use Illuminate\Support\Facades\DB;
class UploadService
{
    /**
     * Update the user's profile information.
     * 
     * @param  mixed  $data
     */
    public function store(mixed $data)
    {
        DB::transaction(function () use ($data) {
            $file_main_name = $data->getClientOriginalName();
            if (Upload::where('file_name', $file_main_name)->exists()) {
                $file_name = pathinfo($file_main_name, PATHINFO_FILENAME);
                $file_extension = pathinfo($file_main_name, PATHINFO_EXTENSION);
                $file_name_to_store = $file_name . '_' . time() . '.' . $file_extension;
            } else {
                $file_name_to_store = $file_main_name;
            }
            $media = new Upload();
            $media->file_name = $data->getClientOriginalName();
            $media->file_type = $data->getMimeType();
            $media->file_size = $data->getSize();
            $media->file_extension = $data->getClientOriginalExtension();
            $media->file_mime_type = $data->getMimeType();
            $media->disk = config('filesystems.default');
            $media->uploaded_by = auth()->user()->id;
            $media->uploadable_id = auth()->user()->id;
            $media->uploadable_type = get_class(auth()->user());
            $destinationPath = public_path('/uploads');
            $data->move($destinationPath, $file_name_to_store);
            $media->url = url('/uploads/' . $file_name_to_store);
            $media->save();
        });
        
    }

}