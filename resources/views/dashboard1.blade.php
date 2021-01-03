@extends('layout.master')

@section('content')

<div class="container ">
<div class="row">
<div class="col-md-3 mt-5">
<div class="card  mx-sm-1 p-3" style="color:#140D44; border-width: thick; border-color: #140D44;">
                <div class="card shadow text-white p-3 my-card" style="background-color:#D8050E; border-width: thick; border-color: #140D44;"><span class="fa fa-plus-square" aria-hidden="true"></span></div>
                <div class=" text-center mt-3"><h4>Total Complaints</h4></div>
                <div class=" text-center mt-2"><h1>319,032</h1></div>
            </div>
</div>


<!-- card 2 -->
<div class="col-md-3 mt-5">
<div class="card  mx-sm-1 p-3" style="color:#140D44; border-width: thick; border-color: #140D44;">
                <div class="card shadow text-white p-3 my-card" style="background-color:#D8050E; border-width: thick; border-color: #140D44;"><span class="fa fa-check-square" aria-hidden="true"></span></div>
                <div class=" text-center mt-3"><h4>Redressed</h4></div>
                <div class=" text-center mt-2"><h1>241,580</h1></div>
            </div>
</div>
<!-- card 2 end -->



<!-- card 3 start -->
<div class="col-md-3 mt-5">
<div class="card  mx-sm-1 p-3" style="color:#140D44; border-width: thick; border-color: #140D44;">
                <div class="card shadow text-white p-3 my-card" style="background-color:#D8050E; border-width: thick; border-color: #140D44;"><span class="fa fa-circle-o-notch" aria-hidden="true"></span></div>
                <div class=" text-center mt-3"><h4>In Progress</h4></div>
                <div class=" text-center mt-2"><h1>9,312</h1></div>
            </div>
</div>
<!-- card 3 end -->


<!-- card 4 -->
<div class="col-md-3 mt-5">
<div class="card  mx-sm-1 p-3" style="color:#140D44; border-width: thick; border-color: #140D44;">
                <div class="card shadow text-white p-3 my-card" style="background-color:#D8050E; border-width: thick; border-color: #140D44;"><span class="fa fa-recycle" aria-hidden="true"></span></div>
                <div class=" text-center mt-3"><h4>Disposed</h4></div>
                <div class=" text-center mt-2"><h1>309,719</h1></div>
            </div>
</div>
<!-- card 4 end -->
</div>
<!-- row end -->
</div>
<!-- container end -->


<!-- Line Chart -->

<!-- container start -->
<div class="container" style="background-color:white">
<!-- row start -->
<div class="row">

<div class= "col-md-6">
<canvas id="lineChart" ></canvas>
</div>
<!-- pie chart start -->
<div class="col-md-6">

<div id="donutchart" style="height: 300px;"></div>
</div>
<!-- pie chart end -->
<!-- row end -->
</div>
<!-- container end -->
</div>
<!-- Line Chart ENd  -->














@endsection