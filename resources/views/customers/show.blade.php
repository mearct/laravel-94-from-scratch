@extends( 'layout' )
@section( 'title', 'Details for ' . $customer -> name)
@section( 'content' )

    <div class="row">
        <div class="col-12">
            <h1> Details for {{  $customer -> name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p><b>Name</b> {{ $customer -> name }}</p>
            <p><strong>Email</strong> {{ $customer -> email }}</p>
            <p><b>Name</b> {{ $customer -> company -> name }}</p>
        </div>
    </div>



@endsection
