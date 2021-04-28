<?php

namespace Idea\Uploader;

use Exception;
use Illuminate\Http\Request;
use Idea\Uploader\Models\Upload;
use Illuminate\Support\Facades\Storage;


trait UploadableTrait
{
    public function uploads()
    {
        return $this->morphToMany(Upload::class,'uploadable');
    }

    public function saveFile($uploadedIds)
    {

        $this->uploads()->sync($uploadedIds);
        return true;
    }

    public function downloadFile($fileId)
    {
        $file = Upload::find($fileId);
        return Storage::download("/files/".$file->path);
    }

    private function upload(Request $request)
    {
        $file = $request->file('file');
        try{
            $uploadedfile = Storage::putFile("/files/",$file);
            $uploadedfile = basename($uploadedfile);
            //dd($uploadedfile);
            $upload = new Upload();
            $upload->title = $file->getClientOriginalName();
            $upload->path = $uploadedfile;
            $upload->save();
            return json_encode(['type'=>'SUCCESS','data'=>$upload]) ;
        }
        catch (Exception $e)
        {
            return json_encode(['type'=>'ERROR','message'=>$e->getMessage()]) ;
        }

    }
}
