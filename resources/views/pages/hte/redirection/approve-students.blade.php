@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="app-content-header"> <!--begin::Container-->
        <h3 class="mb-0">Students Application</h3>
    </div> <!--end::App Content Header-->

    <section class="content w-100 px-4">
        <div class="card card-solid px-5 py-4 d-flex flex-column flex-md-row gap-3 justify-content-center" >
            {{-- Insert a foreach --}}
            <div class="col-12 col-md-5 col-lg-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                    HTE
                  </div>
                  <div class="card-body pt-0">
                    <div class="row d-flex align-items-center pt-2">
                      <div class="col-7">
                        {{-- Insert Company name in h2 --}}
                        <h2 class="lead"><b>John Doe</b></h2>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            {{-- <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                <b>OJT Coordinator: </b> Juan Molina
                            </li> --}}
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                        {{-- replace asset with the profile pic --}}
                        <img src="{{ asset("dist/assets/img/avatar.png") }}" alt="user-avatar" class="rounded-circle img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="container d-flex justify-content-end">
                        <a href="#" class="btn btn-sm btn-primary">
                            Apply
                        </a>
                   </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                    HTE
                  </div>
                  <div class="card-body pt-0">
                    <div class="row d-flex align-items-center pt-2">
                      <div class="col-7">
                        <h2 class="lead"><b>John Doe</b></h2>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                <b>OJT Coordinator: </b> Juan Molina
                            </li>
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                        <img src="{{ asset("dist/assets/img/avatar.png") }}" alt="user-avatar" class="rounded-circle img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="container d-flex justify-content-end">
                        <a href="#" class="btn btn-sm btn-primary">
                            Apply
                        </a>
                   </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                    HTE
                  </div>
                  <div class="card-body pt-0">
                    <div class="row d-flex align-items-center pt-2">
                      <div class="col-7">
                        <h2 class="lead"><b>John Doe</b></h2>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                <b>OJT Coordinator: </b> Juan Molina
                            </li>
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                        <img src="{{ asset("dist/assets/img/avatar.png") }}" alt="user-avatar" class="rounded-circle img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="container d-flex justify-content-end">
                        <a href="#" class="btn btn-sm btn-primary">
                            Apply
                        </a>
                   </div>
                  </div>
                </div>
            </div>
        </div>
        {{-- card --}}
    </section>
    {{-- content --}}

@endsection
