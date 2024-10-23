<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Booking</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <h1>Form Booking Nail Art</h1>
    </header>
    
    <div class="container">
    <form id="myForm" method="post" action="proses_form.php">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name">
        <span id="name-error" style="color: red;"></span><br>

        <label for="phone">Phone Number : </label>
        <input type="text" id="phone" name="phone">
        <span id="phone-error" style="color: red;"></span><br>

        <label for="person">Person : </label>
        <input type="number" id="person" name="person">
        <span id="person-error" style="color: red;"></span><br>

        <label for="type">Type : </label>
        <select name="type" id="type">
            <option value="gel">Gel Polish</option>
            <option value="extension">Extension</option>
            <option value="pedicure">Pedicure</option>
            <span id="type-error" style="color: red;"></span><br>
        </select>


        <label for="remove">Is that any remove? : </label>
        <select name="type" id="type">
            <option value="yes">yes</option>
            <option value="no">no</option>
            <span id="type-error" style="color: red;"></span><br>
        </select>
        <br>

        <label for="date">Choose Date:</label>
        <input type="date" id="date" name="date"><br><br>

        <label for="time">Choose Time : </label>
        <select name="time" id="time">
            <option value="10:00">10:00</option>
            <option value="12:00">12:00</option>
            <option value="14:00">14:00</option>
            <option value="16:00">16:00</option>
            <span id="type-error" style="color: red;"></span><br>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
<script>
    $(document).ready(function(){
        $("#myForm").submit(function(event){
            // Inisialisasi variabel valid untuk pengecekan validasi
            var valid = true; 
            var name = $("#name").val();
            var phone = $("#phone").val();
            var person = $("#person").val();
            var type = $("#type").val();
            var remove = $("#remove").val();
            var date = $("#date").val();

            // Validasi input nama
            if (name === "") {
                $("#name-error").text("Please enter your name!");
                valid = false;
            } else {
                $("#name-error").text("");
            }

            // Validasi input nomor telepon
            var phonePattern = /^[0-9]{10,12}$/; // Pola sederhana untuk memeriksa nomor telepon (10-12 digit)
            if (!phonePattern.test(phone)) {
                $("#phone-error").text("Please enter a valid phone number (10-12 digits)!");
                valid = false;
            } else {
                $("#phone-error").text("");
            }

            // Validasi jumlah orang
            if (person === "" || person <= 0) {
                $("#person-error").text("Please enter a valid number of persons!");
                valid = false;
            } else {
                $("#person-error").text("");
            }

            // Validasi jenis layanan (type)
            if (type === null || type === "") {
                $("#type-error").text("Please select an eyelash type!");
                valid = false;
            } else {
                $("#type-error").text("");
            }

            // Validasi opsi remove
            if (remove === null || remove === "") {
                $("#remove-error").text("Please select an option for removal!");
                valid = false;
            } else {
                $("#remove-error").text("");
            }

            // Validasi jadwal
            if (date === null || date === "") {
                $("#date-error").text("Please select a schedule!");
                valid = false;
            } else {
                $("#date-error").text("");
            }

            // Jika ada validasi yang gagal, cegah form dari submit
            if (!valid) {
                event.preventDefault(); // Menghentikan pengiriman form jika validasi gagal
            } else {
                    $.ajax({
                        url: 'proses_form.php',
                        type: 'POST',
                        data: $("#myForm").serialize(),
                        success: function (hasil) {
                            $("#myForm")[0].reset();
                            alert(hasil);
                    }
                });
            }
        })
    });
</script>
</body>
</html>