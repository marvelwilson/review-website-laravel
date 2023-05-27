<div class="modal fade" tabindex="-1" role="dialog" id="add-user">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <div class="nk-upload-form">
                    <h5 class="title mb-3">Create User</h5>
                    <form id="addForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <input type="text" class="form-control form-control-lg" name="user_type" value="{{$type}}" hidden>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" name="full_name" placeholder="Enter Full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Email</label>
                                    <input type="email" class="form-control form-control-lg " name="email" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Username</label>
                                    <input type="text" class="form-control form-control-lg " name="username" placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Phone</label>
                                    <input type="text" class="form-control form-control-lg " name="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Date of birth</label>
                                    <input type="date" class="form-control form-control-lg " name="dob">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Create Password">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary add-btn">Save</button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->