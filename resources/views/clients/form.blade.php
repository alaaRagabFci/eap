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
    <select required  class="form-control" name="type_id">
        <option selected value="">Select type </option>
        @foreach($types as $type)
            <option value="{!! $type->id !!}">{!! $type->type !!}</option>
        @endforeach
    </select>
</div>







