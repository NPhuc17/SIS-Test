@extends('layouts.dashboard')

@section('content')
    <div class="flex justify-end my-20">
        <h2 class="text-4xl font-bold gradient text-white py-5 pl-60 rounded-md w-[80%] uppercase">
            Transcript
        </h2>
    </div>
    





    <div class="grid gap-2.5 mx-10">
        <!-- Row 1 -->
        <div class="row1">
            {{-- -


            <!-- Cột Student Info -->
            <div class="student-info">
                <div class="grid grid-cols-2 gap-0">
                    <div>Student ID:</div>
                    <div>24200005</div>
                    <div>Name:</div>
                    <div>Sotun Cham</div>
                    <div>Program:</div>
                    <div>Doctor of Education</div>
                    <div>Total Credits:</div>
                    <div>0</div>
                    <div>Cumulative GPA:</div>
                    <div>0.00</div>
                </div>
            </div>
            --}}


            <!-- Cột Student Info -->
            <div class="student-info">
                <table style="width:100%; border-collapse: collapse;">
                    <tr>
                        <td class="w-[25%]"><strong>Student ID:</strong></td>
                        <td>24200005</td>
                    </tr>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td>Sotun Cham</td>
                    </tr>
                    <tr>
                        <td><strong>Program:</strong></td>
                        <td>Doctor of Education</td>
                    </tr>
                    <tr>
                        <td><strong>Total Credits:</strong></td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td><strong>Cumulative GPA:</strong></td>
                        <td>0.00</td>
                    </tr>
                </table>
            </div>

            <!-- Cột Grading Scale -->
            <div class="grading-scale">
                <table>
                    <thead class="gradient2">
                        <tr>
                            <th>Precemage</th>
                            <th>Grade</th>
                            <th>ECTS</th>
                            <th>Achievement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>70.00-100.00</td>
                            <td>5.50 - 6.00</td>
                            <td>A</td>
                            <td>Distinction</td>
                        </tr>
                        <tr>
                            <td>70.00-100.00</td>
                            <td>5.50 - 6.00</td>
                            <td>B</td>
                            <td>Merit</td>
                        </tr>
                        <tr>
                            <td>70.00-100.00</td>
                            <td>5.50 - 6.00</td>
                            <td>C</td>
                            <td>Satisfactory</td>
                        </tr>
                        <tr>
                            <td>70.00-100.00</td>
                            <td>5.50 - 6.00</td>
                            <td>D</td>
                            <td>Pass</td>
                        </tr>
                        <tr>
                            <td>70.00-100.00</td>
                            <td>5.50 - 6.00</td>
                            <td>F</td>
                            <td>Fail</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row2">
            <h2 class=" text-yellow-400 font-bold">Fall 2025</h2>
            <div class="courses">
                <table>
                    <thead class="gradient2">
                        <tr>
                            <th>Code</th>
                            <th class="text-left">Course</th>
                            <th>ECTS</th>
                            <th>Credit</th>
                            <th>Grade</th>
                            <th>Achievement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A/616/2724</td>
                            <td class="text-left">Strategic Management</td>
                            <td>C</td>
                            <td>20</td>
                            <td>4.00</td>
                            <td>Satisfactory</td>
                        </tr>
                        <tr>
                            <td>A/616/2724</td>
                            <td class="text-left">Strategic Human Resources Management</td>
                            <td>C</td>
                            <td>20</td>
                            <td>4.00</td>
                            <td>Satisfactory</td>
                        </tr>
                        <tr>
                            <td>A/616/2724</td>
                            <td class="text-left">Strategic Management</td>
                            <td>C</td>
                            <td>20</td>
                            <td>4.00</td>
                            <td>Satisfactory</td>
                        </tr>
                        <tr>
                            <td>A/616/2724</td>
                            <td class="text-left">Strategic Management</td>
                            <td>C</td>
                            <td>20</td>
                            <td>4.00</td>
                            <td>Satisfactory</td>
                        </tr>
                        <tr>
                            <td>A/616/2724</td>
                            <td class="text-left">Strategic Management</td>
                            <td>C</td>
                            <td>20</td>
                            <td>4.00</td>
                            <td>Satisfactory</td>
                        </tr>
                        <tr>
                            <td>A/616/2724</td>
                            <td class="text-left">Strategic Management</td>
                            <td>C</td>
                            <td>20</td>
                            <td>4.00</td>
                            <td>Satisfactory</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection