@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="app-content-header"> <!--begin::Container-->
        <h3 class="mb-0">Student Report</h3>
    </div> <!--end::App Content Header-->

    <section class="content w-100 px-4">
        <div class="card card-solid p-4 d-flex align-items-center">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                    {{-- INSERT PROGRAM --}}
                    BSIT
                  </div>
                  <div class="card-body pt-0">
                    <div class="row d-flex align-items-center pt-2">
                      <div class="col-7">
                        <h2 class="lead"><b>John Doe</b></h2>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                <a href="">Week 1</a>
                            </li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                <a href="">Week 2</a>
                            </li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                <a href="">Week 3</a>
                            </li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                <a href="">Week 4</a>
                            </li>
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                        <img src="{{ asset("dist/assets/img/avatar.png") }}" alt="user-avatar" class="rounded-circle img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        {{-- card --}}
    </section>
    {{-- content --}}

@endsection
