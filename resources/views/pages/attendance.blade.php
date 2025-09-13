@extends('layouts.dashboard')

@section('content')
    <div class="flex justify-end my-20">
        <h2 class="text-4xl font-bold gradient text-white py-5 pl-60 rounded-md w-[80%] uppercase">
            Attendance
        </h2>
    </div>

    <div class="mx-1">


        <div id="search-bar">
            <form class="flex gap-4 items-end">
                <div class="month flex flex-col">
                    <label for="month">Month <span class="text-red-500">*</span></label>
                    <input type="text" id="month" name="month" class="border px-2 py-1 bg-green-200">
                </div>

                <div class="year flex flex-col">
                    <label for="year">Year <span class="text-red-500">*</span></label>
                    <input type="text" id="year" name="year" class="border px-2 py-1 bg-green-200">
                </div>

                <div class="search flex items-end">

                    <button type="submit" class="search_button">

                        <svg fill="#000000" viewBox="0 0 24 24" id="search" data-name="Line Color"
                            xmlns="http://www.w3.org/2000/svg" class="icon line-color w-6 h-6 mr-2">
                            <line id="secondary" x1="21" y1="21" x2="15" y2="15"
                                style="fill: none; stroke: rgb(44, 169, 188); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                            </line>
                            <circle id="primary" cx="10" cy="10" r="7"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                            </circle>
                        </svg>
                        Search
                    </button>
                </div>
            </form>
        </div>

        <div class="manual my-5 ml-5">
            <p>Present P | Absent A | Late L | Holiday H</p>
        </div>

        <div id="calendar">
            <table class="table-auto border-collapse border border-gray-400 text-sm">

                <tbody>
                    <thead>
                        <tr class="gradient2 text-white">
                            <th class="border border-gray-400 px-2 py-1">Course</th>
                            {{-- Tạo 01 31 --}}
                            @for ($i = 1; $i <= 31; $i++)
                                <th class="border border-gray-400 px-2 py-1">
                                    {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                </th>
                            @endfor
                            <th class="border border-gray-400 px-2 py-1">P</th>
                            <th class="border border-gray-400 px-2 py-1">A</th>
                            <th class="border border-gray-400 px-2 py-1">L</th>
                            <th class="border border-gray-400 px-2 py-1">H</th>
                            <th class="border border-gray-400 px-2 py-1">%</th>
                        </tr>
                    </thead>

                    <tr>
                        <td class="border border-gray-400 px-2 py-1">EN106</td>
                        @for ($day = 1; $day <= 31; $day++)
                            <td class="border border-gray-400 px-2 py-1"></td>
                        @endfor
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0%</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-400 px-2 py-1">MAT211</td>
                        @for ($day = 1; $day <= 31; $day++)
                            <td class="border border-gray-400 px-2 py-1"></td>
                        @endfor
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0%</td>
                    </tr>

                    <tr>
                        <td class="border border-gray-400 px-2 py-1">PH308</td>
                        @for ($day = 1; $day <= 31; $day++)
                            <td class="border border-gray-400 px-2 py-1"></td>
                        @endfor
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0%</td>
                    </tr>


                    <tr>
                        <td class="border border-gray-400 px-2 py-1">CSE607</td>
                        @for ($day = 1; $day <= 31; $day++)
                            <td class="border border-gray-400 px-2 py-1"></td>
                        @endfor
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0</td>
                        <td class="border border-gray-400 px-2 py-1">0%</td>
                    </tr>
                </tbody>
            </table>



        </div>
    </div>
@endsection