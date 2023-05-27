<div class="modal modal-success fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-600" id="successModalLabel">Create Staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input class="form-control mt-2" type="text" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <input class="form-control mt-2" type="text" id="position" name="position" placeholder="Enter position">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="image" id="image exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Enter testimony content" name="content" class="form-control" id="content exampleFormControlTextarea1" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success mb-2 add-btn">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
