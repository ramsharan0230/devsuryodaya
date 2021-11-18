<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $table = 'site_settings';
    protected $fillable = ['site_name', 'address', 'email', 'landline', 'mobile', 'location', 'location_url', 'map', 'facebook',
        'twiter', 'instagram', 'customer_care_phone','customer_care_email', 'logo', 'service_banner1', 'service_banner2',
        'service_banner3'
    ];
}
