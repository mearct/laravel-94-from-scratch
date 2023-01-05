@extends( 'layout' )
@section( 'title', 'Customer List' )
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
        <div class="input-group mb-3">
            <label class="input-group-text" for="active"> Status </label>
            <select class="form-select" name="active"  id="active">
              <option selected> Select customer status </option>
              <option value="1"> Active </option>
              <option value="0"> Inactive </option>
            </select>
          </div>
        <button type="submit">Add Customer</button>
        @csrf
    </form>
    <div class="row">
        <div class="col-sm-5 col-md-6">
            <h3>Acive</h3>
            @foreach ( $activeCustomers as $activeCustomer )
                <p>
                    {{ $activeCustomer -> name }} <span class="text-muted">{{ $activeCustomer -> email }}</span>
                </p>
            @endforeach
        </div>
        <div class="col-sm-5 col-md-6">
            <h3>Inactive</h3>
            @foreach ( $inactiveCustomers as $inactiveCustomer )
                <p>
                    {{ $inactiveCustomer -> name }} <span class="text-muted">{{ $inactiveCustomer -> email }}</span>
                </p>
            @endforeach
        </div>
    </div>
@endsection
