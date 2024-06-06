
 <!-- Bootstrap CSS -->
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

 <!-- Font Awesome -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


<style id="" media="all">
  /* vietnamese */
  @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/josefinsans/v17/Qw3aZQNVED7rKGKxtqIqX5EUAnx4RHw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }

  /* latin-ext */
  @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/josefinsans/v17/Qw3aZQNVED7rKGKxtqIqX5EUA3x4RHw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  /* latin */
  @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 400;
      src: url(/fonts.gstatic.com/s/josefinsans/v17/Qw3aZQNVED7rKGKxtqIqX5EUDXx4.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  /* vietnamese */
  @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/josefinsans/v17/Qw3aZQNVED7rKGKxtqIqX5EUAnx4RHw.woff2) format('woff2');
      unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }

  /* latin-ext */
  @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/josefinsans/v17/Qw3aZQNVED7rKGKxtqIqX5EUA3x4RHw.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  /* latin */
  @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 700;
      src: url(/fonts.gstatic.com/s/josefinsans/v17/Qw3aZQNVED7rKGKxtqIqX5EUDXx4.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

</style>

<style>
  * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box
  }

  body {
      padding: 0;
      margin: 0
  }

  #notfound {
      position: relative;
      height: 100vh;
      background-color: #222
  }

  #notfound .notfound {
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      z-index: 1; /* Nueva línea */
  }

  .notfound {
      max-width: 460px;
      width: 100%;
      text-align: center;
      line-height: 1.4;
      z-index: 1; /* Nueva línea */
  }

  .notfound .notfound-404 {
      height: 158px;
      line-height: 153px
  }

  .notfound .notfound-404 h1 {
      font-family: josefin sans, sans-serif;
      color: #222;
      font-size: 220px;
      letter-spacing: 10px;
      margin: 0;
      font-weight: 700;
      text-shadow: 2px 2px 0 #c9c9c9, -2px -2px 0 #c9c9c9
  }

  .notfound .notfound-404 h1>span {
      text-shadow: 2px 2px 0 #ffab00, -2px -2px 0 #ffab00, 0 0 8px #ff8700
  }

  .notfound p {
      font-family: josefin sans, sans-serif;
      color: #c9c9c9;
      font-size: 16px;
      font-weight: 400;
      margin-top: 0;
      margin-bottom: 15px;
      position: relative;
      z-index: 2; /* Nueva línea */
  }

  .notfound a {
      font-family: josefin sans, sans-serif;
      font-size: 14px;
      text-decoration: none;
      text-transform: uppercase;
      background: 0 0;
      color: #c9c9c9;
      border: 2px solid #c9c9c9;
      display: inline-block;
      padding: 10px 25px;
      font-weight: 700;
      -webkit-transition: .2s all;
      transition: .2s all;
      position: relative;
      z-index: 2; /* Nueva línea */
  }

  .notfound a:hover {
      color: #ffab00;
      border-color: #ffab00
  }

  @media only screen and (max-width:480px) {
      .notfound .notfound-404 {
          height: 122px;
          line-height: 122px
      }

      .notfound .notfound-404 h1 {
          font-size: 122px
      }
  }

</style>


<div id="notfound">
    <div class="error-page">
        
        
        

        
        </div>
  <div class="notfound">
      <div class="notfound-404">
        <h3 class="text-warning" ><i class="fas fa-exclamation-triangle text-warning " ></i> Oops! Page not found.</h3>
          <h1>4<span>1</span>9</h1>
          
      </div>
    <br><br><br><br><br><br><br>
      <a href="{{ route('home') }}">home page</a>
      
  </div>
</div>

 <!-- Bootstrap JS and dependencies -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>