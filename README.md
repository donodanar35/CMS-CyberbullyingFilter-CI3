# Sistem Penyaring Cyberbullying pada Konten Manajemen Sistem
CMS ini dikembangkan untuk mendukung interaksi antara penulis dan pembaca secara sehat dan meminimalisir tindakan cyberbullying dalam interaksi berbagai komentar di dalam suatu konten blog. 
Cyberbullying merupakan bentuk serangan yang bersifat dengki untuk memberikan kepuasaan atau kesenangan pelaku dengan cara menyiksa orang lain. Cyberbullying berdampak secara psikologis, emosional dan trauma sosial. Dampak cyberbullying mempengaruhi kepercayaan diri korban menjadi menurun, munculnya kegelisahan dan depresi pada korban hingga efek terburuk adalah korban yang frustasi bisa melakukan tindakan bunuh diri.  Untuk itu, diperlukan diidentifikasi terhadap komentar-komentar yang diberikan pengguna dalam suatu website guna mengelompokkannya dalam kategori komentar yang bermuatan cyberbullying atau tidak sebagai tindakan antisipasi terhadap bahaya cyberbullying. Untuk itu, dibutuhkan fitur penyaring komentar cyberbullying untuk menyaring berbagai komentar yang berpotensi mengandung cyberbullying dalam suatu website.
 
## Fitur Sistem 
Berikut ini dijelaskan tentang fitur-fitur dari sistem manajemen konten dilengkapi dengan penyaring komentar cyber-bullying. Selengkapnya sebagai berikut :
1.	Manajemen artikel
Manajemen artikel merupakan fitur untuk mengelola artikel. Melalui fitur ini, member bisa membuat artikel, mengedit artikel, menjadwalkan penayangan artikel, dan menonaktifkan artikel dari tampilan front end. 
2.	Manajemen komentar
Manajemen komentar merupakan fitur untuk mengelola komentar dari pengguna. Melalui fitur ini, pembaca bisa memberikan komentar pada artikel yang ditayangkan di website. Selain itu, member bisa menayangkan maupun menonaktifkan komentar dari tampilan front end.
3.	Rating artikel
Rating artikel merupakan fitur untuk memberikan rating terhadap artikel yang dibaca pembaca. Melalui fitur ini, pembaca bisa memberikan rating berdasarkan skala penilaian yang ditentukan terhadap artikel yang mereka baca. 
4.	Registrasi dan login
Registrasi adalah fitur untuk mendaftar pengguna sehingga bisa terdaftar sebagai member web. Melalui fitur ini, pengguna bisa mendaftarkan dirinya ke website sehingga ia bisa mendapatkan hak akses sebagai akun member. Untuk registrasi member dapat dilakukan melalui akun facebook dengan menggunakan facebook API. Untuk registrasi melalui facebook, calon member harus login ke akun facebook melalui portal web yang disediakan. Sistem akan mendeksi akun facebook calon member, lalu sistem akan menyimpan biodata akun facebook calon member ke dalam database. Dengan kata lain, member harus berkenan biodata akun facebooknya disimpan dalam portal web blog. Jika berhasil, calon member bisa memiliki akun pada portal blog untuk selanjutnya digunakan untuk login pada sistem.
Sedangkan login merupakan fitur untuk mengakses akun pengguna dengan memasukkan username dan passwordnya sehingga pengguna bisa mengakses fitur-fitur sistem sebagai admin atau member. 
5.	Notifikasi 
Notifikasi merupakan fitur untuk memberitahukan kepada member bahwa terdapat informasi terbaru terkait artikel yang ditulisnya. Informasi yang didiberitahukan ini berkaitan dengan adanya berita, pesan peringatan, komentar, rating, maupun follower  terbaru.
6.	Following
Following merupakan fitur untuk mengikuti akun member yang terdaftar dalam website, sehingga pengikut bisa mendapatkan kabar terbaru terkait artikel yang dibuat oleh akun yang diikutinya. 
7.	Penyaring komentar cyberbullying 
Penyaring komentar cyberbullying merupakan fitur untuk menyaring berbagai komentar yang berpotensi mengandung cyberbullying pada sejumlah komentar yang diberikan pembaca pada suatu artikel. Melalui fitur ini, member bisa menyaring komentar-komentar pada artikel secara manual maupun otomatis. Jika penyaring komentar cyberbullying diaktifkan secara otomatis, maka berbagai komentar yang berpotensi mengandung cyberbullying akan dinonaktifkan dari tampilan artikel web.
8.	Pelaporan komentar cyberbullying
Pelaporan komentar cyberbullying merupakan fitur untuk melaporkan berbagai komentar yang mengandung muatan cyberbullying secara manual. Melalui fitur ini, member bisa melaporkan komentar cyberbullying yang tidak tersaring oleh sistem, sehingga komentar terkait bisa dinonaktifkan dari tampilan web.
9.	Kategorisasi
Kategorisasi merupakan fitur untuk mengelompokkan artikel yang ke dalam beberapa kategori, seperti sosial-budaya, gaya hidup, dll. Melalui fitur ini, pembaca maupun member bisa mencari dan menampilkan daftar artikel berdasarkan temanya. 
10.	Konfigurasi pengguna
Konfigurasi pengguna merupakan fitur untuk mengatur privasi biodata pengguna. Melalui fitur ini, member bisa mengubah biodatanya sesuai dengan keinginannya seperti password, nama pengguna, gender, alamat, dll.
11.	Share to social media
Share to social media merupakan fitur untuk membagikan artikel pada media sosial. Melalui fitur ini, member bisa membagikan artikel yang dibuatnya secara luas melalui media sosial yakni facebook dan twitter.
12.	Pengaturan layout web 
Pengaturan layout web merupakan fitur untuk menganti template layouting untuk blog oleh member. disediakan 2 macam template layouting yang bisa dipilih oleh member untuk menganti tampilan web.
13.	Laporan statistik artikel
Fitur ini berguna untuk melihat laporan statistik terkait artikel-artikel yang dipublikasikan, seperti jumlah komentar, rata-rata rating, dan jumlah pembaca.

## Spesifikasi Sistem
Berikut ini dijelaskan mengenai spesifikasi sistem manajemen konten yang akan dikembangkan. Selengkapnya sebagai berikut :
1.	Database menggunakan MySQL.
2.	Menggunakan framework CodeIgniter.
3.	Kategori sentimen hanya terdiri atas dua kategori yakni cyberbullying dan bermuatan non-cyberbullying.
4.	Menggunakan jSastrawi sebagai stemmer.
5.	Dataset diambil dari berbagai komentar dari berbagai situs portal berita dan blog meliputi kaskus.co.id, kompas.com, kompasiana.com, detik.com melalui crawling, lalu dilabeli kategorinya secara manual.

## Batasan Sistem
Berikut dijelaskan tentang batasan masalah dalam pembuatan sistem manajemen konten. Selengkapnya sebagai berikut :
1.	Sistem manajemen konten blog menggunakan bahasa Indonesia dan tidak mendukung bahasa lainnya.
2.	Tidak mendukung sistem autentifikasi khusus.
3.	Sistem manajemen konten blog tidak melayani berbagi sumber daya foto maupun video kepada pengguna lainnya.
4.	Sistem manajemen konten blog tidak melayani afiliasi terhadap layanan periklanan tertentu.
5.	Sistem penyaring komentar cyberbullying tidak menangani komentar bermuatan emoticon.
6.	Sistem penyaring komentar cyberbullying hanya bisa menangani komenter berbahasa Indonesia.
