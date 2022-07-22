<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;

class UploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'file_to_upload' => 'required',
        ];
    }

    public function getFile(){
        if($this->hasfile('file_to_upload'))
        { 
            $file = $this->file('file_to_upload');
            $Filename = rand() . '' . $file->getClientOriginalName();
            $uploadedFile = $file->move('uploads/', $Filename);
            $Arr = [];
            if (($open = fopen($uploadedFile, "r")) !== FALSE) {

                while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                    $Arr[] = $data;
                }
                fclose($open);
            }
        return $Arr;
        }
    }
}
