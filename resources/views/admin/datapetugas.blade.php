@extends('app')
<link rel="icon" href="{{ URL::asset('images/logo/favicon.png') }}" type="image/png" />
@section('styles')
<style>
    body {
        font-family: 'Outfit', sans-serif;
    }
</style>
@endsection
@section('content')
    <div class="container">
        <h3>Data Petugas</h3>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="tablePetugas">
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>ID Petugas</th>
                                <th>Nama Petugas</th>
                                <th>Email</th>
                                <th>Status Petugas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($petugas as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->kode_petugas }}</td>
                                <td>{{ $item->nama_petugas }}</td>
                                <td>{{ $item->email_petugas }}</td>
                                <td>{{ $item->status_petugas }}</td>
                                <td>
                                    <button class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#editpetugasModal"
                                    data-idpetugas="{{ $item->id_petugas }}" data-kodepetugas="{{ $item->kode_petugas }}"
                                    data-namapetugas="{{ $item->nama_petugas }}" data-telppetugas="{{ $item->telp_petugas }}"
                                    data-emailpetugas="{{ $item->email_petugas }}" data-usernamepetugas="{{ $item->username_petugas }}"
                                    data-passwordpetugas="{{ $item->password_petugas }}" data-statuspetugas="{{ $item->status_petugas }}"
                                    data-alamatpetugas="{{ $item->alamat_petugas }}" data-rolepetugas="{{ $item->role_petugas }}">Edit</button>
                                    <button class="btn btn-danger mr-2" data-bs-toggle="modal" data-bs-target="#deletepetugasModal"
                                    data-idpetugas="{{ $item->id_petugas }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @extends('admin.modal.editpetugas')
    @extends('admin.modal.deletepetugas')
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#tablePetugas').DataTable({
                layout: {
                topStart: {
                    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
                }
            }
            });
        });
    </script>
@endsection
