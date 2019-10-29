<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="grecaptcha-key" content="{{config('recaptcha.v3.public_key')}}">

        <title>Recaptcha Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://www.google.com/recaptcha/api.js?render={{config('recaptcha.v3.public_key')}}"></script>
    </head>

    <body>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 bg-light shadow border rounded p-3">
                    <form action="{{route('message')}}" data-grecaptcha-action="message" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name-input">Name</label>
                            <input type="text" id="name-input" class="form-control" name="name">
                            @error('name')
                                <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email-input">Email</label>
                            <input type="email" id="email-input" class="form-control" name="email">
                            @error('email')
                                <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message-input">Message</label>
                            <textarea name="message" id="message-input" class="form-control" cols="30" rows="5"></textarea>
                            @error('message')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="text-danger">
                            @error('grecaptcha')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary text-center">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
