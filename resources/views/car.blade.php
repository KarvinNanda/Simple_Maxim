<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Css -->
    <link rel="stylesheet" href="{{asset('admin//dist/styles.css')}}">
    <link rel="stylesheet" href="{{asset('admin/')}}./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Bike</title>

    <style>
        .butdalam{
            text-align: center;
            justify-content: center;
        }

        .butdalam button{
            border-radius: 5px;
            width: 120px;
            height: 50px;
            color: black;
            border: 1px solid black;
        }

        .butdalam button:hover{
            background-color: #0d3331;
            color: white;
        }

    </style>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Maxim</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <a href="" class="text-white p-2 mr-2 no-underline hidden md:block lg:block" style="cursor: default;">{{ $user->city }}</a>


                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="{{ asset('admin/dist/images/images.jpg') }}" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">{{ $user->city }}</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">

<li><a href="/logout" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
</ul>
</div>
</div>
</div>
</header>
<!--/Header-->

<div class="flex flex-1">
    <!--Sidebar-->
    <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

        <ul class="list-reset flex flex-col">
            <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="/"
                   class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" style="font-size: 20px;">
                    Dashboard
                    <span><i class="fas fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <a href="/bike"
                   class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" style="font-size: 20px; text-align;">
                    Bike
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <a href="/car"
                   class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" style="font-size: 20px;">
                    Car
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a>
            </li>

    </aside>
    <!--/Sidebar-->
    <!--Main-->
    <main class="bg-white-500 flex-1 p-3 overflow-hidden">

        <!--Grid Form-->

        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                    Form Order
                </div>
                <div class="p-3">
                    <form class="w-full" action="/order" method="post">
                        @csrf
                        <input type="hidden" name="uid" value="{{ $user->user_id }}">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                       for="grid-first-name">
                                    Pick-up Location
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                       id="grid-first-name" name="pickup" type="text" placeholder="">
                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                       for="grid-last-name">
                                    Destination
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                       id="grid-last-name" name="destination" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-password">
                                    Pick-up Point
                                </label>
                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                       id="point" name="point" type="text" placeholder="">

                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                       for="grid-city">
                                    Person
                                </label>
                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                       id="grid-city" type="number" min="2" max="6" >
                            </div>
                        </div>
                        <br>
                        <center><h3>Choose you method payment</h3></center>
                        <div class="butluar">
                            <div class="butdalam">
                                <button type="submit" name="but" value="1">Cash</button>
                                <button type="submit" name="but" value="2">OVO</button>
                                <button type="submit" name="but" value="3">Go-Pay</button>
                            </div>
                        </div>
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
        <!--/Grid Form-->
</div>
</main>
<!--/Main-->
</div>
<!--Footer-->
<footer class="bg-grey-darkest text-white p-2">
    <div class="flex flex-1 mx-auto">&copy; Maxim/div>
</footer>
<!--/footer-->

</div>

</div>

<script src="{{asset('admin//main.js')}}"></script>

</body>

</html>
