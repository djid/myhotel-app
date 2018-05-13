@extends('layouts.app')

@section('content')
  
<section class="section-login">
<div class="center-container">

  <!--header-->
  <div class="header-w3l">
    <h1>Access Subscribe Form</h1>
  </div>
  <!--//header-->
  
  <!--main-->
  <div class="main-content-agile">
      <h2>Get Free Email Updates!<i class="fa mail fa-envelope"></i></h2>
      <h3>Join us for free to get instant email updates</h3>
    <div class="sub-main-w3"> 
      <form action="{{route('register')}}" method="POST">
        {{ csrf_field() }}
        <div class="field form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <i class="fa fa-user"></i>
          <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Votre Nom" required autofocus>

          @if ($errors->has('name'))
               <span class="help-block">
                   <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
        <div class="field form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <i class="fa fa-envelope"></i>
          <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Votre E-mail" required>

          @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
               </span>
          @endif
        </div>
        <div class="field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <i class="fa fa-lock"></i>
          <input id="password" type="password" name="password" placeholder="Votre mot de passe" required>

        @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        </div>
        <div class="field">
          <i class="fa fa-lock"></i>
          <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmer Votre mot de passe" required>
        </div>
        <p><i class="fa fa-lock"></i> Enregistrement s&eacute;curiser</p>
        <input type="submit" value="S'enregistrer">
      </form>
    </div>
  </div>
  <!--//main-->
  
  
</div>
  </section>  
@stop