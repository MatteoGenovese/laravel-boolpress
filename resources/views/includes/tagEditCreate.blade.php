<div class="form-group">
    <label for="name">tag name</label>
    <input type="text" class="form-control" id="name"  placeholder="Enter tag name" name="name" value="{{ old('name', $tag->name) }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
