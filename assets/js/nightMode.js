document.getElementById('dark-mode-toggle').addEventListener('click', function() {
    const body = document.body;
    body.classList.toggle('dark-mode'); // Menambahkan atau menghapus kelas "dark-mode" pada elemen <body>
  
    // Simpan preferensi mode malam pengguna
    if (body.classList.contains('dark-mode')) {
      localStorage.setItem('darkMode', 'enabled');
    } else {
      localStorage.setItem('darkMode', 'disabled');
    }
  });
  