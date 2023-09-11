@extends('layout.backend.auth')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Variant</h4>
            </div>
            @hasrole('Super-Admin')
            <div class="page-btn">
                <button type="button" class="btn btn-primary waves-effect waves-light btn-added" data-bs-toggle="modal"
                    data-bs-target=".product-modal-xl">Add New</button>
            </div>
            @endhasrole
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>Sl. No</th>
                                <th>Product</th>
                                <th>Variant</th>
                                <th>Counter Price</th>
                                <th>Customer Price</th>
                                <th>MRP Price</th>
                                @hasrole('Super-Admin')
                                <th>Action</th>
                                @endhasrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $keydata => $datadatadatas)
                                <tr>
                                    <td>{{ ++$keydata }}</td>
                                    <td>{{ $datadatadatas->subcategory->name }}</td>
                                    <td>{{ $datadatadatas->name }}</td>
                                    <td>₹ {{ $datadatadatas->counter_price }}</td>
                                    <td>₹ {{ $datadatadatas->customer_price }}</td>
                                    <td>₹ {{ $datadatadatas->price }}</td>
                                    @hasrole('Super-Admin')
                                    <td>
                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                            <li>
                                                <a href="#edit{{ $datadatadatas->unique_key }}" data-bs-toggle="modal"
                                                    data-id="{{ $datadatadatas->unique_key }}"
                                                    data-bs-target=".productedit-modal-xl{{ $datadatadatas->unique_key }}"
                                                    class="badges bg-lightgrey" style="color: white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#delete{{ $datadatadatas->unique_key }}" data-bs-toggle="modal"
                                                    data-id="{{ $datadatadatas->unique_key }}"
                                                    data-bs-target=".productedelete-modal-xl{{ $datadatadatas->unique_key }}"
                                                    class="badges bg-lightyellow" style="color: white">Delete</a>
                                            </li>
                                        </ul>
                                    </td>
                                    @endhasrole
                                </tr>

                                <div class="modal fade productedit-modal-xl{{ $datadatadatas->unique_key }}"
                                    tabindex="-1" role="dialog" data-bs-backdrop="static"
                                    aria-labelledby="editLargeModalLabel{{ $datadatadatas->unique_key }}"
                                    aria-hidden="true">
                                    @include('page.backend.product.edit')
                                </div>
                                <div class="modal fade productedelete-modal-xl{{ $datadatadatas->unique_key }}"
                                    tabindex="-1" role="dialog"data-bs-backdrop="static"
                                    aria-labelledby="deleteLargeModalLabel{{ $datadatadatas->unique_key }}"
                                    aria-hidden="true">
                                    @include('page.backend.product.delete')
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade product-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            @include('page.backend.product.create')
        </div>
    </div>
@endsection
