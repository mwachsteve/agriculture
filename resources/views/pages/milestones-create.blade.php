


                <!-- start modal -->

<!-- <div class="container-fluid py-4"> -->
<div class="row">
<!-- Modal -->
<div class="col-md-4">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Add Milestone</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ... -->
        <div>
<!-- <h3>Add Milestone</h3> -->
<hr>
<form method="POST" action="{{ route('milestone.addMilestone') }}" enctype="multipart/form-data" >
{{ csrf_field() }}
<div >
<label>Name</label>
<input type="text" name="name" placeholder="Enter Milestone Name">
</div>
<div>
<label for="cost">Cost:</label>
<input type="number" name="cost" id="cost" required>
</div>
<div>
<label>Description</label>
<textarea name="description" rows="4" >
</textarea></div>
<div >
<!-- <label>Choose Images</label>
<input type="file"  name="images" multiple> -->

<label for="images">Images (Many):</label>
<input type="file" name="images[]" id="images" multiple required>
</div>
<div>
<label>Comments</label>
<textarea name="comment" rows="4" >
</textarea>
</div>
<hr>
<button type="submit" >Submit</button>
</form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn bg-gradient-primary" id ="first-modal">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</div>
</div>
                <!-- end modal -->

                                <!-- start modal -->

<div class="row">
<!-- Modal -->
<div class="col-md-4">
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="updateModalLabel">Add Milestone Comments</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- ... -->
        <input type="hidden" name="user_name" id="user_name" value=""/>

        <div>
<!-- <h3>Add Milestone Comments</h3> -->
<hr>
<form method="POST" action="{{ route('milestone.update', 1) }}" enctype="multipart/form-data" >
{{ csrf_field() }}
<div >
<label for="images">Images (Many):</label>
<input type="file" name="images[]" id="images" multiple required>
</div>
<div>
<textarea name="comment" id="comment" rows="4" >
</textarea>
</div>
<hr>
<button type="submit" class="updatedetails" id="updatedetails">Submit</button>
</form>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn bg-gradient-primary" id ="first-modal">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- </div> -->