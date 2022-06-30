<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>



</head>
<body>
{{--        {{ $angka }}--}}

        <h1>Driver Identity</h1>
        @foreach($driver as $drive)

        <input type="hidden" name="did" value="{{ $drive->driver_id }}">
        <h2>Name : {{ $drive->name }}</h2>
        <h2>Phone Number : {{ $drive->phone_number }}</h2>
        <h2>Price : Rp.15.000</h2>
        @endforeach
            <h3><center>Have a nice day</center></h3>
            <h2><center><a href="/"> >>> Home <<< </a></center></h2>


</body>
</html>
