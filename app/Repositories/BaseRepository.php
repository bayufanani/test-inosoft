<?php

namespace App\Repositories;

interface BaseRepository
{
    function all();
    function findById($id);
    function create($data);
    function update($id, $data);
    function delete($id);
}
