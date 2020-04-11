<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @inheritdoc
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritdoc
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @inheritdoc
     */
    public function findAll($columns = ['*'])
    {
        return $this->model::all($columns)->toArray();
    }

    /**
     * @inheritdoc
     */
    public function findOne(int $id, array $columns = ['*'])
    {
        return $this->model::query()->find($id, $columns);
    }

    /**
     * @inheritdoc
     */
    public function create(array $attributes)
    {
        $this->model->setRawAttributes($attributes);

        return $this->model->save();
    }

    /**
     * @inheritdoc
     */
    public function update(int $id, array $attributes)
    {
        $result = $this->findOne($id);

        if ($result) {
            return $result->update($attributes);
        }
        return false;
    }

    /**
     * @inheritdoc
     */
    public function delete(int $id)
    {
        $result = $this->findOne($id);

        if ($result) {
            return $result->delete();
        }
        return false;
    }
}
