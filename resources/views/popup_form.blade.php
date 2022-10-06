<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div id="appointment-messages"></div>
                  <form name="contact-form" id="contactform" action="{{url('/contact')}}" method="POST" class="contact-form-style-01">
                    {{ csrf_field() }}
                    <div class="row">
                      @if(Session::has('message'))
                      <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                      @endif
                      @if(Session::has('loginerror'))
                      <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('loginerror') }}</p>
                      @endif
                    </div>
                    <div class="row">
                    <div class="col-md-6 col-sm-6"></div>
                    <div class="col-md-6 col-sm-6">
                        <img src="images/godaddy-ssl.png" style="height: 50px;width:244px;float:right;">
                    </div>
                </div>
                    <div class="row">
                      <h5 style="text-align: center; ">Please send us your requirements through form below and we'll get back to you at the earliest</b></h5>
                      <br>
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                          <label class="sr-only" for="name">Name</label>
                          <input type="text" name="name" class="md-input-new latest" placeholder="Name *" required data-error="Your Name is Required">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                          <label class="sr-only" for="email">Email</label>
                          <input type="email" name="email" class="md-input-new" placeholder="Email *" required data-error="Please Enter Valid Email">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                          <label class="sr-only" for="number">Number</label>
                          <input type="tel" name="number" class="md-input-new" id="number" placeholder="Phone Number">
                          <div class="help-block with-errors"></div>
                          <link rel="stylesheet" href="{{asset('/build/css/intlTelInput.css')}}">
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                          <script src="{{asset('/build/js/intlTelInput.js')}}"></script>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                          <label class="sr-only" for="email">Subject</label>
                          <input type="text" name="subject" class="md-input-new" placeholder="Subject">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                          <label class="sr-only" for="message">Message</label>
                          <textarea name="message" class="md-input-new" rows="4" placeholder="Message" required data-error="Please, Leave us a message"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
        </div>
        <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-outline-new btn-md btn-square btn-animate btn-new"><span>Send
                                    Message
                          <i class="ion-android-arrow-forward"></i></span></button>
        </div>
      </div>
    </div>
  </div>
</div>