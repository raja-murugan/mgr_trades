<div class="modal-dialog modal-l">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myExtraLargeModalLabel">Update</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('subcategory.edit', ['unique_key' => $category_data->unique_key]) }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Name <span style="color: red;">*</span></label>
                            <input type="text" name="name" placeholder="Enter Category name" required value="{{ $category_data->name }}">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category<span style="color: red;">*</span></label>
                            <select class="form-control  select" name="category_id" id="category_id" required>
                                    <option value="" disabled selected hiddden>Select Category</option>
                                    @foreach ($category as $categorys)
                                        <option value="{{ $categorys->id }}"@if ($categorys->id === $category_data->category_id) selected='selected' @endif>{{ $categorys->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Image<span style="color: red;">*</span></label>
                            <input type="file" id="" class="form-control" name="productimage"><br/><br/>
                            @if ($category_data->image != "")
                            <img src="{{ asset('assets/subcategory/' .$category_data->image) }}" alt="" width="150" height="100">
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 button-align">
                        <button type="submit" class="btn btn-submit me-2">Update</button>
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
