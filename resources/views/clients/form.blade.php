<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <label for="exampleInputPassword1">Name ar</label>
    <input type="text" name="name_ar" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Name en</label>
    <input type="text" name="name_en" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>


<div class="form-group">
    <label for="exampleInputFile">Type</label>
    <select required  class="form-control" name="type">
        <option selected value="">Select type </option>
        <option value="CLIENT">Client</option>
        <option value="PARTNER">Partner</option>
    </select>
</div>







