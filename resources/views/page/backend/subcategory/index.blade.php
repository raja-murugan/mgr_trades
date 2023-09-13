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
                    data-bs-target=".category-modal-xl">Add New</button>
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
                                <th>image</th>
                                <th>Name</th>
                                <th>Category</th>
                                @hasrole('Super-Admin')
                                <th>Action</th>
                                @endhasrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $keydata => $category_data)
                                <tr>
                                    <td>{{ ++$keydata }}</td>
                                    @if ($category_data->image == "")
                                    <td></td>
                                    @elseif ($category_data->image != "")
                                    <td><img src="{{ asset('assets/subcategory/' . $category_data->image) }}" alt="" width="50" height="50"></td>
                                    @endif
                                    <td>{{ $category_data->name }}</td>
                                    <td>{{ $category_data->category->name  }}</td>
                                    <td>
                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                            <li>
                                                <a href="#edit{{ $category_data->unique_key }}" data-bs-toggle="modal"
                                                    data-id="{{ $category_data->unique_key }}"
                                                    data-bs-target=".categoryeedit-modal-xl{{ $category_data->unique_key }}"
                                                    class="badges bg-lightgrey" style="color: white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#delete{{ $category_data->unique_key }}" data-bs-toggle="modal"
                                                    data-id="{{ $category_data->unique_key }}"
                                                    data-bs-target=".categorydelete-modal-xl{{ $category_data->unique_key }}"
                                                    class="badges bg-lightyellow" style="color: white">Delete</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <div class="modal fade categoryeedit-modal-xl{{ $category_data->unique_key }}"
                                    tabindex="-1" role="dialog" data-bs-backdrop="static"
                                    aria-labelledby="editLargeModalLabel{{ $category_data->unique_key }}"
                                    aria-hidden="true">
                                    @include('page.backend.subcategory.edit')
                                </div>
                                <div class="modal fade categorydelete-modal-xl{{ $category_data->unique_key }}"
                                    tabindex="-1" role="dialog"data-bs-backdrop="static"
                                    aria-labelledby="deleteLargeModalLabel{{ $category_data->unique_key }}"
                                    aria-hidden="true">
                                    @include('page.backend.subcategory.delete')
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade category-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            @include('page.backend.subcategory.create')
        </div>
    </div>
@endsection
