<?php

namespace App\Repository;

use Product;
use App\Repository\ProductRepositoryInterface;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Product $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
      $data=[];
    foreach ($this->model->all() as  $product) {
        array_push($data,[
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->price,
            'image'=>$product->image,
            'quantity'=>$this->model->find($product->id)->cart->quantity ?? 0
        ]);
    };
      return new Collection($data);
   }
}
