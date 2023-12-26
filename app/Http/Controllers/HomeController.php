<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Stock;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $stock=Stock::all();
        return view('home.userpage', compact('stock'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        
        if($usertype=='1')
        {
            return view('admin.sneat');
        }
        if($usertype=='0') 
        {
            $stock=Stock::all();
            return view('home.userpage', compact('stock'));
        }
    }
    
    public function add_cart(Request $request,$id) 
    {
        if(Auth::id()) 
        {
            $user = Auth::user();
            $stock = Stock::find($id);
            $cart = new cart;

            // masuk informasi user
            $cart->nama = $user->name;
            $cart->email = $user->email;
            $cart->alamat = $user->alamat;
            $cart->nomor_hp = $user->nomor_hp;
            $cart->id_user = $user->id;
            
            //masuk informasi barang
            $cart->nama_barang = $stock->nama_barang;
            $cart->harga = $stock->harga_barang * $request->quantity;
            $cart->gambar = $stock->gambar_barang;
            $cart->kode_barang = $stock->kode_barang;

            //quantity
            $cart->jumlah = $request->quantity;

            $cart->save();
            return redirect()->back();

        }

        else
        {
            return redirect('login'); 
        }
    }

    public function show_cart()
    {
        $id = Auth::user()->id;
        $cart=Cart::where('id_user', '=', $id)->get();
        return view('home.showcart', compact('cart'));
    }

    public function remove_cart($id)
    {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function cash_order()
    {
        $user=Auth::user();
        $userId=$user->id;
        $data=Cart::where('id_user', '=', $userId)->get();
        $order = Order::create([
            'order_id' => Str::uuid()->toString(), 
            'id_user' => $userId,
            'status_pembayaran' => 'Dalam Proses' 
        ]);
        
        foreach($data as $item)
        {
            $OrderDetail = new OrderDetail;
            $OrderDetail->order_id = $order->order_id;

            $OrderDetail->nama = $item->nama;
            $OrderDetail->email = $item->email;
            $OrderDetail->alamat = $item->alamat;
            $OrderDetail->id_user = $item->id_user;
            $OrderDetail->nama_barang = $item->nama_barang;
            $OrderDetail->jumlah = $item->jumlah;
            $OrderDetail->harga = $item->harga;
            $OrderDetail->gambar = $item->gambar;

            $OrderDetail->save();
                        
        }

        Cart::where('id_user', '=', $userId)->delete();

        return redirect()->back();
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
}
