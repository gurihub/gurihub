<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UsersRepositoryRepository;
use App\Models\UsersRepository;
use App\Validators\UsersRepositoryValidator;

/**
 * Class UsersRepositoryRepositoryEloquent
 * @package namespace App\Repositories;
 */
class UsersRepositoryRepositoryEloquent extends BaseRepository implements UsersRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UsersRepository::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
