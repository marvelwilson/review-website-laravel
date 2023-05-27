<div class="modal modal-success fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-600" id="successModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" enctype="multipart/form-data">
                    @csrf

                    <textarea disabled placeholder="Enter blog content" name="content" class="form-control mt-2" id="conten" rows="5"></textarea>


                </form>
            </div>
        </div>
    </div>
</div>