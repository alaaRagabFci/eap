<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-primary btn-file"><span class="fileupload-new">Logo ar</span>
    <span class="fileupload-exists">Change</span>
    <input type="file" name="logo_ar"/></span>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
</div>

<div class="form-group" style="display:none;">
    <label for="exampleInputFile">pic path</label>
    <input type="text" name="logo_ar" id="logo_ar" required>
</div>

<div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-primary btn-file"><span class="fileupload-new">Logo en</span>
    <span class="fileupload-exists">Change</span>
    <input type="file" name="logo_en"/></span>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
</div>

<div class="form-group" style="display:none;">
    <label for="exampleInputFile">pic path</label>
    <input type="text" name="logo_en" id="logo_en" required>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" name="phone" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Location ar</label>
    <input type="text" name="location_ar" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Location en</label>
    <input type="text" name="location_en" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Box number#</label>
    <input type="text" name="box_number" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Facebook</label>
    <input type="url" name="facebook" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Twitter</label>
    <input type="url" name="twitter" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Google</label>
    <input type="url" name="google" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>


