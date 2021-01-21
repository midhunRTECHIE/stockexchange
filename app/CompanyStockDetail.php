<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyStockDetail extends Model
{
    protected $fillable=['companyName','companySymbol','marketCap','currentMarketPrice','stockPe','dividentYield','roce','roe','debtToEquity','eps','reserves','debt'];
}
