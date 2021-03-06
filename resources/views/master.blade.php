<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}

</body>

<script>
    // $(document).ready(function(){
    //     $("button").click(function(){
    //         alert("Sab Kuch Badhiya hai")
    //     })
    // })
</script>

<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }
    .img {
        height: 550px !important;
        width: 100%; 
    }
    .custom-product {
        height: 500px;
    }
    .slider_text {
        background-color: #24465454 !important;
    }
    .trending_img{
        height: 80px;
    }
    .trending_item{
        float: left;
        width: 20%;
    }
    .trending_wrpper
    {
        margin: 30px;
    }
    .detail_img
    {
        height: 300px;
    }
    /* .search
    {
        width: 500px !important;
    } */
    .cart-list-devider{
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    .ordernow{
        margin-left: 20px;
    }

</style>

</html>
