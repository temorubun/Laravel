<h5 class="card-title">Profile Image</h5>
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
  <div class="row mb-3">
    <label for="img_user" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
    <div class="col-md-8 col-lg-9">
      <div class="pt-2">
        <input type="file"class="form-control" id="img_user" name="img_user" accept="image/*">
      </div>
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Save Changes</button>
  </div>
</form>
