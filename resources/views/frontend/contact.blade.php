@extends('frontend.layout')
@section('title')
    Contact
@endsection

@section('frontEndContent')
<section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 bg-primary text-center">
                    <h2>Contact Us</h2>
                </div>
                <div class="col-lg-6 mt-5 mx-auto shadow p-3">
                    <form action="{{ url('contact-message') }}" method="POST">
                        @csrf
                        <input type="text" class="form-control my-3" name="username" placeholder="Username">
                        <input type="email" class="form-control my-3" name="mail" placeholder="Email">
                        <input type="number" class="form-control my-3" name="phn_number"  placeholder="Phone Number">
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control my-3" placeholder="Message"></textarea>
                        <button type="submit" class="form-control btn btn-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- Footer -->

</body>
</html>
