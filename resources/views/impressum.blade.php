@extends('layouts/default')

@section('title', 'Home')

@section('content')
    <div class="wrapper">
        <a href="{{url('/')}} {{-- url()->previous() --}}" class="link-home">
            <i class="fas fa-lg fa-arrow-left"></i>
            Home
        </a>

        <div class="impressum">
            <h5> Angaben gemäß § 5 TMG </h5>
            <p>
                Maximilian Mewes<br>
                Kleine Mühlenstraße 17<br>
                14774 Brandenburg an der Havel<br>
            </p>

            <h5> Kontaktdaten </h5>
            <p>
                Telefon: 01523 3869318<br>
                E-Mail: mewes.maximilian@gmx.de
            </p>
        </div>
    </div>

@endsection