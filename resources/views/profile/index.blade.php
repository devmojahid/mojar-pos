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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xs-4">
                    <div class="card">
                        <div class="user-avatar position-relative">
                            <div>
                                <label class="user-avatar-edit-icon position-absolute" data-bs-toggle="offcanvas"
                                    data-bs-target="#usersCanvas" aria-controls="staticBackdrop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M21.4549 5.41575C21.6471 5.70687 21.6151 6.10248 21.3588 6.35876L12.1664 15.5511C12.0722 15.6454 11.9546 15.7128 11.8256 15.7465L7.99722 16.7465C7.87235 16.7791 7.74364 16.7784 7.62271 16.7476C7.49414 16.7149 7.37437 16.6482 7.27736 16.5511C7.08908 16.3629 7.01474 16.0889 7.08203 15.8313L8.08203 12.0028C8.1115 11.89 8.16679 11.7786 8.24328 11.6912L17.4697 2.46967C17.5505 2.38891 17.6478 2.32846 17.7537 2.29163C17.8322 2.26432 17.9154 2.25 18.0001 2.25C18.199 2.25 18.3897 2.32902 18.5304 2.46967L21.3588 5.2981C21.3954 5.33471 21.4275 5.37416 21.4549 5.41575ZM19.7678 5.82843L18.0001 4.06066L9.4819 12.5788L8.85691 14.9716L11.2497 14.3466L19.7678 5.82843Z"
                                            fill="#191B1C" />
                                        <path
                                            d="M19.6414 17.1603C19.9148 14.8227 20.0018 12.4688 19.9024 10.1208C19.8976 10.0084 19.9399 9.89898 20.0195 9.81942L21.0028 8.83609C21.1237 8.71519 21.3303 8.79194 21.3416 8.96254C21.5265 11.7522 21.4564 14.5545 21.1313 17.3346C20.8947 19.3571 19.2704 20.9421 17.2583 21.167C13.7917 21.5544 10.2084 21.5544 6.74183 21.167C4.72977 20.9421 3.10544 19.3571 2.86889 17.3346C2.45435 13.7903 2.45435 10.2097 2.86889 6.66543C3.10544 4.6429 4.72977 3.05789 6.74183 2.83301C9.37158 2.5391 12.0685 2.46815 14.7307 2.62016C14.9023 2.62996 14.9805 2.83757 14.859 2.95909L13.8664 3.95165C13.7877 4.03034 13.6798 4.07261 13.5686 4.06885C11.3422 3.99376 9.10061 4.07872 6.90844 4.32373C5.57833 4.47239 4.51285 5.522 4.35873 6.83968C3.95773 10.2682 3.95773 13.7318 4.35873 17.1603C4.51285 18.478 5.57833 19.5276 6.90844 19.6763C10.2643 20.0513 13.7359 20.0513 17.0917 19.6763C18.4218 19.5276 19.4873 18.478 19.6414 17.1603Z"
                                            fill="#191B1C" />
                                    </svg>
                                </label>
                            </div>
                            <img src="{{ asset('assets/backend/images/user-avatar.jpg') }}" alt="avatar"
                                id="avatarImageValue">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header user-profile-action-links">
                            <ul>
                                <li class="@if (Route::currentRouteName() == 'profile') active @endif"><a
                                        href="{{ route('profile', auth()->user()->username) }}">Profile</a></li>
                                <li class="@if (Route::currentRouteName() == 'change-password') active @endif"><a
                                        href="{{ route('change-password') }}">Change Password</a></li>
                            </ul>
                        </div>
                        @yield('profile-content')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-offcanvas.offcanvas offcanvas_width='xxl' id="usersCanvas">
        <x-slot name="title">
            Offcanvas
        </x-slot>
        <x-slot name="body">
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
                                        @php
                                          $medias = App\Models\Upload::latest()->paginate(10);
                                        @endphp
                                          @forelse ($medias as $media)
                                              <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xs-3">
                                                  <div class="mpos-single-media-box mb-3">
                                                      <div class="mpos-single-media-box-content" 
                                                        data-id="{{ $media->id }}"
                                                      >
                                                          <div class="select-image">
                                                              <input type="checkbox" name="select-image"
                                                                  id="select-image">
                                                          </div>
                                                          <div class="mpos-single-media-actions">
                                                              <div class="actions-icons">
                                                                  <i class="fas fa-ellipsis-v"></i>
                                                              </div>

                                                              <div class="media-actions-dropdown">
                                                                  <ul>
                                                                      <li><a
                                                                              href="{{ route('media.delete', $media->id) }}">Media
                                                                              Detaild</a></li>
                                                                      <li><a
                                                                              href="{{ route('media.delete', $media->id) }}">Copy
                                                                              Url</a></li>
                                                                      <li><a href="{{ $media->id }}">Download</a>
                                                                      </li>
                                                                      <li><a
                                                                              href="{{ route('media.delete', $media->id) }}">Delete</a>
                                                                      </li>
                                                                  </ul>

                                                              </div>
                                                          </div>
                                                          <div class="mpos-single-media-box-content-img">
                                                              <img src="{{ $media->url }}" alt="media">
                                                          </div>
                                                          <div class="mpos-single-media-box-content-text">
                                                              <span>{{ $media->file_name }}</span>
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
        </x-slot>
    </x-offcanvas.offcanvas>
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
        "use strict";
        $(document).ready(function() {
            $("#user-avatar-edit-input").on('change', function() {
                $("#avatarImageValue").attr("src", URL.createObjectURL(event.target.files[0]));
            });

            $(".change_password_field").on("click", function() {
                // toggle password field
                let passwordField = $(
                    "input[name='new_password'],input[name='password_confirmation'],input[name='old_password']"
                    );
                if (passwordField.attr("type") == "password") {
                    passwordField.attr("type", "text");
                } else {
                    passwordField.attr("type", "password");
                }

                // toggle icon
                if ($(this).find("span").hasClass("fa-eye")) {
                    $(this).find("span").removeClass("fa-eye").addClass("fa-eye-slash");
                } else {
                    $(this).find("span").removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });

        });
    </script>

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
