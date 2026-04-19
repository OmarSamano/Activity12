@extends('layouts.app')

@section('title', 'Chuck Norris Cards')

@section('content')
<div id="app" class="container mt-5">
    <h1 class="text-center text-primary mb-5">Chuck Norris Jokes </h1>

    <div class="row">
        <div class="col-12 col-md-4 mb-4" v-for="(item, index) in chuck" :key="index">
            <chuck-card :icon_url="item.icon_url" :value="item.value"></chuck-card>
        </div>
    </div>
</div>

<script>
    // Component definition
    Vue.component('chuck-card', {
        // Data as props to receive from parent
        props: ['icon_url', 'value'],
        // Bootstrap Card
        template: `
                <div class="card h-100 shadow-sm text-center">
                    <img :src="icon_url" class="card-img-top pt-4 mx-auto" alt="Chuck Norris" style="width: 120px;">
                    <div class="card-body d-flex align-items-center">
                        <p class="card-text w-100 fs-5">"@{{ value }}"</p>
                    </div>
                </div>
            `
    });

    // Vue Instance
    var app = new Vue({
        el: '#app',
        data: {
            // New array
            chuck: [{
                    "icon_url": "https://images02.military.com/sites/default/files/2021-04/chucknorris.jpeg",
                    "value": "Chuck Norris can skydive into outer space."
                },
                {
                    "icon_url": "https://images02.military.com/sites/default/files/2021-04/chucknorris.jpeg",
                    "value": "The chief export of Chuck Norris is pain."
                },
                {
                    "icon_url": "https://images02.military.com/sites/default/files/2021-04/chucknorris.jpeg",
                    "value": "Chuck Norris doesn't read books. He stares them down until he gets the information he wants."
                },
                {
                    "icon_url": "https://images02.military.com/sites/default/files/2021-04/chucknorris.jpeg",
                    "value": "Time waits for no man. Unless that man is Chuck Norris."
                },
                {
                    "icon_url": "https://images02.military.com/sites/default/files/2021-04/chucknorris.jpeg",
                    "value": "If you spell Chuck Norris in Scrabble, you win. Forever."
                },
                {
                    "icon_url": "https://tablet-mag-images.b-cdn.net/production/9fbe5447061d306499bb1f695e716306c79726bf-4482x2988.jpg?w=1080&q=70&auto=format&dpr=1",
                    "value": "Rest In Peace, Legend."
                }

            ]
        }
    });
</script>
@endsection