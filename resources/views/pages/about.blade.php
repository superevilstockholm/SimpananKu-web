@extends('App') @section('title', 'About - SimpananKu')
@section('content')
<div class="position-relative px-0 py-5 m-0">
    <div class="position-absolute w-100 h-100 p-0 m-0 z-n1 d-md-block d-none">
        <div class="container w-100 h-100 py-0 my-0">
            <div class="w-100 h-100 p-0 m-0 ratio ratio-1x1" style="animation: fade-in 1s ease;">
                <div class="rounded-circle bg-primary w-100 w-md-75 w-lg-80 top-100 start-0" style="filter: blur(100px); transform: translate(-50%, -50%); opacity: 0.7;"></div>
                <div class="rounded-circle bg-primary w-100 w-md-75 w-lg-80 top-0 start-100" style="filter: blur(100px); transform: translate(-50%, -50%); opacity: 0.7;"></div>
            </div>
        </div>
    </div>
    <!-- teks -->
    <div class="max-w-6xl mx-auto mt-10 px-4 ">
        <!-- setiap grid cuman ada 1 kolom-->
        <div class="grid grid-cols-1 gap-10">
          
            <section>
              <h2 class="text-2xl font-bold mb-2">About SimpananKu</h2>
              <p class="text-gray-500">Learn more about the team that maintains SimpananKu, how and why the project starts, and how to get involved.</p>
            </section>
    
            <section>
              <h2 class="text-2xl font-bold mb-2">Team</h2>
              <p class="text-gray-500">
                Simpananku dikelola oleh tim kecil pengembang di SMKN 4. Kami sedang aktif bekerja untuk mengembangkan tim ini dan akan senang melihat serta mendengar dari Anda jika Anda tertarik dalam menabung secara online, keamanan yang terjaga.
              </p>
            </section>
    
            <section>
              <h2 class="text-2xl font-bold mb-2">History</h2>
              <p class="text-gray-500">
               SimpananKu dibuat oleh seorang desainer dan pengembang dari Departemen RPL SMKN 4, SimpananKu menjadi salah satu sumber untuk menabung online yang dikembangkan oleh siswa/i XI RPL 3.
                <br><br>
                SnapZone was created in 2025 by @fkhri, @bjrki, @alfkhr, @nai, @dzki.
              </p>
            </section>

            <section class="mx-auto px-6 py-12">
                <h2 class="text-3xl font-bold text-center mb-12">Developer List</h2>
            
               
                <div class="grid grid-cols-3 gap-12 text-center">
                  
                  <!-- Developer -->
                  <div >
                    <img src="#" class="mx-auto w-24 h-24 object-cover rounded-full" />
                    <h3 class="mt-2 font-semibold">Muhammad Fakhri</h3>
                    <p>( Leader )</p>
                    <p class="font-bold">As BackEnd</p>
                  </div>
            
                  <div>
                    <img src="suki.png" class="mx-auto w-24 h-24 object-cover rounded-full" />
                    <h3 class="mt-2 font-semibold">Rizky Aditia Zaenal</h3>
                    <p class="font-bold">Fullstack</p>
                  </div>
            
                  <div>
                    <img src="nais.png" class="mx-auto w-24 h-24 object-cover rounded-full" />
                    <h3 class="mt-2 font-semibold">Naisya Keyla Azahra</h3>
                    <p class="font-bold">As Designer & FrontEnd</p>
                  </div>
            
                  <div>
                    <img src="#" class="mx-auto w-24 h-24 object-cover rounded-full" />
                    <h3 class="mt-2 font-semibold">Ahmad Al-Fakhri Maulana</h3>
                    <p class="font-bold">As FrontEnd</p>
                  </div>
            
                  <div>
                    <img src="#" class="mx-auto w-24 h-24 object-cover rounded-full" />
                    <h3 class="mt-2 font-semibold">Dzaki Saputra</h3>
                    <p class="font-bold">As Designer</p>
                    
                    <div class="text-center mt-4">
                        <a href="{{ url('/') }}" class="btn btn-primary px-4">Kembali ke Beranda</a>
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
@endsection


