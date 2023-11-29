<?php 
// namespace App\Service;
// class ProductService{
//     public function doSomething(){
//         echo "do something";
//     }
// }
// app/Services/YourService.php
namespace App\Service;

use App\Repositories\Product\ProductRepositoryImpl;

class ProductService
{
    protected $yourRepository;

    public function __construct(ProductRepositoryImpl $yourRepository)
    {
        $this->yourRepository = $yourRepository;
    }

    public function create(array $data)
    {
        // Additional business logic can go here if needed

        // Call the repository to insert data
        return $this->yourRepository->create($data);
    }
}