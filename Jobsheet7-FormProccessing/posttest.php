<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Test 2</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Data Mahasiswa </h1>
    
    <label for="jumlah">Jumlah Mahasiswa : </label>
    <input type="number" id="jumlah" min="1" />
    <button id="generate_form">Input</button>
    
    <form action="post_test.php" method="POST">
        <div id="dynamic_form"></div><br>
        <button type="submit">Submit</button>
    </form>
    
    <script>
        $(document).ready(function() {
            $('#generate_form').click(function() {
                var numData = $('#jumlah').val();  
                var formHtml = '';

                for (var i = 1; i <= numData; i++) {
                    formHtml += '<label for="data_' + i + '">Nama Mahasiswa ' + i + ' : </label> <br>';
                    
                    formHtml += '<input type="text" name="data[]" id="data_' + i + '" required><br>';
                }

                $('#dynamic_form').html(formHtml); 
            });
        });
    </script>
</body>
</html>