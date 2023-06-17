
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style>

.title_deg 
{
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    padding-bottom: 40px;

}

.table_deg 
{
    border: 2px solid white;
    width: 80%;
    margin: auto;
    text-align: center;
}

.th_deg 
{
    background-color: skyblue;
}


.img_size 
{
    width: 200px;
    /* height: 100px; */

}





  </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    



      @include('admin.sidebar')





      @include('admin.header')




      
      <div class="main-panel">
          <div class="content-wrapper">



            <h1 class="title_deg">All Orders</h1>


            <div>
              <form action="">

                

              </form>
            </div>


            <table class="table_deg">
                <tr class="th_deg">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Product Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                    <th>Print PDF</th>
                    <th>Send Email</th>
                   
                </tr>

@foreach($order as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->phone}}</td>
                
                    <td>{{$order->address}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$order->image}}" alt="">
                </td>
                    <td>

                @if($order->delivery_status=='processing')

                        <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Has the product been delivered?')" class="btn btn-primary">Delivered</a>

                        @else
                        <p style="color:green">Delivered</p>

                    @endif

                    </td>

                    <td>
                        <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print</a>
                    </td>


                    <td>
                        <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send</a>
                    </td>

                </tr>
             @endforeach   
            </table>




</div>
</div>

     
 
       




        @include('admin.script')
   
  </body>
</html>
