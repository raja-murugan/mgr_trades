<div class="modal-dialog modal-l">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myExtraLargeModalLabel">Create</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('subcategory.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Name <span style="color: red;">*</span></label>
                            <input type="text" name="name" placeholder="Enter Category name" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category<span style="color: red;">*</span></label>
                            <select class="form-control  select" name="category_id" id="category_id" required>
                                    <option value="" disabled selected hiddden>Select Category</option>
                                    @foreach ($Category_data as $Category_datas)
                                        <option value="{{ $Category_datas['id'] }}">{{ $Category_datas['name'] }} - {{ $Category_datas['session'] }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Image<span style="color: red;">*</span></label>
                            <input type="file" id="productimage" class="form-control" name="productimage"><br/><br/>
                            <img src="#" id="category-img-tag" width="150" height="100"/>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 button-align">
                        <button type="submit" class="btn btn-submit me-2">Save</button>
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
