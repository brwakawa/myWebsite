<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>custom websites with affordable prices at biri | contact us.</title>
        <meta name="description" content="we design and create websites for your business or organization to deliver leads, clients, and revenue.">
        <meta name="keywords" content="cheap website making,best website making site,website designing">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/myapp.css" rel="stylesheet">

    </head>
    <body>

      <header>
        <div class="header">
          <div class="logo">
            <a href="/" class="logo-text">
            biri
            </a>
          </div>
          <div class="nav">
            <strong class="contact-me pl-4" x-ms-format-detection="none">
              +964 7507921032
            </strong>
          </div>
        </div>
      </header>
      <main>
        <div class="contact">
          <div class="contact-text">
            <h3 class="effect">Lets start working on your website..</h3>
            <p class="pt-5">Contact us using the Email or number below or use the form in the right to contact us.</p>
            <div class="d-flex pt-5">
              <img src="./images/email.png" width="30px"height="30px" alt="Email">
              <p class="pl-1 pt-1">:</p>
              <p class="pl-2 pt-1">admin@biri.com</p>
            </div>
            <div class="d-flex">
              <img src="./images/whatsapp.png" width="30px"height="30px" alt="phone number">
              <p class="pl-1 pt-1">:</p>
              <p class="pl-2 pt-1" x-ms-format-detection="none" >+964 7507921032</p>

            </div>
          </div>

          <div class="container contact-form">
            @if(Session::has('flash_message'))
              <div class="alert alert-success">{{ session::get('flash_message') }}</div>
            @endif
            <form method="post" action="{{ route('contact.store') }}"><!-- after renamed i will use it here in action -->
              @csrf
              <div class="form-group">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="fullName">
                @if ($errors->has('fullName'))
                <small class="form-text invalid-feedback">{{ $errors->first('fullName') }}</small>
                @endif
              </div>
              <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" name="email">
                @if ($errors->has('email'))
                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
                <!-- form-text and invalid-feedback is used to show error if field is not correct-->
              </div>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control">please tell us what you want here..</textarea>
                @if ($errors->has('message'))
                <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                @endif
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>

            </form>

          </div>
        </div>
        <!-- end of contact -->
      </main>
      <footer>  Copyright &copy; 2019, biri. All rights reserved.</footer>

      </body>
