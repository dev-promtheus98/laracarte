@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-10">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you have a trouble with this service, please <a href="#">ask for help</a>.</p>

                <form action="#" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" rows="6" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-dark btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
