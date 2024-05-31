@if ($message = Session::get('success'))
<span class="badge badge-pill bg-gradient-success">
    <strong> {{ $message }}</strong> </span>
@endif

@if ($message = Session::get('error'))
<span class="badge badge-pill bg-gradient-danger">

    {{ $message }}
</span>
@endif

@if ($message = Session::get('light'))
<span class="badge badge-pill bg-gradient-light">

    {{ $message }}
</span>
@endif


@if ($message = Session::get('warning'))
<span class="badge badge-pill bg-gradient-warning">
    {{ $message }}
</span>
@endif

@if ($message = Session::get('info'))
<span class="badge badge-pill bg-gradient-info">
    {{ $message }}
</span>
@endif


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif