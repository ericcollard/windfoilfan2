@extends('layouts.vertical')


@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Windfoilfan</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('attribute.index') }}">{{ __('Attributes') }}</a></li>
                            <li class="breadcrumb-item active">{{ $attribute->name }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Attribute') }} : {{ $attribute->name }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">


                <div class="card  mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h1>{{ __('Attribute') }} : {{ $attribute->name }}</h1>
                        <div>
                            <a href="{{ route('technicaldatas.attributeChart',$attribute) }}" class="btn  btn-primary rounded-pill mb-1">{{ __('Device Data Chart') }}</a>
                        </div>


                    </div>


                    <div class="card-body">
                        <p>Description : </p>
                        {!! $attribute->body!!}


                            <hr>
                            <p>Groupe d'attribut : {{ $attribute->group }}</p>
                            <p>Champ associé : {{ $attribute->field }}</p>
                            <p>Unité : {{ $attribute->unit }}</p>
                            <p>Nombre de décimales : {{ $attribute->decimals }}</p>
                            <p>Affichage graphique : {{ $attribute->chart }}</p>
                            <p>slug : {{ $attribute->slug }}</p>
                            <p>{{ __('Category') }} : {{ $attribute->category->name }}</p>
                    </div>

                        <div class="card-footer py-3 d-flex flex-row align-items-center justify-content-between">
                            <div>
                                ID : {{ $attribute->id }}
                            </div>
                            <div>

                                <ul class="social-list list-inline mt-3">
                                    @can ('update', $attribute)
                                        <li class="list-inline-item text-center">
                                            <a href="{{ route('attribute.edit',$attribute) }}" class="btn  btn-warning rounded-pill mb-1" role="button"> <i class="mdi mdi-square-edit-outline"></i> {{ __("Edit") }}</a>
                                        </li>
                                    @endcan
                                    @can ('delete', $attribute)
                                        <li class="list-inline-item text-center">
                                            <form id="deletePost" method="POST" action="{{ route('attribute.destroy',['attribute' => $attribute]) }}" class="d-sm-inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="button" class="btn  btn-danger rounded-pill mb-1">
                                                    <a href="javascript:{}" onclick="document.getElementById('deletePost').submit(); return false;" style="color: inherit;"><i class="mdi mdi-delete me-1"></i>{{ __('Delete') }}</a>
                                                </button>
                                            </form>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </div>

                </div>


            </div><!-- end col-12-->
        </div><!-- end row-->

    </div>

@endsection


