<?php

namespace App\Repositories;

use Exception;

interface BaseRepositoryInterface
{
    /**
     * Get Model
     *
     * @return string
     */
    public function getModel();

    /**
     * Get All Base function
     *
     * @param array $columns
     *
     * @return array
     */
    public function findAll(array $columns = ['*']);

    /**
     * Get One Item Base function
     *
     * @param int $id
     * @param array $columns
     *
     * @return array
     */
    public function findOne(int $id, array $columns = ['*']);

    /**
     * Create Base function
     *
     * @param array $attributes
     *
     * @return bool
     */
    public function create(array $attributes);

    /**
     * Update Base function
     *
     * @param int $id
     * @param array $attributes
     *
     * @return bool
     */
    public function update(int $id, array $attributes);

    /**
     * Delete Base function
     *
     * @param int $id
     *
     * @return bool|null
     *
     * @throws Exception
     */
    public function delete(int $id);
}