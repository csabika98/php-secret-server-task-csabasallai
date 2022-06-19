<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretDb extends Model
{

    use HasFactory;
    protected $table = 'secret';
    protected $fillable = ["secretText"];
    public $timestamps = false;

   // public function save(array $options = array())
   // {
   //     if(empty($this->id)) {
   //         $this->hash = sha1(time());
   //         $this->createdAt = today();
   //         $this->expiresAt = today();
   //         $this->remainingViews = 5;
   //     }
   //     return parent::save($options);
    //}

}
