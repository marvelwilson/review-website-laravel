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
                                <div class="nk-fmg-body">
                                    <div class="nk-fmg-body-content">
                                        <div class="nk-block-head nk-block-head-sm">
                                            <div class="nk-block-between position-relative">
                                                <div class="nk-block-head-content">
                                                    <h3 class="nk-block-title page-title">Files</h3>
                                                </div>
                                                <div class="nk-block-head-content">
                                                    <ul class="nk-block-tools g-1">
                                                        <li><a href="#file-upload" class="btn btn-primary" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em> <span>Upload</span></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="nk-fmg-quick-list nk-block">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-between g-2">
                                                    <div class="nk-block-head-content">
                                                        <h6 class="nk-block-title title">Quick Access</h6>
                                                    </div>
                                                    <div class="nk-block-head-content">
                                                        <a href="#" class="link link-primary toggle-opt active" data-target="quick-access">
                                                            <div class="inactive-text">Show</div>
                                                            <div class="active-text">Hide</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="toggle-expand-content expanded" data-content="quick-access">
                                                <div class="nk-files nk-files-view-grid">
                                                    <div class="nk-files-list">
                                                        @foreach($documents as $document)
                                                        <div class="nk-file-item nk-file">
                                                            <div class="nk-file-info">
                                                                <a href="#" class="nk-file-link">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc" />
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea" />
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2" />
                                                                                    <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                    <rect x="27" y="35" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                    <rect x="27" y="39" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                    <rect x="27" y="43" width="14" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                    <rect x="27" y="47" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4" /></svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <span href="#" class="title">{{$document->title}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="nk-file-actions hideable">
                                                                <a href="#" class="btn btn-sm btn-icon btn-trigger"><em class="icon ni ni-cross"></em></a>
                                                            </div>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                                </div><!-- .nk-files -->
                                            </div>
                                        </div>
                                        <div class="nk-fmg-listing nk-block-lg">
                                            <div class="nk-block-head-xs">
                                                <div class="nk-block-between g-2">
                                                    <div class="nk-block-head-content">
                                                        <h6 class="nk-block-title title">Browse Files</h6>
                                                    </div>
                                                    <div class="nk-block-head-content">
                                                        <ul class="nk-block-tools g-3 nav">
                                                            <li><a data-toggle="tab" href="#file-grid-view" class="nk-switch-icon active"><em class="icon ni ni-view-grid3-wd"></em></a></li>
                                                            <li><a data-toggle="tab" href="#file-group-view" class="nk-switch-icon"><em class="icon ni ni-view-group-wd"></em></a></li>
                                                            <li><a data-toggle="tab" href="#file-list-view" class="nk-switch-icon"><em class="icon ni ni-view-row-wd"></em></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="file-grid-view">
                                                    <div class="nk-files nk-files-view-grid">

                                                        <div class="nk-files-list">
                                                            @foreach($recentdoc as $doc)
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="nk-file-icon">
                                                                            <a class="nk-file-icon-link" href="#">
                                                                                <span class="nk-file-icon-type">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                        <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc" />
                                                                                        <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea" />
                                                                                        <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2" />
                                                                                        <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                        <rect x="27" y="35" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                        <rect x="27" y="39" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                        <rect x="27" y="43" width="14" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                        <rect x="27" y="47" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4" /></svg>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">{{$doc->title}}</a>
                                                                                <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nk-file-desc">
                                                                        <li class="date">02 Apr</li>
                                                                        <li class="size">23 MB</li>
                                                                        <li class="members">3 Members</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            @endforeach

                                                        </div>
                                                    </div><!-- .nk-files -->
                                                </div><!-- .tab-pane -->
                                                <div class="tab-pane" id="file-group-view">
                                                    <div class="nk-files nk-files-view-group">

                                                        <div class="nk-files-group">
                                                            <div class="nk-files-list">
                                                                @foreach($recentdoc as $doc)
                                                                <div class="nk-file-item nk-file">
                                                                    <div class="nk-file-info">
                                                                        <div class="nk-file-title">
                                                                            <div class="nk-file-icon">
                                                                                <span class="nk-file-icon-type">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                        <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc" />
                                                                                        <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea" />
                                                                                        <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2" />
                                                                                        <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                        <rect x="27" y="35" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                        <rect x="27" y="39" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                        <rect x="27" y="43" width="14" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                        <rect x="27" y="47" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4" /></svg>
                                                                                </span>
                                                                            </div>
                                                                            <div class="nk-file-name">
                                                                                <div class="nk-file-name-text">
                                                                                    <a href="#" class="title">{{$doc->title}}</a>
                                                                                    <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="nk-file-desc">
                                                                            <li class="date">02 Apr</li>
                                                                            <li class="size">23 MB</li>
                                                                            <li class="members">3 Members</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="nk-file-actions">
                                                                        <div class="dropdown">
                                                                            <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-plain no-bdr">
                                                                                    <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                    <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                    <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                    <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                    <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                    <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-file -->
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-files -->
                                                </div><!-- .tab-pane -->
                                                <div class="tab-pane" id="file-list-view">
                                                    <div class="nk-files nk-files-view-list">

                                                        <div class="nk-files-list">
                                                            @foreach($recentdoc as $doc)
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info">
                                                                    <div class="nk-file-title">
                                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                            <input type="checkbox" class="custom-control-input" id="file-check-n14">
                                                                            <label class="custom-control-label" for="file-check-n14"></label>
                                                                        </div>
                                                                        <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc" />
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea" />
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2" />
                                                                                    <rect x="27" y="31" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                    <rect x="27" y="35" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                    <rect x="27" y="39" width="18" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                    <rect x="27" y="43" width="14" height="2" rx="1" ry="1" style="fill:#7e95c4" />
                                                                                    <rect x="27" y="47" width="8" height="2" rx="1" ry="1" style="fill:#7e95c4" /></svg>
                                                                            </span>
                                                                        </div>
                                                                        <div class="nk-file-name">
                                                                            <div class="nk-file-name-text">
                                                                                <a href="#" class="title">{{$doc->title}}</a>
                                                                                <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-file-meta">
                                                                    <div class="tb-lead">12 Jan, 04:47 PM</div>
                                                                </div>
                                                                <div class="nk-file-members">
                                                                    <div class="tb-lead">Only Me</div>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown">
                                                                        <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-plain no-bdr">
                                                                                <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>
                                                                                <li><a href="#file-share" data-toggle="modal"><em class="icon ni ni-share"></em><span>Share</span></a></li>
                                                                                <li><a href="#file-copy" data-toggle="modal"><em class="icon ni ni-copy"></em><span>Copy</span></a></li>
                                                                                <li><a href="#file-move" data-toggle="modal"><em class="icon ni ni-forward-arrow"></em><span>Move</span></a></li>
                                                                                <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-pen"></em><span>Rename</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .nk-file -->
                                                            @endforeach

                                                        </div>
                                                    </div><!-- .nk-files -->
                                                </div><!-- .tab-pane -->
                                            </div><!-- .tab-content -->
                                        </div><!-- .nk-block -->
                                    </div><!-- .nk-fmg-body-content -->
                                </div><!-- .nk-fmg-body -->
                            </div>
                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{$user->full_name}}</span>
                                                <span class="sub-text">{{$user->email}}</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .user-card -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="user-account-info py-0">
                                            <h6 class="overline-title-alt">{{$user->user_type}} Account</h6>
                                            <div class="user-balance-sub">{{$user->user_type}} ID <span>{{$user->id}} </span></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner p-0">
                                        <ul class="link-list-menu">
                                            <li><a href="{{route('super.viewprofile', ['id'=> $user->id])}}"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                            <li><a class="active" href="{{route('super.viewdocument', ['id'=> $user->id])}}"><em class="icon ni ni-grid-add-fill-c"></em><span>Documents</span></a></li>
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
<div class="modal fade" tabindex="-1" role="dialog" id="file-upload">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <div class="nk-upload-form">
                    <h5 class="title mb-3">Upload File</h5>
                    <form id="addForm" enctype="multipart/form-data">
                        @csrf
                        <input type="number" value="{{$user->id}}" name="id" hidden>
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Title</label>
                                    <input type="text" class="form-control form-control-lg" name="title" placeholder="Enter file title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">From</label>
                                    <input type="date" class="form-control form-control-lg " name="from">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">To</label>
                                    <input type="date" class="form-control form-control-lg " name="to">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="form-label" for="default-06">File Upload</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="doc" multiple class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary add-btn">Upload Document</button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.editbtn').on('click', function(e) {
            e.preventDefault();
            $('#editmodal').modal('show');


            $("#id").val($(this).attr("data-id"));
            $("#nam").val($(this).attr("data-name"));
            $("#compan").val($(this).attr("data-company"));
            $("#positio").val($(this).attr("data-position"));
            $("#conten").val($(this).attr("data-content"));
        })

        $("#addForm").submit((e) => {
            e.preventDefault();
            const formData = new FormData(document.querySelector("#addForm"));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
                }
            });

            $.ajax({

                method: "post"
                , url: "{{ route('super.storedocument') }}"
                , contentType: false
                , processData: false
                , data: formData
                , beforeSend: () => {
                    $(".add-btn").text("Adding...");

                }
                , success: (response) => {

                    if (response.success) {
                        $(".add-btn").text("Send");
                        /*   $('#table').append(" <tr><td> <div class='avatar-group'><a href='user_profile.html' class='avatar avatar-xs' data-toggle='tooltip' title='Melissa Ayre'> <img src='' alt='people' class='avatar-img rounded-circle' /></a></div> </td><td>" + data.author + "</td><td>"
                            data.title "</td><td>"
                            data.content "</td><td></td> </tr>");

 */
                        window.setTimeout(function() {
                            location.reload();
                            $("#addmodal").modal("hide");
                        }, 2000);
                    }

                }
                , error: (error) => {
                    console.log(error)
                }

            })
        })
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
                , url: "{{ route('super.updatedocument') }}"
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
                            $("#editmodal").modal("hide");
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