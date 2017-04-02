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
> views -> controller -> routes
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

> ### Sekarang kita coba membuat halaman baru yaitu halaman ```test``` pada folder ```pages```
> @controller/Welcome.php

```
  ...
  public function view()
  {
    $this->load->view('pages/test');
  }
```

kemudian, buat folder baru @views dengan nama ```pages``` kemudian didalamnya buat file dengan nama ```test.php``` jika sudah, langkah selanjutnya yaitu mengatur ```routes.php```

> @config/routes.php
```
$route['default_controller'] = 'welcome/view';
```
dari source code diatas, kita sudah tau bahwa kita mengload class ```(welcome)``` dengan function ```view()```

### membuat halaman header(css) footer(js)
>strukture file @views

```
* views
  * ....
  * templates <- new folder
    * header.php <- new file
    * footer.php <- new file
```

> source-code @config/controller/Welcome.php

```
  public function view()
  {
    $this->load->view('templates/header');
    $this->load->view('pages/test');
    $this->load->view('templates/footer');
  }
```

dari source-code diatas kita memiliki load->view baru yaitu:
* templates/header
* ....
* templates/footer

ketika kita memanggil function view() maka secara berurutan akan memanggil views seperti pada struktur diatas, yaitu:
```
1. load header (css/other)
2. load test (body)
3. load footer (js/other)
```

### Sekarang kita coba buat url yang flexible
> source-code @config/controller/Welcome.php
```
  public function view($default_value = 'test')
  {
    $this->load->view('templates/header');
    $this->load->view('pages/'.$default_value);
    $this->load->view('templates/footer');
  }
```

disini kita melihat perbedaan para function view() yaitu ketambahan parameter ```default_value``` dengan isi ```test```, lalu apa funsinya? __fungsinya__ yaitu ketika kita melakukan pamanggilan url yang tidak mempunyai embel-embel seperti contoh ```localhost/codeigniter/``` maka secara automatis dia akan terisi dengan ```default_value```.

#### lalu bagaimana dengan routes-nya?
> @config/routes.php

```
   $route['default_controller'] = 'welcome/view';
*  $route['(:any)'] = 'welcome/view/$1';
   $route['404_override'] = '';
   $route['translate_uri_dashes'] = FALSE;
```

kita lihat pada line yang ada pointernya, merupakan routes baru dengan tipe baru yaitu ```$route['(:any)'] = 'welcome/view/$1'``` yang artinya memanggil url apapun yang mengarah ke class ```welcome``` function ```view``` dengan parameter ```$1```, maka jika kita memasukkan url misal :
```
 localhost/codeigniter/index.php/kontak <- kontak
```

maka route akan mengatur parameter = kontak dan pada controller membuat direct ki views yang bernama kontak.php

#### pengecekan parameter yang tidak ada
> @config/controller/Welcome.php

```
public function view($default_value = 'test')
  {
    if(!file_exists(APPPATH."views/pages/".$default_value.".php")){
*      show_404();
    }
    $this->load->view('templates/header');
    $this->load->view('pages/'.$default_value);
    $this->load->view('templates/footer');
  }
```
**file_exists** berfungsi untuk mengecek apakah file yang kita cari ada? kemudian terdapat tanda seru (!) yaitu menandakan makna **tidak**, brarti pengecekan disini adalah
```
  jika (file_tidak_ada)maka
    tampilkan fungsi 404;
```
> yang berarti **404** adalah default halaman error

#### menampilkan data url ke sebuah halaman
> @config/controller/Welcome.php
```
public function view($default_value = 'test')
  {
    if(!file_exists(APPPATH."views/pages/".$defau...
*   $data['item'] = $default_value;

*   $this->load->view('templates/header',$data);
    $this->load->view('pages/'.$default_value);
    $this->load->view('templates/footer');
  }
```

lihat pada pointer, dimana perubahan itu terjadi. kita membuat sebuah code baru ```$data['item'] = $default_value;``` artinya kita mendeklarasikan variable array[item] = $default_value, dimana ```default_value``` ini adalah url yang kita ketikan nanti. pada code selanjutnya yaitu menambahkan variable ```$data``` ke header, untuk ditampilkan di header.
