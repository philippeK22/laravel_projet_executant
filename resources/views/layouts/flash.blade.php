@if ($message = Session::get('success'))
    <div class="bg-primary" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="bg-danger" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif
