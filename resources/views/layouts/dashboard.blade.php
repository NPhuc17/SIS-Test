<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class=" bg-green-700 flex h-[15vh] items-center pt-5">
        <div id="logo" class=" ml-5">
            <img src="{{ asset('images\logo.png') }}" alt="Logo" class="w-15 h-15">

        </div>
        <div id="name" class=" ml-10  flex-1 flex-col">
            <h1 class=" font-bold text-white text-2xl">SIMS CLOUND - Student Information System</h1>
            <h4 class=" text-white py-.5">Department of Accademic</h4>
        </div>
        <div class="icon flex items-center">
            <div class="bell flex items-center mx-5">

                <svg viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"
                    class="w-3 h-3">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M9.00195 17H5.60636C4.34793 17 3.71872 17 3.58633 16.9023C3.4376 16.7925 3.40126 16.7277 3.38515 16.5436C3.37082 16.3797 3.75646 15.7486 4.52776 14.4866C5.32411 13.1835 6.00031 11.2862 6.00031 8.6C6.00031 7.11479 6.63245 5.69041 7.75766 4.6402C8.88288 3.59 10.409 3 12.0003 3C13.5916 3 15.1177 3.59 16.2429 4.6402C17.3682 5.69041 18.0003 7.11479 18.0003 8.6C18.0003 11.2862 18.6765 13.1835 19.4729 14.4866C20.2441 15.7486 20.6298 16.3797 20.6155 16.5436C20.5994 16.7277 20.563 16.7925 20.4143 16.9023C20.2819 17 19.6527 17 18.3943 17H15.0003M9.00195 17L9.00031 18C9.00031 19.6569 10.3435 21 12.0003 21C13.6572 21 15.0003 19.6569 15.0003 18V17M9.00195 17H15.0003"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" class="w-3 h-3">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>drop-down</title>
                        <desc>Created with sketchtool.</desc>
                        <g id="directional" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="drop-down" fill="#ffffff">
                                <polygon id="Shape" points="5 8 12 16 19 8"> </polygon>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>



            <div class="man flex items-center mx-5">

                <svg height="200px" width="200px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff"
                    class="w-3 h-3">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <style type="text/css">
                            .st0 {
                                fill: #ffffff;
                            }
                        </style>
                        <g>
                            <path class="st0"
                                d="M458.159,404.216c-18.93-33.65-49.934-71.764-100.409-93.431c-28.868,20.196-63.938,32.087-101.745,32.087 c-37.828,0-72.898-11.89-101.767-32.087c-50.474,21.667-81.479,59.782-100.398,93.431C28.731,448.848,48.417,512,91.842,512 c43.426,0,164.164,0,164.164,0s120.726,0,164.153,0C463.583,512,483.269,448.848,458.159,404.216z">
                            </path>
                            <path class="st0"
                                d="M256.005,300.641c74.144,0,134.231-60.108,134.231-134.242v-32.158C390.236,60.108,330.149,0,256.005,0 c-74.155,0-134.252,60.108-134.252,134.242V166.4C121.753,240.533,181.851,300.641,256.005,300.641z">
                            </path>
                        </g>
                    </g>
                </svg>
                <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" class="w-3 h-3">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>drop-down</title>
                        <desc>Created with sketchtool.</desc>
                        <g id="directional" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="drop-down" fill="#ffffff">
                                <polygon id="Shape" points="5 8 12 16 19 8"> </polygon>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>

    </header>



    <div class=" flex">
        <!-- Sidebar -->
        <div id="left" class="bg-green-700 px-7 text-white w-64 h-[85vh]">
            <nav id="main_nav">
                <ul class="">
                    <li>
                        <a href="{{ route('dashboard') }}" class="block  rounded 
                           {{ Route::is('dashboard') ? 'bg-orange-400' : 'hover:bg-green-600' }}">
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('academic') }}" class="block  rounded 
                           {{ Route::is('academic') ? 'bg-orange-400' : 'hover:bg-green-600' }}">
                            Academic
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('course.schedule') }}" class="block  rounded 
                           {{ Route::is('course.schedule') ? 'bg-orange-400' : 'hover:bg-green-600' }}">
                            Course Schedule
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('exam.schedule') }}" class="block  rounded 
                           {{ Route::is('exam.schedule') ? 'bg-orange-400' : 'hover:bg-green-600' }}">
                            Exam Schedule
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('grade.transcript') }}" class="block  rounded 
                           {{ Route::is('grade.transcript') ? 'bg-orange-400' : 'hover:bg-green-600' }}">
                            Grade & Transcript
                        </a>
                    </li>
<!-- Đổi sang grade cho docotor. Nhớ comment cái trên, đổi route -->
    {{-- 
                     <li>
                        <a href="{{ route('grade.transcript-doctor') }}" class="block  rounded 
                           {{ Route::is('grade.transcript-doctor') ? 'bg-orange-400' : 'hover:bg-green-600' }}">
                            Grade & Transcript
                        </a>
                    </li>
                    --}}
                    

                    <li>
                        <a href="{{ route('attendance') }}" class="block  rounded 
                           {{ Route::is('attendance') ? 'bg-orange-400' : 'hover:bg-green-600' }}">
                            Attendance Tracker
                        </a>
                    </li>
                </ul>
            </nav>




            <div class="line">
                <div class="w-[110%] h-1 bg-orange-300 -mx-4"></div>
            </div>
            <nav id="second_nav">
                <ul>
                    <li> <a href="#"> E-Library </a> </li>
                    <li> <a href="#"> Financial </a> </li>
                    <li> <a href="#"> Forum & Requests </a> </li>
                    <li> <a href="#"> Profile & Records </a> </li>
                </ul>
            </nav>
        </div>


        <!-- Nội dung động -->
        <div id="right" class="flex-1">
            @yield('content')
        </div>
    </div>
</body>

</html>