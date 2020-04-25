@extends('daftars.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2 style="font-family: bold;color: white">Selamat Datang Di Pendaftaran Smk Wikrama</h2>
                <br>
            </center>
            

            

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    
    <center>
       
        <a class="btn btn-primary" href="{{ route('daftars.create') }}">                Mulai Daftar              </a>
    </center>
                

           

  

      

@endsection