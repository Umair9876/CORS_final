@extends('layout.master')
@section('content')

<!-- Admmin Table Start -->

<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <!-- <h2 class="font-heading" style="color: black;">ADMIN REGISTER POLICE</h2> -->
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->

<!-- REGISTER POLICE  -->
<!-- modal start -->
<td class="text-center">
                <section><button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#roModal">
                             REGISTER POLICE
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="roModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header text-white" style="background-color:#140D44">
                                            <h4 class="modal-title ">POLICE REGISTRATION</h4>
                                            <button type="button " class="close text-white" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="card card-primary">

                                                <!-- /.card-header -->
                                                <!-- form start -->   
                                                <form action="{{url('/register/police')}}" method="POST">
                                                @csrf
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name float-left">Name</label>
                                                            <input  type="text" name="name" class="form-control" id="name"
                                                                placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone No</label>
                                                            <input  type="number" name="phoneno" class="form-control"
                                                                id="phone" placeholder="Enter Phone no">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cinc">CNIC</label>
                                                            <input  type="number" name="cnic" class="form-control" id="cinc"
                                                                placeholder="Enter CNIC">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input  type="email" name="email" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject">Address</label>
                                                            <input  type="text" name="address" class="form-control"
                                                                id="subject" placeholder="Address">
                                                        </div> 
                                                         
                                                        <div class="form-group">
                                                            <label for="status">Rank No</label>
                                                            <input type="text" name="rank" class="form-control" id="v"
                                                                placeholder="rank">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Batch No</label>
                                                            <input type="text" name="batchno" class="form-control" id="v"
                                                                placeholder="Batch No">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="msg"> Data of Joining</label>
                                                            <input type="text" name="dateofjoining" class="form-control" id="v"
                                                                placeholder="Date/Time">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="appointment">Appointment Time</label>
                                                            <input type="datetime-local" name="date" class="form-control" id="v"
                                                                placeholder="appointment">
                                                        </div>

                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                    <button type="submit" name="police" class="btn btn-success">Submit</button>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button"  class="btn text-white" style="background-color:#D8050E"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section></td>
            <!-- modal end -->


<!-- REGISTER POLICE END -->

<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">POLICE REGISTRATION TABLE</h2>
            </div>
        </div>
        <!-- row end -->

    </div>

    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="adminfir" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>CNIC</th>
                <th>Subject</th>
                <th>Place of Incident</th>
                <th>Data/Time of Incident</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr>

                <td  class="text-center ">Abdul Rafay Javed</td>
                <td  class="text-center ">37401 33895115 </td>
                <td  class="text-center ">Car Snatching </td>
                <td  class="text-center ">Wah Cantt</td>
                <td  class="text-center ">29th Dec 2020, 11:46 PM</td>
                <!-- modal start -->
                <td class="text-center">
                <section><button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#proModal">
                                Proceed
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="proModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header text-white" style="background-color:#140D44">
                                            <h4 class="modal-title ">FIRST INVESTIGATION REPORT</h4>
                                            <button type="button " class="close text-white" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="card card-primary">

                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form role="form">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name float-left">Name</label>
                                                            <input  type="text" class="form-control" id="name"
                                                                placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone No</label>
                                                            <input  type="number" class="form-control"
                                                                id="phone" placeholder="Enter Phone no">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cinc">CNIC</label>
                                                            <input  type="number" class="form-control" id="cinc"
                                                                placeholder="Enter CNIC">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input  type="email" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject">Address</label>
                                                            <input  type="text" class="form-control"
                                                                id="subject" placeholder="Address">
                                                        </div> 
                                                         <div class="form-group">
                                                            <label for="subject">Subject of Incident</label>
                                                            <input  type="text" class="form-control"
                                                                id="subject" placeholder="Subject of incident">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="status">PLace of Incident</label>
                                                            <input type="text" class="form-control" id="v"
                                                                placeholder="appointment">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="msg"> Data/Time of Incident </label>
                                                            <input type="text" class="form-control" id="v"
                                                                placeholder="Date/Time">
                                                        </div>
                                                      

                                                        <div class="form-group">
                                                            <label for="appointment">Appointment Time</label>
                                                            <input type="datetime-local" class="form-control" id="v"
                                                                placeholder="appointment">
                                                        </div>

                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-success">Confirm
                                                            Proceed</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button"  class="btn text-white" style="background-color:#D8050E"
                                                data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section></td>
            <!-- modal end -->
            </tr>
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- Admin Table End -->


@endsection