
<!DOCTYPE html>
<html lang="en">
  <head>

<base href="/public">

  @include('admin.css')

  <style type="text/css">


.div_center
{
    text-align: center;
    padding-top: 40px;
    
}

.font
{
    font-size: 40px;
    padding-bottom: 40px;
}


.text_color
{
    color: black;
    padding-bottom: 20px;
}


label
{
    display: inline-block;
    width: 200px;

}

.div_design 
{
        padding-bottom: 30px;

}

.close-right 
    {
    float: right;
    margin-top: -20px; /* Adjust this value based on your specific layout */
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

          <h1 class="font">Update Products</h1>


          <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="div_design">
<label for="">Product Title</label>
<input type="text" name="title" placeholder="Enter Title" class="text_color" required="" value="{{$product->title}}">
</div>




<div class="div_design">
<label for="">Product Description</label>
<input type="text" name="description" placeholder="Enter Description" class="text_color" required="" value="{{$product->description}}">
</div>




<div class="div_design">
<label for="">Product Price</label>
<input type="number" name="price" placeholder="Enter Price" class="text_color" required="" value="{{$product->price}}">
</div>




<div class="div_design">
<label for="">Discount Price</label>
<input type="number" name="discount_price" placeholder="Enter Price" class="text_color" value="{{$product->discount_price}}">
</div>




<div class="div_design">
<label for="">Product Quantity</label>
<input type="number" name="quantity" min="0" placeholder="Enter Quantity" class="text_color" required="" value="{{$product->quantity}}">
</div>




<div class="div_design">
<label for="">Product Category</label>
<select name="category" class="text_color" required>
    <option value="{{$product->category}}" selected="">{{$product->category}}</option>



    
    @foreach($category as $category)

<option value="{{$category->category_name}}">{{$category->category_name}}</option>

@endforeach 

    

</select>
</div>

<div class="div_design">
<label for=""> Current Product Image :</label>
<img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}" alt="">
</div>



<div class="div_design">
<label for=""> Change Product Image :</label>
<input type="file" name="image"  class="text_color">
</div>


<div class="div_design">

<input type="submit" value="Update Product" class="btn btn-primary">
</div>



</form>




          </div>








          </div>
</div>
       




        @include('admin.script')
   
  </body>
</html>
