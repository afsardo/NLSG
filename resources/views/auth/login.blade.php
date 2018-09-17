@extends('layouts.app')

@section('body')
<div class="min-h-screen flex items-center justify-center">
	<div class="w-full max-w-xs">
		<h1 class="font-black mb-6 text-center text-grey-light">NLSG</h1>

        @if ($errors->any())
		<div class="bg-red-lightest border-t-4 border-red rounded-b text-red-darkest px-4 py-3 shadow-md mb-6" role="alert">
  			<div class="flex">
    			<div class="py-1">
    				<svg aria-hidden="true" class="fill-current h-6 w-6 text-red mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path></svg>
    			</div>
    			<div>
    				<p class="font-bold">Error</p>
    				<p class="text-sm">{{ $errors->getBag("default")->first() }}</p>
    			</div>
  			</div>
		</div>
		@endif

		<form class="card" method="post" action="{{ url(route('login')) }}">
			@csrf

			<div class="mb-4">
				<label class="form-label" for="username">
					Username
				</label>
				<input class="form-input" id="username" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
			</div>

			<div class="mb-4">
				<label class="form-label" for="password">
					Password
				</label>
				<input class="form-input" id="password" type="password" name="password" placeholder="******************">
			</div>

			<div class="mb-6">
				<label class="form-label" for="remember">
                    <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
			</div>

			<div class="flex items-center justify-center">
				<button class="btn btn-blue" type="submit">
					Sign In
				</button>
			</div>
		</form>
	</div>
</div>
@endsection
