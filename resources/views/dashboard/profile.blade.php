@extends("layouts.app")
@section("content")
    <section class="content-header breadcrumb-section">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Fixed Layout</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
          <div class="col-sm-6">
            <button class="create-btn-primary float-sm-right">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                  <path d="M10.5625 9.875V9.9375H10.625H16.875C17.0242 9.9375 17.1673 9.99676 17.2727 10.1023C17.3782 10.2077 17.4375 10.3508 17.4375 10.5C17.4375 10.6492 17.3782 10.7923 17.2727 10.8977C17.1673 11.0032 17.0242 11.0625 16.875 11.0625H10.625H10.5625V11.125V17.375C10.5625 17.5242 10.5032 17.6673 10.3977 17.7727C10.2923 17.8782 10.1492 17.9375 10 17.9375C9.85082 17.9375 9.70774 17.8782 9.60225 17.7727C9.49676 17.6673 9.4375 17.5242 9.4375 17.375V11.125V11.0625H9.375H3.125C2.97582 11.0625 2.83274 11.0032 2.72725 10.8977C2.62176 10.7923 2.5625 10.6492 2.5625 10.5C2.5625 10.3508 2.62176 10.2077 2.72725 10.1023C2.83274 9.99676 2.97582 9.9375 3.125 9.9375H9.375H9.4375V9.875V3.625C9.4375 3.47582 9.49676 3.33274 9.60225 3.22725C9.70774 3.12176 9.85082 3.0625 10 3.0625C10.1492 3.0625 10.2923 3.12176 10.3977 3.22725C10.5032 3.33274 10.5625 3.47582 10.5625 3.625V9.875Z" fill="white" stroke="white" stroke-width="0.125"/>
                  </svg>
              </span>
              Hello
            </button>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
     @if(isset($user))
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xs-4">
            <div class="card">
              <div class="user-avatar position-relative">
                <div>
                  <label for="user-avatar-edit-input" class="user-avatar-edit-icon position-absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4549 5.41575C21.6471 5.70687 21.6151 6.10248 21.3588 6.35876L12.1664 15.5511C12.0722 15.6454 11.9546 15.7128 11.8256 15.7465L7.99722 16.7465C7.87235 16.7791 7.74364 16.7784 7.62271 16.7476C7.49414 16.7149 7.37437 16.6482 7.27736 16.5511C7.08908 16.3629 7.01474 16.0889 7.08203 15.8313L8.08203 12.0028C8.1115 11.89 8.16679 11.7786 8.24328 11.6912L17.4697 2.46967C17.5505 2.38891 17.6478 2.32846 17.7537 2.29163C17.8322 2.26432 17.9154 2.25 18.0001 2.25C18.199 2.25 18.3897 2.32902 18.5304 2.46967L21.3588 5.2981C21.3954 5.33471 21.4275 5.37416 21.4549 5.41575ZM19.7678 5.82843L18.0001 4.06066L9.4819 12.5788L8.85691 14.9716L11.2497 14.3466L19.7678 5.82843Z" fill="#191B1C"/>
                      <path d="M19.6414 17.1603C19.9148 14.8227 20.0018 12.4688 19.9024 10.1208C19.8976 10.0084 19.9399 9.89898 20.0195 9.81942L21.0028 8.83609C21.1237 8.71519 21.3303 8.79194 21.3416 8.96254C21.5265 11.7522 21.4564 14.5545 21.1313 17.3346C20.8947 19.3571 19.2704 20.9421 17.2583 21.167C13.7917 21.5544 10.2084 21.5544 6.74183 21.167C4.72977 20.9421 3.10544 19.3571 2.86889 17.3346C2.45435 13.7903 2.45435 10.2097 2.86889 6.66543C3.10544 4.6429 4.72977 3.05789 6.74183 2.83301C9.37158 2.5391 12.0685 2.46815 14.7307 2.62016C14.9023 2.62996 14.9805 2.83757 14.859 2.95909L13.8664 3.95165C13.7877 4.03034 13.6798 4.07261 13.5686 4.06885C11.3422 3.99376 9.10061 4.07872 6.90844 4.32373C5.57833 4.47239 4.51285 5.522 4.35873 6.83968C3.95773 10.2682 3.95773 13.7318 4.35873 17.1603C4.51285 18.478 5.57833 19.5276 6.90844 19.6763C10.2643 20.0513 13.7359 20.0513 17.0917 19.6763C18.4218 19.5276 19.4873 18.478 19.6414 17.1603Z" fill="#191B1C"/>
                    </svg>
                  </label>
                  <input type="file" name="avatar" hidden id="user-avatar-edit-input">
                </div>
                <img src="{{ asset("assets/backend/images/user-avatar.jpg") }}" alt="avatar">
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header user-profile-action-links">
                <ul>
                  <li class="active"><a href="#">Profile</a></li>
                  <li><a href="#">Change Password</a></li>
                </ul>

              </div>
              <div class="card-body">
                <div class="form-group">

                  <div class="row mb-2 custom-profile-input-group">
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                      <label for="userName">Name</label>
                      <input type="text" name="name" class="form-control" id="userName" placeholder="Update Your Name">
                    </div>
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                      <label for="userName">User Name</label>
                      <input type="text" name="username" class="form-control" id="userName" placeholder="Update Your User Name">
                    </div>
                  </div>
                  
                  <div class="row mb-2 custom-profile-input-group">
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                      <label for="userEmail">Email</label>
                      <input type="email" name="email" class="form-control" id="userEmail" placeholder="Update Your email">
                    </div>
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                      <label for="phone">Phone</label>
                      <input type="phone" name="phone" class="form-control" id="phone" placeholder="Update Your email">
                    </div>
                  </div>

                  <div class="row mb-2 custom-profile-input-group">
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                      <label for="country">Country</label>
                      <input type="text" name="country" class="form-control" id="country" placeholder="Update Your email">
                    </div>
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                      <label for="address">Address</label>
                      <input type="text" name="address" class="form-control" id="address" placeholder="Update Your email">
                    </div>
                  </div>

                  <div class="row mb-2 custom-profile-input-group">
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                      <label for="city">City</label>
                      <input type="text" name="city" class="form-control" id="city" placeholder="Update Your City">
                    </div>
                    <div class="col-md-6 col-xl-6 col-sm-12 col-xs-12">
                      <label for="postalCode">Postal Code</label>
                      <input type="text" name="postal_code" class="form-control" id="postalCode" placeholder="Update Your email">
                    </div>
                  </div>
                  
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
        @endif
    </section>
@endsection