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
                    <button class="create-btn-primary float-sm-right">
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

    <section class="content media_library">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-media-tab" data-toggle="pill" href="#all-media"
                                        role="tab" aria-controls="all-media" aria-selected="false">
                                        <i class="fas fa-images"></i>
                                        All Media
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="upload-media-tab" data-toggle="pill" href="#upload-media"
                                        role="tab" aria-controls="upload-media" aria-selected="false">
                                        <i class="fas fa-upload"></i>
                                        Upload Media
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade active show" id="all-media" role="tabpanel"
                                    aria-labelledby="all-media-tab">
                                    <div class="row">
                                        @forelse ($medias as $media)
                                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xs-3">
                                                <div class="mpos-single-media-box mb-3">
                                                    <div class="mpos-single-media-box-content">
                                                        <div class="select-image">
                                                            <input type="checkbox" name="select-image" id="select-image">
                                                        </div>
                                                        <div class="mpos-single-media-actions">
                                                            <div class="actions-icons">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </div>

                                                            <div class="media-actions-dropdown">
                                                                <ul>
                                                                    <li><a href="{{ route('media.delete', $media->id) }}">Media
                                                                            Detaild</a></li>
                                                                    <li><a href="{{ route('media.delete', $media->id) }}">Copy
                                                                            Url</a></li>
                                                                    <li><a
                                                                            href="{{ $media->id }}">Download</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="{{ route('media.delete', $media->id) }}">Delete</a>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                        <div class="mpos-single-media-box-content-img">
                                                            {{-- <img src="@if ($media->type == 'image'){{ asset("storage/".$media->path) }}@else{{ asset("assets/backend/images/file.png") }}@endif" alt="media"> --}}
                                                            <img src="{{ $media->url }}" alt="media">
                                                        </div>
                                                        <div class="mpos-single-media-box-content-text">
                                                            <span>{{ $media->file_name }}</span>
                                                            {{-- <span>45.45 KB</span> --}}
                                                            <span>{{ floor($media->file_size / 1024) }} KB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="upload-media" role="tabpanel"
                                    aria-labelledby="upload-media-tab">

                                    <form action="" id="drop-upload-media" enctype="multipart/form-data">
                                        <div id="drop-area">
                                            <p>Drag and drop files here or click to select files</p>
                                            <input type="file" id="fileInput" style="display: none;">
                                        </div>
                                        <span class="file_upload_prograssbar"></span>
                                        <button type="submit" class="create-btn-primary">Upload Media</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@push('styles')
    <style>
        #drop-area {
            width: 300px;
            height: 200px;
            border: 2px dashed #ccc;
            text-align: center;
            padding: 20px;
            margin: 20px auto;
            cursor: pointer;
        }

        #drop-area.highlight {
            border-color: #2196F3;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            // handle drag over
            $("#drop-area").on("dragover", function(event) {
                event.preventDefault();
                event.originalEvent.dataTransfer.dropEffect = "copy";
                $(this).addClass("highlight");
            });

            // handle drop
            $("#drop-area").on("drop", function(event) {
                event.preventDefault();
                $(this).removeClass("highlight");

                const files = event.originalEvent.dataTransfer.files;
                handleFiles(files);
                $("#fileInput").prop("files", files);

            });

            // handle click to open file input
            $("#drop-area").on("click", function(event) {
                if (!$(event.target).is("#fileInput")) {
                    event.preventDefault();
                    $("#fileInput").trigger("click");
                }
            });

            // handle file input change
            $("#fileInput").on("change", function() {
                const files = this.files;
                handleFiles(files);
            });

            // handle file preview
            function handleFiles(files) {
                if (files && typeof files[Symbol.iterator] === 'function') {
                    for (const file of files) {
                        const imageType = /^image\//;
                        if (!imageType.test(file.type)) {
                            continue;
                        }

                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = $("<img>").addClass("obj").attr({
                                "src": e.target.result,
                                "height": 60,
                                "width": 60
                            });
                            $("#drop-area").append(img);
                        };

                        reader.readAsDataURL(file);
                    }
                } else {
                    console.error('Invalid or non-iterable files object:', files);
                }
            }

            // handle image upload
            $("#drop-upload-media").on("submit", function(event) {
                event.preventDefault();
                const files = $("#fileInput").get(0).files;
                const formData = new FormData();
                formData.append("file", files[0]);
                formData.append("file_name", files[0].name);
                formData.append("url", files[0].size);
                $.ajax({
                    url: "{{ route('media.store') }}",
                    type: "post",
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        Toastify({
                            text: response.success,
                            duration: 3000,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "linear-gradient(to right, #00b09b, #96c93d)",
                            },
                            onClick: function() {} // Callback after click
                        }).showToast();

                        $("#drop-area").html(
                            '<p>Drag and drop files here or click to select files</p>'
                        );
                        $("#fileInput").val("");
                        $("#all-media-tab").trigger("click");
                        location.reload();

                    },
                    error: function(error) {
                        Toastify({
                            text: error.responseJSON.message,
                            duration: 3000,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                            },
                            onClick: function() {} // Callback after click
                        }).showToast();
                    }
                });
            });
        });
    </script>
@endpush
