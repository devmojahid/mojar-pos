@extends("profile.index")

@section("profile-content")
  <div class="card-body">
    <form action="{{ route("change-password.update") }}" method="POST">
      @csrf
      @method("PUT")
      <x-form.input type='password' name="old_password" label="Old Password" id="oldPassword" />
      <x-form.double-input> 
        <x-slot name="firstInput">
          <x-form.input type='password' name="new_password" label="New Password" id="newPassword" />
        </x-slot>
        <x-slot name="secondInput"> 
          <x-form.input type='password' name="password_confirmation" label="Confirm Password" id="confirmPassword" />
        </x-slot>
      </x-form.double-input>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
@endsection
