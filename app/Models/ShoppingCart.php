<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'shoppingcart';

    // shoppingcartテーブルにはid列がなく、複合主キー(identifier, instance)のため、
    // 管理画面のGridが行を正しく描画できるように代替の主キーを明示する
    protected $primaryKey = 'identifier';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function getCurrentUserOrders($user_id)
    {
        $shoppingcarts = DB::table('shoppingcart')->where("instance", "{$user_id}")->get();

        $orders = [];

        foreach ($shoppingcarts as $order) {
            $orders[] = [
                'id' => $order->number,
                'created_at' => $order->updated_at,
                'total' => $order->price_total,
                'user_name' => User::find($order->instance)->name,
                'code' => $order->code
            ];
        }

        return $orders;
    }
}
