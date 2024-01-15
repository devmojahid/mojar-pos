@props([
    'title' => 'Offcanvas',
    'offcanvas_width' => 'md',
    'id' => 'offcanvas',
    'body' => 'I will not close if you click outside of me.',
])

<div class="offcanvas-width-{{ $offcanvas_width }}">
    <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="{{ $id }}" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header border">
            <h4 class="offcanvas-title" id="staticBackdropLabel">{{ $title }}</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            {{ $body }}
        </div>
    </div>
</div>