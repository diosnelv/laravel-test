<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function genre(){
        return $this->belongsTo( 'App\Models\Genre', 'genre_id', 'id');
    }

    public function type(){
        return $this->belongsTo( 'App\Models\Type', 'type_id', 'id');
    }

    public function state(){
        return $this->belongsTo( 'App\Models\State', 'state_id', 'id');
    }

    public function producer(){
        return $this->belongsTo( 'App\Models\Producer', 'producer_id', 'id');
    }

    public function scopeType($query,$value){
        if( trim($value) != "" )
        {
            return $query->where('type_id',$value);
        }
    }

    public function scopeState($query,$value){
        if( trim($value) != "" )
        {
            return $query->where('state_id',$value);
        }
    }
}
