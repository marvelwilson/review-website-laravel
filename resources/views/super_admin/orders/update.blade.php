<div class="modal fade" tabindex="-1" role="dialog" id="update-order">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <div class="nk-upload-form">
                    <h5 class="title mb-3">Assign Order</h5>
                    <form id="assignForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-12">
                                <input class="form-control mt-2" id="id" name="id" type="number" hidden>
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Free Riders</label>
                                    <select class="form-select form-control form-control-lg" name="driver_id" data-search="on">
                                        <option>Select Rider</option>
                                        @foreach($drivers as $driver)
                                        <option value="{{$driver->id}}">{{$driver->full_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg btn-primary update-btn">Assign to Rider</button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div><!-- .modal-content -->
    </div><!-- .modla-dialog -->
</div><!-- .modal -->