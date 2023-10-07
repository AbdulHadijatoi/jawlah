<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WalletHistory;
use App\Models\Wallet;
use App\Http\Resources\API\WalletHistoryResource;
use App\Http\Resources\API\WalletResource;

class WalletController extends Controller
{
    public function getHistory(Request $request){
        $user_id = auth()->id();
        $wallet_history = WalletHistory::where('user_id',$user_id);
        $per_page = config('constant.PER_PAGE_LIMIT');

        $orderBy = $request->orderby ? $request->orderby: 'asc';

        if( $request->has('per_page') && !empty($request->per_page)){
            if(is_numeric($request->per_page)){
                $per_page = $request->per_page;
            }
            if($request->per_page === 'all' ){
                $per_page = $wallet_history->count();
            }
        }

        $wallet_history = $wallet_history->orderBy('id',$orderBy)->paginate($per_page);
        $items = WalletHistoryResource::collection($wallet_history);

        $response = [
            'pagination' => [
                'total_items' => $items->total(),
                'per_page' => $items->perPage(),
                'currentPage' => $items->currentPage(),
                'totalPages' => $items->lastPage(),
                'from' => $items->firstItem(),
                'to' => $items->lastItem(),
                'next_page' => $items->nextPageUrl(),
                'previous_page' => $items->previousPageUrl(),
            ],
            'data' => $items,
        ];

        return comman_custom_response($response);

    }

    public function walletTopup(Request $request){

        $request->validate([
            'amount' => 'required|integer',
        ]);
        
        $user_id = $request->user_id ?? auth()->user()->id;
        
        $wallet = Wallet::where('user_id', $user_id)->first();
        
        if($wallet){

            $wallet->amount += $request->amount;
            $wallet->save();
        
            $activity_data = [

                'activity_type' => 'wallet_top_up',
                'wallet' => $wallet,
                'transaction_type'=>$request->transcation_type,
                'transaction_id'=>$request->transcation_id,

            ];

            saveWalletHistory($activity_data);

            $response = [
                'message'=>  trans('messages.wallet_top_up', ['value' => getPriceFormat($wallet->amount)]),
                'data' => $wallet,
            ];
 
          return comman_custom_response($response);

          }
    
    }
}
