<div class="modal modal-success fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-600" id="successModalLabel">Edit Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control mt-2" id="id" name="id" type="number" hidden>

                    <input class="form-control mt-2" type="text" id="titl" name="title" placeholder="Enter title">
                    <input class="form-control mt-2" type="text" id="lin" name="link" placeholder="Enter link">

                    <input type="file" class="form-control-file mt-2" name="image" id="image">

                    <button type="submit" class="btn btn-success mb-2 update-btn">Update</button>

                </form>
            </div>
        </div>
    </div>
</div>
