<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Absensi Apel Online</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Dashboard Absensi Apel</h2>
  <form action="absensi.php" method="POST">
    <input type="hidden" name="user_id" value="1">
    <input type="text" name="lokasi" id="lokasi" readonly placeholder="Menunggu lokasi...">
    <button type="submit">Absensi Sekarang</button>
  </form>

  <script>
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(posisi) {
        document.getElementById('lokasi').value =
          posisi.coords.latitude + ',' + posisi.coords.longitude;
      });
    } else {
      alert('Browser kamu tidak mendukung GPS.');
    }
  </script>
</body>
</html>
