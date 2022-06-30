
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="{{asset('admin/dist/styles.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Maxim</title>

    <script src="https://kit.fontawesome.com/56404762ef.js" crossorigin="anonymous"></script>
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
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">{{ $user->name }}</a>
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
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl" style="text-align: center; font-size: 40px;cursor: default;">
                                    >>
                                </a>
                                <a href="#" class="no-underline text-white text-lg" style="cursor: default;">

                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="/bike" class="no-underline text-white text-2xl">
                                    <i class="fa-solid fa-motorcycle"></i>
                                </a>
                                <a href="/bike" class="no-underline text-white text-lg">
                                    BIKE
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="/car" class="no-underline text-white text-2xl">
                                    <i class="fa-solid fa-car"></i>
                                </a>
                                <a href="/car" class="no-underline text-white text-lg">
                                    CAR
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl" style="text-align: center; font-size: 40px;cursor: default;">
                                    <<
                                </a>
                                <a href="#" class="no-underline text-white text-lg" style="cursor: default;">

                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->
                    <h1 style="font-size: 100px"><i><center>Welcome To Maxim</center></i></h1>

            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; Maxim</div>
            <div class="flex flex-1 mx-auto">Copyright 2022</a></div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="{{asset('admin//main.js')}}"></script>
</body>

</html>
