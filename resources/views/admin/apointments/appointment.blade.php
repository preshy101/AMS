@extends('admin.admin_master')
@section('admin')
<div class="clearfix" style="float: right">
 <button  type="button"
                          class="  collapsed btn btn-primary"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionIcon-1"
                          aria-controls="accordionIcon-1"
                          class="btn btn-primary mb-3" ><i class="bx bx-plus" ></i> Add Appointment</button>

                </div>

<br>

    <!-- Striped Rows -->
  <!-- Modal for list driver -->
                        <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                          <div class="modal-dialog">
                              <form class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Appointment</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">

                                <input type="text" id="appoint" class="d-none">
                        <div class="mb-3 row">
                        <label for="html5-text-input"   class="col-md-2 col-form-label"> Name</label>
                        <div class="col ">
                          <input class="form-control" required name="name" type="text" placeholder="John Doe" id="name" />
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Appointment Date</label>
                        <div class="col ">
                          <input class="form-control"required name="date" type="date"
                          min="{{ Carbon\Carbon::now()->format('Y-m-d')}}"
                          id="date" />
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Appointment Time</label>
                        <div class="col ">
                          <input class="form-control"required name="time" type="time"  id="time" />
                        </div>
                        </div>
                          <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Appointment Status</label>
                        <div class="col">
                                <select required class="form-control" name="status" id="">
                                    <option value="1">Approve</option>
                                    <option value="0">Deny</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input"  class="col-md-2 col-form-label">Reason For Appointment</label>
                        <div class="col ">
                            <textarea class="form-control"required name="reasonForAppointment" id="reason" cols="5" rows="5"></textarea>
                         </div>
                        </div>
                         <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Result of Appointment</label>
                        <div class="col ">
                            <textarea class="form-control"required name="result" id="result" cols="5" rows="5"></textarea>
                         </div>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"> </label>
                        <div class="col ">
                        <input type="submit" class="btn btn-primary" name="form2" value="Submit">
                        </div>
                        </div>

                              </div>


                              </div>
                          </div>
                          </div>
                    @if(count($errors))
                  @foreach ($errors->all() as $error)
                  <p class="alert alert-danger alert-dismissible fade show">
                    {{$error}}
                  </p>
                  @endforeach
                  @endif
              @if ($message = Session::get('message'))
                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                   <!-- Modal Backdrop -->

                    <br>
                          <h4 class="fw-bold mb-3"><span class="text-muted fw-light">Appointment /</span> view</h4>

                <div class="accordion-item card clearfix">
                    <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            <form action="{{route('store.appoint')}}" method="post">
                                @csrf
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"> Name</label>
                        <div class="col-md-6">
                          <input class="form-control" name="name" type="text" placeholder="John Doe" id="html5-text-input" />
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Appointment Date</label>
                        <div class="col-md-6">
                          <input class="form-control" name="date" type="date"
                          min="{{ Carbon\Carbon::now()->format('Y-m-d')}}"
                          id="html5-text-input" />
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Appointment Time</label>
                        <div class="col-md-6">
                          <input class="form-control" name="time" type="time"  id="html5-text-input" />
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Reason For Appointment</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="reasonForAppointment" id="reason" cols="5" rows="5"></textarea>
                         </div>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Result of Appointment</label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="reasonForAppointment" id="result" cols="5" rows="5"></textarea>
                         </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"> </label>
                        <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                        </div>
</form>

                        </div>
                      </div>
                    </div>
                        <!-- Modal -->




              <div class="card my-3">
                <h5 class="card-header">Appointments</h5>
                <div class="table-responsive text-nowrap mx-1">
                  <table id="table" class="m-3 table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th></th>
                        <th>Actions</th>
                        <th class="d-none"></th>
                        <th class="d-none"></th>
                        <th class="d-none"></th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if($appoints)
                        @foreach ($appoints as $key => $appoint)
                        <tr>
                            <td>
                                {{$key+1}}
                            </td>

                            <td>{{$appoint->name}}</td>
                            <td>
                                {{Carbon\Carbon::parse($appoint->date )->format('D, d F Y')}}

                                @if($appoint->date >= Carbon\Carbon::now()->format('Y-m-d'))
                                <span class="badge rounded-pill bg-success">
                                    Valid
                                </span>
                                @else
                                <span class="badge rounded-pill bg-danger">
                                   Invalid
                                </span>
                                @endif

                            </td>
                            <td> {{$appoint->time}}</td>
                            <td>
                                {{($appoint->status)? 'Approved': 'Not Approved'}}
                            </td>
                            <td>
                            <form action="{{route('appoints.edit', $appoint->id)}}" method="POST">
                                @csrf
                                <select class="form-control" name="status" id="">
                                    <option value="1">Approve</option>
                                    <option value="0">Deny</option>
                                </select>
                                </td>
                                <td>
                                <input type="submit" class="btn btn-success" value="sumbit">
                            </form>
                                <button
                                data-bs-toggle="modal"
                                data-bs-target="#backDropModal"
                                class="btn btn-info text-white" id="edit">
                                    View
                                </button>
                                <a
                                href="{{route('appoints.update', $appoint->id)}}"
                                class="btn btn-warning">
                                    edit
                                </a>
                                <a
                                href="{{route('appoints.delete', $appoint->id)}}"
                                class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                            <td class="d-none"> {{$appoint->reasonForAppointment }}</td>


                            <td class="d-none"> {{$appoint->result }}</td>
                            <td class="d-none"> {{$appoint->id }}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Striped Rows -->
    <!--Import jQuery before export.js-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<script>
     $('#table').DataTable({

                    });
                     $('.table tbody').on('click','#edit', function(e){
                       var tablerow = $(this).closest('tr');
                        //  alert(tablerow.find('td:eq(1)').text());

          document.getElementById('name').value=""+tablerow.find('td:eq(1)').text();
          document.getElementById('reason').value=""+tablerow.find('td:eq(7)').text();
          document.getElementById('result').value=""+tablerow.find('td:eq(8)').text();
          document.getElementById('appoint').value=""+tablerow.find('td:eq(9)').text();
                     })
</script>
@endsection
