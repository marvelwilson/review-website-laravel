@extends('layouts.super')
@section('content')
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Personal Information</h4>
                                            <div class="nk-block-des">
                                                <p>Basic info, like your name and address, that you use on the Platform.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Basics</h6>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Full Name</span>
                                                <span class="data-value">{{$user->full_name}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Display Name</span>
                                                <span class="data-value">{{$user->username}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Email</span>
                                                <span class="data-value">{{$user->email}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Phone Number</span>
                                                <span class="data-value text-soft">{{$user->phone}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Date of Birth</span>
                                                <span class="data-value">{{$user->dob}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                            <div class="data-col">
                                                <span class="data-label">Address</span>
                                                <span class="data-value">{{$user->address}}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- data-item -->
                                    </div><!-- data-list -->
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Preferences</h6>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Language</span>
                                                <span class="data-value">English (United State)</span>
                                            </div>
                                        </div><!-- data-item -->
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Date Format</span>
                                                <span class="data-value">M d, YYYY</span>
                                            </div>
                                            <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                                        </div><!-- data-item -->

                                    </div><!-- data-list -->
                                </div><!-- .nk-block -->
                            </div>
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary">
                                                @if($user->image =='')
                                                <em class="icon ni ni-user-alt"></em>
                                                @else
                                                <img src="{{asset('storage/'.str_replace('public/','', $user->image))}}" alt="" class="thumb">
                                                @endif
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{$user->full_name}}</span>
                                                <span class="sub-text">{{$user->email}}</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                    {{-- <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                        </ul>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div><!-- .user-card -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="user-account-info py-0">
                                            <h6 class="overline-title-alt">{{$user->user_type}} Account</h6>
                                            <div class="user-balance-sub">{{$user->user_type}} Id <span>{{$user->id}} </span></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner p-0">
                                        <ul class="link-list-menu">
                                            <li><a class="active" href="{{route('super.viewprofile', ['id'=> $user->id])}}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                            {{-- @if($user->user_type != 'user')
                                            <li><a href="{{route('super.viewdocument', ['id'=> $user->id])}}"><em class="icon ni ni-grid-add-fill-c"></em><span>Documents</span></a></li>
                                            @endif --}}
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- @@ Profile Edit Modal @e -->
<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>

                <div class="tab-pane active" id="personal">
                    <form id="editForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" name="full_name" value="{{$user->full_name}}" placeholder="Enter Full name">
                                </div>
                            </div>
                            <input type="number" name="id" value="{{$user->id}}" hidden>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Display Name</label>
                                    <input type="text" class="form-control form-control-lg" name="username" value="{{$user->username}}" placeholder="Enter display name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg" name="phone" value="{{$user->phone}}" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Date of Birth</label>
                                    <input type="date" class="form-control form-control-lg " name="dob" value="{{$user->dob}}" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Address</label>
                                    <input type="text" class="form-control form-control-lg" name="address" value="{{$user->address}}" placeholder="Enter your address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="default-06">Image Upload</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="image" multiple class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary update-btn">Update Profile</button>

                            </div>
                        </div>
                    </form>
                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->


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
                , url: "{{ route('super.updateprofile') }}"
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