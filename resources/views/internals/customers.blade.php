@extends( 'layout' )


@section( 'content' )
    <h1>Customers</h1>

    <form action="customers" method="POST" class="pb-5">

        <div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Name</span>
                <input type="text" name="name" value="{{ old( 'name' )}}" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                {{ $errors -> first( 'name' ) }}
            </div>
        </div>

        <div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" name="email" value="{{ old( 'email' )}}" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                {{ $errors -> first( 'email' ) }}
            </div>
        </div>




        <button type="submit">Add Customer</button>
        @csrf
    </form>

    <ul>
        @foreach ( $customers as $customer )
            <li> {{ $customer -> name }} <span class="text-muted">{{ $customer -> email }}</span></li>
        @endforeach
    </ul>
@endsection
