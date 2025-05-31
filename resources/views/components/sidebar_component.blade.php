<!-- Button toggle for small screens -->
<nav class="navbar navbar-dark bg-dark d-md-none">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="navbar-brand">My Dashboard</span>
    </div>
</nav>
<!-- Offcanvas Sidebar (for small screens) -->
<div class="offcanvas offcanvas-start bg-dark text-white d-md-none" tabindex="-1" id="sidebarMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white {{ request()->is('dashboard') ? 'active bg-primary' : '' }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white {{ request()->is('profile') ? 'active bg-primary' : '' }}">
                    Profile
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white {{ request()->is('settings') ? 'active bg-primary' : '' }}">
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form-sm" method="DELETE">
                    @csrf
                    <button class="nav-link text-white btn btn-link px-0" type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- Sidebar (for medium and up) -->
<div class="d-none d-md-block bg-dark text-white vh-100 position-fixed" style="width: 250px;">
    <div class="p-3">
        <h4 class="mb-4">My Dashboard</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white {{ request()->is('dashboard') ? 'active bg-primary' : '' }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white {{ request()->is('profile') ? 'active bg-primary' : '' }}">
                    Profile
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white {{ request()->is('settings') ? 'active bg-primary' : '' }}">
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form-md" method="DELETE">
                    @csrf
                    <button class="nav-link text-white btn btn-link px-0" type="submit">Logout</button>
                </form>
            </li>
        </ul>
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
            await axios.delete(
                '/api/logout', {
                    withCredentials: true,
                    headers: {
                        'Content-Type': 'application/json'
                    }
                }
            ).then(async (response) => {
                if (response.status === 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Logout berhasil.',
                        text: await response.data?.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                    window.location.href = '/login';
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Logout gagal.',
                        text: await response.data?.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                    window.location.href = '/login';
                }
            }).catch((error) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Logout gagal.',
                    text: error.response.data?.message,
                    showConfirmButton: false,
                    timer: 1500
                })
                window.location.href = '/login';
            });
        }
    }
    document.getElementById('logout-form-sm').addEventListener('submit', async (event) => {
        event.preventDefault();
        await logout();
    })
    document.getElementById('logout-form-md').addEventListener('submit', async (event) => {
        event.preventDefault();
        await logout();
    })
</script>
