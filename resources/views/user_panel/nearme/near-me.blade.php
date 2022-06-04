@extends('layouts.userPanel_layout')


@section('content')

    <style>

        img {
            max-width: 100%;
            display: block;
        }
        ul {
            list-style: none;
        }

        /* Utilities */
        .card::after,
        .card img {
            border-radius: 50%;
        }
        body,
        .card,
        .stats {
            display: flex;
        }

        .card {
            padding: 2.5rem 2rem;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, .5);
            max-width: 500px;
            box-shadow: 0 0 30px rgba(0, 0, 0, .15);
            margin: 1rem;
            position: relative;
            transform-style: preserve-3d;
            overflow: hidden;
        }
        .card::before,
        .card::after {
            content: '';
            position: absolute;
            z-index: -1;
        }
        .card::before {
            width: 100%;
            height: 100%;
            border: 1px solid #FFF;
            border-radius: 10px;
            top: -.7rem;
            left: -.7rem;
        }
        .card::after {
            height: 15rem;
            width: 15rem;
            background-color: #4172f5aa;
            top: -8rem;
            right: -8rem;
            box-shadow: 2rem 6rem 0 -3rem #FFF
        }

        .card img {
            width: 8rem;
            min-width: 80px;
            box-shadow: 0 0 0 5px #FFF;
        }

        .infos {
            margin-left: 1.5rem;
        }

        .name {
            margin-bottom: 1rem;
        }
        .name h2 {
            font-size: 1.3rem;
        }
        .name h4 {
            font-size: .8rem;
            color: #333
        }

        .text {
            font-size: .9rem;
            margin-bottom: 1rem;
        }

        .stats {
            margin-bottom: 1rem;
        }
        .stats li {
            min-width: 5rem;
        }
        .stats li h3 {
            font-size: .99rem;
        }
        .stats li h4 {
            font-size: .75rem;
        }

        .links button {
            font-family: 'Poppins', sans-serif;
            min-width: 120px;
            padding: .5rem;
            border: 1px solid rgb(0 168 255);
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all .25s linear;
        }
        .links .follow,
        .links .view:hover {
            background: -webkit-linear-gradient(left, rgb(0 168 255), rgb(185 0 255 / 94%));;
            color: #FFF;
        }
        .links .view,
        .links .follow:hover{
            background-color: transparent;
            color: rgb(0 168 255);
        }

        @media screen and (max-width: 450px) {
            .card {
                display: block;
            }
            .infos {
                margin-left: 0;
                margin-top: 1.5rem;
            }
            .links button {
                min-width: 100px;
            }
        }

    </style>

    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($data as $user)

                            <div class="col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="img">
                                        <img src="https://images.unsplash.com/photo-1610216705422-caa3fcb6d158?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGZhY2V8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                                    </div>
                                    <div class="infos">
                                        <div class="name">
                                            <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h2>
                                            <h4>{{ Auth::user()->profile_for }}</h4>
                                        </div>
                                        <p class="text">
                                            {{ $user->bio }}
                                        </p>
                                        <div class="links">
                                            <button class="follow">Connect</button>
                                            <button class="view">View profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
