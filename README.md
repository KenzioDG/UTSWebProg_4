## UTS Web Programming
Nama : Kenzio Dewapramadhani Ganinda </br>
NIM : 2440022025
 
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
 
## Tentang Project
Pada project ini saya membuat webpage starbucks coffee karena NIM saya ganjil. Web saya terdiri dari tiga page, yaitu welcome, coffee-list, dan transaction. Seluruh page ini memiliki routing antar page ke page lain yang terdapat di headernya. Lalu semua page juga mempunyai footer yang saya gunakan sebagai button yang mereferensi menuju sosial media Starbucks. 

Web ini menggunakan database berisi dua tabel, yaitu users dan transaction. User hasMany transaction. Tabel users terdiri dari id, name, loyalty_level. Tabel transaction terdiri dari id, date, coffee, user_id(foreign key). Data diisi dengan seeder, dan diretrieve dengan controller yang mereturn ke view.

### Home
![image](https://user-images.githubusercontent.com/127408388/236527424-d58ae9ec-ae08-482d-b6f1-9baeb2085b31.png)

- Home dapat menampilkan greeting dengan waktu dan nama user
- Home menampilkan loyalty level user dan mengubah warna header dan footer tergantung loyalty level user
- Ada carousel yang menampilkan promo menarik

### Coffee List
![image](https://user-images.githubusercontent.com/127408388/236466298-05e03c64-e101-454c-bcba-b7c28cb38055.png)

- Coffee list memiliki header dan footer yang sama dengan home.
- Namun tanpa perubahan warna yang tergantung loyalty atas alasan konsistensi estetik
- User dapat membeli coffee disini dan transaksi akan muncul di history dan di insert ke database

### Transaction History
![image](https://user-images.githubusercontent.com/127408388/236464392-8d62e561-1f2c-4b4e-bc8d-e94d44dff485.png)

- Page ini memiliki header dan footer yang sama dengan home dan coffee list
- Pada page ini ditampilkan transaksi yang telah dilakukan oleh user
- Mengambil data dari database table

Tiap page memiliki versi mobile yang berjalan

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
