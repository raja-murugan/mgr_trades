<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myExtraLargeModalLabel">Update</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('product.edit', ['unique_key' => $datadatadatas->unique_key]) }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                     <div class="col-lg-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Product <span style="color: red;">*</span></label>
                              <select class="form-control  select productsession_id" name="subcategory_id" id="subcategory_id" required>
                                    <option value="" disabled selected hiddden>Select Product</option>
                                    @foreach ($subcategory as $subcategorys)
                                        <option value="{{ $subcategorys->id }}"@if ($subcategorys->id === $datadatadatas->subcategory_id) selected='selected' @endif>{{ $subcategorys->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-4">
                        <div class="form-group">
                            <label>Name <span style="color: red;">*</span></label>
                            <input type="text" name="name" placeholder="Enter Product name" class="product_name" required value="{{ $datadatadatas->name }}">
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-2">
                        <div class="form-group">
                            <label>Counter Price<span style="color: red;">*</span></label>
                            <input type="text" name="counter_price" placeholder="Enter Product Price" required value="{{ $datadatadatas->counter_price }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-3">
                        <div class="form-group">
                            <label>Customer Price<span style="color: red;">*</span></label>
                            <input type="text" name="customer_price" placeholder="Enter Product Price" required value="{{ $datadatadatas->customer_price }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-3">
                        <div class="form-group">
                            <label>MRP Price<span style="color: red;">*</span></label>
                            <input type="text" name="price" placeholder="Enter Product Price" required value="{{ $datadatadatas->price }}">
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
