<?php
namespace App\Repository;



use Illuminate\Database\Eloquent\Model;

/**
* Interface EloquentRepositoryInterface
* @package App\Repositories
*/
interface CartRepositoryInterface
{
   /**
    * @param array $attributes
    * @return Model
    */
   public function addCart($id);
   public function deleteCart($id);
   public function totalCart();
   public function removeCart($id);




   /**
    * @param $id
    * @return Model
    */
//    public function find($id): ?Model;
}
