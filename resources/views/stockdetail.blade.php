<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>National Stock Exchange</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" type="text/css"/> -->
    <link href="{{secure_asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    
</head>

<body>
@if(session()->has('message'))
    <div class="alert alert-success">
    <center> <h4> <strong style="color: royalblue">{{ session()->get('message') }}</strong></h4> </center>
    </div>
@endif
    <div class="container contact-form">
        <div class="contact-image">
            <img src="{{asset('images/graph-nse.png')}}" height="5%" width="3%" alt="nse_logo" />
        </div>
        <form method="post" action="/stockDataSave" >   
        {{csrf_field()}}
                 <h3>Add Company Stock Details</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="companyName" class="form-control" placeholder="Company Name" value=""
                            required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="companySymbol" class="form-control" placeholder="Company Symbol"
                            value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="marketCap" class="form-control" placeholder="Market Cap" value=""
                            required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="currentMarketPrice" class="form-control"
                            placeholder="Current Market Price of stock" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="stockPe" class="form-control" placeholder="Stock P/E" value=""
                            required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="dividentYield" class="form-control" placeholder="Dividend Yield" value=""
                            required />
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="roce" class="form-control" placeholder="ROCE" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="roe" class="form-control" placeholder="ROE" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="debtToEquity" class="form-control" placeholder="Debt to equity" value=""
                            required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="eps" class="form-control" placeholder="EPS" value="" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="reserves" class="form-control" placeholder="Reserves" value=""
                            required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="debt" class="form-control" placeholder="Debt" value="" required />
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContactSubmit" value="Add Data" />
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </form>
    </div>
</body>

</html>