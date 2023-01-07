# Sistem Penyaring Komentar Cyberbullying Pada Konten Blog
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Arsitektur%20Sistem.jpg)
**Cyberbullying** merupakan bentuk serangan yang bersifat dengki untuk memberikan kepuasaan atau kesenangan pelaku dengan cara menyiksa orang lain. Cyberbullying berdampak secara psikologis, emosional dan trauma sosial. Dampak cyberbullying mempengaruhi kepercayaan diri korban menjadi menurun, munculnya kegelisahan dan depresi pada korban hingga efek terburuk adalah korban yang frustasi bisa melakukan tindakan bunuh diri.  
Untuk itu, diperlukan diidentifikasi terhadap komentar-komentar yang diberikan pengguna dalam suatu website guna mengelompokkannya dalam kategori komentar yang bermuatan cyberbullying atau tidak sebagai tindakan antisipasi terhadap bahaya cyberbullying. CMS ini dikembangkan untuk mendukung interaksi antara penulis dan pembaca secara sehat dan meminimalisir tindakan cyberbullying dalam interaksi berbagi komentar di dalam suatu konten blog. 
## Fitur Sistem 
Berikut ini dijelaskan tentang fitur-fitur dari sistem manajemen konten dilengkapi dengan penyaring komentar cyber-bullying. Selengkapnya sebagai berikut :
1.  **Dashboard** menampilkan statistik pengguna seperti total artikel, total tayangan, total komentar, total notifikasi belum terbaca, rata-rata rating, total pengikut dan mengikuti serta berbagai laporan perkembangan artikel.
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot_dashboard.PNG)
2.	**Manajemen artikel** merupakan fitur untuk mengelola artikel. Melalui fitur ini, member bisa membuat artikel, mengedit artikel, menjadwalkan penayangan artikel, dan menonaktifkan artikel dari tampilan front end. 
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot/backend/manajemen%20artikel.png)
3.	**Manajemen komentar** merupakan fitur untuk mengelola komentar dari pengguna. Melalui fitur ini, pembaca bisa memberikan komentar pada artikel yang ditayangkan di website. Selain itu, member bisa menayangkan maupun menonaktifkan komentar dari tampilan front end.
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot/backend/cyberbullying_balasan.PNG)
4.	**Rating artikel** merupakan fitur untuk memberikan rating terhadap artikel yang dibaca pembaca. Melalui fitur ini, pembaca bisa memberikan rating berdasarkan skala penilaian yang ditentukan terhadap artikel yang mereka baca. 
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot/frontend/komentar.PNG)
5.	**Registrasi** adalah fitur untuk mendaftar pengguna sehingga bisa terdaftar sebagai member web. Melalui fitur ini, pengguna bisa mendaftarkan dirinya ke website sehingga ia bisa mendapatkan hak akses sebagai akun member. Untuk registrasi member dapat dilakukan melalui akun facebook dengan menggunakan facebook API. Untuk registrasi melalui facebook, calon member harus login ke akun facebook melalui portal web yang disediakan. Sistem akan mendeksi akun facebook calon member, lalu sistem akan menyimpan biodata akun facebook calon member ke dalam database. Dengan kata lain, member harus berkenan biodata akun facebooknya disimpan dalam portal web blog. Jika berhasil, calon member bisa memiliki akun pada portal blog untuk selanjutnya digunakan untuk login pada sistem.
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot/frontend/registrasi.png)
Sedangkan **login** merupakan fitur untuk mengakses akun pengguna dengan memasukkan username dan passwordnya sehingga pengguna bisa mengakses fitur-fitur sistem sebagai admin atau member. 
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot/frontend/login.png)
6.	**Notifikasi** merupakan fitur untuk memberitahukan kepada member bahwa terdapat informasi terbaru terkait artikel yang ditulisnya. Informasi yang didiberitahukan ini berkaitan dengan adanya berita, pesan peringatan, komentar, rating, maupun follower  terbaru.
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot/backend/notifikasi.png)
7.	**Following** merupakan fitur untuk mengikuti akun member yang terdaftar dalam website, sehingga pengikut bisa mendapatkan kabar terbaru terkait artikel yang dibuat oleh akun yang diikutinya. 
8.	**Penyaring komentar cyberbullying** merupakan fitur untuk menyaring berbagai komentar yang berpotensi mengandung cyberbullying pada sejumlah komentar yang diberikan pembaca pada suatu artikel. Melalui fitur ini, member bisa menyaring komentar-komentar pada artikel secara manual maupun otomatis. Jika penyaring komentar cyberbullying diaktifkan secara otomatis, maka berbagai komentar yang berpotensi mengandung cyberbullying akan dinonaktifkan dari tampilan artikel web.
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot_peringatanCyberbully.PNG)
9.	**Pelaporan komentar cyberbullying** merupakan fitur untuk melaporkan berbagai komentar yang mengandung muatan cyberbullying secara manual. Melalui fitur ini, member bisa melaporkan komentar cyberbullying yang tidak tersaring oleh sistem, sehingga komentar terkait bisa dinonaktifkan dari tampilan web.
10.	**Kategorisasi** merupakan fitur untuk mengelompokkan artikel yang ke dalam beberapa kategori, seperti sosial-budaya, gaya hidup, dll. Melalui fitur ini, pembaca maupun member bisa mencari dan menampilkan daftar artikel berdasarkan temanya. 
11.	**Konfigurasi pengguna** merupakan fitur untuk mengatur privasi biodata pengguna. Melalui fitur ini, member bisa mengubah biodatanya sesuai dengan keinginannya seperti password, nama pengguna, gender, alamat, dll.
![This is an image](https://github.com/donodanar35/CMS-CyberbullyingFilter-CI3/blob/main/Screenshot/backend/profil.png)
12.	**Berbagi ke media sosial** merupakan fitur untuk membagikan artikel pada media sosial. Melalui fitur ini, member bisa membagikan artikel yang dibuatnya secara luas melalui media sosial yakni facebook dan twitter.
13.	**Setting template web** merupakan fitur untuk menganti template layouting untuk blog oleh member disediakan 2 macam template layouting yang bisa dipilih oleh member untuk menganti tampilan web.
14. **Manajemen user** merupakan fitur admin yang berguna untuk mengelola user yang terdaftar di website dimana terdapat 2 macam user yakni admin dan member.

## Spesifikasi Sistem
Berikut ini dijelaskan mengenai spesifikasi sistem manajemen konten yang akan dikembangkan. Selengkapnya sebagai berikut :
1.	Database menggunakan **MySQL**.
2.	Menggunakan framework **CodeIgniter 3**.
3.  Menggunakan **jQuery**, **Bootstrap**, **Tiny MCE**, **Chartjs**, dan **DataTables**.
3.	Kategori sentimen hanya terdiri atas dua kategori yakni cyberbullying dan bermuatan non-cyberbullying.
4.	Menggunakan **jSastrawi** sebagai stemmer.
5.	Dataset diambil dari berbagai komentar dari berbagai situs portal berita dan blog meliputi kaskus.co.id, kompas.com, kompasiana.com, detik.com melalui crawling, lalu dilabeli kategorinya secara manual.

## Batasan Sistem
Berikut dijelaskan tentang batasan masalah dalam pembuatan sistem manajemen konten. Selengkapnya sebagai berikut :
1.	Sistem manajemen konten blog menggunakan bahasa Indonesia dan tidak mendukung bahasa lainnya.
2.	Tidak mendukung sistem autentifikasi khusus.
3.	Sistem manajemen konten blog tidak melayani berbagi sumber daya foto maupun video kepada pengguna lainnya.
4.	Sistem manajemen konten blog tidak melayani afiliasi terhadap layanan periklanan tertentu.
5.	Sistem penyaring komentar cyberbullying tidak menangani komentar bermuatan emoticon.
6.	Sistem penyaring komentar cyberbullying hanya bisa menangani komenter berbahasa Indonesia.
