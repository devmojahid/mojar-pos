@props([
    'id' => 'example1',
    'title' => 'Give Your Title',
    'class' => 'table table-bordered table-striped dataTable dtr-inline',
    'aria-describedby' => 'example1_info',
    'responsive' => true,
    'lengthChange' => false,
    'autoWidth' => false,
    'buttons' => ["copy", "csv", "excel", "pdf", "print"],
    'thead' => [],
])
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>

    <div class="card-body">
        <div id="{{ $id }}_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12">
                    <table id="{{ $id }}" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="{{ $id }}_info">
                        <thead>
                            <tr>
                                @foreach ($thead as $item)
                                    <th>{{ $item }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            {{ $slot }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push("styles")
    <link rel="stylesheet" href="{{ asset("assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">
@endpush

@push('scripts')
    <script src="{{ asset("assets/backend/plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/jszip/jszip.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/pdfmake/pdfmake.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/pdfmake/vfs_fonts.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/datatables-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ asset("assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}"></script>
    <script>
        $(function () {
          $("#{{ $id }}").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
          }).buttons().container().appendTo('#{{ $id }}_wrapper .col-md-6:eq(0)');
        });
      </script>
@endpush
