<?php


session_start();
if (!isset($_SESSION['user_id'])) { 
  header("Location: login.php"); exit(); 
}

// Contoh data produk
$products = [
    ['id' => 1, 'name' => 'Mawar Merah', 'image' => 'images/bunga1.jpg', 'price' => 50000],
    ['id' => 2, 'name' => 'Tulip Kuning', 'image' => 'images/bunga2.jpg', 'price' => 60000],
    ['id' => 3, 'name' => 'Anggrek Putih', 'image' => 'images/bunga3.jpg', 'price' => 70000]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BLOOMRIS</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>produk</title>
  </head>
  <body class="bg-secondary">
   
    <div class="container p-0 mb-4 mt-4 rounded-3 shadow " style='background-color: #210C28'>
        <!--menu-->
        <nav class="d-md-flex p-4">
            
          <div><h1><marquee width="300" scrollamount="10"style="color:white;">Silahkan Order Produk Terbaru Kami</marquee></h1></div>
          
            <div class="ms-auto my-auto">
            <ul class="list-inline m-0">
                <li class="list-inline-item mx-md-3"><a href="index.php" class="text-decoration-none text-dark fw-bold" style="color:white;">HOME</a></li>
                <a href="#" @click.prevent="$store.cart.add(item)"></a>
                <svg width="24" height="24"fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="img/feather-sprite.svg#shopping-cart" />
              </svg> 
              </ul> <br>
            <!-- Search Form start -->
    <!-- <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box"><i data-feather="search"></i></label>
    </div> -->
    <!-- Search Form end -->  
        </div>
        </nav>
        <!--catalog-->
        <h3 class="text-center" id="collections" style="color:white;">PRODUK UNGGULAN KAMI</h3>
        <div class="text-center w-50 mx-auto fw-light" style="color:#B6A4BA;">
          <p>Berikan Dia Cinta, Kirimkan Dia Bunga</p>
            <p>Selamat berbelanja Bunga Cantik❤️</p>
          </div>

        <div class="row row-cols-md-4 row-cols-2 gx-5 p-5">
            <div class="col mb-5">

                <div class="card shadow">
                    <img src="bunga1.jpg" alt='#' class="card-img-top " style='height:50vh; background-position:center' />
                    <div class="card-body">
                      <p class="card-text">Buket pita Satin</p>
                    </div>
                    
                    <div class="card-footer d-md-flex">
                      <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
                      <span class="ms-auto text-danger fw-bold d-block text-center harga ">Rp. 200.000,00</span>
                      </a>
                  </div>
                  </div>
            </div>

            <div class="col mb-5">
              <div class="card shadow">
                  <img src="bunga2.jpg" alt='#' class="card-img-top" style='height:50vh; background-position:center'/>
                  <div class="card-body">
                    <p class="card-text">Buket sedang </p>
                  </div>
                  <div class="d-none deskripsi"><h1>Deskripsi Produk :</h1>
                    <h3>Buket Bunga Artificial murah cocok banget bunga kado wisuda ultah atau anniversary❤️</h3>
                    <p>- Ukuran buket 40X50cm</p><p>-Bunga artificial/plastik ( Tahan lama dan tidak layu)</p>
                    <p>-1 Kg Muat 2 buket</p><p>‼️Free kartu ucapan maksimal 20 kata</p><p>Dikirim Dari Payakumbuh</p>
                  </div>
                  <div class="card-footer d-md-flex">
                      <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
                      <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 60.0000,00</span>
                  </div>
                </div>
          </div>

          <div class="col mb-5">
            <div class="card shadow">
                <img src="bunga3.jpg" alt='#' class="card-img-top" style='height:50vh; background-position:center'/>
                <div class="card-body">
                  <p class="card-text">Baket pita Satin Warna Merah</p>
                </div>
                <div class="d-none deskripsi"><h1>Deskripsi Produk :</h1>
                  <h3>Buket Bunga Artificial murah cocok banget bunga kado wisuda ultah atau anniversary❤️</h3>
                  <p>- Ukuran buket 40X50cm</p><p>-Bunga artificial/plastik ( Tahan lama dan tidak layu)</p>
                  <p>-1 Kg Muat 2 buket</p><p>‼️Free kartu ucapan maksimal 20 kata</p><p>Dikirim Dari Payakumbuh</p>
                </div>
                <div class="card-footer d-md-flex">
                    <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
                    <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 200.0000,00</span>
                </div>
              </div>
        </div>

        <div class="col mb-5">
          <div class="card shadow">
              <img src="bunga4.jpg" alt='#' class="card-img-top"  style='height:50vh; background-position:center'/>
              <div class="card-body">
                <p class="card-text">Buket Boneka</p>
              </div>
              <div class="d-none deskripsi"><h1>Deskripsi Produk :</h1>
                <h3>Buket Bunga Artificial murah cocok banget bunga kado wisuda ultah atau anniversary❤️</h3>
                <p>- Ukuran buket 40X50cm</p><p>-Bunga artificial/plastik ( Tahan lama dan tidak layu)</p>
                <p>-1 Kg Muat 3 buket</p><p>‼️Free kartu ucapan maksimal 20 kata</p><p>Dikirim Dari Payakumbuh</p>
              </div>
              <div class="card-footer d-md-flex">
                  <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
                  <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 50.0000,00</span>
              </div>
            </div>
      </div>

      <div class="col mb-5">
        <div class="card shadow">
            <img src="bunga5.jpg" alt='#' class="card-img-top" style='height:50vh; background-position:center'/>
            <div class="card-body">
              <p class="card-text">Baket Snack</p>
            </div>
            <div class="d-none deskripsi"><h1>Deskripsi Produk :</h1>
              <h3>Buket Bunga Artificial murah cocok banget bunga kado wisuda ultah atau anniversary❤️</h3>
              <p>- Ukuran buket 40X25cm</p><p>-Bunga artificial/plastik ( Tahan lama dan tidak layu)</p>
              <p>-1 Kg Muat 2 buket</p><p>‼️Free kartu ucapan maksimal 20 kata</p><p>Dikirim Dari Payakumbuh</p>
            </div>
            <div class="card-footer d-md-flex">
                <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
                <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 50.0000,00</span>
            </div>
          </div>
    </div>

    <div class="col mb-5">
      <div class="card shadow">
          <img src="bunga6.jpg" alt='#' class="card-img-top" style='height:50vh; background-position:center'/>
          <div class="card-body">
            <p class="card-text">Plakat Nama, Ucapan </p>
          </div>
          <div class="d-none deskripsi"><h1>Deskripsi Produk :</h1>
            <h3>Plakat nama  murah cocok  kado wisuda ultah atau anniversary❤️</h3>
            <p>- Ukuran buket 40X25cm</p><p>_bahannya dari papan MDV dengan printout berkualitas bagus</p>
            <p>-1 Kg Muat 2 buket</p><p>‼️Free kartu ucapan maksimal 20 kata</p><p>Dikirim Dari Payakumbuh</p>
          </div>
          <div class="card-footer d-md-flex">
              <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
              <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 40.0000,00</span>
          </div>
        </div>
  </div>



<div class="col mb-5">
  <div class="card shadow">
      <img src="bunga7.jpg" alt='#' class="card-img-top" style='height:50vh; background-position:center'/>
      <div class="card-body">
        <p class="card-text">Anggrek Latex</p>
      </div>
      <div class="d-none deskripsi"><h1>Deskripsi Produk :</h1>
        <h3>Angrek dengan bahan latex Bunga Artificial murah cocok banget bunga kado wisuda ultah atau anniversary❤️</h3>
        <p>- Ukuran buket 40X25cm</p><p>-Bunga artificial/plastik ( Tahan lama dan tidak layu)</p>
        <p>-1 Kg Muat 2 buket</p><p></p><p>Dikirim Dari Payakumbuh</p>
      </div>
      <div class="card-footer d-md-flex">
          <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
          <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 200.0000,00</span>
      </div>
    </div>
</div>

<div class="col mb-5">
  <div class="card shadow">
      <img src="bunga8.jpg" alt='#' class="card-img-top" style='height:50vh; background-position:center' />
      <div class="card-body">
        <p class="card-text">BUnga Meja</p>
      </div>
      <div class="card-footer d-md-flex">
          <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
          <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 80.0000,00</span>
      </div>
    </div>
</div>

<div class="col mb-5">
  <div class="card shadow">
      <img src="bunga9.jpg" alt='#' class="card-img-top" style='height:50vh; background-position:center'/>
      <div class="card-body">
        <p class="card-text">Kupu-kupu</p>
      </div>
      <div class="d-none deskripsi"><p>Dikirim Dari Payakumbuh</p>
      </div>
      <div class="card-footer d-md-flex">
          <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
          <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 6.0000,00</span>
      </div>
    </div>
</div>

<div class="col mb-5">
  <div class="card shadow">
      <img src="images/11.png" class="card-img-top" />
      <div class="card-body">
        <p class="card-text">Meja Belajar</p>
      </div>
      <div class="d-none deskripsi"><h1>Deskripsi Produk :</h1>
        <h3>Meja Belajar sekaligus rak buku sudah dilengkapi dengan kursi yang cantik❤️</h3>
        <p>- Ukuran panjang 100 x 150 dengan lebar 40 cm</p><p>-bahannya terbuat dari papan yang berkualitas dan triplek import A1 ketebalan 12mm</p>
        <p>-bisa riquesst laci </p><p>antar kealamat di sekitar kota payakumbuh "free ongkir"</p><p>Dikirim Dari Payakumbuh</p>
      </div>
      <div class="card-footer d-md-flex">
          <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
          <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 700.0000,00</span>
      </div>
    </div>
</div>

<div class="col mb-5">
  <div class="card shadow">
      <img src="images/12.png" class="card-img-top" />
      <div class="card-body">
        <p class="card-text">kursi stool 1 paket</p>
      </div>
      <div class="d-none deskripsi"><h1>Deskripsi Produk :</h1>
        <h3>dua buah kursi stool dengan bahan busa tebal dan sangat empuk, warna bisa request❤️</h3>
        <p>- Ukuran meja bulat diameter 55 cm dan tinggi 50 cm, </p><p>-kalau pengen ukurannya beda bisa langsung chat di no whatshapp kami</p>
        <p>-kaki meja dengan kayu pilihan </p><p>bahannya meja terbuat dari triplek 12 mm dengan kualitas import</p><p>Dikirim Dari Payakumbuh</p>
      </div>
      <div class="card-footer d-md-flex">
          <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
          <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 500.0000,00</span>
      </div>
    </div>
</div>

<div class="col mb-5">
  <div class="card shadow">
      <img src="images/13.png" class="card-img-top" />
      <div class="card-body">
        <p class="card-text">Baket per tangkai</p>
      </div>
      <div class="card-footer d-md-flex">
          <a class="btn btn-sm btn-primary d-block btnDetail">BLOOMRIS</a>
          <span class="ms-auto text-denger fw-bold d-block text-center harga">Rp. 8000,00</span>
      </div>
    </div>
</div>
<!--modal-->
<button type="button" class="btn btn-primary d-none btnModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal</button>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 modalTitle" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body row">
            <div class="modalImage col-md-6 col-12"></div>
            <div class="col-md-6 col-12">
                <div class="modalDeskripsi"></div>
                <div class="d-md-flex">
                    <a href="" target="blank" class="btn btn-sm btn-warning d-block btnBeli">Beli Produk Ini</a>
                    <span class="ms-auto text-denger fw-bold d-block text-center modalHarga"></span>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="javascript/main.js"></script>
</body>
</html>

    <footer>
        <p>&copy; 2024 Toko Bunga Online</p>
    </footer>
</body>
</html>
