@extends('admin.layouts.app')

@section('title', 'Add Defendants')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Defendant</h6>
            </div>
            <div class="card-body">
                <form action="{{route('defendantStore')}}" method="post">
                    @csrf
            
                        <div class="form-group">
                            <label for="Input1" class="font-weight-bold">Name</label>
                            <input type="text" class="form-control" id="Input1" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="Input2" class="font-weight-bold">Crime Type</label>
                            <select class="form-control" id="Input2" name="crime_type_id" required>
                                <option selected>Select Crime Type</option>
                                @foreach ($crimeTypes as $crimeType )
                                    <option value="{{$crimeType->id}}">{{$crimeType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Input3" class="font-weight-bold">Investigator</label>
                            <input type="text" class="form-control" id="Input3" name="peneliti" required>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-4">
                                <label for="Input4" class="font-weight-bold">Date SPDP</label>
                                <input type="date" class="form-control" id="Input4" name="tanggal_SPDP">
                                <label for="Input7" class="font-weight-bold">Date P18</label>
                                <input type="date" class="form-control" id="Input7" name="tanggal_P18">
                                <label for="Input10" class="font-weight-bold">Date P21A</label>
                                <input type="date" class="form-control" id="Input10" name="tanggal_P21A">
                            </div>
                            <div class="col-lg-4">
                                <label for="Input5" class="font-weight-bold">Date P17</label>
                                <input type="date" class="form-control" id="Input5" name="tanggal_P17">
                                <label for="Input12" class="font-weight-bold">Date P19</label>
                                <input type="date" class="form-control" id="Input12" name="tanggal_P19">
                                <label for="Input8" class="font-weight-bold">Date P20</label>
                                <input type="date" class="form-control" id="Input8" name="tanggal_P20">
                            </div>
                            <div class="col-lg-4">
                                <label for="Input6" class="font-weight-bold">Date Stage 1</label>
                                <input type="date" class="form-control" id="Input6" name="tanggal_tahap_1">
                                <label for="Input9" class="font-weight-bold">Date P21</label>
                                <input type="date" class="form-control" id="Input9" name="tanggal_P21">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Input11" class="font-weight-bold">Status</label>
                            <select class="form-control" id="Input11" name="status" required>
                                <option value="pra-penuntutan">Pra Penuntutan</option>
                                <option value="penuntutan">Penuntutan</option>
                            </select>
                        </div>
                
                    <button type="button" onclick="handleCancel()" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-primary ml-2">Submit</button>
                </form>
            </div>
        </div>
    
    </div>
    <!-- /.container-fluid -->
    @push('scripts')
        <script>
            function handleCancel() {
                if (confirm("Are you sure you want to cancel ?")) {
                    window.location.href = "{{route('crimeType')}}";
                }

            }
        </script>
    @endpush

@endsection