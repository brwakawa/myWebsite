<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>custom websites with affordable prices.</title>
        <meta name="description" content="we design and create websites for your business or organization to deliver leads, clients, and revenue.">
        <meta name="keywords" content="cheap website making,best website making site,website designing">
        <meta name="og:title" property="og:title" content="we develope and design or re-make websites">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/index.css" rel="stylesheet">
        <link href="/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="\fontawesome\css\all.css">
        <link rel="canonical" href="https://yourwebsite.com/">

    </head>
    <body>

      <header>
        <div class="header">
          <div class="overlay"></div>
          <img src="./images/laptop.jpg" class="img" alt="laptop photo">
          <div class="logo">
            <a href="/" class="logo-text">
            IM
            </a>
          </div>
          <div class="nav">
            <strong class="contact-me " x-ms-format-detection="none">
              +964 7507921032
            </strong>
          </div>
        </div>
      </header>
      <main>
        <div class="showcase wow fadeInUp animated ">
          <h1 class="showcase-text">We create custom website & design.</h1>
          <h3 class="pt-2 showcase-text-sec" style="opacity:0.7;">Blogs, E-commerce and other web applications.</h3>
          <br>
        </div>
        <!-- end of showcase -->
        <!-- start of services section-->
        <div class="services container ">
          <h4 style="font-size:50px;" class="pt-3">SERVICES</h4>
          <div class="row justify-content-between ">
            <div class="services-box col-sm-12 col-lg-5 wow zoomIn">
              <a href="/webCreate" class="services-box-link">
                <img src="./images/create.png" alt="create image" width="120px"height="120px">
                <h2 class="pt-3 services-list">Website Developing & design</h2>
                <p style="font-size: 20px;">we design and create websites for your business or organization to deliver leads, clients, and revenue.</p>
              </a>
            </div>
            <div class="services-box col-sm-12 col-lg-5 offset-lg-1 wow zoomIn">
              <a href="re-design" class="services-box-link">
                <img src="./images/redesign.png" alt="re-design image" width="120px"height="120px">
                <h2 class="pt-3 services-list">Website RE-Design </h2>
                <p style="font-size: 20px;">we can re-make and re-design your current website and give your website a whole new look. </p>
              </a>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="services-box col-sm-12 col-lg-5 mb-5 wow zoomIn">
              <a href="/responsive" class="services-box-link">
                <img src="./images/responsive.png" alt="responsive image" width="120px"height="120px">
                <h2 class="pt-3 services-list">Responsive Website</h2>
                <p style="font-size: 20px;">every website we create is designed to work just as well on mobile phones and tablets as it does on a desktop.</p>
              </a>
            </div>
          </div>
        </div>
        <!--end of services -->
        <!-- start of seo section-->
        <div class="seo">
          <div class="overlay"></div>
          <img src="./images/analysis.jpg" class="img" alt="analysis photo">
          <div class="seo-content wow zoomIn">
            <h3 class="seo-title">SEO optimized</h3>
            <p class="seo-para">all our websites is optimized for search engines which means you can easily be found in searches like ( google and bing ), we use best practices and tools to develope and design your website to bring more people to your website.</p>
          </div>
        </div>
        <!--end of seo section -->
      
        <div class="contact ">
          <div class="contact-text">
            <h3 class="effect">Lets start working on your website.</h3>
            <p class="pt-5">Contact us using the Email or number or use the form.</p>
            <div class="d-flex pt-5">
              <img src="./images/email.png" width="30px"height="30px" alt="Email">
              <p class="pl-1 pt-1">:</p>
              <p class="pl-2 pt-1">info@inspirationmedia.com</p>
            </div>
            <div class="d-flex">
              <img src="./images/whatsapp.png" width="30px"height="30px" alt="phone number">
              <p class="pl-1 pt-1">:</p>
              <p class="pl-2 pt-1" x-ms-format-detection="none" >+964 7507921032</p>
            </div>
          </div>

          <div class="container contact-form slideInRight wow">
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
      <footer>

        <div class="social">
          <a class="fab fa-facebook social-items  " href="#" rel="nofollow"></a>
          <a class="fab fa-instagram social-items " href="#" rel="nofollow"></a>
          <a class="fab fa-twitter social-items " href="#" rel="nofollow"></a>
        </div>
        <div class="footer">
          Copyright &copy; 2019, inspiratin media. All rights reserved.
        </div>

      </footer>

      <script src="/js/wow/dist/wow.min.js"></script>
           <script>
              new WOW().init();
           </script>
    </body>
</html>
