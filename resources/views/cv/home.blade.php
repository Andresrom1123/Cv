@extends('layouts.app')

@section('content')
<div class="container my-5 border shadow rounded p-3">
    <div class="d-flex">
        <div class="col-6">
            <h3>Header</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <form method="POST" class="row mt-3" action="/users/{{ Auth::id() }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group col-12">
                    <label for="profile_picture">Profile picture</label>
                    <input name="profile_picture" type="file" class="form-control-file" id="profile_picture">
                    @error('profile_picture')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" id="name">
                    @error('name')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="name">Last name</label>
                    <input type="text" name="last_name" value="{{ Auth::user()->last_name }}" class="form-control" id="name">
                    @error('last_name')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="state">State</label>
                    <select class="form-control" name="state_id" id="state">
                        @foreach($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-4">
                    <label for="cp">Postal code</label>
                    <input maxlength="4" name="postal_code" value="{{ Auth::user()->postal_code }}" type="text" class="form-control" id="cp">
                    @error('postal_code')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="nt">Cellphone number</label>
                    <input maxlength="10" name="cellphone_number" value="{{ Auth::user()->cellphone_number }}" type="text" class="form-control" id="nt">
                    @error('cellphone_number')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input disabled type="email" value="{{ Auth::user()->email }}" class="form-control" id="email">
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Next</button>
                </div>
                
            </form>
        </div>
        <div class="border col-6 p-3">
            <div class="border-top border-bottom border-secondary pt-1 pb-1">
                <div class="d-flex border-top border-bottom border-secondary p-3">
                    <div class="col-4">
                        <img src="https://content.livecareer.com/les/images/desktop/NoImage.png" alt="">
                    </div>
                    <div class="col-8">
                        <h3>Name, LAST NAME</h3>
                        <p class="mb-1">México</p>
                        <p class="mb-1">State, Postal code</p>
                        <p class="mb-1">Cellphone number</p>
                        <p class="mb-1">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="p-3">
                <p>Experience</p>
            </div>
        </div>
    </div>
</div>
@endsection
