@include('admin.header')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0 w-100 ">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Navbar</h5>
                                                <p class="mb-4">
                                                   Create Dynamic navbar here!
                                                </p>


                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>

                                  </tr>
                                </thead>
                                <tbody id="all-contacts">
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
            fetch("http://localhost:8000/api/navbardata").then(response=>response.json()).then((res)=>{
                console.log(res);
                data="";
                count=1;
            res.forEach(element => {
                    data +=`<tr>
                                    <th scope="row">${count}</th>
                                    <td>${element.name}</td>

                                  </tr>`;
                                  count++;
                });
                document.getElementById('navbar').innerHTML=data;
            })
            </script>
@include('admin.footer')
