<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div style="height: 100vh;" class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-10 ">
        <div class="col-8 bg-white shadow rounded-3 p-4">
            <div class="text-center ">
                <h2>Enter Course details</h2>
            </div>
            
            <div>
                <form action="{{route('course.create')}}" method="POST">
                    @csrf
                    
                    <div >
                       <label for="" class="form-label ">Course Name:</label>
                       <input type="text" name="course_name" id="" class="form-control ">
                       
                    </div>
                    
                    <div>
                       <label for="" class="form-label ">COURSE Code:</label>
                       <input type="text" name="course_code" id="" class="form-control ">
                    </div>

                    <div>
                        <label for="" class="form-label ">Course Credit:</label>
                        <input type="text" name="course_credit" id="" class="form-control ">
                    </div>

                  

                    <div class="justify-content-center " >
                         <button class="col-4 btn btn-danger  my-4">Submit</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>