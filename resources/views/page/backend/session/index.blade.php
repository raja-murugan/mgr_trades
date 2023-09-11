@extends('layout.backend.auth')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand</h4>
            </div>
            @hasrole('Super-Admin')
            <div class="page-btn">
                <button type="button" class="btn btn-primary waves-effect waves-light btn-added" data-bs-toggle="modal"
                    data-bs-target=".session-modal-xl">Add New</button>
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
                                <th>Logo</th>
                                <th>Name</th>
                                @hasrole('Super-Admin')
                                <th>Action</th>
                                @endhasrole
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $keydata => $session_data)
                                <tr>
                                    <td>{{ ++$keydata }}</td>
                                    @if ($session_data->image == "")
                                    <td></td>
                                    @elseif ($session_data->image != "")
                                    <td><img src="{{ asset('assets/brand/' . $session_data->image) }}" alt="" width="50" height="50"></td>
                                    @endif
                                    <td>{{ $session_data->name }}</td>
                                    <td>
                                        <ul class="list-unstyled hstack gap-1 mb-0">
                                            <li>
                                                <a href="#edit{{ $session_data->unique_key }}" data-bs-toggle="modal"
                                                    data-id="{{ $session_data->unique_key }}"
                                                    data-bs-target=".sessionedit-modal-xl{{ $session_data->unique_key }}"
                                                    class="badges bg-lightgrey" style="color: white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#delete{{ $session_data->unique_key }}" data-bs-toggle="modal"
                                                    data-id="{{ $session_data->unique_key }}"
                                                    data-bs-target=".sessiondelete-modal-xl{{ $session_data->unique_key }}"
                                                    class="badges bg-lightyellow" style="color: white">Delete</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <div class="modal fade sessionedit-modal-xl{{ $session_data->unique_key }}"
                                    tabindex="-1" role="dialog" data-bs-backdrop="static"
                                    aria-labelledby="editLargeModalLabel{{ $session_data->unique_key }}"
                                    aria-hidden="true">
                                    @include('page.backend.session.edit')
                                </div>
                                <div class="modal fade sessiondelete-modal-xl{{ $session_data->unique_key }}"
                                    tabindex="-1" role="dialog"data-bs-backdrop="static"
                                    aria-labelledby="deleteLargeModalLabel{{ $session_data->unique_key }}"
                                    aria-hidden="true">
                                    @include('page.backend.session.delete')
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade session-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            @include('page.backend.session.create')
        </div>
    </div>
@endsection
