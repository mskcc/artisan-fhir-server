<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProtocolAccess extends Model
{
    protected $table = 'protocol_access';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function protocol()
    {
        return $this->belongsTo('App\Protocol');
    }
}
