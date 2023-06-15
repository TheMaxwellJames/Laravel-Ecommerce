<!DOCTYPE html>
<html>
   <head>

   <style type="text/css">

    .center
    {
        margin: auto;
        width: 70%;
        text-align: center;
        padding: 30px;
        
    }

    table,th,td
    {
        border: 1px solid grey;
    }


    .th_deg 
    {
            font-size: 20px;
            padding: 5px;
            background: skyblue;

    }

    .img_deg
    {
        height: 200px;
        width: 150px;
    }

    .total_deg 
    {
        font-size: 20px;
        padding: 40px;

    }

    


   </style>


  
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
       
            @include('home.header')



            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        <button type="button" class="close close-right" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
@endif











      <div class="center">


<table>
    <tr>
        <th class="th_deg">Product Title</th>
        <th class="th_deg">Product Quantity</th>
        <th class="th_deg">Price</th>
        <th class="th_deg">Image</th>
        <th class="th_deg">Action</th>
    </tr>

    <?php $totalprice=0; ?>

@foreach($cart as $cart)
                    <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>${{$cart->price}}</td>
                <td><img src="/product/{{$cart->image}}" alt="" class="img_deg"></td>
                <td><a href="{{url('remove_cart', $cart->id)}}" class="btn btn-danger" onclick="return confirm('Sure to delete?')">Remove Product</a></td>
                    </tr>

                    <?php $totalprice=$totalprice + $cart->price; ?>   

       @endforeach   
       
    
       
</table>

<div>
    <h1 class="total_deg">Total Price :    ${{$totalprice}}</h1>
</div>



<div>
    <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed To Order</h1>
    <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>

    <a href="{{url('stripe', $totalprice)}}" class="btn btn-danger">Pay Using Card</a>
</div>


      </div>
     

  



      
      
      
     

      








  





      <!-- @include('home.footer') -->






     
       <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="">Faam Stores</a><br>
         
            <!-- Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> -->
         
         </p>
      </div> 
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>