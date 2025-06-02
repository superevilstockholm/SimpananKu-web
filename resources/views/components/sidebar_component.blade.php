<!-- Navbar untuk mobile -->
<nav class="navbar navbar-dark d-md-none sticky-top" style="backdrop-filter: blur(10px);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-semibold gap-1 py-0 my-0" href="/">
            <img src="{{ asset('static/img/logo.svg') }}" style="height: 30px;" alt="SimpananKu logo">
            <div class="d-flex align-items-center">
                Simpanan<span class="text-primary">Ku</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<!-- Sidebar Reusable: Offcanvas (mobile) dan static (desktop) -->
<div class="offcanvas offcanvas-start d-md-none bg-transparent" style="backdrop-filter: blur(10px);" tabindex="-1" id="sidebarMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        @include('components.sidebar_menu_component')
    </div>
</div>
<!-- Sidebar untuk desktop -->
<div class="d-none d-md-block vh-100 position-fixed border-end overflow-hidden" style="width: 250px;">
    <div class="position-absolute w-100 h-100 z-n1 d-flex align-items-end justify-content-center">
        <div class="bg-primary rounded-circle" style="width: 200px; height: 200px; filter: blur(100px); opacity: 0.7;"></div>
    </div>
    <div class="p-3">
        <a class="navbar-brand d-flex align-items-center fs-4 fw-semibold gap-1 py-0 mt-0 mb-4" href="/">
            <img src="{{ asset('static/img/logo.svg') }}" style="height: 30px;" alt="SimpananKu logo">
            <div class="d-flex align-items-center">
                Simpanan<span class="text-primary">Ku</span>
            </div>
        </a>
        @include('components.sidebar_menu_component')
    </div>
</div>
<script>
    async function logout() {
        const confirmation = await Swal.fire({
            title: 'Yakin ingin logout?',
            text: 'Sesi kamu akan diakhiri.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, logout',
            cancelButtonText: 'Batal'
        });

        if (confirmation.isConfirmed) {
            await axios.delete('/api/logout', {
                withCredentials: true,
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(async (response) => {
                Swal.fire({
                    icon: 'success',
                    title: 'Logout berhasil.',
                    text: response.data?.message || '',
                    showConfirmButton: false,
                    timer: 1500
                });
                window.location.href = '/login';
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Logout gagal.',
                    text: error.response.data?.message || 'Terjadi kesalahan.',
                    showConfirmButton: false,
                    timer: 1500
                });
                window.location.href = '/login';
            });
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        const logoutButtons = document.querySelectorAll('.btn-logout');
        logoutButtons.forEach(button => {
            button.addEventListener('click', logout);
        });
    });
</script>
