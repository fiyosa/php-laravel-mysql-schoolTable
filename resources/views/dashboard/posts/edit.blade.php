@extends('dashboard.partials.main')

@section('main')
  <div class=" mt-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Ubah Data</h1>
    </div>

    <form action="/dashboard/posts/{{ $post[0]->post_id }}" method="post">
      @method('put')
      @csrf
      <div class="input-group mb-2">
        <span class="input-group-text">NAMA/NIP/KARPEG</span>
        <input type="text" name="nama" class="form-control" required placeholder="Nama Saya" value="{{ $post[0]->nama }}">
        <input type="text" name="nip" class="form-control" placeholder="NIP: 199901010112345" value="{{ $post[0]->nip }}">
      </div>
      {{-- <div class="input-group mb-2">
        <span class="input-group-text">PANGKAT</span>
        <input type="text" name="pangkat_gol" class="form-control" placeholder="III/B" value="{{ $post[0]->pangkat_gol }}">
        <input type="text" name="pangkat_tmt" class="form-control" placeholder="01-01-2021" value="{{ $post[0]->pangkat_tmt }}">
      </div> --}}
      <div class="input-group mb-2">
        <span class="input-group-text">JABATAN</span>
        <input type="text" name="jabatan_nama" class="form-control" placeholder="Nama Jabatan" value="{{ $post[0]->jabatan_nama }}">
        <input type="text" name="jabatan_tmt" class="form-control" placeholder="01-01-2021" value="{{ $post[0]->jabatan_tmt }}">
      </div>
      <div class="input-group mb-2">
        <span class="input-group-text">MASA KERJA GOL</span>
        <input type="text" name="masa_thn" class="form-control" placeholder="Tahun: 01" value="{{ $post[0]->masa_thn }}">
        <input type="text" name="masa_bln" class="form-control" placeholder="Bulan: 02" value="{{ $post[0]->masa_bln }}">
      </div>
      {{-- <div class="input-group mb-2">
        <span class="input-group-text">LATIHAN JABATAN</span>
        <input type="text" name="latihan_nama" class="form-control" placeholder="Nama" value="{{ $post[0]->latihan_nama }}">
        <input type="text" name="latihan_thn" class="form-control" placeholder="1999" value="{{ $post[0]->latihan_thn }}">
      </div> --}}
      <div class="input-group mb-2">
        <span class="input-group-text">PENDIDIKAN</span>
        <input type="text" name="pendidikan_nama" class="form-control" placeholder="Nama" value="{{ $post[0]->pendidikan_nama }}">
        <input type="text" name="pendidikan_lulus" class="form-control" placeholder="Lulus: 1991" value="{{ $post[0]->pendidikan_lulus }}">
        <input type="text" name="pendidikan_ijazah" class="form-control" placeholder="Ijazah: Sarjana" value="{{ $post[0]->pendidikan_ijazah }}">
      </div>
      <div class="input-group mb-2">
        <span class="input-group-text">TTL</span>
        <input type="text" name="ttl_tempat" class="form-control" placeholder="Bandung" value="{{ $post[0]->ttl_tempat }}">
        <input type="text" name="ttl_tanggal" class="form-control" placeholder="01-01-1999" value="{{ $post[0]->ttl_tanggal }}">
      </div>
      <div class="input-group mb-2">
        <span class="input-group-text">AGAMA</span>
        <input type="text" name="agama" class="form-control" placeholder="Islam" value="{{ $post[0]->agama }}">
      </div>
      <div class="input-group mb-2">
        <span class="input-group-text">Tugas</span>
        <input type="text" name="tugas" class="form-control" placeholder="Bendahara" value="{{ $post[0]->tugas }}">
      </div>
      <button type="submit" class="btn btn-primary mt-4">Simpan</button>
    </form>
  </div>
@endsection