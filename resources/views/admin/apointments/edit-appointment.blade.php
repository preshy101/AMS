@extends('admin.admin_master')
@section('admin')

    <!-- Striped Rows -->
  <!-- Modal for list driver -->


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
                          <h4 class="fw-bold mb-3"><span class="text-muted fw-light">Appointment /</span> edit</h4>

                <div class="  card clearfix">
                    {{-- <div id="accordionIcon-1" class="accordion-collapse collapse" data-bs-parent="#accordionIcon"> --}}
                        <div class="card-body">
                    <form name="update" action="{{route('result.appointment',$data->id)}}"  method="post" enctype="multipart/form-data">
                      @csrf 
                        <div class="mb-3 row">
                        <label for="html5-text-input"   class="col-md-2 col-form-label"> Name</label>
                        <div class="col-md-6 ">
                          <input class="form-control" required name="name" value="{{$data->name}}" type="text" placeholder="John Doe" id="name" />
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Appointment Date</label>
                        <div class="col-md-6 ">
                          <input class="form-control"required name="date" type="date"value="{{$data->data}}"
                          min="{{ Carbon\Carbon::now()->format('Y-m-d')}}"
                          id="date" />
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Appointment Time</label>
                        <div class="col-md-6 ">
                          <input class="form-control"required name="time" type="time" value="{{$data->time}}" id="time" />
                        </div>
                        </div>
                          <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Appointment Status</label>
                        <div class="col-md-6">
                                <select required class="form-control" name="status" id="">
                                    <option value="1">Approve</option>
                                    <option value="0">Deny</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input"  class="col-md-2 col-form-label">Reason For Appointment</label>
                        <div class="col-md-6 ">
                            <textarea class="form-control"required name="reasonForAppointment" id="reason" cols="5" rows="5">{{$data->reasonForAppointment}}</textarea>
                         </div>
                        </div>
                         <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Result of Appointment</label>
                        <div class="col-md-6 ">
                            <textarea class="form-control"required name="result" id="result" cols="5" rows="5">{{$data->result}}</textarea>
                         </div>
                        </div>
                        <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"> </label>
                        <div class="col-md-6 ">
                        <input type="submit" class="btn btn-primary" name="form2" value="Submit">
                        </div>
                        </div>
</form>

                        {{-- </div> --}}
                      </div>
                    </div>
                        <!-- Modal -->




              <!--/ Striped Rows -->
    <!--Import jQuery before export.js-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<script>
     $('#table').DataTable({

                    });

</script>
@endsection
