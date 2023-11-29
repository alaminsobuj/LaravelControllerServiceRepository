<?php

namespace App\Repositories\Product;

use App\Models\Product;

class ProductRepositoryImpl implements ProductRepository
{
    public function create($data)
    {
        return Product::create($data);
    }
}