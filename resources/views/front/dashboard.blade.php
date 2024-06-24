<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }

        li{
            padding: 10px 20px;
            border-top: 1px solid rgba(128, 128, 128, 0.336);
            cursor: pointer;
        }
    </style>

</head>
<body>

    <div class="col-12 d-flex ">
        <!-- LEFT -->
        <div style="min-height: 100vh;" class="col-3 bg-light border-end ">
            <div class="text-center p-4">
                <!-- <div style="width: 200px; height: 200px;" class="">
                </div> -->
                <img width="200px" height="200px" src="pro.jpg" alt="profile pic" class="rounded-circle ">

                <h4 class="mt-3">
                    {{ auth()->user()->name }}
                </h4>

                <h5>
                    {{ auth()->user()->varsity_id }}
                </h5>
            </div>

            <div class="">
                <ul>
                    <li>
                        Home 
                    </li>
                    <li>
                        Profile
                    </li>                    
                    <li>
                        <a href="{{route('courses')}}">
                        Courses
                    </a>
                    </li>

                    <li>
                        My courses
                    </li>

                    <li>
                        Applications
                    </li>
                    <li>
                        Approved Courses
                    </li>

                    <li>
                        Settings
                    </li>

                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf

                            <input type="submit" value="Logout">
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="col bg-white">
            <div class="px-4 py-3 text-center  bg-warning  ">
               Course Registration System
            </div>

            <div class="homepage my-5 ">
                <div class="h4 text text-center my-5 ">
                    Welcome to Course Registration System 
                </div>
                <div class="notice1 border  rounded-1 border-danger-subtle shadow mx-5    text text-center   ">
                    <p>Registration Status: Ongoing</p>
                    <p>Deadline: 05-06-2024</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>