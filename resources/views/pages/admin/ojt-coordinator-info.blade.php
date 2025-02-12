@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="app-content-header"> <!--begin::Container-->
        <h3 class="mb-0">OJT Coordinator Information</h3>
    </div> <!--end::App Content Header-->

    <section class="content w-100 px-0 px-md-2 px-lg-4">
        <div class="card card-solid p-md-2 p-lg-4">
            <table id="coord-table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coordinators as $coord)

                        <tr>
                            <td>{{ $coord->first_name }}</td>
                            <td>{{ $coord->middle_name }}</td>
                            <td>{{ $coord->last_name }}</td>
                            <td class="d-flex justify-content-end">
                                <!-- Button trigger modal -->
                                <a href="{{ route('admin.specific-worker', ['type' => 'ojt-coordinator', 'id' => $coord->id]) }}" class="btn btn-primary">View</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#coord-table').DataTable();
    });
</script>
@endpush
