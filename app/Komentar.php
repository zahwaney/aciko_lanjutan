<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'id_forum','komentar'];

    public function forum(){
        return $this->belongsTo(Forum::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
