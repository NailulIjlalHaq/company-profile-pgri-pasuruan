@extends('frontend.index')
@section('content')
    <div class="px-100 py-50 mt-top title">
        <div class="title__wrapper">
            <div class="title__wrapper--text-1">Visi & Misi</div>
            <div class="title__wrapper--text-2"> PGRI Kab Pasuruan</div>
            <div class="title__wrapper--text-3">
                Problems trying to resolve the conflict between <br />
                the two major realms of Classical physics: Newtonian mechanics
            </div>
        </div>
    </div>

    <div class="about__vm">
        <div class="about__vm--wrapper">
            <div class="about__vm--wrapper__box">
                <div class="about__vm--wrapper__box--title">Visi & Misi</div>
                <div class="about__vm--wrapper__box--text">{{ strip_tags($vm->content) }}</div>
            </div>
            {{-- <div class="about__vm--wrapper__box">
                <div class="about__vm--wrapper__box--title">Misi</div>
                <ol class="about__vm--wrapper__box--text">
                    <li>Menerapkan nilai-nilai Agama, Pancasila dan Undang-undang Dasar 1945</li>
                    <li>Mengembangkan pengetahuan, keterampilan, disiplin diri, etos kerja yang tinggi, aktif,
                        kreatif, inovatif, dan budaya santun sesuai bidangnya</li>
                    <li>Meningkatkan profesionalisme melalui penguasaan teknologi dan bahasa Internasional</li>
                    <li>Mengembangkan budaya sekolah untuk melestarikan fungsi lingkungan, mencegah pencemaran dan
                        kerusakan lingkungan</li>
                    <li>Memahami peran dan fungsi masing-masing dalam pergaulan sesama warga sekolah dalam suasana
                        kekeluargaan</li>
                    <li>Mengembangkan pola kemitraan dengan masyarakat dan industri</li>
                    <li>Mampu memanfaatkan potensi wilayah untuk pengembangan sekolah sebagai pusat budaya,
                        pelatihan, produksi dan jasa berbasis teaching factory dan pendidikan lingkungan hidup</li>
                </ol>
            </div> --}}
        </div>
    </div>
@endsection
