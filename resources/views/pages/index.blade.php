@extends('App') @section('title', 'Home - SimpananKu')
@section('content')
<section class="px-0 py-4 py-lg-5 m-0">
    <div class="p-0 m-0 position-relative">
        <div class="w-100 h-100 position-absolute p-0 m-0 d-block z-n1 overflow-hidden">
            <div class="container w-100 h-100 py-0 my-0">
                <div class="w-100 h-100 p-0 m-0 ratio ratio-1x1" style="animation: fade-in 1s ease;">
                    <div class="rounded-circle bg-primary w-100 w-md-75 w-lg-80 top-100 start-50" style="filter: blur(100px); transform: translate(-50%, -50%);"></div>
                </div>
            </div>
        </div>
        <div class="position-absolute p-0 m-0 w-100 h-100 d-flex align-items-end z-n1">
            <div class="w-100 py-4 px-0 m-0 d-block" style="background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));"></div>
        </div>
        <div class="w-100 h-100 container py-5 my-0 position-relative z-3">
            <div class="w-100 h-100 pt-4 pb-5 px-0 my-5 mx-0">
                <div class="pt-2 pb-3 pb-lg-4 pt-lg-3 d-flex flex-column align-items-center justify-content-center text-center" style="animation: fade-in 1.3s ease;">
                    <h6 class="fw-medium border border-1 border-primary rounded-pill px-3 py-1 glassmorphism-btn-info-sm" style="backdrop-filter: blur(10px);">Selamat datang di website</h6>
                    <h1 class="fw-bold display-2">Tabungan<span class="text-primary">Ku</span></h1>
                    <p class="w-100 w-md-75 w-lg-50 fw-normal">Website TabunganKu memudahkan siswa, orang tua, dan guru dalam mengelola dan memantau tabungan siswa.</p>
                    <div class="d-flex align-items-center gap-lg-2 gap-1">
                        <a href="/login" class="btn rounded-pill btn-outline-light px-lg-3 px-2 py-1 d-flex align-items-center gap-2 fs-7 fs-md-6 glassmorphism-btn-info-sm">Mulai sekarang <i class="bi bi-arrow-right"></i></a>
                        <a href="/features" class="btn rounded-pill btn-outline-light px-lg-3 px-2 py-1 d-flex align-items-center gap-2 fs-7 fs-md-6 glassmorphism-btn-info-sm">Lihat fitur <i class="bi bi-book-half"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-0 m-0">
    <div class="px-0 mx-0 py-0 my-0 py-lg-5 my-lg-5 position-relative">
        <div class="position-absolute top-0 p-0 m-0 w-100 h-100 z-n1">
            <div class="container py-0 my-0 w-100 h-100">
                <div class="w-100 h-100 py-0 my-0 d-flex flex-column justify-content-between">
                    <div class="w-100 bars-top my-0 py-0 ms-0 me-auto d-flex flex-column align-items-start gap-2">
                        <div class="rounded-pill" style="background-color: rgba(var(--bs-primary-rgb), 0.5); height: 7px; animation-timeline: view(block 70% 0); animation-name: bar-1-animation; animation-duration: 1ms; animation-timing-function: linear; width: 75%;"></div>
                        <div class="rounded-pill" style="background-color: rgba(var(--bs-primary-rgb), 0.5); height: 7px; animation-timeline: view(block 70% 0); animation-name: bar-2-animation; animation-duration: 1ms; animation-timing-function: linear; width: 50%;"></div>
                        <div class="rounded-pill" style="background-color: rgba(var(--bs-primary-rgb), 0.5); height: 7px; animation-timeline: view(block 70% 0); animation-name: bar-3-animation; animation-duration: 1ms; animation-timing-function: linear; width: 25%;"></div>
                    </div>
                    <div class="w-100 bars-bottom ms-auto me-0 d-flex flex-column align-items-end gap-2">
                        <div class="rounded-pill" style="background-color: rgba(var(--bs-primary-rgb), 0.5); height: 7px; animation-timeline: view(block 70% 0); animation-name: bar-1-animation; animation-duration: 1ms; animation-timing-function: linear; width: 75%;"></div>
                        <div class="rounded-pill" style="background-color: rgba(var(--bs-primary-rgb), 0.5); height: 7px; animation-timeline: view(block 70% 0); animation-name: bar-2-animation; animation-duration: 1ms; animation-timing-function: linear; width: 50%;"></div>
                        <div class="rounded-pill" style="background-color: rgba(var(--bs-primary-rgb), 0.5); height: 7px; animation-timeline: view(block 70% 0); animation-name: bar-3-animation; animation-duration: 1ms; animation-timing-function: linear; width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container z-3">
            <div class="row py-5 my-5 my-lg-4 text-center g-3">
                <div class="col-12 mb-lg-4 mb-2 d-flex flex-column align-items-center justify-content-center">
                    <h6 class="fw-medium border border-1 border-primary rounded-pill px-3 py-1 glassmorphism-btn-info-sm" style="backdrop-filter: blur(10px);">Statistik Simpanan<span class="text-primary">Ku</span></h6>
                    <h3 class="display-5 fw-semibold mb-lg-4 position-relative pengguna-kami">Statistik Pengguna</h3>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto border-md-end border-1 border-secondary">
                    <div class="d-flex flex-column gap-2">
                        <h5 class="p-0 m-0" style="font-size: 1rem;">Jumlah Pengguna</h5>
                        <p class="fs-4 d-flex flex-column align-items-center">
                            <span class="fs-4 text-primary fw-semibold" id="jumlah-pengguna">0</span>
                            <span class="fs-6">Pengguna</span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto border-lg-end border-1 border-secondary">
                    <div class="d-flex flex-column gap-2">
                        <h5 class="p-0 m-0" style="font-size: 1rem;">Jumlah Guru</h5>
                        <p class="fs-4 d-flex flex-column align-items-center">
                            <span class="fs-4 text-primary fw-semibold" id="jumlah-guru">0</span>
                            <span class="fs-6">Guru</span>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <div class="d-flex flex-column gap-2">
                        <h5 class="p-0 m-0" style="font-size: 1rem;">Total Transaksi</h5>
                        <p class="d-flex flex-column align-items-center">
                            <span class="fs-4 text-primary fw-semibold" id="total-transaksi">0</span>
                            <span class="fs-6">Transaksi</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-0 m-0 py-lg-3">
    <div class="container py-0 my-0">
        <div class="row py-5 my-lg-5 my-4 g-3">
            <div class="col-12 mb-2">
                <div class="col-12 mb-lg-4 mb-2 d-flex flex-column align-items-center justify-content-center">
                    <h6 class="fw-medium border border-1 border-primary rounded-pill px-3 py-1 glassmorphism-btn-info-sm" style="backdrop-filter: blur(10px);">Users Role Simpanan<span class="text-primary">Ku</span></h6>
                    <h3 class="display-5 fw-semibold mb-lg-4 position-relative pengguna-kami">Jenis Pengguna</h3>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mx-auto border-secondary border-md-end">
                <div class="d-flex flex-column px-2">
                    <div class="d-flex flex-column gap-1">
                        <i class="bi bi-mortarboard-fill fs-5 text-primary"></i>
                        <h5 class="p-0 m-0 fw-medium">Students</h5>
                        <p class="fw-light">Students dapat melihat jumlah dan riwayat tabungan dirinya sendiri.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mx-auto border-secondary border-lg-end">
                <div class="d-flex flex-column px-2">
                    <div class="d-flex flex-column gap-1">
                        <i class="bi bi-book-fill fs-5 text-primary"></i>
                        <h5 class="p-0 m-0 fw-medium">Teachers</h5>
                        <p class="fw-light">Teachers dapat mengelola tabungan seluruh siswa, termasuk melihat, menambah, mengubah, dan menghapus.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mx-auto">
                <div class="d-flex flex-column px-2">
                    <div class="d-flex flex-column gap-1">
                        <i class="bi bi-person-fill-gear fs-5 text-primary"></i>
                        <h5 class="p-0 m-0 fw-medium">Administrators</h5>
                        <p class="fw-light">Administrators dapat mengelola seluruh tabungan siswa dan pengguna sistem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const statistic = {}
    document.addEventListener('DOMContentLoaded', async () => {
        try {
            response = await axios.get('/api/counting/statistics', {headers: {'Content-Type': 'application/json'}});
            if (response.status === 200) {
                statistic.students = response.data?.total_user;
                statistic.teachers = response.data?.total_guru;
                statistic.transactions = response.data?.total_transaksi;
            } else {
                statistic.students = 0;
                statistic.teachers = 0;
                statistic.transactions = 0;
            }
        } catch (e) {
            statistic.students = 0;
            statistic.teachers = 0;
            statistic.transactions = 0;
        } finally {
            document.getElementById('jumlah-pengguna').innerHTML = statistic.students;
            document.getElementById('jumlah-guru').innerHTML = statistic.teachers;
            document.getElementById('total-transaksi').innerHTML = statistic.transactions;
        }
    })
</script>
@endsection
