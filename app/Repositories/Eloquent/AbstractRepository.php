<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\AbstractRepositoryInterface;

abstract class AbstractRepository implements AbstractRepositoryInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function fill($data)
    {
        return $this->model->fill($data);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function where(string $column, $value)
    {
        return $this->model->where($column, $value);
    }

    public function whereIn(string $column, $arrayValues)
    {
        return $this->model->whereIn($column, $arrayValues);
    }

    public function orWhere(string $column, string $operador, $value)
    {
        return $this->model->orWhere($column, $value);
    }


    public function firstWhere(string $column, $value)
    {
        return $this->model->firstWhere($column, $value);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($attributes, $id)
    {
        $entity = $this->findOrFail($id);
        $entity->update($attributes);

        return $entity;
    }

    public function delete($id)
    {
        $entity = $this->findOrFail($id);
        return $entity->delete($id);
    }
}
