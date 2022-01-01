<?php

namespace App\Repositories\Impl;

use App\Repositories\BaseRepository;

interface AuthorRepositoryInterface extends BaseRepositoryInterface
{
    public function create($data);
    public function update($id,$request);

}
