<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Training Laravel</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ asset('asset/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" rel="stylesheet">


</head>
<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Training Laravel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ action("RegisterController@daftar") }}">Daftar</a>
          </li>
          <li>
           <a href="{{ action("LoginController@index") }}" class="nav-link">Login</a>
         </li>

       </ul>
     </div>
   </div>
 </nav>



 <!-- Page Content -->
 <div class="container">


  <div class="row">
  </br>
</div>
<!-- /.row -->

<!-- Features Section -->
<div class="row">
  <div class="col-lg-6">
    <h2>Job App</h2>
    <p><strong>Buat Profile Anda dan Raih Kesempatan Untuk Berkarir di Perusahaan IT Terbaik di Indonesia. </strong></p>
    <img src="{{ asset ('/img/job.jpg')}}" style="width: 550px; height: 350px;">


  </div>
  <div class="col-lg-6">
    <h2>Mendaftar</h2>
    <div class="panel-body">
      <form role="form" action="/sdaftar" method="post">
        {{csrf_field()}}
        
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input class="form-control" placeholder="Nama Depan" name="first_name" type="text" autofocus>
            </div>
          </div>
          
         
         
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input class="form-control" placeholder="Nama belakang atau nama panjang anda" name="last_name" type="text" autofocus>
            </div>
          </div>
        </div>
        
      

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-phone"></i></span>
              <input class="form-control" placeholder="Nomor Hp atau Telp Rumah" name="no_hp" type="text" autofocus maxlength="12">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-road"></i></span>
              <input class="form-control" placeholder="Alamat tempat tinggal" name="alamat" type="text" autofocus>
            </div>
          </div>


          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
              <select class="form-control" placeholder="Alamat tempat tinggal" name="j_kelamin" autofocus>
                <option value="null">--Pilih Jenis Kelamin--</option>
                <option value="L">Pria</option>
                <option value="P">Wanita</option>

              </select>  
            </div>
          </div>

           <div class="form-group col-xs-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-road"></i></span>
              <input class="form-control" placeholder="Kota Kelahiran" name="kota_kelahiran" type="text" autofocus>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-road"></i></span>
              <input class="form-control tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" type="text" autofocus>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
              <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
            </div>
          </div>


          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input class="form-control" placeholder="Password" name="password" type="password">
            </div>
          </div>
          <!-- Change this to a button or input when using this as a form -->
          <button type="submit" name="dftr" class="btn btn-success">Buat Keanggotaan </button> 
       
      </form>
    </div> 
  </div>
</div>
<!-- /.row -->
<hr>

<!-- Call to Action Section -->
<div class="row mb-4">
  <div class="col-md-8">
    <p>Di Job App, kami menjamin identitas anda sebagai anonim dan berjanji untuk tidak mengungkap informasi pribadi anda kepada pihak manapun.</p>
  </div>
  <div class="col-md-4">
    <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
  </div>
</div>
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset ('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset ('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset ('/asset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript">
            $(document).ready(function () {
                $('.tgl_lahir').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
</body>

</html>
