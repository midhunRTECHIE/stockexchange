<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\StockExchangeModel;

class StockDataController extends Controller
{
    public function storeStockData(Request $request) {
        // try{
        $this->validate($request, [
            'companyName' => 'required',
            'companySymbol' => 'required',
            'marketCap' => 'required',
            'currentMarketPrice' => 'required',
            'stockPe' => 'required',
            'dividentYield' => 'required',
            'roce' => 'required',
            'roe' => 'required',
            'debtToEquity' => 'required',
            'eps' => 'required',
            'reserves' => 'required',
            'debt' => 'required'
        ]);
        $data = array(
            'companyName' => $request->companyName,
            'companySymbol' => $request->companySymbol,
            'marketCap' => $request->marketCap,
            'currentMarketPrice' => $request->currentMarketPrice,
            'stockPe' => $request->stockPe,
            'dividentYield' => $request->dividentYield,
            'roce' => $request->roce,
            'roe' => $request->roe,
            'debtToEquity' => $request->debtToEquity,
            'eps' => $request->eps,
            'reserves' => $request->reserves,
            'debt' => $request->debt
        );
        DB::table('companystockdetails')->insert($data);
        return redirect()->back()->with('message', 'stock details has been added successfully!');   
     }
     public function viewStockData(Request $request) {

        if($request->ajax()){
            $query = $request->get('data');
            if($query != ''){
                $data =DB::table('companystockdetails')->Where('companyName', 'LIKE', '%'.$query.'%')
                                                        ->orWhere('companySymbol', 'LIKE', '%'.$query.'%')
                                                        ->orderBy('companyStockDetailId', 'desc')->get();
            }else{
                $data=DB::table('companystockdetails')->orderBy('companyStockDetailId', 'desc')->get();
            }
            //print_r($data); exit;
            $total_row = $data->count();
            if($total_row > 0){
                $result = '';
                foreach ($data as $row){
                    $result .= '<div class="row list-full-con">
                    <div class="col-md-1"> </div>
                    <div class="col-md-10 stock-list-det">
                        <table class="stk-data-head">
        
                            <tr>
                                <th width="200"> Company Name</th>
                                <th width="200"> Market Cap</th>
                                <th width="200">Current Market Price of stock</th>
                                <th width="200">Stock P/E</th>
                                <th width="200">Dividend Yield</th>
                                <th width="200">ROCE </th>
                            </tr>
        
                            <tr height="50">
                                <td>'.$row->companyName.'</td>
                                <td>'.$row->marketCap.'</td>
                                <td>'.$row->currentMarketPrice.'</td>
                                <td>'.$row->stockPe.'</td>
                                <td>'.$row->dividentYield.'</td>
                                <td>'.$row->roce.'</td>
                            </tr>
                            <tr>
                                <th width="200"> Company Symbol</th>
                                <th width="200"> ROE</th>
                                <th width="200">Debt to equity</th>
                                <th width="200">EPS</th>
                                <th width="200">Reserves</th>
                                <th width="200">Debt </th>
                            </tr>
                            <tr height="50">
                                <td>'.$row->companySymbol.'</td>
                                <td>'.$row->roe.'</td>
                                <td>'.$row->debtToEquity.'</td>
                                <td>'.$row->eps.'</td>
                                <td>'.$row->reserves.'</td>
                                <td>'.$row->debt.'</td>
                            </tr>
        
                        </table>
                    </div>
                    <div class="col-md-1"> </div>
                </div>';
                }
                }else{
                    $result .='<div class="row list-full-con">
                    <div class="col-md-1"> </div>
                    <div class="col-md-10 stock-list-det">
        
                            <center> No Data Found !</center>
        
                    </div>
                    <div class="col-md-1"> </div>
                </div>';
                }
                $listData = array(
                    'listData' => $result
                );
                echo json_encode($listData);
        }
    }

    public function userLogin(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $data = DB::table('stockusers')
        ->where('username', '=', $username)
        ->where('password', '=', $password)
        ->get();
        $login = $data->count();
        if($login>0){
            return view('StockDetailsList');
        }else{
            return redirect()->back()->with('message', 'Incorrect username or pasword!');   
        }
    }
    public function userSignin(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        $data = array(
            'username' => $request->username,
            'password' => $request->password
        );
        DB::table('stockusers')->insert($data);
        return redirect('userLogin')->with('message', 'created an account successfully!');   
     
    }
}
