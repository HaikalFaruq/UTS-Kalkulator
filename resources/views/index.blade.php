{{-- Header --}}
@extends('templates/base')
@section('title','Home')
@section('container')
<div class="container">
<div class="row">
<div class="col-10">
<h1 class="mt-3">KALKULATOR RUMUS</h1>
</div>
<div class="col-5">
<p class="text-muted">Calculating the Volume of the Conical Tube-Ball-Space</p>
</div>
</div> 
{{-- Header --}}
 
<div class="row">
<div class="col-12">
<div class="accordion" id="accordionExample">

{{-- Volume Tabung --}}
<div class="card">
<div class="card-header" id="headingOne">
<h2 class="mb-0">
<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
KALKULATOR Volume Tabung
</button>
</h2>
</div>
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
<div class="card-body">
    {{-- FORMNYA --}}
    <form method="post" action="/tabung">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="number" placeholder="π" class="form-control text-center font-italic rounded-0" disabled/>
            <input type="number" placeholder="r²" class="form-control text-center font-italic rounded-0" disabled/>
            <input type="number" placeholder="t" class="form-control text-center font-italic rounded-0" disabled/>
        </div>
        <div class="input-group">
            <input type="number" name="p" placeholder="3,14" class="form-control text-center rounded-0" disabled/>
            <input type="number" name="r2" class="form-control text-center rounded-0"/>
            <input type="number" name="t" class="form-control text-center rounded-0"/>
        </div>
        <div class="input-group justify-content-center">
            <a class="btn btn-danger mt-3" href="/">Reset</a>
            <button type="submit" class="btn btn-success mt-3">Submit Answer</button>
        </div>

        @if(session('info'))
        <div class="alert alert-success mt-3">
                <h5 class="text-center">{{ session('info') }}</h5>        
        </div>
        @endif

    </form>
    {{-- FORMNYA --}}
</div>
</div>
</div>
{{-- Volume Tabung --}}

{{-- Volume Bola --}}
<div class="card">
<div class="card-header" id="headingTwo">
<h2 class="mb-0">
<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
KALKULATOR Volume Bola
</button>
</h2>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="card-body">
    {{-- FORMNYA --}}
    <form method="POST" action="/bola">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="number" placeholder="" class="form-control text-center font-italic rounded-0" disabled/>
            <input type="number" placeholder="π" class="form-control text-center font-italic rounded-0" disabled/>
            <input type="number" placeholder="r³" class="form-control text-center font-italic rounded-0" disabled/>
        </div>
        <div class="input-group">
            <input type="number" name="first" placeholder="4/3" class="form-control text-center rounded-0" disabled/>
            <input type="number" name="p" placeholder="3,14" class="form-control text-center rounded-0" disabled/>
            <input type="number" name="r" class="form-control text-center rounded-0"/>
        </div>
        <div class="input-group justify-content-center">
            <a class="btn btn-danger mt-3" href="/">Reset</a>
            <button type="submit" class="btn btn-success mt-3">Submit Answer</button>
        </div>

        @if(session('bola'))
        <div class="alert alert-success mt-3">
                <h5 class="text-center">{{ session('bola') }}</h5>        
        </div>
        @endif

    </form>
    {{-- FORMNYA --}}
</div>
</div>
</div>
{{-- Volume Bola --}}

{{-- Ruang Kerucut --}}
<div class="card">
<div class="card-header" id="headingThree">
<h2 class="mb-0">
<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
KALKULATOR Ruang Kerucut
</button>
</h2>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
<div class="card-body">
    {{-- FORMNYA --}}
    <form method="POST" action="/kerucut">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="number" placeholder="" class="form-control text-center font-italic rounded-0" disabled/>
            <input type="number" placeholder="π" class="form-control text-center font-italic rounded-0" disabled/>
            <input type="number" placeholder="r²" class="form-control text-center font-italic rounded-0" disabled/>
            <input type="number" placeholder="t" class="form-control text-center font-italic rounded-0" disabled/>
        </div>
        <div class="input-group">
            <input type="number" name="first" placeholder="1/3" class="form-control text-center rounded-0" disabled/>
            <input type="number" name="p" placeholder="3,14" class="form-control text-center rounded-0" disabled/>
            <input type="number" name="r" class="form-control text-center rounded-0"/>
            <input type="number" name="t" class="form-control text-center rounded-0"/>
        </div>
        <div class="input-group justify-content-center">
            <a class="btn btn-danger mt-3" href="/">Reset</a>
            <button type="submit" class="btn btn-success mt-3">Submit Answer</button>
        </div>

        @if(session('kerucut'))
        <div class="alert alert-success mt-3">
                <h5 class="text-center">{{ session('kerucut') }}</h5>        
        </div>
        @endif

    </form>
    {{-- FORMNYA --}}
</div>
</div>
</div>
{{-- Ruang Kerucut --}}

</div>
</div>
</div>
</div>
@endsection