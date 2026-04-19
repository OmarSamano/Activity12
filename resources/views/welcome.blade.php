<!-- Heredamos de la vista principal -->
@extends('layouts.app')

@section('title', 'Chuck Norris Jokes')

@section('content')
<!-- Scope de Vue -->
<div id="app">
    <h1>Chuck Norris Jokes en Vue.js</h1>

    <ul class="joke-list">
        <!-- Iteramos sobre los datos usando la directiva v-for -->
        <li class="joke-item" v-for="(joke, index) in chuck" :key="index">
            @{{ joke.value }}
        </li>
    </ul>
</div>

<!-- Main JavaScript File(Vue instance) -->
<script>
    var app = new Vue({
        el: '#app',
        data: {
            // Array provided 
            chuck: [{
                    "value": "Chuck Norris can skydive into outer space."
                },
                {
                    "value": "The chief export of Chuck Norris is pain."
                },
                {
                    "value": "Chuck Norris doesn't read books. He stares them down until he gets the information he wants."
                },
                {
                    "value": "Time waits for no man. Unless that man is Chuck Norris."
                },
                {
                    "value": "If you spell Chuck Norris in Scrabble, you win. Forever."
                }
            ]
        }
    });
</script>
@endsection