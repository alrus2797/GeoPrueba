<?php

namespace GeoPrueba\Http\Controllers;

use Illuminate\Http\Request;
use GeoPrueba\Item;

class ItemsController extends Controller
{
    //
    public function map(){
      //$items = Item::all();
            $items = Item::distance(0.35,'45.05,7.6667')->get();
//      return $items;
      return view('items.map')->with(['items'=>$items]);
    }

}
