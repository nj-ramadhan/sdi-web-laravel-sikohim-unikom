@extends('layouts.master')

@section('content')
<!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Beranda HIMA-SI</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Beranda</a>
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
                <div class="relative col-span-12 overflow-hidden card 2xl:col-span-12 bg-slate-900">
                    <div class="relative card-body">
                        <div class="grid items-center grid-cols-12">
                            <div class="col-span-12 lg:col-span-7 2xl:col-span-7">
                                <h5 class="mb-3 font-normal tracking-wide text-slate-200">Sistem Informasi Pengelolaan Kegiatan</h5>
                                <h5 class="mb-3 font-normal tracking-wide text-slate-200">HIMA-SI (Himpunan Mahasiswa Sistem Informasi) - UNIKOM</h5>
                                <p class="mb-5 text-slate-400">1. Tujuan </p>
                                <p class="mb-5 text-slate-400">Terbentuknya insan akademis, pencipta dan pengabdi yang bertakwa kepada Tuhan YME, berbudi luhur, beretos kerja, professional, inovatif, kreatif, bertanggung jawab memiliki idealisme dan integritas yang tinggi. Yang sesuai dengan asas HIMA SI serta berguna bagi bangsa dan negara.</p>

                                <p class="mb-5 text-slate-400">2. Tugas </p>
                                <p class="mb-5 text-slate-400">HIMA SI mempunyai tugas pokok menyelenggarakan kegiatan yang bersifat kependidikan, keterampilan, kecerdasan dan pengabdian kepada masyarakat.</p>

                                <p class="mb-5 text-slate-400">3. Fungsi</p>
                                <p class="mb-5 text-slate-400">HIMA SI berfungsi sebagai lembaga pendidikan di luar kelas dan di luar keluarga serta sebagai wadah aspirasi,berpikir kritis,berkreasi, beraktivitas, berapresiasi dan keterampilan bagi mahasiswa Sistem Informasi dan Manajemen Infomatika Universitas Komputer Indonesia.</p>
                                <a href="https://www.unikom.ac.id/" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-500/20 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-500/20 dark:ring-custom-400/20">Kunjungi Situs Kampus UNIKOM</a>
                            </div>
                            <div class="hidden col-span-12 2xl:col-span-5 lg:col-span-2 lg:col-start-8 2xl:col-start-8 lg:block">
                                <img src="{{ URL::to('assets/images/img-si-1.jpg') }}" alt="" class="h-60 ltr:2xl:ml-auto rtl:2xl:mr-auto">
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="relative col-span-12 overflow-hidden card 2xl:col-span-12 bg-slate-900">
                    <div class="relative card-body">
                        <div class="grid items-center grid-cols-12">
                            <div class="col-span-12 lg:col-span-6 2xl:col-span-6">
                                <img src="{{ URL::to('assets/images/foto-1.jpg') }}" alt="" class="h-30 mx-auto">
                            </div>
                            <div class="hidden col-span-12 2xl:col-span-6 lg:col-span-6 lg:col-start-6 2xl:col-start-6 lg:block">
                                <img src="{{ URL::to('assets/images/img-si-3.jpg') }}" alt="" class="h-60 ltr:2xl:ml-auto rtl:2xl:mr-auto">
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                @if (Auth::guest())
                <div class="relative col-span-12 overflow-hidden card 2xl:col-span-12 bg-slate-900">
                    <div class="relative card-body">
                        <img src="{{ URL::to('assets/images/img-si-2.jpg') }}" alt="" class="h-60 mx-auto">
                    </div>
                </div><!--end col-->
                @else
                    @if (Auth::user()->role_name == 'Admin' or Auth::user()->role_name == 'Ketua' or Auth::user()->role_name == 'Sekretaris Umum' or Auth::user()->role_name == 'Sekretaris Kegiatan' or Auth::user()->role_name == 'Bendahara Umum' or Auth::user()->role_name == 'Bendahara Kegiatan' )
                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 rounded-full size-14 dark:bg-purple-500/20">
                            <i data-lucide="user-2"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_mahasiswa}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Mahasiswa</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-red-500 bg-red-100 rounded-full size-14 dark:bg-red-500/20">
                            <i data-lucide="messages-square"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_aspirasi}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Usulan Aspirasi</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            <i data-lucide="calendar-days"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_berkas_program}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Berkas Program</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
                            <i data-lucide="scroll-text"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_presensi_piket}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Aktifitas Piket</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-orange-500 bg-orange-100 rounded-full size-14 dark:bg-orange-500/20">
                            <i data-lucide="wallet"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="{{$count_uang_kas}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Jumlah Transaksi Pembayaran Uang Kas</p>
                    </div>
                </div><!--end col-->

                <div class="col-span-12 card md:col-span-6 lg:col-span-4 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div class="flex items-center justify-center mx-auto text-green-500 bg-green-100 rounded-full size-14 dark:bg-green-500/20">
                            <i data-lucide="wallet-2"></i>
                        </div>
                        <h5 class="mt-4 mb-2">Rp. <span class="counter-value" data-target="{{$total_uang_kas}}">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Total Pembayaran Uang Kas</p>
                    </div>
                </div><!--end col-->               
                    @endif
                @endif
            </div><!--end grid-->
        </div>
        <!-- container-fluid -->
    </div>
<!-- End Page-content -->
@endsection
