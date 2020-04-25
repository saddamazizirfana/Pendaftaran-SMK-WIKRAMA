@extends('daftars.layout')
 
@section('content')
   @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action= "{{ route('daftars.store') }}" method="POST">
    @csrf
     <h4>I.Data Diri Siswa</h4>
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap :</strong>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap ">
            </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Panggilan :</strong>
                <input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan">
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <select name="jenis_kelamin" class="form-control">
                	<option value="L">Laki-Laki</option>
                	<option value="P">Perempuan</option>
                </select>
            </div>
        </div>
    </div>

  <div class="form-group ">
  	<div class="row">
  	<div class="col">
    <strong>Tempat Lahir</strong>
    <div style="width: 500px;">
      <input type="text" class="form-control" id="tempat" placeholder="" name="tempat" >
    </div>
</div>
    <div class="col">
    <strong>Tanggal Lahir</strong>
    <div style="width: 500px;">
      <input type="date" class="form-control" id="tanggal" placeholder="" name="tanggal" >
    </div>
  </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama :</strong>
                <select name="agama" class="form-control">
                	<option value="Islam">Islam</option>
                	<option value="Kristen Katholik">Kristen Katholik</option>
                	<option value="Kristen Protestan">Kristen Protestan</option>
                	<option value="Budha">Budha</option>
                	<option value="Hindu">Hindu</option>
                	<option value="Konghuchu">Konghuchu</option>
                </select>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cita-Cita :</strong>
                <input type="text" name="cita_cita" class="form-control" placeholder="Cita-Cita">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hobby :</strong>
                <input type="text" name="hoby" class="form-control" placeholder="Hobby">
            </div>
        </div>


        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Anak Ke :</strong>
                <input type="number" name="anak_ke" class="form-control" >
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Tiri :</strong>
                <input type="number" name="tiri" class="form-control" >
            </div>
        </div>


        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Angkat :</strong>
                <input type="number" name="angkat" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Saudara :</strong>
                <input type="number" name="jumlah_saudara" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Berat Badan :</strong>
                <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tinggi Badan :</strong>
                <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Golongan Darah :</strong>
               <select name="gol" class="form-control">
               	<option value="A">A</option>
               	<option value="B">B</option>
               	<option value="O">O</option>
               	<option value="AB">AB</option>
               </select>
            </div>
        </div>

       		 <h4>II.Keterangan Tempat Tinggal</h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat"></textarea>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelurahan :</strong>
                <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kecamatan :</strong>
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kota :</strong>
                <input type="text" name="kota" class="form-control" placeholder="Kota">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Provinsi :</strong>
                <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Pos :</strong>
                <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Telepone :</strong>
                <input type="text" name="no_telp" class="form-control" placeholder="No Telepone">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tinggal Dengan Siapa :</strong>
                <select name="tinggal" class="form-control">
                	<option value="Orang Tua">Orang Tua</option>
                	<option value="Asrama">Asrama</option>
                	<option value="Saudara">Saudara</option>
                </select>
            </div>
        </div>
        <h4>III.Keterangan Kesehatan</h4>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penyakit Yang Di Derita :</strong>
                <select name="penyakit" class="form-control">
                	<option value="TBC">TBC</option>
                	<option value="Malaria">Malaria</option>
                	<option value="Chotipa">Chotipa</option>
                	<option value="Cacar">Cacar</option>
                	<option value="Lainnya">Lainnya</option>
                	<option value="Tidak">Tidak Adaem</option>
                </select>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelainan Jasmani/Lainnya :</strong>
                <input type="text" name="kelainan_jasmani" class="form-control" placeholder="Kelainan Jasamani">
            </div>
        </div>
        <h4>IV.Data Orang Tua/Wali</h4>
