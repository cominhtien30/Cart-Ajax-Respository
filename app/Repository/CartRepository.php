<?php

namespace App\Repository;

use Cart;
use Product;
use App\Repository\CartRepositoryInterface;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;


class CartRepository extends BaseRepository implements CartRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Cart $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function addCart($id)
   {
       $item=$this->model->where('id_product',$id)->first();
      if($item){
        $item->quantity+=1;
        $item->save();
        return $item->quantity;
      }else{
        $this->model->quantity=1;
        $this->model->id_product=$id;
        $this->model->save();
        return 1;

      }
   }
   public function deleteCart($id)
   {
      $item=$this->model->where('id_product',$id)->first();
      if($item->quantity>0){
        $item->quantity-=1;
        $item->save();
        return $item->quantity;
      }else{
        if($item->delete()){
          return 0;
        }
      }
   }
   public function removeCart($id)
   {
      $item=$this->model->where('id_product',$id)->first();
        if($item->delete()){
            return 0;
        }
   }
   public function totalCart(){
    //    return $this->model->sum('')
        $getAllCart=$this->model->get();
        $totalCart=0;
        if($getAllCart->count()<=0){
            $totalCart=0;
        }else{
            foreach ($getAllCart as $cart) {
                $totalCart+=$cart->quantity*$cart->product->price;
            }
        }
        return $totalCart;
   }
}
