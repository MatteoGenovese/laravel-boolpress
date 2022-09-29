<div class="form-group">
    <label for="name">category name</label>
    <input type="text" class="form-control" id="name"  placeholder="Enter name" name="name" value="{{ old('name', $category->name) }}">
</div>
<div class="form-group">
    <label for="color">color</label>
    <input type="color" class="form-control" id="color"  name="color" value="{{ old('color', $category->color) }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
