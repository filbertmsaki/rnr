<x-layouts.auth.app-layout-component>
    @section('page_title', 'Reset Password Page')
    @push('styles')
    @endpush
    @push('scripts')
    @endpush
    <div class="login_forms_box">
        <form class="login-register-form login" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <label for="email">Email address<span class="required">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="email" autocomplete="off" value="{{ $email ?? old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password<span class="required">*</span></label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="password" autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirm Password<span class="required">*</span></label>
                <input type="password" class="form-control" name="password_confirmation" id="password-confirm"
                    autocomplete="new-password">
            </div>
            <p class="form-row">
                <button type="submit" name="login" value="Reset Password">Reset Password</button>
            </p>
        </form>
    </div>
</x-layouts.auth.app-layout-component>
