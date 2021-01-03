@extends('layout.master')

@section('content')
<!-- table admin start  -->
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">POLICE APPOINTMENT TABLE</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="policeappointment" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>Email</th>
                <th>CNIC</th>
                <th>Phone No</th>
                <th>Subject</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr>

                <td  class="text-center ">Umair</td>
                <td  class="text-center ">umair@gmail.com </td>
                <td  class="text-center ">37406-123456789 </td>
                <td  class="text-center ">0312-12345678</td>
                <td  class="text-center ">House Rent Problem</td>
                <!-- modal start -->
                <td class="text-center">

<section><button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#proceedModal">
                                Proceed
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="proceedModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header" style="background-color:#140D44">
                                            <h4 class="modal-title font-heading text-white" >APPOINTMENT</h4>
                                            <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
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
                                                            <input disabled type="text" class="form-control" id="name"
                                                                placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Email</label>
                                                            <input disabled type="email" class="form-control"
                                                                id="email" placeholder="Enter Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cinc">CNIC</label>
                                                            <input disabled type="number" class="form-control" id="cinc"
                                                                placeholder="Enter CNIC">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone No</label>
                                                            <input disabled type="number" class="form-control"
                                                                id="phoneno" placeholder="Enter Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Status of Meeting</label>
                                                            <select name="" id="status" class="form-control">
                                                                <option value="critical">Normal</option>
                                                                <option value="normal">Critical</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Subject of Meeting</label>
                                                            <input disabled type="email" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Enter Subject">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="msg">Meeting Details</label>
                                                            <textarea disabled name="" id="msg" cols="30" rows="5"
                                                                class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="appointment">Appointment Date&Time</label>
                                                            <input type="datetime-local" class="form-control" id="v"
                                                                placeholder="Appointment">
                                                        </div>

                                                    </div>
                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-success">Confirm Proceed</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn text-white" style="background-color:#D8050E"
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
<!-- table police end -->



<!-- police table start -->
<!-- table admin start  -->
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;"> ADMIN APPOINTMENT TABLE </h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="adminappointment" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
            <th>Name</th>
                <th>Email</th>
                <th>CNIC</th>
                <th>Phone No</th>
                <th>Subject</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr>

            <td  class="text-center ">Umair</td>
                <td  class="text-center ">umair@gmail.com </td>
                <td  class="text-center ">37406-123456789 </td>
                <td  class="text-center ">0312-12345678</td>
                <td  class="text-center ">House Rent Problem</td>
                <!-- modal start -->
                <td class="text-center">

<section><button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#roceedModal">
                                Proceed
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="roceedModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header text-white" style="background-color:#140D44">
                                            <h4 class="modal-title">APPOINTMENT</h4>
                                            <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
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
                                                            <label for="phone">Email</label>
                                                            <input  type="email" class="form-control"
                                                                id="email" placeholder="Enter Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cinc">CNIC</label>
                                                            <input  type="number" class="form-control" id="cinc"
                                                                placeholder="Enter CNIC">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Phone No</label>
                                                            <input  type="number" class="form-control"
                                                                id="phoneno" placeholder="Enter Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Status of Meeting</label>
                                                            <select name="" id="status" class="form-control">
                                                                <option value="critical">Normal</option>
                                                                <option value="normal">Critical</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Subject of Meeting</label>
                                                            <input  type="email" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Enter Subject">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="msg">Meeting Details</label>
                                                            <textarea  name="" id="msg" cols="30" rows="5"
                                                                class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="appointment">Appointment Date&Time</label>
                                                            <input type="datetime-local" class="form-control" id="v"
                                                                placeholder="Appointment">
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
                                            <button type="button" class="btn text-white" style="background-color:#D8050E"
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
<!-- table admin end -->
<!-- police table end -->

@endsection
