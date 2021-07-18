@extends('layouts.app')

@section('content')
    <div class=" grid grid-cols-1 m-auto" 
    style="background-image:url('https://cdn.pixabay.com/photo/2017/08/02/14/34/dark-2571846_960_720.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 600px;
    
    ">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center ">
                <h1 class="sm:text-white text-4xl uppercase font-bold text-shadow-md pb-1/4 ">
                Do you want to keep up to date with new technology news? 
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-3 px-5 font-bold text-xl uppercase rounded-3xl"> 
                    Read more
                </a>
            </div>  
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/02/21/50/home-office-336377_960_720.jpg" 
            alt="blog" width="700">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Cập nhật tin tức công nghệ mỗi ngày
            </h2>
            <p class="py-8 text-gray-500 text-l">
            Thông tin công nghệ về điện thoại di động, máy tính bảng, 
            laptop mới nhất được cập nhật hằng giờ. Tin về sản phẩm mới mắt, đánh giá sản phẩm, ...
            </p>
<!-- 
            <p class="font-extrabold text-gray-600 text-l pd-9">
            Muốn trở thành một lập trình viên giỏi?Muốn trở thành một lập trình viên giỏi?Muốn trở thành một lập trình viên giỏi?
            </p> -->
            <a href="/blog"
            class="uppercase bg-blue-500 text-gray-100 text-s 
            font-extrabold py-3 px-8 rounded-3xl"
            >
            Find out more
            </a>
        </div>
    </div>
    <div class="text-center p-15 bg-gray-500 text-white">
        <h2 class="text-2xl pb-5 text-xs uppercase ">
            Cập nhật những tin tức mới nhất
        </h2>
        <span class="font-extrabold block text-3xl py-1">
            SMARTPHONE
        </span>
        <span class="font-extrabold block text-3xl py-1">
           LAPTOP
        </span>
        <span class="font-extrabold block text-3xl py-1">
            NEWS
        </span>
        <span class="font-extrabold block text-3xl py-1">
            DESIGN
        </span>
    </div>
    
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-200 pt-10"> 
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl py-10 font-bold">
                Thông tin công nghệ về điện thoại di động, máy tính bảng,
                laptop mới nhất được cập nhật hằng giờ. Tin về sản phẩm mới mắt, đánh giá sản phẩm, ...
                </h3>
                <a href=""
                class=" uppercase bg-transparent border-2 
                border-gray-100 text-gray-100 text-xs font-extrabold 
                py-3 px-5 rounded-3xl"
                >
                Find out more
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/04/20/13/36/objects-731426_960_720.jpg" 
            alt="blog" width="700">
        </div>
    </div>

@endsection