<br>
         <div class="col-xs-12 col-sm-12 col-md-12">
         	<strong>a.Ayah</strong>
            <div class="form-group">
                <strong>Nama Ayah :</strong>
                <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Lahir :</strong>
                <input type="text" name="tempat_lahir_a" class="form-control" placeholder="Tempat Lahir">
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir :</strong>
                <input type="date" name="tanggal_lahir_a" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan :</strong>
                <input type="text" name="pekerjaan_a" class="form-control" placeholder="Pekerjaan" >
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pendidikan Terakhir :</strong>
                <select name="pendidikan_terakhir_a" class="form-control">
                	<option value="SD">SD</option>
                	<option value="SMP">SMP</option>
                	<option value="SMA">SMA</option>
                	<option value="Universitas">Universitas</option>
                </select>
            </div>
        </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kewarganegraan :</strong>
               <select name="kewarganegaraan_a" class="form-control">
               	<option value="WNI">WNI</option>
               	<option value="WNA">WNA</option>
               </select>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama :</strong>
               <select name="agama_a" class="form-control">
               	<option value="Islam">Islam</option>
                	<option value="Kristen Katholik">Kristen Katholik</option>
                	<option value="Kristen Protestan">Kristen Protestan</option>
                	<option value="Budha">Budha</option>
                	<option value="Hindu">Hindu</option>
                	<option value="Konghuchu">Konghuchu</option>
               </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No HP :</strong>
                <input type="text" name="no_hp_a" class="form-control" placeholder="No HP" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        	<strong>b.Ibu</strong>
            <div class="form-group">
                <strong>Nama Ibu :</strong>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Lahir :</strong>
                <input type="text" name="tempat_lahir_b" class="form-control" placeholder="Tempat Lahir" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tanggal_lahir_b" class="form-control" placeholder="Tanggal Lahir" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan :</strong>
                <input type="text" name="pekerjaan_b" class="form-control" placeholder="Pekerjaan" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pendidikan Terakhir :</strong>
                 <select name="pendidikan_terakhir_b" class="form-control">
                	<option value="SD">SD</option>
                	<option value="SMP">SMP</option>
                	<option value="SMA">SMA</option>
                	<option value="Universitas">Universitas</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kewarganegaraan :</strong>
                <select name="kewarganegaraan_b" class="form-control" >
                	<option value="WNI">WNI</option>
                	<option value="WNA">WNA</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama :</strong>
               <select name="agama_b" class="form-control">
               	<option value="Islam">Islam</option>
                	<option value="Kristen Katholik">Kristen Katholik</option>
                	<option value="Kristen Protestan">Kristen Protestan</option>
                	<option value="Budha">Budha</option>
                	<option value="Hindu">Hindu</option>
                	<option value="Konghuchu">Konghuchu</option>
               </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Hp :</strong>
                <input type="text" name="no_hp_b" class="form-control" placeholder="NO HP" >
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
         	<strong>c.Wali</strong>
            <div class="form-group">
                <strong>Nama wali :</strong>
                <input type="text" name="nama_wali" class="form-control" placeholder=" Nama Wali" >
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Lahir :</strong>
                <input type="text" name="tempat_lahir_c" class="form-control" placeholder="Tempat Lahir" >
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal :Lahir :</strong>
                <input type="date" name="tanggal_lahir_c" class="form-control" placeholder="Tanggal Lahir" >
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pekerjaan :</strong>
                <input type="text" name="pekerjaan_c" class="form-control" placeholder="Pekerjaan" >
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pendidikan Terakhir :</strong>
                 <select name="pendidikan_terakhir_c" class="form-control">
                	<option value="SD">SD</option>
                	<option value="SMP">SMP</option>
                	<option value="SMA">SMA</option>
                	<option value="Universitas">Universitas</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hubungan :</strong>
                <input type="text" name="hubungan" class="form-control" placeholder="Hubungan Dengan Murid" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kewarganegaraan :</strong>
                <select name="kewarganegaraan_c" class="form-control" >
                	<option value="WNI">WNI</option>
                	<option value="WNA">WNA</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama :</strong>
               <select name="agama_c" class="form-control">
               	<option value="Islam">Islam</option>
                	<option value="Kristen Katholik">Kristen Katholik</option>
                	<option value="Kristen Protestan">Kristen Protestan</option>
                	<option value="Budha">Budha</option>
                	<option value="Hindu">Hindu</option>
                	<option value="Konghuchu">Konghuchu</option>
               </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No HP :</strong>
                <input type="text" name="no_hp_c" class="form-control" placeholder="No HP" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                <input type="text" name="email_c" class="form-control" placeholder="Email" >
            </div>
        </div>
        
        <h4>V. Nilai Rapot</h4>
<table>
  <tr>
    <th rowspan="2" >No</th>
    <th rowspan="2" >Mata Pelajaran</th>
    <th colspan="2" style="text-align: center" >Kelas 7</th>
    <th colspan="2" style="text-align: center" >Kelas 8</th>
    <th style="text-align: center" >Kelas 9</th>
  </tr>
  <tr>
    <td style="text-align: center" >Semester 1</td>
    <td style="text-align: center" >Semester 2</td>
    <td style="text-align: center" >Semester 1</td>
    <td style="text-align: center" >Semester 2</td>
    <td style="text-align: center"  >Semester 1</td>
  </tr>
  <tr>
    <td>1</td>
    <td>PAI</td>
    <td ><input type="text" name="pai_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="pai_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="pai_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="pai_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="pai_k9_s1"  style="border: 0; text-align: center"></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Bahasa Indonesia</td>
    <td ><input type="text" name="indo_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="indo_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="indo_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="indo_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="indo_k9_s1"  style="border: 0; text-align: center"></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Bahasa Inggris</td>
    <td ><input type="text" name="inggris_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="inggris_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="inggris_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="inggris_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="inggris_k9_s1"  style="border: 0; text-align: center"></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Matematika</td>
    <td ><input type="text" name="mtk_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="mtk_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="mtk_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="mtk_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="mtk_k9_s1"  style="border: 0; text-align: center"></td>
    </tr>
  <tr>
    <td>5</td>
    <td>IPA</td>
    <td ><input type="text" name="ipa_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ipa_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ipa_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ipa_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ipa_k9_s1"  style="border: 0; text-align: center"></td>
    </tr>

    <tr>
    <td>6</td>
    <td>IPS</td>
    <td ><input type="text" name="ips_k7_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ips_k7_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ips_k8_s1"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ips_k8_s2"  style="border: 0; text-align: center"></td>
    <td ><input type="text" name="ips_k9_s1"  style="border: 0; text-align: center"></td>
    </tr>
</table>
<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prestasi Yang DI Raih :</strong>
                <input type="text" name="prestasi" class="form-control" placeholder="Prestasi" >
            </div>
        </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Informasi :</strong>
               <select name="informasi" class="form-control">
               	<option value="Family">Family</option>
               	<option value="Webbsite">Website</option>
               	<option value="`Teman">Teman</option>
               	<option value="Brosur">Brosur</option>
               	<option value="Sekolah SMP">Sekolah SMP</option>
               	<option value="Facebook">Facebook</option>
               	<option value="Karyawan">Karyawan</option>
               	<option value="Guru">Guru</option>
               	<option value="Lainnya">Lainnya</option>
               </select>
            </div>	
        </div>
        

  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
   
      
@endsection
