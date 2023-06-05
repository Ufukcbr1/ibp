
<h3 class="mb-4">Contact Us</h3>
<div id="form-message-warning" class="mb-4"></div>
<div id="form-message-success" class="mb-4">
    Your message was sent, thank you!
</div>
<form method="POST" id="contactForm" name="contactForm"  action="{{route('sendmessage')}}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Your Message"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
                <div class="submitting"></div>
            </div>
        </div>
    </div>
</form>
</div>
</div>


