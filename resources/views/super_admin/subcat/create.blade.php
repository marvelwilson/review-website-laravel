<div class="modal fade" tabindex="-1" role="dialog" id="add-user">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <div class="nk-upload-form">
                    <h5 class="title mb-3">Create Sub Category</h5>
                    <form id="addForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" placeholder="Enter category name">
                                </div>
                            </div>
                            <div class="col-12">
                                <input class="form-control mt-2" id="id" name="id" type="number" hidden>
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Select Category</label>
                                    <select class="form-select form-control form-control-lg" name="cat_id" data-search="on">
                                        <option>Select Category</option>
                                        @foreach($cats as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="outlined-select">Select Status</label>
                                    <select class=" form-control form-control-lg" name="status">
                                        <option>Default Option</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
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