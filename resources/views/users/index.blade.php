@extends('layouts.app')
@section('content')
    <section class="content-header breadcrumb-section">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Fixed Layout</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Fixed Layout</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <button class="create-btn-primary float-sm-right" data-bs-toggle="offcanvas" data-bs-target="#usersCanvas" aria-controls="staticBackdrop">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                fill="none">
                                <path
                                    d="M10.5625 9.875V9.9375H10.625H16.875C17.0242 9.9375 17.1673 9.99676 17.2727 10.1023C17.3782 10.2077 17.4375 10.3508 17.4375 10.5C17.4375 10.6492 17.3782 10.7923 17.2727 10.8977C17.1673 11.0032 17.0242 11.0625 16.875 11.0625H10.625H10.5625V11.125V17.375C10.5625 17.5242 10.5032 17.6673 10.3977 17.7727C10.2923 17.8782 10.1492 17.9375 10 17.9375C9.85082 17.9375 9.70774 17.8782 9.60225 17.7727C9.49676 17.6673 9.4375 17.5242 9.4375 17.375V11.125V11.0625H9.375H3.125C2.97582 11.0625 2.83274 11.0032 2.72725 10.8977C2.62176 10.7923 2.5625 10.6492 2.5625 10.5C2.5625 10.3508 2.62176 10.2077 2.72725 10.1023C2.83274 9.99676 2.97582 9.9375 3.125 9.9375H9.375H9.4375V9.875V3.625C9.4375 3.47582 9.49676 3.33274 9.60225 3.22725C9.70774 3.12176 9.85082 3.0625 10 3.0625C10.1492 3.0625 10.2923 3.12176 10.3977 3.22725C10.5032 3.33274 10.5625 3.47582 10.5625 3.625V9.875Z"
                                    fill="white" stroke="white" stroke-width="0.125" />
                            </svg>
                        </span>
                        Hello
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <x-table.datatable 
                        :thead="['Rendering engine', 'Browser', 'Platform(s)', 'Engine version', 'CSS grade']"
                        id="Canvas">
                        <tr>
                            <td>Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.9</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>Gecko</td>
                            <td>rirefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                </x-table.datatable>
                </div>
            </div>
        </div>
    </section>
    <x-offcanvas.offcanvas offcanvas_width='md' id="usersCanvas">
        <x-slot name="title">
            Offcanvas
        </x-slot>
        <x-slot name="body">
            <x-form.double-input> 
                <x-slot name="firstInput">
                    <x-form.input type='text' name="name" label="Name" placeholder="Update Your Name" id="name" value="" />
                </x-slot>
                <x-slot name="secondInput"> 
                    <x-form.input type='text' name="username" label="User Name" placeholder="Update Your User Name" id="userName" value="" />
                </x-slot>
            </x-form.double-input>
        </x-slot>
    </x-offcanvas.offcanvas>
    
@endsection
@push('styles')
@endpush
@push('scripts')
    <script>
        "use strict";
        $(document).ready(function() {

        });
    </script>
@endpush
