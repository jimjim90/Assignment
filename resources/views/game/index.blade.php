@extends ('layouts.master')

@section('content')
<div class="row">
    <div class="col-4">
        @include('layouts.hint')
    </div>
    <div class="col-4">
        <form method="POST" action="/game">
            {{ csrf_field() }}
            Desired card:
            <input type="text" name="desiredcard">
            <input type="submit" value="submit">
        </form>
    </div>
    <div class="col-4">
        Instructions:<br>
        Choose a suit and a value of your desired card<br>
        Example:<br>
        H2-H10 - cards 2-10 of hearts<br>
        HJ - jack of hearts<br>
        HA - ace of hearts<br>
        SJ - jack of spades<br>
        DJ - jack of diamonds<br>
        CJ - jack of clubs 
    </div>
</div>
@endsection