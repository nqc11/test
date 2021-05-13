<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function getAddCart($id){
        $product_by = DB::table('products')->where('id',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_by->name,'qty'=>1,'price'=>$product_by->price,'options'=>['images'=>$product_by->images]));
        return redirect('cart/show');

    }
    public function getShowCart(){
        $data['total'] = Cart::total();
        $data['items'] = Cart::content();
        return view('layouts.frontend.cart', $data);

    }
    public function getDeleteCart($id){
        if($id=='all'){
            Cart::destroy();

        }else{
            Cart::remove($id);

        }
        return back();

    }
    public function getUpdateCart(Request $request){
        Cart::update($request->rowId,$request->qty);

    }
    public function postComplete(Request $request){
        $data['info'] = $request->all();
        $email = $request->email;
        $data['total'] = Cart::total();
        $data['cart'] = Cart::content();
        Mail::send('layouts.frontend.email', $data, function ($message) use ($email) {
            $message->from('xxhoangluong@gmail.com', 'Hoàng Lương');
            $message->to($email, $email);
            $message->cc('xhoangluong@gmail.com', 'Hoàng Lương');
            $message->subject('Xác nhận mua hàng');
        });
        return redirect('complete');
    }

    
    //
    public function getComplete(){
        return view('layouts.frontend.complete');
    }
}
