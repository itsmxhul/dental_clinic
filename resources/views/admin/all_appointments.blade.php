@include('admin.header')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0 w-100 ">
            <div class="card">

                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body ">
                            {{-- <div class="card mb-4">
                                <h5 class="card-header">Bootstrap modals</h5>
                                <div class="card-body">
                                  <div class="row gy-3"> --}}
                                    <!-- Default Modal -->

                                        <!-- Modal -->
                                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="row">
                                                  <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">Name</label>
                                                    <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" />
                                                  </div>
                                                </div>
                                                <div class="row g-2">
                                                  <div class="col mb-0">
                                                    <label for="emailBasic" class="form-label">Email</label>
                                                    <input type="text" id="emailBasic" class="form-control" placeholder="xxxx@xxx.xx" />
                                                  </div>
                                                  <div class="col mb-0">
                                                    <label for="dobBasic" class="form-label">DOB</label>
                                                    <input type="text" id="dobBasic" class="form-control" placeholder="DD / MM / YY" />
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                  Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                    </div>
                                    <div class="row container">
                                        <div class="col-lg-10">
                                            <h5 class="card-title text-primary">All Appointments</h5>
                                                <p class="mb-4">
                                                    check all appointmnet here!
                                                </p>
                                        </div>
                                        <div class="col-lg-2">
                                            {{-- <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#basicModal">
                                                    Appointment
                                              </button> --}}
                                        </div>
                                    </div>


                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Services</th>
                                    <th scope="col">Doctors</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Action</th>

                                  </tr>
                                </thead>
                                <tbody id="all-appointment">
                                  {{-- <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr> --}}

                                </tbody>
                              </table>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <script>
            function showappointment(){
            fetch("http://localhost:8000/api/appointmentdata").then(response=>response.json()).then((res)=>{
                console.log(res);
                data="";
                count=1;
            res.forEach(element => {
                    data +=`<tr>
                                    <th scope="row">${count}</th>
                                    <td>${element.name}</td>
                                    <td>${element.phone}</td>
                                    <td>${element.services}</td>
                                    <td>${element.doctors}</td>
                                    <td>${element.date}</td>
                                    <td>${element.time}</td>
                                    <td><button class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#basicModal">Edit</button>
                                    <button class='btn btn-success'>Message</button>
                                    <button class='btn btn-danger' onclick="deleteappointment(${element.id})">Delete</button></td>
                                  </tr>`;
                                  count++;
                });
                document.getElementById('all-appointment').innerHTML=data;
            })
        }showappointment()
        function deleteappointment(id)
        {
            // console.log(id);
            fetch("http://localhost:8000/api/deleteappointment/"+id).then(response=>response.json()).then((res)=>{
                console.log(res);
                showappointment();
            })
        }
        </script>
        <!-- / Content -->

@include('admin.footer')
