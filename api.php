<!DOCTYPE html>
<html>
<head>
    <title>Halaman Hasil</title>
</head>
<body>
    <div id="result"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: '/hasil', // Ganti dengan URL Anda
                method: 'GET',
                success: function (data) {
                    // Manipulasi data yang diterima dari server
                    var resultHtml = '<h1>Data yang Diterima:</h1>';
                    resultHtml += '<pre>' + JSON.stringify(data, null, 2) + '</pre>';
                    $('#result').html(resultHtml);
                },
                error: function (error) {
                    // Handle kesalahan jika ada
                    $('#result').html('Terjadi kesalahan saat mengambil data.');
                }
            });
        });
    </script>
</body>
</html>
