@extends('admin.layouts.app')

@section('title', 'Crime Types')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Crime Type</h6>
                <a href="{{ route('addCrimeType') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($crimeTypes as $crimeType )
                                <tr>
                                    <td>{{$crimeType->name}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('editCrimeType', $crimeType->id)}}" class="btn btn-success" title="edit"><i class="far fa-edit"></i></a>
                                            <form action="{{ route('deleteCrimeType',$crimeType->id) }}" method="POST" style="display: none;" id="delete-form-{{ $crimeType->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-danger" title="delete" onclick="event.preventDefault();document.getElementById('delete-form-{{ $crimeType->id }}').submit();">
                                                <i class="far fa-trash-alt" data-id="{{ $crimeType->id }}"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
    <!-- /.container-fluid -->

    @push('scripts')
        <!-- Page level plugins -->
        <script src="dashboard-template/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="dashboard-template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="dashboard-template/js/demo/datatables-demo.js"></script>
    @endpush

@endsection