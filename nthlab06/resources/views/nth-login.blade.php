<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NTH Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nthaccount.nthloginsubmit')}}" method="post">
            @csrf
                <div class="card-header">
                    <h1>NTH - Login</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nthemail" class="form-label">Email :</label>
                        <input type="email" class="form-control" 
                        id="nthemail" name="nthemail"
                        placeholder="nth@email.com">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <span id='email-error'></span>
                    </div>
                    <div class="mb-3">
                        <label for="nthpass" class="form-label">Email :</label>
                        <input type="password" class="form-control" 
                        id="nthpass" name="nthpass"
                        placeholder="........">
                        <span id='email-error'></span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                    @if (\Session::has('nth-error'))
                    <div class="alert alert-success">
                        <ul>
                            {!! \Session::get('nth-error') !!}
                        </ul>
                    </div>
                    @endif
                </div>
        </form>
    </section>
</body>
</html>