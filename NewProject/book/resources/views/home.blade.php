@extends('homelayout')

@section('content')
<div class="container sub4">
        <div class="row">
          <div class="col-sm-8">
            <div id="demo" class="carousel slide" data-ride="carousel">

                   <!-- Indicators -->
                 <ul class="carousel-indicators">
                   <li data-target="#demo" data-slide-to="0" class="active"></li>
                   <li data-target="#demo" data-slide-to="1"></li>
                   <li data-target="#demo" data-slide-to="2"></li>
                 </ul>
              
              <!-- The slideshow -->
                 <div class="carousel-inner">
                   <div class="carousel-item active">
                     <img src="img/food1.jpg" alt="chiken kabbab" class=" rounded" width="100%" height="400">
                   </div>            
                   <div class="carousel-item">
                     <img src="img/food4.jpg" alt="chiken cari" class=" rounded" width="100%" height="400">
                   </div>
                   <div class="carousel-item">
                     <img src="img/food6.jpg" alt="pizza" class=" rounded" width="100%" height="400">
                   </div>
                 </div>
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
          <div CLASS="col-sm-4 text-center">
            <h5 class="sub5 text-warning">WELCOME TO 'FEEL <b style="color: rgb(255, 0, 0);">H</b>UNGRY ?'.</h5>
            <p class="sub6 border border-0">Hi there!
              My name is Subrata Manna and I am very happy to welcome you on board with "Food Lover"!
              You joined thousands of people, who are already skyrocketing their sales with [Company] by:
              [Benefit 1] [Benefit 2] [Benefit 3] 
              There’s just one more tiny step you need to take to achieve all these amazing things:
              [CTA that activates the customer]</p>
          </div>
        </div>
      </div>
      <div class="container ">
        <div class="col-sm-8 sub7">
          <h3 class="text-center">Our Speciality</h3>
        </div>
        <div class="row sub8 ">
          <div class="col-sm-2 text-center">
            <h5>Friendly & Natural Envionment</h5>
            <p> sustainability and marketing terms referring to goods and services, laws, guidelines and policies that claim reduced, minimal, or no harm upon ecosystems or the environment.</p>
          </div>
          <div class="col-sm-2 text-center">
            <h5> ECONOMICAL</h5>
            <p>Some restaurants can be really pricey and although it may be valid in some cases, there should be some courses that are economical so that everyone can reap the benefits of fine dining</p>
          </div>
          <div class="col-sm-2 text-center">
            <h5>GREAT QUALITY & TASTE</h5>
            <p>Some restaurants can be really pricey and although it may be valid in some cases, there should be some courses that are economical so that everyone can reap the benefits of fine dining</p>
          </div>
          <div class="col-sm-2 text-center">
            <h5> HYGIENIC</h5>
            <p>Some restaurants can be really pricey and although it may be valid in some cases, there should be some courses that are economical so that everyone can reap the benefits of fine dining</p>
          </div>
          
        </div>
        <div>
        <div class="container">
          <div class="col-sm-5">

          </div>
        </div>
        </div>

      </div>
    <footer class="container-fluid text-center bg-dark text-white">
      <p>developed by subrata</p>


    </footer>
    @endsection