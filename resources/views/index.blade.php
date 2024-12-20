    @extends('layout')

    @section('modalTombol')
    <button data-modal-target="modal-input" data-modal-toggle="modal-input" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
        <span class="animate-pulse">
            Mulai
        </span>
    </button>
    @endsection

    @section('modal')
    <div id="modal-input" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full animate-fade-in ">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Silahkan Masukan Beberapa Data
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-input">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="recommendationForm" method="post" action="{{ route('recommendation.submit') }}">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Umur</label>
                            <input type="number" name="umur" id="umur" min="10" max="80" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Umur" required="">
                        </div>
                        <div>
                            <label for="berat_badan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat Badan</label>
                            <input type="number" name="berat_badan" id="berat_badan" min="30" max="100" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Berat Badan" required="">
                        </div>
                        <div>
                            <label for="tujuan_latihan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tujuan Latihan</label>
                            <select name="tujuan_latihan" id="tujuan_latihan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Pilih tujuan latihan</option>
                                <option value="massaOtot">Meningkatkan Massa Otot</option>
                                <option value="beratBadan">Menurunkan Berat Badan</option>
                                <option value="ototBeratBadan">Keduanya</option>
                            </select>
                        </div>
                        <div>
                            <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="">Pilih Jenis Kelamin</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="waktu_latihan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketersediaan Waktu</label>
                            <select name="waktu_latihan" id="waktu_latihan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="" disabled selected>Pilih Rentang Waktu</option>
                                <option value="singkat">15-20 menit</option>
                                <option value="sedang">30-45 menit</option>
                                <option value="panjang">60 menit</option>
                            </select>
                        </div>
                    </div>
                    <div></div>
                    <button id="submitButton" type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Cek
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endsection

    @section('output')
    <!-- output section -->
    <section id="outputSection" class="output-section">
        <div class="absolute left-[-20%] right-0 bottom-[-10%] h-[500px] w-[500px] rounded-full bg-[radial-gradient(circle_farthest-side,rgba(9,19,245,0.38),rgba(255,255,255,0))]"></div>
        <div class="absolute right-0 bottom-[-10%] h-[500px] w-[500px] rounded-full bg-[radial-gradient(circle_farthest-side,rgba(9,19,245,0.38),rgba(255,255,255,0))]"></div>
        <div class="max-w-screen-2xl h-auto px-4 py-8 antialiased dark:bg-slate-950 md:py-16">
            <h1 class="text-white text-3xl flex items-center justify-center font-bold md:text-3xl xl:text-4xl py-10">Rekomendasi Latihan</h1>
            <div class="flex flex-col items-center justify-center mt-10 space-y-6" id="exerciseContainer">
                <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700  w-full md:w-[600px]">
                </div>
                <p class="mb-6 text-gray-500 dark:text-gray-400">Mohon Data di input Terlebih Dahulu</p>
            </div>
        </div>
    </section>
    @endsection

    <script>
        document.addEventListener(" DOMContentLoaded", function(event) {
            // Otomatis membuka modal ketika halaman dimuat
            document.getElementById('modal-input').click();
            // Menangani animasi modal buka/tutup
            document.querySelectorAll('[data-modal-toggle]').forEach(button => {
                button.addEventListener('click', function() {
                    const modalId = button.getAttribute('data-modal-target');
                    const modal = document.getElementById(modalId);

                    if (modal.classList.contains('hidden')) {
                        modal.classList.remove('hidden');
                        modal.classList.add('animate-fade-in');
                    } else {
                        modal.classList.remove('animate-fade-in');
                        modal.classList.add('animate-fade-out');

                        modal.addEventListener('animationend', function handler() {
                            modal.classList.add('hidden');
                            modal.classList.remove('animate-fade-out');
                            modal.removeEventListener('animationend', handler);
                        });
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('recommendationForm');
            const exerciseContainer = document.getElementById('exerciseContainer');
            const modal = document.getElementById('modal-input');

            if (!exerciseContainer) {
                console.error('Elemen dengan ID "exerciseContainer" tidak ditemukan.');
                return;
            }

            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Mencegah pengiriman form secara default

                // Mengambil data form
                const formData = new FormData(form);

                // Mengirim data menggunakan Fetch API
                fetch('{{ route("recommendation.submit") }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Sertakan token CSRF
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Respon jaringan tidak oke');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Mengosongkan kontainer latihan
                        exerciseContainer.innerHTML = '';

                        // Memeriksa apakah ada latihan dalam respons
                        if (data.selectedExercises && data.selectedExercises.length > 0) {
                            data.selectedExercises.forEach(exercise => {
                                exerciseContainer.innerHTML += `
                                <div class="flex flex-col items-center justify-center mt-10 space-y-6">
                                    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-full md:w-[600px]">
                                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg transition-transform duration-700 ease-in-out transform md:hover:scale-[2.2] sm:hover:scale-105 hover:z-10" src="${exercise.gambar}" alt="${exercise.jenis}">
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${exercise.jenis}</h5>
                                        <p class="mb-2 text-xl tracking-tight text-gray-900 dark:text-white">${exercise.set}</p>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">${exercise.deskripsi}</p>
                                        </div>
                                    </div>
                                </div>
                                `;
                            });
                        } else {
                            exerciseContainer.innerHTML = '<p class="text-gray-500 dark:text-gray-400">Tidak ada latihan yang direkomendasikan.</p>';
                        }

                        // Menampilkan alert sukses
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Rekomendasi latihan berhasil dihasilkan.',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            // Menutup modal
                            const modalToggleButton = document.querySelector('[data-modal-toggle="modal-input"]');
                            if (modalToggleButton) {
                                modalToggleButton.click();
                            }

                            // Menggulir ke bagian output dengan halus
                            setTimeout(() => {
                                // Menggulir ke bagian output dengan halus
                                document.getElementById('outputSection').scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            }, 300);
                        });
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal!',
                            text: 'Terjadi kesalahan saat memproses data.',
                            confirmButtonText: 'OK'
                        });
                    });
            });
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>