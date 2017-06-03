<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    protected $table = 'petitions';
    protected $fillable = ['title','body','user_id'];

    public function when()
    {
        return $this->created_at-> diff;
    }
public function user(){
        return $this->BelongsTo(User::class);
}

}

