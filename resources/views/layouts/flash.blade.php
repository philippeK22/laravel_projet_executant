@if ($message = Session::get('success'))
    <div class="px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="px-4 py-3 leading-normal text-orange-700 bg-orange-100 rounded-lg" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif
