<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div style="height: 100vh;" class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-10 ">
        <div class="col-8 bg-white shadow rounded-3 p-4">
            <div class="text-center ">
                <h2>Sign Up </h2>
            </div>
            
            <div>
                <form action="">
                    
                    
                    <div>
                       <label for="" class="form-label ">Name:</label>
                       <input type="text" name="" id="" class="form-control " placeholder="{{auth()->user()->name}}">
                       
                    </div>
                    <div>
                      <label for="" class="form-label ">E-Mail:</label>
                      <input type="mail" name="" id=""class="form-control ">
                    </div>
                    <div>
                       <label for="" class="form-label ">ID:</label>
                       <input type="text" name="" id=""class="form-control ">
                    </div>

                    <div>
                        <label for="" class="form-label ">Password:</label>
                        <input type="password" name="" id=""class="form-control ">
                    </div>

                    <div>
                        <label for="" class="form-label ">Confirm Password:</label>
                        <input type="password" name="" id=""class="form-control ">
                    </div>

                    <div>
                         <button class="col-4 btn btn-danger  my-4">Update</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>