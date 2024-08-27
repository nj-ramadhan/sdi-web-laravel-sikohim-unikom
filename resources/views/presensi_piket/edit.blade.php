@extends('layouts.master')

@section('content')   
<!-- Page-content -->
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Data Presensi Piket</h5>
            </div>
            <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                    <a href="{{ route('presensi_piket.index') }}" class="text-slate-400 dark:text-zink-200">Presensi Piket</a>
                </li>
                <li class="text-slate-700 dark:text-zink-100">
                    Ubah Data
                </li>
            </ul>
        </div>
        <div class="card border-0 shadow-sm rounded">
            <form action="{{ route('presensi_piket.update', $presensi_piket->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-12 2xl:grid-cols-12 gap-x-5">
                    <div class="col-span-12 card lg:col-span-6 2xl:col-span-6">
                        <div class="card-body">
                            <div class="flex flex-col gap-2 py-4">
                                <label class="font-weight-bold">NTA Petugas Piket</label>
                                <input type="text" class="form-control @error('mahasiswa_nim') is-invalid @enderror" name="mahasiswa_nim" value="{{ old('mahasiswa_nim', $presensi_piket->mahasiswa_nim) }}" placeholder="Masukkan NTA Petugas Piket">
                            
                                <!-- error message untuk deskripsi -->
                                @error('mahasiswa_nim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-2 py-4">
                                <label class="font-weight-bold">Tanggal Piket</label>
                                <div class="relative">
                                    <i data-lucide="calendar-range" class="absolute size-4 ltr:left-3 rtl:right-3 top-3 text-slate-500 dark:text-zink-200"></i>
                                    <input type="text" value="{{ old('tanggal', $presensi_piket->tanggal) }}" class="@error('tanggal') is-invalid @enderror ltr:pl-10 rtl:pr-10 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-provider="flatpickr" data-date-format="Y-m-d" name="tanggal" placeholder="Masukkan Tanggal Piket" >
                                </div>
                            
                                <!-- error message untuk deskripsi -->
                                @error('tanggal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>    

                    <div class="col-span-12 card lg:col-span-6 2xl:col-span-6">
                        <div class="card-body">
                        <div class="flex flex-col gap-2 py-4">
                                <label class="font-weight-bold">Jam Datang</label>
                                <input type="text" class="form-control @error('jam_datang') is-invalid @enderror" name="jam_datang" value="{{ old('jam_datang', $presensi_piket->jam_datang) }}" placeholder="Masukkan Jam Datang Piket">
                            
                                <!-- error message untuk judul -->
                                @error('jam_datang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-2 py-4">
                                <label class="font-weight-bold">Jam Pulang</label>
                                <input type="text" class="form-control @error('jam_pulang') is-invalid @enderror" name="jam_pulang" value="{{ old('jam_pulang', $presensi_piket->jam_pulang) }}" placeholder="Masukkan Jam Pulang Piket">
                            
                                <!-- error message untuk deskripsi -->
                                @error('jam_pulang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="flex flex-col gap-2 py-4">
                                <label class="font-weight-bold">Deskripsi Tugas Piket</label>
                                <textarea rows="8" class="form-control @error('tugas') is-invalid @enderror" name="tugas" placeholder="Masukkan Deskripsi Tugas Piket">{{ old('tugas', $presensi_piket->tugas) }}</textarea>
                            
                                <!-- error message untuk deskripsi -->
                                @error('tugas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-span-12 card lg:col-span-12 2xl:col-span-12">
                        <div class="card-body">
                            <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-500/20 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-500/20 dark:ring-custom-400/20">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection