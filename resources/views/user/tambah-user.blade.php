@include('template.header')
@include('user.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="m-0">Tambah Data User</h1>
                        </div>
                        <div class="card-body">

							<form action="/user/store" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama" required="required" placeholder="Nama">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" required="required" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" class="form-control" id="password" required="required" placeholder="password">
								</div>
								<input type="submit" class="btn btn-sm btn-success" value="Simpan Data">
							</form>

                        </div>
						<div class="card-footer">
                            <a href="/user" class="btn btn-sm btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@include('template.footer')