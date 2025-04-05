@extends('layouts.app')

@section('content')

    <style>
        input[type=text] {
            width: 90%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid black;
        }
    </style>

    <!-- Content Header (Page header) -->
    <div class="app-content-header"> <!--begin::Container-->
        <h3 class="mb-0">About Us</h3>
    </div> <!--end::App Content Header-->

    <section class="content w-100 px-4">
        {{-- <div class="card card-solid p-4"> --}}
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-5">
                    <div class="d-none d-lg-block" style="background: url('{{ 'svg/undraw_hello_ccwj.svg' }}'); background-position: center; background-repeat: no-repeat; background-size: contain; height: 70vh;">

                    </div>
                </div>

                <div class="col-12 col-md-7 ps-4">
                    <div class="d-flex justify-content-center">
                        <div class="card h-50 w-75">
                            <div class="card-body">
                                <p>On-the-Job Training (OJT) is a practical approach to skills development where employees learn by directly performing tasks in their actual work environment. Unlike classroom training, OJT emphasizes hands-on experience, allowing individuals to apply knowledge and skills in real-time scenarios. This approach fosters practical skills, increases job proficiency, and promotes a deeper understanding of work processes. By observing experienced colleagues, receiving guidance from supervisors, and tackling real-world challenges, employees gain valuable experience and develop a strong foundation for their roles.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        {{-- </div> --}}
        {{-- card --}}
    </section>
    {{-- content --}}

@endsection
