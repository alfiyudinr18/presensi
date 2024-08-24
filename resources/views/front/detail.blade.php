@if($hasil == 1)
<header class="py-5">
    <div class="cntr">
        <div class="borders">
            <div class="sepan"></div>
            <div class="sepan"></div>
            <div class="sepan"></div>
            <div class="sepan"></div>
        </div>
        <div class="pe">
            <div class="sepan"></div>
            {{$text_mode}}
        </div>
        {{-- <div class="pe">
            
        </div> --}}
        <div class="box">
            <div class="pic"></div>
            <div class="content">
                <div class="sepan" style="--i: 1;"></div>
                <div class="sepan" style="--i: 2;"></div>
                <div class="sepan" style="--i: 3;"></div>
                <div class="sepan" style="--i: 4;"></div>
                <div class="sepan" style="--i: 5;"></div>
                <div class="sepan" style="--i: 6;"></div>
                <div class="sepan" style="--i: 7;"></div>
                <div class="sepan" style="--i: 8;"></div>
            </div>
        </div>
        <div class="scanner"></div>
    </div>
</header>

@elseif($hasil == 0)
<section class="py-5">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="col-lg-12 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-success bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                        <h2 class="fs-4 fw-bold">Berhasil Scan Masuk</h2>
                        <p class="mb-0">Selamat Datang, {{$nama}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   

@elseif($hasil == 2)
<section class="py-5">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="col-lg-12 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                        <h2 class="fs-4 fw-bold">Berhasil scan keluar</h2>
                        <p class="mb-0">Selamat Jalan, {{$nama}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

@elseif($hasil == 3)
<section class="py-5">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="col-lg-12 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-danger bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-x-square"></i></div>
                        <h2 class="fs-4 fw-bold">Kartu Tidak Dikenali!!! </h2>
                        <p class="mb-0">Hubungi Admin untuk mendaftarkan kartu!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

@elseif($hasil == 4)
<section class="py-5">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="col-lg-12 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi bi-code"></i></div>
                        <h2 class="fs-4 fw-bold">Belum waktu keluar!!</h2>
                        <p class="mb-0">As always, Start Bootstrap has a powerful collectin of free templates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
@endif