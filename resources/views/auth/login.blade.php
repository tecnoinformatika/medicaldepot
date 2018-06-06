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
                <form method="POST" action="{{ route('login') }}" class="comment-form contact-form" id="ajax-form">
                     @csrf
                    <label>{{ __('E-Mail Address') }}</label>
                        <p class="comment-form-author">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))-->
                             <span class="error" id="err-name"><strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                        </p>
                    <label>{{ __('Password') }}</label>
                        <p class="comment-form-email">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
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
   
   
   
   
   <!--<form method="POST" action="{{ route('login') }}">-->
<!--                 @csrf-->
<!--                 <div class="form-group row">-->
<!--                     <label for="email" class="col-sm-4 col-form-label text-md-right"></label>-->
<!--                     <div class="col-md-6">-->
<!--                         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>-->
<!--                         @if ($errors->has('email'))-->
<!--                             <span class="invalid-feedback">-->
<!--                                 <strong>{{ $errors->first('email') }}</strong>-->
<!--                             </span>-->
<!--                         @endif-->
<!--                     </div>-->
<!--                 </div>-->
<!--                 <div class="form-group row">-->
<!--                     <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->

<!--                     <div class="col-md-6">-->
<!--                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>-->

<!--                         @if ($errors->has('password'))-->
<!--                             <span class="invalid-feedback">-->
<!--                                 <strong>{{ $errors->first('password') }}</strong>-->
<!--                             </span>-->
<!--                         @endif-->
<!--                     </div>-->
<!--                 </div>-->
<!--                 <div class="form-group row">-->
<!--                     <div class="col-md-6 offset-md-4">-->
<!--                         <div class="checkbox">-->
<!--                             <label>-->
<!--                                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}-->
<!--                             </label>-->
<!--                         </div>-->
<!--                     </div>-->
<!--                 </div>-->
<!--                 <div class="form-group row mb-12">-->
<!--                     <div class="col-md-12 offset-md-12">-->
<!--                         <button type="submit" class="btn btn-primary">-->
<!--                             {{ __('Login') }}-->
<!--                         </button>-->
<!--                         -->
<!--                     </div>-->
<!--                 </div>-->
<!--             </form>-->                         