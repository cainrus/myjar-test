<?php namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


use Illuminate\Http\Request;

class ApiController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = DB::table('products')->get();
		return response()->json(array(
        'error' => false,
        'result' => $products
    ))->header('Content-Type', 'application/json');
	}

	public function error()
	{
		return response()->json(array(
				'error' =>  true,
				'message' => 'inavalid request'
		));
	}

}
