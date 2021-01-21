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
    <div class="container list-form">

        <div class="middleheader">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md-4 list-head">
                    <h2> National Stock Exchange </h2>
                </div>
                <div class="col-md-4 col-md-offset-3">
                    <form class="search-form">
                        <div class="form-group has-feedback">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" name="search" id="searchCompany"
                                placeholder="Search by company name or symbol">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 "></div>
            </div>
        </div>
    </div>
    <section class="price-info-container mt-4 " style="margin-top:4%;">
        <div id="table_List_Data"></div>
    </section>
</body>

</html>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
    select_search_data();
    function select_search_data(data = ''){
        var postData = {
            data: data
	    };
        $.ajax({
            url: "{{ route('stockList.action') }}",
            type: 'get',
			dataType: 'json',
            data: postData,
            success:function(reply){
                $('#table_List_Data').html(reply.listData);
            }
            
        });
    }
    $("#searchCompany").on('keyup',function(){
    //$document.on('click', '#searchCompany', function(){
        var data = $(this).val();
        select_search_data(data);

    });
});
</script>