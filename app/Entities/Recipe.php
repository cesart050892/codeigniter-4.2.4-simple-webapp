<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Recipe extends Entity
{
    public $ingredients;

    public function __construct(array $data = null)
    {
        parent::__construct($data);
        // Set the ingredient list to an empty array
        $this->ingredients = [];
    }

    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}
