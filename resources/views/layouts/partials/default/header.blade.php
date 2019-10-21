<div class="body_wrapper">
      <header class="p-2">
        <nav class="navbar navbar-expand-lg custom_nav">
          <a class="navbar-brand mr-5" href="{{ route('/') }}">
            <img src="images/logo.png" alt="logo" class="img-fluid">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <i class="fa fa-bars" aria-hidden="true"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto text-uppercase fz15">
              <li class="nav-item mr-4 active">
                <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
              <li class="nav-item mr-4">
                <a class="nav-link" href="https://support.zebra-connect.com">Help Center</a>
              </li>
            </ul>
            <div class="form-inline language_change">
               <div class="drop-down">
                  <select name="options">
                    <option class="en" value="en"
                    style="background:url('images/language/eng.png') no-repeat;">English</option>        
                    <option class="es" value="es" 
                    style="background:url('images/language/es.png')  no-repeat;">Spanish</option>
                    <option class="it" value="it" 
                    style="background:url('images/language/it.png')  no-repeat;">Italian</option>    
                    <option class="ar" value="ar"
                    style="background:url('images/language/ar.png')  no-repeat;">Arabic</option> 
                    <option class="fr" value="fr" 
                    style="background:url('images/language/fr.png')  no-repeat;">French</option>   
                </select>     
             </div>  
            </div>
          </div>
        </nav>
    </header>
	  