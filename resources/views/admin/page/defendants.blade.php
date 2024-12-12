@extends('admin.layouts.app')

@section('title', 'Defendants')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Defendants</h6>
                <a href="{{ route('addDefendant') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Crime Type</th>
                                <th>Investigator</th>
                                <th>Date SPDP</th>
                                <th>Date P17</th>
                                <th>Date Stage 1</th>
                                <th>Date P18</th>
                                <th>Date P19</th>
                                <th>Date P20</th>
                                <th>Date P21</th>
                                <th>Date P21A</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($defendants as $data )
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->crimeType->name}}</td>
                                    <td>{{$data->peneliti}}</td>
                                    <td>{{$data->tanggal_SPDP ? \Carbon\Carbon::parse($data->tanggal_SPDP)->format('d-m-Y') : '-'}}</td>
                                    <td>{{$data->tanggal_P17 ? \Carbon\Carbon::parse($data->tanggal_P17)->format('d-m-Y') : '-'}}</td>
                                    <td>{{$data->tanggal_tahap_1 ? \Carbon\Carbon::parse($data->tanggal_tahap_1)->format('d-m-Y') : '-'}}</td>
                                    <td>{{$data->tanggal_P18 ? \Carbon\Carbon::parse($data->tanggal_P18)->format('d-m-Y') : '-'}}</td>
                                    <td>{{$data->tanggal_P19 ? \Carbon\Carbon::parse($data->tanggal_P19)->format('d-m-Y') : '-'}}</td>
                                    <td>{{$data->tanggal_P20 ? \Carbon\Carbon::parse($data->tanggal_P20)->format('d-m-Y') : '-'}}</td>
                                    <td>{{$data->tanggal_P21 ? \Carbon\Carbon::parse($data->tanggal_P21)->format('d-m-Y') : '-'}}</td>
                                    <td>{{$data->tanggal_P21A ? \Carbon\Carbon::parse($data->tanggal_P21A)->format('d-m-Y') : '-'}}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</td>
                                    <td><button disabled="disabled" class="btn @if($data->status == 'pra-penuntutan') btn-warning @else btn-info @endif">{{$data->status}}</button></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('editDefendant', $data->id)}}" class="btn btn-success" title="edit"><i class="far fa-edit"></i></a>
                                            <form action="{{ route('deleteDefendant',$data->id) }}" method="POST" style="display: none;" id="delete-form-{{ $data->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-danger " title="delete" onclick="event.preventDefault();document.getElementById('delete-form-{{ $data->id }}').submit();">
                                                <i class="fa fa-trash-alt" data-id="{{ $data->id }}"></i>
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