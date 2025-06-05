<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $data['title']; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container text-center mb-5">
            <!-- Gambar besar buku -->
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794"
                alt="Gambar Buku Besar"
                class="img-fluid rounded shadow-lg"
                style="max-width: 100%; height: auto;">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <!-- Variasi gambar buku, dibuat ukuran dan style sama -->
                <div class="col-6 col-md-3 mb-4">
                    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f"
                        alt="Buku 1"
                        class="img-fluid rounded shadow-lg"
                        style="height: 250px; object-fit: cover; width: 100%;">
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4"
                        alt="Buku 2"
                        class="img-fluid rounded shadow-lg"
                        style="height: 250px; object-fit: cover; width: 100%;">
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="https://images.unsplash.com/photo-1523475472560-d2df97ec485c"
                        alt="Buku 3"
                        class="img-fluid rounded shadow-lg"
                        style="height: 250px; object-fit: cover; width: 100%;">
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="https://images.unsplash.com/photo-1528207776546-365bb710ee93"
                        alt="Buku 4"
                        class="img-fluid rounded shadow-lg"
                        style="height: 250px; object-fit: cover; width: 100%;">
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->