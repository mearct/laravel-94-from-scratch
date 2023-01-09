<div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" name="name" value="{{ old( 'name' ) ?? $customer -> name }}" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        {{ $errors -> first( 'name' ) }}
    </div>
</div>
<div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email</span>
        <input type="email" name="email" value="{{ old( 'email' ) ?? $customer -> email }}" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        {{ $errors -> first( 'email' ) }}
    </div>
</div>
{{-- <div class="input-group mb-3">
    <label class="input-group-text" for="active"> Status </label>
    <select class="form-select" name="active"  id="active">
      <option selected> Select customer status </option>
      <option value="1" {{ $customer -> active == 'Active' ? 'selected' : '' }}> Active </option>
      <option value="0" {{ $customer -> active == 'Inactive' ? 'selected' : '' }}> Inactive </option>
    </select>
</div> --}}
<div class="input-group mb-3">
    <label class="input-group-text" for="active"> Status </label>
    <select class="form-select" name="active"  id="active">
      <option selected> Select customer status </option>
        @foreach ( $customer -> activeOptions() as $activeOptionKey => $activeOptionValue )
            <option value="{{ $activeOptionKey }}" {{ $customer -> active == $activeOptionValue ? 'selected' : '' }}> {{ $activeOptionValue }} </option>
        @endforeach
    </select>
</div>
<div class="input-group mb-3">
    <label class="input-group-text" for="company_id"> Company </label>
    <select class="form-select" name="company_id"  id="company_id">
        <option selected> Company Name </option>
        @foreach ( $companies as $company )
            <option value="{{ $company -> id }}" {{ $company -> id == $customer -> company_id ? 'selected' : '' }}> {{ $company -> name }} </option>
        @endforeach
    </select>
</div>
