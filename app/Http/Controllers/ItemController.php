<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();
        return view('fronts.items.index', compact('items'));
    }

    public function item_detail($id)
    {
        $item = Item::find($id);
        $items = Item::latest()->take(7)->get();
        return view('fronts.items.view', compact('item', 'items'));
    }

    public function my_cart()
    {
        $items = session()->get('cart');
        return view('fronts.items.cart', compact('items'));
    }

    public function empty_cart()
    {
        $cart = session()->get('cart');
        if ($cart) {
            session()->forget('cart');
        }
        return back();
    }

    public function add_to_cart($id)
    {
        $item = Item::find($id);
        if (!$item) {
            abort(404);
        }

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $item->name,
                    "quantity" => 1,
                    "image" => $item->image,
                    "price" => $item->price,
                ],
            ];
            session()->put('cart', $cart);
            return back()->with('success', 'Item added to cart');
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Item added to cart');
        }

        $cart[$id] = [
            "name" => $item->name,
            "quantity" => 1,
            "image" => $item->image,
            "price" => $item->price,
        ];
        session()->put('cart', $cart);
        return back()->with('success', 'Item added to cart');
    }

}
