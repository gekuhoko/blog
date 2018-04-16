<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Picture;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PictureController extends Controller
{
    protected $result;

    public function __construct()
    {
        //$this->middleware('csrf');
        $this->result = ['result' => false, 'message' => null];
    }

    public function getList($id)
    {
        return Picture::where('fk_post', $id)->get()->toArray();
    }

    public function postCreate($id)
    {
        $file = Input::file('file');

        $destination = 'assets/img/'.$id.'/';
        $fileName = str_random().'.jpg';
        $file->move($destination, $fileName);

        // save pic entry in DB
        $picture = new Picture;
        $fieldName = 'fk_post';
        $picture->$fieldName = $id;
        $picture->url = $destination.$fileName;
        $master = Picture::where($fieldName, $id)->where('master', true)->first();
        if(!$master){
            $picture->master = true;
        }
        $picture->save();

        // process to become square
        $image = Image::make($destination.$fileName);
        $image->fit(config('image.width'), config('image.height'));
        $image->save($destination.$fileName, config('image.quality'));
        Image::canvas($image->width(), $image->height(), '#ffffff')->insert($image)->save($destination.$fileName, config('image.quality'));

        $this->result = ['result' => true];

        return $this->result;
    }

    public function postDelete($id)
    {
        $picture = Picture::find($id);
        $picture->delete();
        $this->result = ['result' => true];
        return $this->result;

    }

    public function postMaster($id)
    {
        $newMaster = Picture::find($id);

        $oldMaster = Picture::where('fk_post', $newMaster->fk_post)->where('master', true)->first();
        $oldMaster->master = false;
        $oldMaster->save();

        $newMaster->master = true;
        $newMaster->save();

        $this->result = ['result' => true];

        return $this->result;
    }

}