<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\address_TINH;
use App\address_HUYEN;
use App\address_XA;
class commonController extends Controller
{
    public function getAddressHuyenToTinh(Request $request)
    {
		$rules = [
			'id' => 'required'
		];
		$messengers = [
            'id.required' => 'Request Không có tham số'
		];
		$validate = Validator::make($request->all(), $rules, $messengers);
		if($validate->fails()){
			return response()->json([
				'error' => true,
				'message' => $validate->errors()
			], 200);
		}else{
            $this_result = address_TINH::find($request->id);
            if($this_result) {
	            return response()->json([
	                'error' => false,
	                'tinh' => $this_result->name,
	                'huyen' => $this_result->HUYEN->toArray()
	            ], 200);
            }
		}
    }
    public function getAddressXaByHuyen(Request $request)
    {
		$rules = [
			'id' => 'required'
		];
		$messengers = [
            'id.required' => 'Request Không có tham số'
		];
		$validate = Validator::make($request->all(), $rules, $messengers);
		if($validate->fails()){
			return response()->json([
				'error' => true,
				'message' => $validate->errors()
			], 200);
		}else{
            $this_result = address_HUYEN::find($request->id);
            if($this_result) {
	            return response()->json([
	                'error' => false,
	                'huyen' => $this_result->name,
	                'xa' => $this_result->XA->toArray()
	            ], 200);
            }
		}
    }
    public function getAddressTinh()
    {
	    $this_result = address_TINH::all();
	    if($this_result) {
	        return response()->json([
	            'error' => false,
	            'data' => $this_result->toArray()
	        ], 200);
	    }
    }
}
