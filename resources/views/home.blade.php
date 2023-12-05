<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | UMKM</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<body class="pt-5 pl-10 antialiased bg-red-300" >
        <nav class="bg-red-300 p-4 mx-8">
            <div class="flex items-center justify-between">
                <!-- Left side -->
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="#" class="px-3 py-2 font-bold text-5xl" aria-current="page">UPro</a>
                    </div>
                </div>

                <!-- Right side -->
                <div class="flex items-center sm:mr-6 sm:block">
                <a href="{{ route('tim') }}" class="px-4 py-2 font-bold text-white">Our Team</a>
                </div>
            </div>
        </nav>

        <div class="columns-2 pt-24 pl-10">
            <div class="sm:max-w-lg">
                    <h1 class="leading-normal text-4xl font-bold tracking-tight  sm:text-6xl">Selamat Datang <br>di <span class="text-red-500">UPro </span></h1>
                    <p class="mt-4 text-xl ">Platform Manajemen Penjualan Produk UMKM yang dirancang untuk meningkatkan efisiensi dan akurasi dalam mengelola berbagai aspek penjualan produk Usaha Mikro, Kecil, dan Menengah (UMKM). </p>
                    <a href="{{ route('login') }}" class="mt-5 inline-block rounded-md border border-transparent bg-red-500 px-8 py-3 text-center text-white font-medium hover:bg-indigo-700">Masuk</a>
            </div>
            <div class="flex items-center space-x-6 lg:space-x-8">
                    <img src="{{URL::asset('img/tokoupro.png')}}" alt="">
             </div>
        </div>

       

        

        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --></body>
</html>