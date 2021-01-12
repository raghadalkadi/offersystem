<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Create Customer </title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'><link rel="stylesheet" href="/style.css">

</head>
<body>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Create Customer</label>


                        <form method="POST" action="{{ route('customer.store') }}">
                            @csrf
                            <div class="login-form">
                                <div class="group">

                            <div class="form-group row">
                                <label for="name" class="label">{{ __('Name') }}</label>

                                    <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>
                            <div class="group">
                            <div class="form-group row">
                                <label for="name" class="label">{{ __('Address') }}</label>

                                    <input id="address" type="text" class="input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>
                            <div class="group">
                            <div class="form-group row">
                                <label for="name" class="label">{{ __('Authorized Person') }}</label>

                                    <input id="authorized_person" type="text" class="input @error('authorized_person') is-invalid @enderror" name="authorized_person" value="{{ old('authorized_person') }}" required autocomplete="authorized_person" autofocus>
                                    @error('authorized_person')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>
                            <div class="group">
                            <div class="form-group row">
                                <label for="name" class="label">{{ __('Person Phone') }}</label>

                                    <input id="person_phone" type="text" class="input @error('person_phone') is-invalid @enderror" name="person_phone" value="{{ old('person_phone') }}" required autocomplete="person_phone" autofocus>
                                    @error('person_phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>
                            <div class="group">
                            <div class="form-group row">
                                <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>
                            <div class="group">
                            <div class="form-group row">
                                <label for="email" class="label">{{ __('Job Title') }}</label>

                                    <input id="job_title" type="text" class="input @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" required autocomplete="job_title">
                                    @error('job_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>
                            <div class="group">
                                <div class="form-group row">
                                    <button type="submit" class="button">
                                        {{ __('Create') }}
                                    </button>
                                </div>

                            </div>
                            </div>
                        </form>
                    </div>
                </div>

</body>
</html>
