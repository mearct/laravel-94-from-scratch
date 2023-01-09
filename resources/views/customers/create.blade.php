@extends( 'layout' )
@section( 'title', 'Add New Customers' )
@section( 'content' )

    <div class="row">
        <div class="col-12">
            <h1> Add New Customers </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/customers" method="POST" class="pb-5">
                @include('customers.form')
                <button type="submit">Add Customer</button>
                @csrf
            </form>
        </div>
    </div>



@endsection
