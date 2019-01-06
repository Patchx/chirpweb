@extends('layouts.default')

@section('title', 'Chirp - Sign Up')
@section('description', 'Sign up for Chirp traffic alerts')

@section('head')
@endsection

@section('content')
    <div class="container mb-30">
        <div id="vue_app">
            <transition name="page-component fade" mode="out-in">
                <component 
                    v-bind:is="current_page"
                    v-bind="dynamicProps"
                ></component>
            </transition>
        </div>
    </div>
@endsection

@section('end_body')
    <script src="/js/pages/signup-page.js"></script>
@endsection
