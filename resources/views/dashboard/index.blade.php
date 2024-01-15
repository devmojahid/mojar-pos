@extends("layouts.app")

@section("content")

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
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                  <path d="M10.5625 9.875V9.9375H10.625H16.875C17.0242 9.9375 17.1673 9.99676 17.2727 10.1023C17.3782 10.2077 17.4375 10.3508 17.4375 10.5C17.4375 10.6492 17.3782 10.7923 17.2727 10.8977C17.1673 11.0032 17.0242 11.0625 16.875 11.0625H10.625H10.5625V11.125V17.375C10.5625 17.5242 10.5032 17.6673 10.3977 17.7727C10.2923 17.8782 10.1492 17.9375 10 17.9375C9.85082 17.9375 9.70774 17.8782 9.60225 17.7727C9.49676 17.6673 9.4375 17.5242 9.4375 17.375V11.125V11.0625H9.375H3.125C2.97582 11.0625 2.83274 11.0032 2.72725 10.8977C2.62176 10.7923 2.5625 10.6492 2.5625 10.5C2.5625 10.3508 2.62176 10.2077 2.72725 10.1023C2.83274 9.99676 2.97582 9.9375 3.125 9.9375H9.375H9.4375V9.875V3.625C9.4375 3.47582 9.49676 3.33274 9.60225 3.22725C9.70774 3.12176 9.85082 3.0625 10 3.0625C10.1492 3.0625 10.2923 3.12176 10.3977 3.22725C10.5032 3.33274 10.5625 3.47582 10.5625 3.625V9.875Z" fill="white" stroke="white" stroke-width="0.125"/>
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
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                Start creating your amazing application!
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
@endsection