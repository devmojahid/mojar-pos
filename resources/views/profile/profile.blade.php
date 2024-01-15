@extends('profile.index')

@section('profile-content')
    <div class="card-body">
        <form action="{{ route('profile.update', $user->username) }}" method="POST" enctype="multipart/formdata">
            @csrf
            @method('PUT')
            <input type="file" name="avatar" hidden id="user-avatar-edit-input">
            @error('avatar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <x-form.double-input>
                <x-slot name="firstInput">
                    <x-form.input type='text' name="name" label="Name" placeholder="Update Your Name" id="name"
                        value="{{ $user->name }}" />
                </x-slot>
                <x-slot name="secondInput">
                    <x-form.input type='text' name="username" label="User Name" placeholder="Update Your User Name"
                        id="userName" value="{{ $user->username }}" />
                </x-slot>
            </x-form.double-input>

            <x-form.double-input>
                <x-slot name="firstInput">
                    <x-form.input type='email' name="email" label="Email" placeholder="Update Your Email"
                        id="userEmail" value="{{ $user->email }}" />
                </x-slot>
                <x-slot name="secondInput">
                    <x-form.input type="number" name="phone" label="Phone" placeholder="Update Your Phone"
                        id="phone" value="{{ $user->phone }}" />
                </x-slot>
            </x-form.double-input>

            <x-form.double-input>
                <x-slot name="firstInput">
                    <x-form.input type='text' name="country" label="Country" placeholder="Update Your Country"
                        id="country" value="{{ $user->country }}" />
                </x-slot>
                <x-slot name="secondInput">
                    <x-form.input type='text' name="address" label="Address" placeholder="Update Your Address"
                        id="address" value="{{ $user->address }}" />
                </x-slot>
            </x-form.double-input>

            <x-form.double-input>
                <x-slot name="firstInput">
                    <x-form.input type='text' name="city" label="City" placeholder="Update Your City" id="city"
                        value="{{ $user->city }}" />
                </x-slot>
                <x-slot name="secondInput">
                    <x-form.input type='text' name="postal_code" label="Postal Code"
                        placeholder="Update Your Postal Code" id="postalCode" value="{{ $user->postal_code }}" />
                </x-slot>
            </x-form.double-input>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
@endsection
