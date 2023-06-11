
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

<style type="text/css">


    .div_center
    {
        text-align: center;
        padding-top: 40px;
        
    }

    .h2_font
    {
        font-size: 40px;
        padding-bottom: 40px;
    }

    .input_color
    {
        color: black;
    }

    .close-right 
    {
    float: right;
    margin-top: -20px; /* Adjust this value based on your specific layout */
    }

    .center
    {
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
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

          @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        <button type="button" class="close close-right" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
@endif




            <div class="div_center">


                <h2 class="h2_font">Add Category</h2>


                <form action="{{url('add_category')}}" method="POST">
                    @csrf

                <input type="text" name="category" placeholder="Write Category Name" class="input_color">

                <input type="submit" name="submit" value="Add Category" class="btn btn-primary">



                </form>


            </div>



            <table class="center">
                <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>

@foreach($data as $data)
                <tr>
                    <td>{{$data->category_name}}</td>
                    <td><a href="{{route('delete_category',$data->id)}}" class="btn btn-danger" onclick="return confirm('Sure to delete?')">Delete</a></td>
                </tr>

@endforeach

            </table>








</div>
</div>

     
 
       





        @include('admin.script')
   
  </body>
</html>
