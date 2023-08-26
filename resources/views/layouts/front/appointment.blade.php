<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.front.admin.head')

</head>

<body>
    @include('layouts.front.admin.header')

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 he">
            <div class="about_right overlay">

                <div class="about_inner" style="font-family: 'Poppins', sans-serif;">
                    <!-- Section Title -->
                    <div style="font-size:40px;">Appointment
                        <hr>
                    </div>
                    <div>
                        <label for="name" class="lnr-phone-handset">Name:</label>
                    </div>
                    <div>

                        <input type="text" id="name" name="name" required>
                    </div>


                    <div>
                        <label for="email">Email:</label>
                    </div>
                    <div>

                        <input type="email" id="email" name="email" required>
                    </div>

                    <div>
                        <label for="phone">Phone Number:</label>
                    </div>
                    <div>

                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div>
                        <label for="doctor_type">Doctor Type:</label>
                    </div>
                    <div>

                        <select id="doctor_type" name="doctor_type" required>
                            <option value="1">Type 1</option>
                            <option value="2">Type 2</option>
                            <option value="3">Type 3</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="time">Time:</label>
                        <input type="time" id="time" name="time" required>
                    </div>
                    <div>
                        <input type="date" id="time" name="time" required>


                    </div>


                    <div>
                        <label for="D">Desicraption:</label>
                    </div>
                    <div>

                        <input type="text" id="D" name="D" required>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        </div>
        </div>
    </form>


    @include('layouts.front.admin.footer')
</body>

</html>
