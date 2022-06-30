
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('admin/dist/styles.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <style>
        .login{
            background: url('admin/dist/images/login-new.jpeg')
        }
    </style>
    <title>Register</title>
</head>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" action="/register" method="post">
                @csrf
                <p class="text-gray-800 font-medium">Register</p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="name">Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text"  placeholder="Your Name" aria-label="Name">
                </div>
                <div class="">
                    <label class="block text-sm text-gray-00" for="password">Password</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" placeholder="Your Password" aria-label="Password">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="phone_number">Phone Number</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="phone_number" name="phone_number" type="text" placeholder="Your Phone Numebr" aria-label="Phone Number">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="city">City</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="city" name="city" type="text" placeholder="Your City" aria-label="City">
                </div>


                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Register</button>
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="/login">
                    Already have an account ?
                </a>
                <br>
                @if($errors->any())
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                @endif
            </form>
        </div>
    </div>
</div>

</body>
</html>
