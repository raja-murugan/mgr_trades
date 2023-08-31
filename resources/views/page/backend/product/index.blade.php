@extends('layout.backend.auth')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product</h4>
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
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Product</th>
                                <th>Image</th>
                                <th>Counter Price</th>
                                <th>Customer Price</th>
                                <th>MRP Price</th>
                                @hasrole('Super-Admin')
                                <th>Action</th>
                                @endhasrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Productdata as $keydata => $Productdatas)
                                <tr>
                                    <td>{{ ++$keydata }}</td>
                                    <td>{{ $Productdatas['sessionname']  }}</td>
                                    <td>{{ $Productdatas['categoryname'] }}</td>
                                    <td>{{ $Productdatas['name'] }}</td>

                                        @if ($Productdatas['image'] == "")
                                        <td></td>
                                        @elseif ($Productdatas['image'] != "")
                                        <td><img src="{{ asset('assets/product/' .$Productdatas['image']) }}" alt="" width="50" height="50"></td>
                                        @endif
                                    <td>₹ {{ $Productdatas['counter_price']  }}</td>
                                    <td>₹ {{ $Productdatas['customer_price']  }}</td>
                                    <td>₹ {{ $Productdatas['price']  }}</td>
                                    @hasrole('Super-Admin')
                                    <td>
                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                            <li>
                                                <a href="#edit{{ $Productdatas['unique_key'] }}" data-bs-toggle="modal"
                                                    data-id="{{ $Productdatas['unique_key'] }}"
                                                    data-bs-target=".productedit-modal-xl{{ $Productdatas['unique_key'] }}"
                                                    class="badges bg-lightgrey" style="color: white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#delete{{ $Productdatas['unique_key'] }}" data-bs-toggle="modal"
                                                    data-id="{{ $Productdatas['unique_key'] }}"
                                                    data-bs-target=".productedelete-modal-xl{{ $Productdatas['unique_key'] }}"
                                                    class="badges bg-lightyellow" style="color: white">Delete</a>
                                            </li>
                                        </ul>
                                    </td>
                                    @endhasrole
                                </tr>

                                <div class="modal fade productedit-modal-xl{{ $Productdatas['unique_key'] }}"
                                    tabindex="-1" role="dialog" data-bs-backdrop="static"
                                    aria-labelledby="editLargeModalLabel{{ $Productdatas['unique_key'] }}"
                                    aria-hidden="true">
                                    @include('page.backend.product.edit')
                                </div>
                                <div class="modal fade productedelete-modal-xl{{ $Productdatas['unique_key'] }}"
                                    tabindex="-1" role="dialog"data-bs-backdrop="static"
                                    aria-labelledby="deleteLargeModalLabel{{ $Productdatas['unique_key'] }}"
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
