<x-layouts.auth.app-layout-component>
    @section('page_title', 'Password Reset Page')
    @push('styles')
    @endpush
    @push('scripts')
    @endpush
    <div class="login_forms_box">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="login-register-form login" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email address<span class="required">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="email" autocomplete="off" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <p class="form-row">

                <button type="submit" name="login" value="Send Password Reset Link">Send Password Reset Link</button>
            </p>

        </form>
    </div>
</x-layouts.auth.app-layout-component>
