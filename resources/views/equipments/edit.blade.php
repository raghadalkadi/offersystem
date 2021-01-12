<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Edit Equipment </title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'><link rel="stylesheet" href="/style.css">

</head>
<body>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Edit Equipment</label>


                        <form method="POST" action="{{route('equipment.update', ['id'=>$equipment->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="login-form">
                                <div class="group">

                            <div class="form-group row">
                                <label for="name" class="label">{{ __('Name') }}</label>

                                    <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ $equipment->name}}"  autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                        </div>
                        <div class="group">
                        <div class="form-group row">
                            @foreach ($suppliers as $item)
                            <label>{{$item->name}}</label>
                            <input type="radio" name="suppliers[]"  value="{{$item->id}}"
                            @foreach ($equipment->suppliers as $item2)
                            @if ($item->id==$item2->id)
                            checked

                            @endif

                            @endforeach>

                            @endforeach

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
