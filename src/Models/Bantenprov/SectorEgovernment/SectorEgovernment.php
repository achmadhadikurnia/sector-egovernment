<?php

namespace Bantenprov\SectorEgovernment\Models\Bantenprov\SectorEgovernment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectorEgovernment extends Model
{

    protected $table = 'sector_egovernments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\SectorEgovernment\Models\Bantenprov\SectorEgovernment\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\SectorEgovernment\Models\Bantenprov\SectorEgovernment\Regency','id','regency_id');
    }

}

