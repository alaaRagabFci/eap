<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
    <label for="exampleInputPassword1">Page</label>
    <input type="text" disabled name="page" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-primary btn-file"><span class="fileupload-new">Image</span>
    <span class="fileupload-exists">Change</span>
    <input type="file" name="image"/></span>
    <span class="fileupload-preview"></span>
    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
</div>

<div class="form-group" style="display:none;">
    <label for="exampleInputFile">pic path</label>
    <input type="text" name="image" id="image" required>
</div>


<div class="form-group">
    <label for="exampleInputPassword1">Title ar</label>
    <input type="text" name="title_ar" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Title en</label>
    <input type="text" name="title_en" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>


<div class="form-group">
    <label for="exampleInputPassword1">Description ar</label>
    <textarea required rows="10"  cols="50" name="description_ar" class="form-control"></textarea>
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Description en</label>
    <textarea required rows="10"  cols="50" name="description_en" class="form-control"></textarea>
    <span class="help-block with-errors errorName"></span>
</div>





