@extends('MaterialMD::layout')

@section('title', 'AdminMD')

@section('before-tyle')

@endsection

@section('after-style')

@endsection

@section('icons')
@endsection

@section('page-title')
    ESCRITORIO
@endsection

@endsection

@section('content')
    <ol class="breadcrumb breadcrumb-bg-{{ config('seguce92.AdminBSBMaterialDesign.theme') }}">
        <li class="active"><i class="material-icons">home</i> Escritorio</li>
    </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            Blank Page
        </div>
    </div>
@endsection

@section('before-script')

@endsection

@section('after-script')

@endsection
