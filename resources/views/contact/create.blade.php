@extends( 'layout' )
@section( 'title', 'Contact Us' )
@section( 'content' )
    <h1>Contact Us</h1>

    @if ( !session() -> has( 'message' ) )
        <form action="/contact" method="POST">
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"> Name </span>
                    <input type="text" name="name" class="form-control" value="{{ old( 'name' ) }}" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="input-group mb-3">
                        {{ $errors -> first( 'name' ) }}
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"> Email </span>
                    <input type="text" name="email" class="form-control" value="{{ old( 'email' ) }}" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="input-group mb-3">
                        {{ $errors -> first( 'email' ) }}
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-text"> Message </span>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="10"  placeholder="Enter Messages Here!!!!!!!" aria-label="With textarea">{{ old( 'message' ) }}</textarea>
                    <div class="input-group mb-3">
                        {{ $errors -> first( 'message' ) }}
                    </div>
                </div>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Send Email </button>
        </form>
    @endif




@endsection
