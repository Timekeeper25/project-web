<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>TeaShoes</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
         .wrapper {
         display: flex;
         align-items: center;
         justify-content: center;
         }
      </style>
   </head>
   <body>
      <header class="header_section mb-5">
         <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                     </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="about.html">About</a></li>
                           <li><a href="testimonial.html">Testimonial</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="product.html">Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog_list.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                           </svg>
                        </a>
                     </li>
                     <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                     </form>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <!-- end header section -->

      
      <div class="container-fluid mb-5">
         <div class="text-center mb-5"><h1>Keranjang Kamu</h1></div>
         <div class=" wrapper row justify-content-center align-items-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-body">
                        <table class="table table-bordered table-hover table-striped col md-8">
                           <thead>
                               <tr class="text-center">
                                  <td>Gambar</td>
                                  <td>Nama Barang</td>
                                  <td>Jumlah</td>
                                  <td>Harga</td>
                                  <td>Aksi</td>
                               </tr>
                           </thead>
                           <tbody>
                              <?php $totalHarga=0; ?>
                               @foreach ($cart as $item)
                                   <tr class="text-center">
                                       <td class="align-middle"><img src="/images/{{$item->gambar}}" alt="" style="width: 100px"></td>
                                       <td class="align-middle">{{ $item->nama_barang }}</td>
                                       <td class="align-middle">{{ $item->jumlah }} Unit</td>
                                       <td class="align-middle">Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                                       <td class="align-middle"><a class="btn btn-danger" href="{{ url('/remove_cart', $item->id) }}" onclick="return confirm('Apakah kamu ingin menghapus barang ini?')">Hapus Barang</a></td>
                                       
                                       <?php $totalHarga = $totalHarga + $item->harga ?>
                                   </tr>
                               @endforeach
                           </tbody>
                       </table>
                       <div>
                           <h2 class="font-weight-bold">Total Harga : Rp. {{ number_format($totalHarga, 0, ',', '.') }}</h2>
                       </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="text-center mt-5">
            <h1 class="font-weight-bold mb-3">Lanjut Ke Pembayaran</h1>
            <a href="" class="btn btn-danger"> Cash On Delivery </a>
         </div>
     </div>
      

      <!-- footer section-->
    <footer>
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                  <div class="full">
                     <div class="logo_footer">
                       <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                     </div>
                     <div class="information_f">
                       <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                       <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                       <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                     </div>
                  </div>
              </div>
              <div class="col-md-8">
                 <div class="row">
                 <div class="col-md-7">
                    <div class="row">
                       <div class="col-md-6">
                    <div class="widget_menu">
                       <h3>Menu</h3>
                       <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">About</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">Testimonial</a></li>
                          <li><a href="#">Blog</a></li>
                          <li><a href="#">Contact</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="widget_menu">
                       <h3>Account</h3>
                       <ul>
                          <li><a href="#">Account</a></li>
                          <li><a href="#">Checkout</a></li>
                          <li><a href="#">Login</a></li>
                          <li><a href="#">Register</a></li>
                          <li><a href="#">Shopping</a></li>
                          <li><a href="#">Widget</a></li>
                       </ul>
                    </div>
                 </div>
                    </div>
                 </div>     
                 <div class="col-md-5">
                    <div class="widget_menu">
                       <h3>Newsletter</h3>
                       <div class="information_f">
                         <p>Subscribe by our newsletter and get update protidin.</p>
                       </div>
                       <div class="form_sub">
                          <form>
                             <fieldset>
                                <div class="field">
                                   <input type="email" placeholder="Enter Your Mail" name="email" />
                                   <input type="submit" value="Subscribe" />
                                </div>
                             </fieldset>
                          </form>
                       </div>
                    </div>
                 </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>

        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
   </body>
</html>