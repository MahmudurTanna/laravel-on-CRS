<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div style="height: 100vh;" class="col-12 d-flex align-items-center justify-content-center bg-secondary bg-opacity-10 ">
        <div class="col-6 mx-auto p-4 rounded-3 shadow bg-white ">
            <h2>
                Log In
            </h2>

            <div>
                <form action="{{route('login.user')}}" method="POST">
                    @csrf

                    <div>
                        <div class="input-group mt-3">
                            <input id="student" type="radio" name="category" value="0" class="me-2 form-check " checked>
                            <label for="student" class="me-5 form-label ">Student</label>

                            <input id="staff" type="radio" name="category" value="1" class="me-2 form-check ">
                            <label for="staff" class="form-label ">Staff</label>
                        </div>

                        <div class="my-2">
                            <label for="" class="form-label ">ID</label>
                            <input type="text" name="varsity_id" class="form-control " pattern="^[A-Z]{3}\s\d{3}\s\d{5}$">
                        </div>

                        <div>
                            <label for="" class="form-label ">Password</label>
                            <input type="password" name="password" class="form-control ">
                        </div>

                        <button class="col-4 btn btn-danger my-4">Log In</button>
                    </div>
                </form>

                <div>
                    <p>
                        Not registered yet? <a href="{{ route('signup') }}">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>