@extends ('layouts.master')

@section('content')
<div class="row">
    <div class="col-4">
        @include('layouts.hint')
    </div>
    <div class="col-4">
        <form method="PATCH" action="/game">
            {{ csrf_field() }}
            Desired card: {{$data}}
            <input type="submit" value="submit">
        </form>
    </div>
    <div class="col-4">
               
    </div>
</div>
@endsection