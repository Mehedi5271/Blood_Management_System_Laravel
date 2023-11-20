

@extends('admin.layout.master')
@section('content')
    
<div class="container-fluid">


    <!-- content for donor html file -->
    <div class="request_area">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="box-title">All Donor Information</h4>
                        <a href="#" class="btn btn-info btn-sm"><i class="fa fa-print"></i> Print all donor</a>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table table-hover display" id="MyTable">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Profile</th>
                                        <th>Name</th>
                                        <th>Blood</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>District</th>
                                        <th>Last Donate Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/1.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Masud Rana</td>
                                        <td>O+</td>
                                        <td>01245142587</span></td>
                                        <td>Belabo</td>
                                        <td>Narsingdi</td>
                                        <td>12/08/2020</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">2</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/2.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Lorum lorum</td>
                                        <td>O+</td>
                                        <td>01242452587</span></td>
                                        <td>Nondigram</td>
                                        <td>Bogura</td>
                                        <td>17/09/2019</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">3</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/3.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Rakib Hasaa</td>
                                        <td>AB+</td>
                                        <td>01245528587</span></td>
                                        <td>Dhunot</td>
                                        <td>Bogura</td>
                                        <td>12/12/2020</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">4</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/4.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Ebrahim Kardi</td>
                                        <td>B-</td>
                                        <td>0124514524</span></td>
                                        <td>Madobpur</td>
                                        <td>Habigonj</td>
                                        <td>12/01/2021</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">5</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/5.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Milon Mia</td>
                                        <td>O+</td>
                                        <td>01245642587</span></td>
                                        <td>Belabo</td>
                                        <td>Narsingdi</td>
                                        <td>12/08/2020</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">6</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/1.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Mehedi Hasan</td>
                                        <td>A+</td>
                                        <td>0124542587</span></td>
                                        <td>Bancarampur</td>
                                        <td>Brahmanbaria</td>
                                        <td>12/08/2020</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="serial">7</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/1.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Masud Rana</td>
                                        <td>O+</td>
                                        <td>01245142587</span></td>
                                        <td>Belabo</td>
                                        <td>Narsingdi</td>
                                        <td>12/08/2020</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">8</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/2.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Lorum lorum</td>
                                        <td>O+</td>
                                        <td>01242452587</span></td>
                                        <td>Nondigram</td>
                                        <td>Bogura</td>
                                        <td>17/09/2019</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">9</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/3.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Rakib Hasaa</td>
                                        <td>AB+</td>
                                        <td>01245528587</span></td>
                                        <td>Dhunot</td>
                                        <td>Bogura</td>
                                        <td>12/12/2020</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">10</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/4.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Ebrahim Kardi</td>
                                        <td>B-</td>
                                        <td>0124514524</span></td>
                                        <td>Madobpur</td>
                                        <td>Habigonj</td>
                                        <td>12/01/2021</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">11</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/5.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Milon Mia</td>
                                        <td>O+</td>
                                        <td>01245642587</span></td>
                                        <td>Belabo</td>
                                        <td>Narsingdi</td>
                                        <td>12/08/2020</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="serial">12</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <img class="rounded-circle" src="../../images/avatar/1.jpg" alt="admin profile" width="50px" height="50px">
                                            </div>
                                        </td>
                                        <td>Mehedi Hasan</td>
                                        <td>A+</td>
                                        <td>0124542587</span></td>
                                        <td>Bancarampur</td>
                                        <td>Brahmanbaria</td>
                                        <td>12/08/2020</span></td>
                                        <td>
                                            <a href="donor-details.html" class="btn btn-success btn-sm">View</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .request_area end -->



</div> <!-- .container-fluid end -->
		

     



  
@endsection



