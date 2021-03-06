<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Edit Invoice </title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'><link rel="stylesheet" href="/style.css">

</head>
<body>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Edit Invoice</label>


                        <form method="POST" action="{{route('supplierinvoice.update', ['id'=>$supplierinvoice->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="login-form">
                                <div class="group">
                                    <div class="form-group row">
                                        <label for="name" class="label">{{ __('Invoice') }}</label>

                                            <input id="invoice" type="text" class="input @error('invoice') is-invalid @enderror" name="invoice" value="{{ $supplierinvoice->invoice}}"  autocomplete="invoice" autofocus>
                                            @error('invoice')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                    </div>
                                </div>

                                <div class="group">

                            <div class="form-group row">

                                <div class="form-group tm-choices-container tm-text-secondary">
                                    <label class="tm-w-50">
                                      <input
                                        type="radio"
                                        class="with-gap"
                                        name="payment_situation"
                                        value="yes" />
                                      <span>Yes</span>
                                    </label>

                                    <label class="tm-w-50">
                                      <input
                                        type="radio"
                                        class="with-gap"
                                        name="payment_situation"
                                        value="no" />
                                      <span>No</span>
                                    </label>
                                  </div>


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
