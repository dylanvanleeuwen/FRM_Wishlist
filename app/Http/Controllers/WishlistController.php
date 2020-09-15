<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(){
        $data = DB::table('users')->get();
        return View("users")->with(array('data'=>$data));
    }

    public function userswishlist($id){
        $data = DB::table('wishlist')->where('user_id', $id)->get();
        return View("wishlist")->with(array('data'=>$data));
    }

    public function grud(){
        $data = DB::table('wishlist')->where('user_id', Auth::user()->id)->get();
        return view("grud")->with(array('data'=>$data));
    }

    public function admingrud(){
        $data = DB::table('wishlist')->get();
        return view("grud")->with(array('data'=>$data));
    }

    public function deletewish($id){
        DB::delete('delete from wishlist where id = ?',[$id]);
        return $this->grud();
    }

    public function editwish($id){
        $data = DB::table('wishlist')->where('id', $id)->first();
        return view('editwish', ['data' => $data, 'id' => $id]);
    }

    public function editwishpost(Request $request, $id){
        $user_id = Auth::user()->id;
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $image_link = $request->input('image_link');
        $product_link = $request->input('product_link');
        $data=array('user_id'=>$user_id,'title'=>$title,"description"=>$description,"price"=>$price,"image_link"=>$image_link,"product_link"=>$product_link);
        DB::table('wishlist')->where('id',$id)->update($data);
        return $this->editwish($request->input('id'));
    }

    public function addwish(){
        return view('addwish');
    }

    public function  addwishpost(Request $request) {
        $user_id = Auth::user()->id;
        $title = $request->input('title');
        $description = $request->input('description');
        $price = $request->input('price');
        $image_link = $request->input('image_link');
        $product_link = $request->input('product_link');
        $data=array('user_id'=>$user_id,'title'=>$title,"description"=>$description,"price"=>$price,"image_link"=>$image_link,"product_link"=>$product_link);
        DB::table('wishlist')->insert($data);
        return $this->grud();
    }

    public function IsAdmin(){
        if (Auth::user()->admin == 0){
            return $this->grud();
        } else {
            return $this->admingrud();
        }
    }

}
