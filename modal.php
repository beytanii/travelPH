<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Where do you want to go?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" value = "<?php echo $_SESSION['username']?>" disabled>
                </div>
                </div>
                <div class="form-group row">
                <label for="inputPlace" class="col-sm-2 col-form-label">Place </label>
                <div class="col-sm-10">
                    <select id="inputPlace" class="form-control">
                    <option selected>Guyam Islands, Siargao</option>
                    <option>Kayak Tour, El Nido</option>
                    <option>Boracay Beach</option>
                    <option>Siargao Islands, Siargao</option>
                    <option>Island Hopping Tour, El Nido</option>
                    <option>Boracay Beach Sunset</option>
                    </select>
                </div>
                </div>
                <div class="form-group row">
                <label for="date" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date">
                </div>
                </div>
                </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary"  data-toggle="tooltip" data-placement="top" title="Clear the Inputs">Clear</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>