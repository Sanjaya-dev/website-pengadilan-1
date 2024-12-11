@extends('admin.layouts.app')

@section('title', 'Add Crime Types')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Crime Type</h6>
            </div>
            <div class="card-body">
                <form action="{{route('crimeTypeStore')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Input1">Name</label>
                        <input type="text" class="form-control" id="Input1" name="name" required>
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