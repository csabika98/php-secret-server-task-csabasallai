<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $secretText
 */
class secretDb extends Model
{

    use HasFactory;
    protected $table = 'secret';
    protected $fillable = ["secretText"];
    public $timestamps = false;

    // I used this code to test the Save to DB , without any API
  //  public function save(array $options = array())
  //  {
  //      if(empty($this->id)) {
  //          $this->hash = sha1(time());

    //    }
  //      return parent::save($options);
   // }

}
