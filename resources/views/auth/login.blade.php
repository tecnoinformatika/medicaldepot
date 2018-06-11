<div  id="create" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content login">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4 class="h4-color">Login Customer</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}" class="comment-form contact-form">
                     @csrf
                    <label>{{ __('E-Mail Address') }}</label>
                        <p class="comment-form-author">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))-->
                             <span class="error" id="err-name"><strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                        </p>
                    <label>{{ __('Password') }}</label>
                        <p class="comment-form-email">
                            <input  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                         @if ($errors->has('password'))
                         <span class="error" id="err-email">please enter e-mail</span>
                             <span class="error" id="err-email" >
                                 <strong>{{ $errors->first('password') }}</strong>
                             </span>
                         @endif
                        </p>
                    <div class="text-left">
                       <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </div>
                    <div class="text-right">
                    <button type="submit" class="login-btn btn">
                             {{ __('Login') }}
                       </button>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                         </a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary btn-lg btn-block" href="{{ route('register') }}">
                            {{ __('Sign Up') }}
                         </a>
            </div>
        </div>
    </div>
</div>
   
   
   