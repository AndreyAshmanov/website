<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolSite extends Model
{
    protected $table = 'school_sites';

    protected $fillable = [
        'id',
        'name',
        'Linking_school_ID_site',
        'Linking_school_site_ID_site',
    ];

    // Определение отношения с моделью LinkingTheSchoolToTheSite
    public function linkingTheSchoolToTheSite()
    {
        return $this->belongsTo(LinkingTheSchoolToTheSite::class, 'Linking_school_ID_site', 'school_ID');
    }
}
