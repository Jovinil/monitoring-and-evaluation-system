@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="app-content-header"> <!--begin::Container-->
        <h3 class="mb-0">IT Students Report</h3>
    </div> <!--end::App Content Header-->

    <section class="content w-100 px-0 p-lg-4">
        <div class="card card-solid px-0 py-2 p-lg-4">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>OJT Coordinator</th>
                        <th>Submissions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $stud)
                        <tr>
                            <td>{{ $stud->name }}</td>
                            <td>{{ $stud->coord }}</td>
                            <td>
                                <form class="d-flex justify-content-end" action="{{ route("admin.view-student-specific-report") }}">
                                    <button type="submit" class="btn btn-primary">View</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Edinburgh</td>
                        <td>
                            <form class="d-flex justify-content-end" action="{{ route("admin.view-student-specific-report") }}">
                                <button type="submit" class="btn btn-primary">View</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- card --}}
    </section>
    {{-- content --}}

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endpush
