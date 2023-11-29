<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\ProductService;
// use App\Service\ProductServiceInterface;

class ProductController extends Controller
{
    protected $yourService;

    public function __construct(ProductService $yourService)
    {
        $this->yourService = $yourService;
    }

    public function index()
    {
        $data = [
            'name' => 'Tivi 2',
            'price' => 4.5,
            'quantity' => 11,
            'status' => true,
            'description' => 'good'
        ];
        $data = [
            'product' => $this->yourService->create($data)
        ];
        return view('welcome')->with($data);
    }


    public function TestService(){
       
    }
}
