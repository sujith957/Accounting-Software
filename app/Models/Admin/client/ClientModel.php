<?php

namespace App\Models\Admin\Client;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $table = 'tblclients';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'point_of_state',
        'created_at',
        'updated_at'
    ];

}
