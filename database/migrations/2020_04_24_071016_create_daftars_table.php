<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->char('jenis_kelamin',1);
            $table->string('tempat');
            $table->date('tanggal');
            $table->string('agama');
            $table->string('cita_cita');
            $table->string('hoby');
            $table->string('anak_ke');
            $table->integer('jumlah_saudara');
            $table->integer('tiri');
            $table->integer('angkat');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('gol');

            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->char('kode_pos',5);
            $table->string('no_telp');
            $table->string('email');
            $table->string('tinggal');

            $table->string('penyakit');
            $table->string('kelainan_jasmani');

            $table->string('nama_ayah');
            $table->string('tempat_lahir_a');
            $table->string('tanggal_lahir_a');
            $table->string('pekerjaan_a');
            $table->string('pendidikan_terakhir_a');
            $table->string('kewarganegaraan_a');
            $table->string('agama_a');
            $table->string('no_hp_a');

            $table->string('nama_ibu');
            $table->string('tempat_lahir_b');
            $table->string('tanggal_lahir_b');
            $table->string('pekerjaan_b');
            $table->string('pendidikan_terakhir_b');
            $table->string('kewarganegaraan_b');
            $table->string('agama_b');
            $table->string('no_hp_b');

            $table->string('nama_wali');
            $table->string('tempat_lahir_c');
            $table->string('tanggal_lahir_c');
            $table->string('pekerjaan_c');
            $table->string('pendidikan_terakhir_c');
            $table->string('hubungan');
            $table->string('kewarganegaraan_c');
            $table->string('agama_c');
            $table->string('no_hp_c');

            $table->char('pai_k7_s1',3);
            $table->char('pai_k7_s2',3);
            $table->char('pai_k8_s1',3);
            $table->char('pai_k8_s2',3);
            $table->char('pai_k9_s1',3);
            $table->char('indo_k7_s1',3);
            $table->char('indo_k7_s2',3);
            $table->char('indo_k8_s1',3);
            $table->char('indo_k8_s2',3);
            $table->char('indo_k9_s1',3);
            $table->char('inggris_k7_s1',3);
            $table->char('inggris_k7_s2',3);
            $table->char('inggris_k8_s1',3);
            $table->char('inggris_k8_s2',3);
            $table->char('inggris_k9_s1',3);
            $table->char('mtk_k7_s1',3);
            $table->char('mtk_k7_s2',3);
            $table->char('mtk_k8_s1',3);
            $table->char('mtk_k8_s2',3);
            $table->char('mtk_k9_s1',3);
            $table->char('ipa_k7_s1',3);
            $table->char('ipa_k7_s2',3);
            $table->char('ipa_k8_s1',3);
            $table->char('ipa_k8_s2',3);
            $table->char('ipa_k9_s1',3);
            $table->char('ips_k7_s1',3);
            $table->char('ips_k7_s2',3);
            $table->char('ips_k8_s1',3);
            $table->char('ips_k8_s2',3);
            $table->char('ips_k9_s1',3  );     
            $table->string('prestasi');
            $table->string('informasi');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftars');
    }
}
