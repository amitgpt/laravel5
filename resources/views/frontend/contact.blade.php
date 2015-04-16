
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Contact Me</h1>
        <hr class="small">
        <div class="row center">
          <h5 class="header col s12 light">Have questions? I have answers (maybe).</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="frontend/background3.jpg" alt="Unsplashed background img 2"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <div class="icon-block">
            <p class="post-meta">
				<strong>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!
				</strong>
			</p>
          </div>
        </div> 
      </div>
      <div class="row">
		 <div class="col s12">
				
				<form class="col s12" role="form" method="POST" action="{{ url('/contact/message') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="row">
					<div class="input-field col s12">
						  <i class="mdi-action-account-circle prefix"></i>
						  <input id="icon_prefix" type="text" name="name" class="validate" required>
						  <label for="icon_prefix">Name</label>
					</div>
				  </div>
				  <div class="row">
					<div class="input-field col s12">
					   <i class="mdi-communication-email prefix"></i>
					  <input id="email" type="email" class="validate" name="email"required>
					  <label for="email">Email</label>
					</div>
				  </div>
				   <div class="row">
					<div class="input-field col s12">
					  <i class="mdi-communication-phone prefix"></i>
					  <input id="icon_telephone" type="tel" class="validate" name="telephone" required>
					  <label for="icon_telephone">Telephone</label>
					</div>
				  </div>
				   <div class="row">
					<div class="input-field col s12">
					 <i class="mdi-editor-mode-edit prefix"></i>
					  <textarea id="icon_prefix2" class="materialize-textarea" name="message" required></textarea>
					  <label for="icon_prefix2">Message</label>
					</div>
				  </div>
				  <button class="btn waves-effect waves-light btn-large" type="submit">Send
					<i class="mdi-content-send right"></i>
				  </button>
				</form>
		
			 
		 </div>
      </div>
      

    </div>
  </div>
  
