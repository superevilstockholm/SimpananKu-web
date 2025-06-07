@extends('App') @section('title', 'Login - SimpananKu')
@section('content')
<section class="p-0 m-0 vh-100 position-relative">
    <div class="position-absolute top-0 p-0 m-0 w-100 h-100 z-n1 overflow-hidden">
        <div class="container py-0 my-0 w-100 h-100">
            <div class="w-100 h-100 p-0 m-0 ratio ratio-1x1">
                <div class="rounded-circle bg-primary w-100 w-md-75 w-lg-80 top-100 start-0" style="filter: blur(100px); transform: translate(-50%, -50%); animation: fade-in 1.3s ease;"></div>
                <div class="rounded-circle bg-primary w-100 w-md-75 w-lg-80 top-0 start-100" style="filter: blur(100px); transform: translate(-50%, -50%); animation: fade-in 1.3s ease;"></div>
            </div>
        </div>
    </div>
    <div class="container py-0 my-0 w-100 h-100 z-3">
        <div class="w-100 h-100 p-0 m-0 d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column px-2 py-4 py-lg-5 rounded-2 w-100 w-md-50 w-lg-40 gap-3" style="background-color: rgba(0, 0, 0, 0.2); backdrop-filter: blur(20px); box-shadow: inset 0 0 50px rgba(var(--bs-primary-rgb), 0.3); animation: fade-in 1.3s ease;">
                <div class="d-flex flex-column p-0 m-0 text-center">
                    <h1 class="fw-bold display-6 p-0 m-0">Masuk</h1>
                    <p class="fw-normal p-0 m-0 fs-7 fs-md-6">Silahkan masuk sebagai <span id="selected-role"></span></p>
                </div>
                <form class="py-0 m-0" id="login-form">
                    <div class="d-flex flex-column py-0 px-2 px-lg-5 m-0 gap-3">
                        <div class="p-0 m-0 w-100 flex-column gap-3" id="student-login-form">
                            <input type="text" autocomplete="off" name="nisn" pattern="\d{10}" class="floated-label form-control-sm rounded-0 border-0 border-bottom border-white" id="nisn" placeholder="NISN" style="background-color: transparent !important" required />
                            <input type="password" name="student_password" autocomplete="off" pattern="^[a-zA-Z0-9_]+$" class="floated-label form-control-sm rounded-0 border-0 border-bottom border-white" id="student-password" placeholder="Password" style="background-color: transparent !important" required />
                        </div>
                        <div class="p-0 m-0 w-100 flex-column gap-3" id="teacher-login-form" style="display: none;">
                            <input type="text" autocomplete="off" name="nik" pattern="\d{16}" class="floated-label form-control-sm rounded-0 border-0 border-bottom border-white" id="nik" placeholder="NIK" style="background-color: transparent !important" required />
                            <input type="password" name="teacher_password" autocomplete="off" pattern="^[a-zA-Z0-9_]+$" class="floated-label form-control-sm rounded-0 border-0 border-bottom border-white" id="teacher-password" placeholder="Password" style="background-color: transparent !important" required />
                        </div>
                        <div class="d-flex flex-column w-100">
                            <p class="p-0 m-0 mt-1 text-end" style="font-size: 0.9rem">Lupa password? <a href="/forgot-password" class="text-primary text-decoration-none">Klik disini</a></p>
                            <button class="btn btn-sm btn-primary rounded-pill mt-1" role="button" type="submit">Masuk</button>
                        </div>
                        <div class="d-flex flex-column text-center" style="font-size: 0.9rem;">
                            <p class="p-0 m-0">Belum punya akun? <a href="/register" class="text-primary text-decoration-none p-0 m-0">Daftar disini</a></p>
                            <p class="p-0 m-0">Kamu seorang <span id="role"></span>? <a class="text-primary text-decoration-none p-0 m-0" style="cursor: pointer;" onclick="changeRole()">Masuk disini</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    let selected_role = 'student';

    document.addEventListener('DOMContentLoaded', () => {
        updateFormRole();
    });

    function changeRole() {
        selected_role = selected_role === 'student' ? 'teacher' : 'student';
        updateFormRole();
    }

    function updateFormRole() {
        const studentForm = document.getElementById('student-login-form');
        const teacherForm = document.getElementById('teacher-login-form');
        const roleSpan = document.getElementById('role');
        const selectedRoleSpan = document.getElementById('selected-role');

        if (selected_role === 'student') {
            studentForm.classList.remove('d-none');
            studentForm.classList.add('d-flex');
            teacherForm.classList.remove('d-flex');
            teacherForm.classList.add('d-none');
            studentForm.querySelectorAll('input').forEach(input => input.disabled = false);
            teacherForm.querySelectorAll('input').forEach(input => input.disabled = true);
            roleSpan.innerText = 'guru';
            selectedRoleSpan.innerText = 'siswa';
        } else {
            studentForm.classList.remove('d-flex');
            studentForm.classList.add('d-none');
            teacherForm.classList.remove('d-none');
            teacherForm.classList.add('d-flex');
            teacherForm.querySelectorAll('input').forEach(input => input.disabled = false);
            studentForm.querySelectorAll('input').forEach(input => input.disabled = true);
            roleSpan.innerText = 'siswa';
            selectedRoleSpan.innerText = 'guru';
        }
    }

    document.addEventListener('submit', async (e) => {
        e.preventDefault();
        const submitBtn = e.target.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        if (selected_role === 'teacher') {
            await login_as_teacher(e);
        } else {
            await login_as_student(e);
        }
        submitBtn.disabled = false;
    })

    async function login_as_student(e) {
        try {
            let response = await axios.post('/api/login', {
                nisn: e.target.nisn.value,
                password: e.target.student_password.value
            }, {
                headers: {
                    'Content-Type': 'application/json'
                }
            });
            if (response.status == 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'Login berhasil.',
                    text: await response.data?.message,
                    showConfirmButton: false,
                    timer: 1500
                })
                window.location.href = '/dashboard/student';
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Login gagal.',
                    text: await response.data?.message,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Login gagal.',
                text: error.response?.data?.message ?? "Terjadi kesalahan saat login",
                showConfirmButton: false,
                timer: 1500
            })
        }
    }
    async function login_as_teacher(e) {
        try {
            let response = await axios.post('/api/login', {
                nik: e.target.nik.value,
                password: e.target.teacher_password.value
            }, {
                headers: {
                    'Content-Type': 'application/json'
                }
            });
            if (response.status == 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'Login berhasil.',
                    text: await response.data?.message,
                    showConfirmButton: false,
                    timer: 1500
                })
                window.location.href = '/dashboard/teacher';
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Login gagal.',
                    text: await response.data?.message,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Login gagal.',
                text: error.response?.data?.message ?? "Terjadi kesalahan saat login",
                showConfirmButton: false,
                timer: 1500
            })
        }
    }
</script>
@endsection
