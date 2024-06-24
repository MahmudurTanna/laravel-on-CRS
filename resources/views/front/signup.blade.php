<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div style="height: 100vh;" class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-10 ">
        <div class="col-8 bg-white shadow rounded-3 p-4">
            <div class="text-center ">
                <h2>Sign Up </h2>
            </div>
            
            <div>
                <form action="{{route('create.user')}}" method="POST">
                    @csrf

                    <!-- <div class="d-flex justify-content-center  ">  -->
                        <div class="input-group m-3  justify-content-center   " >
                            <input id="student" type="radio" name="category" class="form-check me-2"checked>
                            <label for="student" class="form-label me-5 ">Student</label>
    
                            <input id="staff" type="radio" name="category" class="form-check me-3">
                            <label for="staff" class="form-label  me-5 ">Staff</label>
                        </div>
    
                    <!-- </div> -->
                    
                    <div>
                       <label for="" class="form-label ">Name:</label>
                       <input type="text" name="name" id="" class="form-control ">
                       
                    </div>
                    <div>
                      <label for="" class="form-label ">E-Mail:</label>
                      <input type="mail" name="email" id=""class="form-control ">
                    </div>
                    <div>
                       <label for="" class="form-label ">ID:</label>
                       <input type="text" name="varsity_id" id=""class="form-control ">
                    </div>

                    <div>
                        <label for="" class="form-label ">Password:</label>
                        <input type="password" name="password" id=""class="form-control ">
                    </div>

                    <div>
                        <label for="" class="form-label ">Confirm Password:</label>
                        <input type="password" name="confirm" id=""class="form-control ">
                    </div>

                    <div>
                         <button class="col-4 btn btn-danger  my-4">Sign Up</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>