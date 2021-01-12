<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Edit Info </title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'><link rel="stylesheet" href="/style.css">

</head>
<body>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Edit Info</label>


                        <form method="POST" action="{{route('info.update', ['id'=>$info->id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="login-form">
                                <div class="group">
                                    <div class="form-group row">
                                        <label for="name" class="label">{{ __('Name') }}</label>

                                            <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{$info->name}}"  autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                                <div class="group">
                                    <div class="form-group row">
                                        <label for="address" class="label">{{ __('Address') }}</label>

                                            <input id="address" type="text" class="input @error('address') is-invalid @enderror" name="address" value="{{$info->address}}"  autocomplete="address" autofocus>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                                <div class="group">
                                    <div class="form-group row">
                                        <label for="phone" class="label">{{ __('Phone') }}</label>

                                            <input id="phone" type="text" class="input @error('phone') is-invalid @enderror" name="phone" value="{{ $info->phone }}"  autocomplete="phone" autofocus>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                                <div class="group">
                                    <div class="form-group row">
                                        <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                                            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ $info->email }}"  autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                </div>

                                <div class="group">
                                    <div class="form-group row">
                                        <label for="logo" class="label">{{ __('Logo') }}</label>

                                            <input id="logo" type="file" class="input @error('logo') is-invalid @enderror" name="logo" value="{{ $info->logo }}"  autocomplete="logo">

                                    </div>
                                </div>

                            <div class="group">
                                <div class="form-group row">
                                    <button type="submit" class="button">
                                        {{ __('Update') }}
                                    </button>
                                </div>

                            </div>
                            </div>
                        </form>
                    </div>
                </div>

</body>
</html>
