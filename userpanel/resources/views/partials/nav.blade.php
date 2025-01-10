
<?php $a="active" ?>

<div class="movies_nav" style="border: 1px solid white;">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="w3_home_act @if(Route::currentRouteName()=='index') active @endif"><a href="{{route('index')}}">Home</a></li>
                        <li class="dropdown" class="@if(Route::currentRouteName()=='genres') active @endif">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        {{-- @foreach ($stp as $s) --}}
                                        <li><a href="{{route('genres',['id'=>'Action'])}}">Action</a></li>
                                        <li><a href="{{route('genres',['id'=>'Horror'])}}">Horror</a></li>
                                        <li><a href="{{route('genres',['id'=>'Anime'])}}">Anime</a></li>
                                        <li><a href="{{route('genres',['id'=>'Kids'])}}">Kids</a></li>
                                        {{-- <li><a href="{{route('genres',['id'=>'Action'])}}">Horror</a></li>
                                        <li><a href="{{route('genres',['id'=>'Action'])}}">Romance</a></li>
                                        <li><a href="{{route('genres',['id'=>'Action'])}}">Sports</a></li>
                                        <li><a href="{{route('genres',['id'=>'Action'])}}">War</a></li> --}}
                                        {{-- @endforeach --}}
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="{{route('genres',['id'=>'Comedy'])}}">Comedy</a></li>
                                        <li><a href="{{route('genres',['id'=>'Fantasy'])}}">Fantasy</a></li>
                                        <li><a href="{{route('genres',['id'=>'Drama'])}}">Drama</a></li>
                                        <li><a href="{{route('genres',['id'=>'Mystery & Thrillers'])}}">Mystery & Thrillers</a></li>
                                        {{-- <li><a href="genres.html">Thriller</a></li> --}}
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="{{route('genres',['id'=>'Science fiction'])}}">Science fiction</a></li>
                                        <li><a href="{{route('genres',['id'=>'Romance'])}}">Romance</a></li>
                                        {{-- <li><a href="genres.html">Drama</a></li>
                                        <li><a href="genres.html">History</a></li>
                                        <li><a href="genres.html">Musical</a></li>
                                        <li><a href="genres.html">Psychological</a></li> --}}
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li class="@if(Route::currentRouteName()=='series') active @endif"><a href="{{route('series')}}">tv - series</a></li>
                        <li class="@if(Route::currentRouteName()=='news') active @endif"><a href="{{route('news')}}">news</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{route('genres')}}">Asia</a></li>
                                            <li><a href="{{route('genres')}}">France</a></li>
                                            <li><a href="{{route('genres')}}">Taiwan</a></li>
                                            <li><a href="{{route('genres')}}">United States</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{route('genres')}}">China</a></li>
                                            <li><a href="{{route('genres')}}">HongCong</a></li>
                                            <li><a href="{{route('genres')}}">Japan</a></li>
                                            <li><a href="{{route('genres')}}">Thailand</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{route('genres')}}">Euro</a></li>
                                            <li><a href="{{route('genres')}}">India</a></li>
                                            <li><a href="{{route('genres')}}">Korea</a></li>
                                            <li><a href="{{route('genres')}}">United Kingdom</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li  class="@if(Route::currentRouteName()=='contact') active @endif"><a href="{{route('contact')}}">Contact</a></li>
                        <li  class="@if(Route::currentRouteName()=='faq') active @endif"><a href="{{route('faq')}}">Faq</a></li>
                    </ul>
                </nav>
            </div>
        </nav>	
    </div>
</div>