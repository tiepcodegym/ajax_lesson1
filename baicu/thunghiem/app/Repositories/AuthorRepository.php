<?php

namespace App\Repositories;

use App\Repositories\Impl\AuthorRepositoryInterface;
use Illuminate\Support\Facades\DB;

class AuthorRepository extends BaseRepository implements AuthorRepositoryInterface
{
    protected $table = "authors";


    public function create($data)
    {
        DB::table($this->table)->insert([
            'name' => $data->name,
            'country' => $data->country
        ]);
    }

    public function update($id, $request)
    {
        $data = $request->only("name",'country');
        DB::table($this->table)
            ->where('id', $id)
            ->update($data);
    }
}
