<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <label for="exampleInputFile">Select page</label>
    <select required  class="form-control" name="page">
        <option selected value="">Select Page </option>
        <option value="ABOUTUS">ABOUTUS</option>
        <option value="CLIENTS">CLIENTS</option>
        <option value="CONSULTANCY">CONSULTANCY</option>
        <option value="MANAGMENT">MANAGMENT</option>
        <option value="NEWS">NEWS</option>
        <option value="WORK">WORK</option>
        <option value="PROJECTS">PROJECTS</option>
        <option value="SERVICES">SERVICES</option>
        <option value="EXPERTISES">EXPERTISES</option>
    </select>
</div>


<div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-primary btn-file"><span class="fileupload-new">Image</span>
    <span class="fileupload-exists">Change</span>
    <input type="file" name="image"/></span>
    <span class="fileupload-preview"></span>
    <a href="#" required class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
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





