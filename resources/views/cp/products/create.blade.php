@extends('statamic::layout')
@section('title', __('butik::product.create'))

@section('content')
    <publish-form
        title="{{ __('butik::product.form_title') }}"
        action="{{ cp_route('butik.products.store') }}"
        :blueprint='@json($blueprint)'
        :meta='@json($meta)'
        :values='@json($values)'
    ></publish-form>
@stop
