<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h2>Watch unlimited movies</h2>
                    {{-- <div class="w3ls_footer_grid_left1_pos">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Your email..." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                <img style="width: 90px; border-radius:70%; border-radius: 2px solid black;" src="{{asset('assets/images/logo.jpg')}}" alt="">

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p style="color: #fff;">&copy; 2024 Movies. All rights reserved | Design by <strong>Primeflix</strong></p>
        </div>
        <div class="col-md-7 w3ls_footer_grid1_right">
            <ul>
                <li>
                    <a href="{{route('genres')}}">Movies</a>
                </li>
                <li>
                    <a href="{{route('faq')}}">FAQ</a>
                </li>
                <li>
                    <a href="{{route('genres')}}">Action</a>
                </li>
                <li>
                    <a href="{{route('genres')}}">Adventure</a>
                </li>
                <li>
                    <a href="{{route('genres')}}">Comedy</a>
                </li>
                {{-- <li>
                    <a href="{{route('faq')}}">Icons</a>
                </li> --}}
                <li>
                    <a href="{{route('contact')}}">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>