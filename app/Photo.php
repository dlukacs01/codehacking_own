<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/images/'; // upload dir

    protected $fillable = ['file'];

    // ACCESSOR (append upload dir before photo filename to create full path for photo)
    public function getFileAttribute($photo) {

        return $this->uploads . $photo;

    }

}
