<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ProductRepositoryInterface;
use App\Repository\CartRepositoryInterface;


class CartController extends Controller
{
    private $productRepository,$cartRepository;
    public function __construct(ProductRepositoryInterface $productRepository
    ,CartRepositoryInterface $cartRepository)
   {
       $this->productRepository = $productRepository;
       $this->cartRepository = $cartRepository;
   }
    public function index()
    {
         return response($this->productRepository->all());
    }
    public function addCart(Request $request){
        return response($this->cartRepository->addCart($request->id));
    }
    public function deleteCart(Request $request){
        return response($this->cartRepository->deleteCart($request->id));
    }
    public function totalCart(){
        return response($this->cartRepository->totalCart());
    }
    public function removeCart(Request $request){
        return response($this->cartRepository->removeCart($request->id));
    }
}
