<?php

namespace App\Repositories;

use App\Models\transaction;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class transactionRepository
 * @package App\Repositories
 * @version July 11, 2021, 10:29 pm UTC
 *
 * @method transaction findWithoutFail($id, $columns = ['*'])
 * @method transaction find($id, $columns = ['*'])
 * @method transaction first($columns = ['*'])
*/
class transactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'qrcode_owner_id',
        'payment_method',
        'qrcode_id',
        'amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return transaction::class;
    }
}
