<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $models;

    public function __construct($models)
    {
        $this->models = $models;
    }

    public function getAll()
    {
        $models = $this->models->all();
        return $models;
    }
    public function getById($id)
    {
        $models = $this->models->query()->findOrFail($id);
        return $models;
    }
    public function delete($id)
    {
        $models = $this->models->query()->findOrFail($id);
        $models->delete();
    }
}

