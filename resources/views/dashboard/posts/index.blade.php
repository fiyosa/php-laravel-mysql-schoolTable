
@extends('dashboard.partials.main')
@section('main')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif
  @if (session()->has('failed'))
    <div class="alert alert-danger col-lg-8" role="alert">
      {{ session('failed') }}
    </div>
  @endif

  <div class="table-responsive-md col-lg-14">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new posts</a>
    <form action="/dashboard/posts">
      <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Input" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('search') }}">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
      </div>
    </form>
    <table class="table table-striped table-hover table-striped table-bordered border-primary table-sm">
      {{-- <thead>
        <tr>
          <th scope="col" class="tbl-align" rowspan="2">NO</th>
          <th scope="col" class="tbl-align" rowspan="2">NAMA</th>
          <th scope="col" class="tbl-align" rowspan="2">NIP /<br>KARPEG</th>
          <th scope="col" class="tbl-align" colspan="2">PANGKAT</th>
          <th scope="col" class="tbl-align" colspan="2">JABATAN</th>
          <th scope="col" class="tbl-align" colspan="2">MASA KERJA<br>GOL</th>
          <th scope="col" class="tbl-align" colspan="2">LATIHAN<br>JABATAN</th>
          <th scope="col" class="tbl-align" colspan="3">PENDIDIKAN</th>
          <th scope="col" class="tbl-align" colspan="2">TTL</th>
          <th scope="col" class="tbl-align" rowspan="2">AGAMA</th>
          <th scope="col" class="tbl-align" rowspan="2">TUGAS</th>
          <th scope="col" class="tbl-align" rowspan="2">ACTION</th>
        </tr>
        <tr>
          <th scope="col" class="tbl-align">GOL</th>
          <th scope="col" class="tbl-align">TMT</th>
          <th scope="col" class="tbl-align">NAMA</th>
          <th scope="col" class="tbl-align">THN</th>
          <th scope="col" class="tbl-align">THN</th>
          <th scope="col" class="tbl-align">BLN</th>
          <th scope="col" class="tbl-align">NAMA</th>
          <th scope="col" class="tbl-align">THN</th>
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
          <td class="tbl-align" rowspan="2">ACTION</td>
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
            <td class="tbl-align" style="white-space: nowrap;">
              {{-- <a href="/dashboard/posts/{{ $post->id }}" class="badge btn-info"><span data-feather="eye"></span></a> --}}
              <a href="/dashboard/posts/{{ $post->post_id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/posts/{{ $post->post_id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
              </form>
            </td>
          </tr>          
        @endforeach
      </tbody>

    </table>
  </div>
@endsection