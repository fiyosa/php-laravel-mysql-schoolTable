@extends('partials.main')

@section('main')
  <div class="content-wrapper">
    <img class="bg-sacil" src="/assets/icons/icon-web.png" alt="sacil">
    <form action="/tenaga-kependidikan" class="mt-5"> 
      <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Input" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('search') }}" autofocus>
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
      </div>
    </form>
    <div class="table-responsive-md col-lg-14">
      <table class="table table-striped table-hover table-striped table-bordered border-primary table-sm">
        {{-- <thead>
          <tr>
            <th scope="col" class="tbl-align" rowspan="2">NO</th>
            <th scope="col" class="tbl-align" rowspan="2">NAMA/<br>NIP/KARPEG</th>
            <th scope="col" class="tbl-align" colspan="2">JABATAN</th>
            <th scope="col" class="tbl-align" colspan="2">MASA KERJA<br>GOL</th>
            <th scope="col" class="tbl-align" colspan="3">PENDIDIKAN</th>
            <th scope="col" class="tbl-align" colspan="2">TTL</th>
            <th scope="col" class="tbl-align" rowspan="2">AGAMA</th>
            <th scope="col" class="tbl-align" rowspan="2">TUGAS</th>
          </tr>
          <tr>
            <th scope="col" class="tbl-align">NAMA</th>
            <th scope="col" class="tbl-align">THN</th>
            <th scope="col" class="tbl-align">THN</th>
            <th scope="col" class="tbl-align">BLN</th>
            <th scope="col" class="tbl-align">NAMA</th>
            <th scope="col" class="tbl-align">LULUS</th>
            <th scope="col" class="tbl-align">IJAZAH</th>
            <th scope="col" class="tbl-align">TEMPAT</th>
            <th scope="col" class="tbl-align">TANGGAL</th>
          </tr>
        </thead> --}}
        <thead>
          <tr>
            <td class="tbl-align" rowspan="2">NO</td>
            <td class="tbl-align" rowspan="2">NAMA/<br>NIP/KARPEG</td>
            <td class="tbl-align" colspan="2">JABATAN</td>
            <td class="tbl-align" colspan="2">MASA KERJA<br>GOL</td>
            <td class="tbl-align" colspan="3">PENDIDIKAN</td>
            <td class="tbl-align" rowspan="2">TEMPAT/ DAN<br>TGL/LAHIR</td>
            <td class="tbl-align" rowspan="2">AGAMA</td>
            <td class="tbl-align" rowspan="2">TUGAS</td>
          </tr>
          <tr>
            <td class="tbl-align">NAMA</td>
            <td class="tbl-align">THN</td>
            <td class="tbl-align">THN</td>
            <td class="tbl-align">BLN</td>
            <td class="tbl-align">NAMA</td>
            <td class="tbl-align">LULUS</td>
            <td class="tbl-align">IJAZAH</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td class="tbl-align">{{ $loop->iteration }}</td>
              <td class="">{{ $post->nama }}<br>NIP. {{ $post->nip }}</td>
              {{-- <td class="tbl-align">{{ $post->nip }}</td> --}}
              {{-- <td class="tbl-align">{{ $post->pangkat_gol }}</td> --}}
              {{-- <td class="tbl-align">{{ $post->pangkat_tmt }}</td> --}}
              <td class="tbl-align">{{ $post->jabatan_nama }}</td>
              <td class="tbl-align" style="white-space: nowrap;">{{ $post->jabatan_tmt }}</td>
              <td class="tbl-align">{{ $post->masa_thn }}</td>
              <td class="tbl-align">{{ $post->masa_bln }}</td>
              {{-- <td class="tbl-align">{{ $post->latihan_nama }}</td> --}}
              {{-- <td class="tbl-align">{{ $post->latihan_thn }}</td> --}}
              <td class="tbl-align">{{ $post->pendidikan_nama }}</td>
              <td class="tbl-align">{{ $post->pendidikan_lulus }}</td>
              <td class="tbl-align">{{ $post->pendidikan_ijazah }}</td>
              <td class="tbl-align">{{ $post->ttl_tempat }},<br>{{ $post->ttl_tanggal }}</td>
              {{-- <td class="tbl-align">{{ $post->ttl_tanggal }}</td> --}}
              <td class="tbl-align">{{ $post->agama }}</td>
              <td class="tbl-align">{{ $post->tugas }}</td>
            </tr>          
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection