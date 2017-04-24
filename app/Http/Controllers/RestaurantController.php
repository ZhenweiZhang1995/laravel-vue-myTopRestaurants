<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
  public function index ()
  {
    $restaurants = Restaurant::all();
    return Response::json($restaurants);
  }

  public function show ($id)
  {
    $restaurant = Restaurant::find($id);
    return Response::json($restaurant);
  }

  public function update (Request $request, $id)
  {
    $restaurant = Restaurant::find($id);
    $restaurant->update($request->all());
    return Response::json(['updated' => true]);
  }

  public function create (Request $request)
  {
    $restaurant = Restaurant::create($request->all());
    return Response::json(['created' => true]);
  }

  public function destroy ($id)
  {
    $restaurant = Restaurant::find($id);
    $restaurant->delete();
    return Response::json(['deleted' => true]);
  }
}
