<?php
  
namespace App\Http\Controllers;
  
use App\Daftar;
use Illuminate\Http\Request;
  
class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('daftars.index');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftars.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
            
            'nama_lengkap'=> 'required',
            'nama_panggilan'=> 'required',
            'jenis_kelamin'=> 'required',
            'tempat'=>'required',
            'tanggal'=>'required',
            'agama'=> 'required',
            'cita_cita'=>'required',
            'hoby'=>'required',
            'anak_ke'=> 'required',
            'tiri'=> 'required',
            'angkat'=>'required',
            'jumlah_saudara'=>'required',
            'berat_badan'=> 'required',
            'tinggi_badan'=>'required',
            'gol'=> 'required',
            'alamat'=> 'required',
            'kelurahan'=>'required',
            'kecamatan'=> 'required',
            'kota'=> 'required',
            'provinsi'=> 'required',
            'kode_pos'=>'required',
            'no_telp'=> 'required',
            'email'=>'required',
            'tinggal'=> 'required',
            'penyakit'=> 'required',
            'kelainan_jasmani'=>'required',
            'nama_ayah'=> 'required',
            'tempat_lahir_a'=> 'required',
            'tanggal_lahir_a'=>'required',
            'pekerjaan_a'=> 'required',
            'pendidikan_terakhir_a'=> 'required',
            'kewarganegaraan_a'=> 'required',
            'agama_a'=>'required',
            'no_hp_a'=> 'required',
            'nama_ibu'=> 'required',
            'tempat_lahir_b'=> 'required',
            'tanggal_lahir_b'=> 'required',
            'pekerjaan_b'=> 'required',
            'pendidikan_terakhir_b'=> 'required',
            'kewarganegaraan_b'=> 'required',
            'agama_b'=> 'required',
            'no_hp_b'=> 'required',
            'nama_wali'=> 'required',
            'tempat_lahir_c'=> 'required',
            'tanggal_lahir_c'=> 'required',
            'pekerjaan_c'=> 'required',
            'pendidikan_terakhir_c'=>'required',
            'hubungan'=> 'required',
            'kewarganegaraan_c'=>'required',
            'agama_c'=>'required',
            'no_hp_c'=>'required',
            'email_c'=> 'required',
            'pai_k7_s1'=> 'required',
            'pai_k7_s2'=> 'required',
            'pai_k8_s1'=> 'required',
            'pai_k8_s2'=> 'required',
            'pai_k9_s1'=> 'required',
            'indo_k7_s1'=> 'required',
            'indo_k7_s2'=> 'required',
            'indo_k8_s1'=> 'required',
            'indo_k8_s2'=> 'required',
            'indo_k9_s1'=> 'required',
            'inggris_k7_s1'=> 'required',
            'inggris_k7_s2'=> 'required',
            'inggris_k8_s1'=> 'required',
            'inggris_k8_s2'=> 'required',
            'inggris_k9_s1'=> 'required',
            'mtk_k7_s1'=> 'required',
            'mtk_k7_s2'=> 'required',
            'mtk_k8_s1'=> 'required',
            'mtk_k8_s2'=> 'required',
            'mtk_k9_s1'=> 'required',
            'ipa_k7_s1'=> 'required',
            'ipa_k7_s2'=> 'required',
            'ipa_k8_s1'=> 'required',
            'ipa_k8_s2'=> 'required',
            'ipa_k9_s1'=> 'required',
            'ips_k7_s1'=> 'required',
            'ips_k7_s2'=> 'required',
            'ips_k8_s1'=> 'required',
            'ips_k8_s2'=> 'required',
            'ips_k9_s1'=> 'required',
            'prestasi'=>  'required',
            'informasi'=> 'required',
        ]);
    
        daftar::create($request->all());
        return redirect()->route('daftars.index')
                        ->with('success','Daftar created successfully.');
    }	
}