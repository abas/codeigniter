# CodeIgniter
### sinau dasar CI

> instalasi ```CodeIgniter```
```
  $ git clone https://github.com/bcit-ci/CodeIgniter.git
```

yang pertama kita lakukan adalah melakukan instalasi code igniter ke server local, dengan melakukan perintah diatas. seletah kita melakukan ```cloning``` kita bisa masuk ke folder dengan menggunakan perintah :

```
  $ cd CodeIgniter
```

> karena nama folder nya ```CodeIgniter``` maka kita melakukan cd ```CodeIgniter```, untuk masuk ke folder tersebut.

> PERLU DICATAT! <br>
untuk instalasi pada windows, folder framework/project bisa diletakan kedalam folder ```htdocs``` dan untuk Linux, project bisa diletakan kedalam folder __root__ /var/www/html agar bisa dijalankan.

### Configure database
> untuk menkonfigurasi database bisa dilihat pada directori :

* codeigniter
  * application
    * config
      * database.php

konfigurasi pada colom berikut :
```
'hostname' => 'localhost',
'username' => 'isi_username',
'password' => 'isi_password',
'database' => 'nama_database',
```

setelah selesai, instalasi codeigniter dengan database telah selesai

> # CI - WorkFlow
```
> **views** -> **controller** -> **routes**
```

### config/routes.php
```
  $route['default_controller'] = 'welcome';
```

'default_controller' berarti jika kita ngeload halaman yang tak terdefinisi maka akan automatis direct ke 'welcome'.

> ```routes.php``` berfungsi untuk pemnggilan controller, yang akan terhubung ke views.

### controller/Welcome.php
!PERLU DICATAT! untuk setiap penamaan controller harus diawali dengan huruf ```capital```. meskipun pada routesnya tidak menggunakan huruf kapital, tapi nanti pada controller akan dibaca huruf yang depannya kapital.
>  controller/Welcome.php

```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
```
terdapat function index(). yang dimana statmen nya memanggil ```view('welcome_message')```, controller disini berfungsi sebagai jembatan antara ```route``` dengan ```views```.
