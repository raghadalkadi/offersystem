<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Create Person </title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'><link rel="stylesheet" href="/style.css">

</head>
<body>

<div class="login-wrap">
	<div class="login-html">

		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Create Person</label>

                        <form method="POST" action="{{ route('person.store') }}">
                            @csrf
                            <div class="login-form">
                                <div class="group">

                            <div class="form-group row">
                                <label for="name" class="label">{{ __('Name') }}</label>

                                    <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>

                        <div class="group">
                            <div class="form-group row">
                                <label for="type" class="label">{{ __('Type') }}</label>

                                    <input id="type" type="text" class="input @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" autocomplete="type" autofocus>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>

                        <div class="group">
                            <div class="form-group">
                                @foreach ($accounts as $item)
                                <label>{{$item->dep_name}}</label>
                                <input type="checkbox" name="accounts"  value="{{$item->id}}">

                                @endforeach

                              </div>
                            </div>

                            <div class="group">
                            <div class="form-group row">
                                <label for="address" class="label">{{ __('Address') }}</label>

                                    <input id="address" type="text" class="input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>

                            <div class="group">
                            <div class="form-group row">
                                <label for="name" class="label">{{ __('Person Phone') }}</label>

                                    <input id="person_phone" type="text" class="input @error('person_phone') is-invalid @enderror" name="person_phone" value="{{ old('person_phone') }}"  autocomplete="person_phone" autofocus>
                                    @error('person_phone')
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
