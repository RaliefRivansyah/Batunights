<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group mb-3">
            <label class="font-weight-bold">Nama Lengkap</label>
              <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" >
                @error('nama_lengkap')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
          </div>
          <div class="form-group mb-3">
            <label class="font-weight-bold">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                @error('email')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
          </div>
          <div class="form-group mb-3">
            <label class="font-weight-bold">nomor Kartu Tanda Penduduk</label>
              <input type="text" class="form-control @error('nomor_ktp') is-invalid @enderror" name="nomor_ktp" value="{{ old('nomor_ktp') }}" >
                @error('nomor_ktp')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
          </div>
          <div class="form-group mb-3">
            <label class="font-weight-bold">Nomor Handphone</label>
              <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" value="{{ old('nomor_hp') }}" >
                @error('nomor_hp')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
          </div>
          <div class="form-group mb-3">
            <label class="font-weight-bold">alamat</label>
              <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan Konten Post">{{ old('alamat') }}</textarea>
                            
                                <!-- error message untuk alamat -->
                @error('alamat')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
                      @enderror
          </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>