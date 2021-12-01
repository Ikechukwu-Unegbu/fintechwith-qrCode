<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class transaction
 * @package App\Models
 * @version July 11, 2021, 10:29 pm UTC
 *
 * @property integer user_id
 * @property integer qrcode_owner_id
 * @property string payment_method
 * @property integer qrcode_id
 * @property number amount
 * @property string status
 */
class transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'qrcode_owner_id',
        'payment_method',
        'qrcode_id',
        'amount',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'qrcode_owner_id' => 'integer',
        'payment_method' => 'string',
        'qrcode_id' => 'integer',
        'amount' => 'float',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'amount' => 'required',
        'status' => 'required'
    ];

    public function qrcode(){
        return $this->belongsTo('App\Models\Qrcode');
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
