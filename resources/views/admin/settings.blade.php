@extends('layouts.admin')
@section('content')

<div class="body-content">

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-0 font-weight-600">Joined</h6>
                        </div>
                        <div class="col-auto">
                            <time class="fs-13 font-weight-600 text-muted" datetime="2018-10-28">{{ \Carbon\Carbon::parse($setting->created_at)->diffForHumans() }}</time>

                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-0 font-weight-600">Website</h6>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="fs-13 font-weight-600">Al Ummah MFC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 font-weight-600 mb-0">Edit Profile</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Refresh</a>
                                        <a href="#" class="dropdown-item">Manage Widgets</a>
                                        <a href="#" class="dropdown-item">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form id="editForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label class="font-weight-600">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{$setting->email}}">
                                </div>
                            </div>
                            <div class="col-md-6 px-md-1">
                                <div class="form-group">
                                    <label class="font-weight-600">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{$setting->address}}">
                                </div>
                            </div>
                        </div>
                        <input type="number" hidden name="id" value="{{$setting->id}}">
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label class="font-weight-600">Phone </label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{$setting->phone}}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label class="font-weight-600">Facebook link</label>
                                    <input type="text" class="form-control" name="fb" placeholder="Facebook link" value="{{$setting->fb}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label class="font-weight-600">Twitter </label>
                                    <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="{{$setting->twitter}}">
                                </div>
                            </div>
                            <div class="col-md-6 px-md-1">
                                <div class="form-group">
                                    <label class="font-weight-600">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{$setting->instagram}}">
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary update-btn">Save</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!--/.body content-->

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        $("#editForm").submit((e) => {
            e.preventDefault();
            const formData = new FormData(document.querySelector("#editForm"));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
                }
            });

            $.ajax({

                method: "POST"
                , url: "{{ route('admin.updatesetting') }}"
                , contentType: false
                , processData: false
                , data: formData
                , beforeSend: () => {
                    $(".update-btn").text("Updating...");

                }
                , success: (response) => {

                    if (response.success) {
                        $(".update-btn").text("Update");
                        window.setTimeout(function() {
                            location.reload();

                        }, 2000);
                    }

                }
                , error: (error) => {
                    console.log(error)
                }

            })
        })

    })
</script>
@endsection