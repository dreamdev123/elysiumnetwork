
<div class="mainBannerWrapper">
    
    <div class="headerSection fixed-header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container" style="background-color: #fff; height: 75px;">
                <a class="navbar-brand" href="{{ route('marketing::index') }}"><img src="{{ asset('images/NetworkLogoB.svg') }}" class="img-fluid" alt="{{__('header.title')}}" title="{{__('header.title')}}" /></a>
                <div class="collapse navbar-collapse flex-grow-0 d-none d-lg-block" id="navbarNav">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" id="home-nav">
                            <a href="{{ route('marketing::index') }}@if('marketing::index'==Route::current()->getName())#home @endif" class="scroll @if('marketing::index'!=Route::current()->getName()) link @endif">HOME</a>
                        </li>
                        <li class="nav-item" id="about-nav">
                            <a href="{{ route('marketing::index') }}#about" class="scroll @if('marketing::index'!=Route::current()->getName()) link @endif">ABOUT</a>
                        </li>
                        <li class="nav-item" id="portfolios-nav">
                            <a href="{{ route('marketing::index') }}#portfolios" class="scroll @if('marketing::index'!=Route::current()->getName()) link @endif">PRODUCTS</a>
                        </li>
                        <!-- <li class="nav-item" id="team-nav">
                            <a href="{{ route('marketing::index') }}#teams" class="scroll @if('marketing::index'!=Route::current()->getName()) link @endif">TEAM</a>
                        </li> -->
                        <li class="nav-item contact-nav">
                            <a href="{{ route('marketing::contact-us') }}" class="scroll link">CONTACT</a>
                        </li>
                        <li class="nav-item contact-nav">
                            <a href="https://office.elysiumnetwork.io/user/home">LOGIN</a>
                        </li>
                        <li class="nav-item contact-nav">
                            <a href="https://office.elysiumnetwork.io/user/register">JOIN</a>
                        </li>
                    </ul>
                </div>
                <div class="meanmenu-div d-block d-lg-none">
                    <nav class="menamenu-nav">
                        <ul>
                            <li >
                                <a href="{{ route('marketing::index') }}@if('marketing::index'==Route::current()->getName())#home @endif" class="scroll @if('marketing::index'!=Route::current()->getName()) link @endif">HOME</a>
                            </li>
                            <li >
                                <a href="{{ route('marketing::index') }}#about" class="scroll @if('marketing::index'!=Route::current()->getName()) link @endif">ABOUT</a>
                            </li>
                            <li>
                                <a href="{{ route('marketing::index') }}#portfolios" class="scroll @if('marketing::index'!=Route::current()->getName()) link @endif">PRODUCTS</a>
                            </li>
                            <!-- <li>
                                 <a href="{{ route('marketing::index') }}#teams" class="scroll @if('marketing::index'!=Route::current()->getName()) link @endif">TEAM</a>
                            </li> -->
                            <li>
                                <a href="{{ route('marketing::contact-us') }}" class="scroll link">CONTACT</a>
                            </li>
                            <li>
                                <a href="https://office.elysiumnetwork.io/user/home">LOGIN</a>
                            </li>
                            <li>
                                <a href="https://office.elysiumnetwork.io/user/register">JOIN</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
    </div>
</div>