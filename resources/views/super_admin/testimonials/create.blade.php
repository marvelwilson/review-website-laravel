<div class="modal fade" tabindex="-1" role="dialog" id="add-user">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <div class="nk-upload-form">
                    <h5 class="title mb-3">Create Testimonial</h5>
                    <form id="addForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" placeholder="Enter name ">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Company</label>
                                    <input type="text" class="form-control form-control-lg " name="company" placeholder="Enter company">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="outlined-select">Select Gender</label>
                                    <select class=" form-control form-control-lg" name="sex">
                                        <option value="male">Default Option</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="cf-default-textarea">Description</label>
                                <div class="form-control-wrap">
                                    <textarea class="form-control form-control-sm" name="content" id="content"></textarea>
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