<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upload extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'file_name',
        'file_path',
        'file_type',
        'file_size',
        'file_extension',
        'file_mime_type',
        'disk',
        'url',
        'uploaded_by',
        'uploadable_id',
        'uploadable_type',
    ];
}
