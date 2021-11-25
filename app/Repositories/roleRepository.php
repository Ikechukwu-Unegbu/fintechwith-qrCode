<?php

namespace App\Repositories;

use App\Models\role;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class roleRepository
 * @package App\Repositories
 * @version July 11, 2021, 10:23 pm UTC
 *
 * @method role findWithoutFail($id, $columns = ['*'])
 * @method role find($id, $columns = ['*'])
 * @method role first($columns = ['*'])
*/
class roleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return role::class;
    }
}
