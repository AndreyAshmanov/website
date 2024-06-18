<?php
use Illuminate\\Eloquent\\Model;

class CollegeSite extends
{
    protected $table = 'college';
    protected $fillable = [
        'name',
        'Linking_college_site_ID_university',
        'Linking_college_site_ID',
    ];
}
