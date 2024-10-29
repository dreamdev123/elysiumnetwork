<section id="home">
<div style="width: 100%; background-color: #1F1F20; padding-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="col text-white float-left">
                <h2 class="content-head" style="margin: 0 0 8px; padding: 0; font-size: 35px;">Welcome to Elysium Network</h2>
                <p class="subtitle-text" style="font-size: 15px; color: #c1c1c1; margin-top: 10px;">RADICAL PRODUCTS - RADICAL RESULTS<br/>EMPOWERING INTRODUCING BROKERS & RESELLERS</p>
            </div>
            <div class="col text-white " style="align-self: center; ">
                <a class="participate-button" href="https://office.elysiumnetwork.io/user/register">PARTICIPATE NOW</a>
            </div>
        </div>
    </div>
</div>
</section>
<section id="about" data-anchor="about">
<div class="container" style="padding: 100px 0;">
    <div class="row" style="margin-bottom: 65px;">
        <div class="col-12">
            <h2 class="home-head1" >BECOME A FINTECH ACCESS PROVIDER — IB-RESELLER</h2>
            <h2 class="home-subhead1" >UNLIMITED INCOME POTENTIAL AT A FRACTION OF THE COST</h2>
        </div>
        <div class="header-strips-one" style="width: 70px; height: 1px; position: relative; margin: 20px auto 19px; border-top: 1px solid #d0d0d0;"></div>
    </div>
    <div class="row" style=" margin-right: 0; margin-left: 0;">
        <div class="col-sm-6">
            <h3 class="box-head" style="color: #3e3e3e">WE PROVIDE AFFORDABLE AND HASSLE-FREE BUSINESS OPPORTUNITIES FOR ASPIRING ENTREPRENEURS</h3>
            <p class="box-desc" style="text-align: justify; color: #3e3e3e;">Many people are seeking out a financial ‘Plan B’ for peace of mind and happiness. Being one of the most successful companies in our industry, we are the ‘go-to’ for individuals who want to enrich their lives in a meaningful way by equipping themselves with the best tools to reach their goals.</p>
        </div>
        <div class="col-sm-6">
            <h3 class="box-head" style="color: #3e3e3e">DEMOCRATISING WEALTH</h3>
            <p class="box-desc" style="text-align: justify; color: #3e3e3e;">Elysium connects participants to trading bot strategies (QUANT EA TM) developed by a professional prop desk. Until now, only high-net-worth individuals and institutional parties had access to such strategies. Via our trading bot signals, programmed on quantitative analysis, you basically have access to the tried-and tested actions of a team of disciplined, seasoned trading veterans, with a proven track record of success.</p>
        </div>
    </div>
</div>
<div class="desclimWrapper wealth1 parallax " style="background-size: cover; position: relative;">
    <div class="container" style="transform: translate3d(0px, 0px, 0px);">
        <div class="row">
            <div class="col-sm-6 d-flex">
                <div style="margin-top: auto; margin-bottom: auto;">
                    <h3 class="desclim-title" style="color: #ffffff; font-size: 25px;">DISCOVER OUR AMAZING & INNOVATIVE PRODUCTS</h3>
                    <p class="desclim-subdesc" style="color: #ffffff; font-weight: 300; text-align: justify; font-size: 14px;">Elysium offers a tailor-made, state-of-the-art Fintech platform and a relevant suite of tools for scaling up both social selling and affiliate marketing, to get clients engaged in our cloud operated QUANT EA signal portfolios ("Trading bots"). By equipping Introducing Brokers with the latest technology and tools, we make sure they are the most effective in the field.</p>
                    <p class="desclim-subdesc" style="color: #ffffff; font-weight: 300; text-align: justify; font-size: 14px;">Fintech aka Financial Technology is the term used to describe the plethora of new technology platforms that are disrupting the financial industry.</p>
                </div>
            </div>
            <div class="col-sm-6 d-flex">
                <div class="discover-eos-img">
                    <img src="{{asset('images/Home.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="celebrating" data-anchor="celebrating" style="padding: 100px 0;">
    <div class="row" style="margin-bottom: 65px;">
        <div class="col-12">
            <h2 class="home-head" style="">FINTECH DELIVERS UNLIMITED OPPORTUNITIES</h2>
        </div>
        <div class="header-strips-one" style="width: 70px; height: 1px; position: relative; margin: 20px auto 19px; border-top: 1px solid #d0d0d0;"></div>
    </div>
    <div class="row" style=" margin-right: 0; margin-left: 0;">
        <div class="col-sm-6">
            <h3 class="box-head" style="color: #3e3e3e">SAAS: STATE-OF-THE-ART SOFTWARE LICENSING AND RESELLING FOR YOU AND YOUR IB NETWORK</h3>
            <p class="box-desc" style="text-align: justify; color: #3e3e3e;">In order to keep you informed of your clients trading results and your IB network, we provide you with fully automated commission-tracking software, supporting state-of-the-art Social Media software, an administration back office with a real-time connection to 3rd party brokerages. As an IB you have the opportunity to resell this software world-wide and develop an IB/Affiliate organisation. Check out the detailed information below.</p>
        </div>
        <div class="col-sm-6">
            <h3 class="box-head" style="color: #3e3e3e">QUANT EA, TRADING BOTS DEVELOPED AND MAINTAINED BY A 10-YEAR WINNING PROP DESK</h3>
            <p class="box-desc" style="text-align: justify; color: #3e3e3e;">Elysium offers EA signals that are produced and consistently maintained by Analysts, Quants and Traders, with proven track records and experience from investment banks such as Goldman Sachs and Merrill Lynch. They have earned their stripes in the industry. Our signals can be integrated at clients’ discretion, with a few simple clicks at their 3rd party independent brokerages. As an IB you have the exclusive rights to offer this service to your client base. Check out the detailed information below.</p>
        </div>
    </div>
</div>

<script>
    // document.getElementById('home-background-music').play();
    document.getElementById('plexusVideo').pause();
</script>

<script type="text/javascript">
    const index = {
        init: function () {
            this.variables();
            this.addEventListeners();
            this.playVideo();
        },
        variables: function () {
            this.showLanguagesButton = $('[data-action="show-languages"]');
            this.languagesContainer = $('[data-content="languages-container"]');
            this.navBar = $('#navbarNav');
            this.headerSection = $('.headerSection');
            this.buttonNavBarToggler = $('button.navbar-toggler');
        },
        addEventListeners: function () {
            this.showLanguagesButton.on('click', function () {
                // event.preventDefault();
                this.languagesContainer.fadeToggle(200);
            }.bind(this));
            this.buttonNavBarToggler.on('click', function () {
                this.showBackgroundOnTopMenu();
            }.bind(this));
        },
        playVideo: function () {
            // $('#plexusVideo').trigger('play');
        },
        showBackgroundOnTopMenu: function () {
            if (!this.navBar.hasClass('show')) {
                this.headerSection.addClass('bg-navbar');
            } else {
                this.headerSection.removeClass('bg-navbar');
            }
        }
    };

    $(document).ready(function() {
        jQuery('html,body').animate({scrollTop:0},500);
        index.init();
        var plexusVideo = document.getElementById('plexusVideo');
        plexusVideo.pause();
        $('body').toggleClass('hide-overflow');
    });
    
    $('.play-video-btn').click(function() {
        $('.button-group-area').hide();
        $('body').removeClass('hide-overflow');
        $('#video-area').removeClass('video-area-hidden');
        $('#video-area').toggleClass('video-area-show');
        $('.background-music-con-btn').show();
        plexusVideo.play();
    })
    $('.continue-to-website').click(function() {
        $('.button-group-area').hide();
        $('body').removeClass('hide-overflow');
        $('#video-area').removeClass('video-area-hidden');
        $('#video-area').toggleClass('video-area-show');
        $('.background-music-con-btn').show();
        plexusVideo.play();
    })
</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        var backgroundMusicPlayer = document.getElementById('home-background-music');
        // var video_mac1 = document.getElementById("video-mac1");
        // var plexusVideo = document.getElementById('plexusVideo');

        // jQuery('.play-bg-music').click(function(){
        //     var $this = jQuery(this);
        //     if ($this.hasClass('play-bg-music')) {
        //         $this.removeClass('play-bg-music');
        //         $this.toggleClass('pause-bg-music');
        //         backgroundMusicPlayer.play();
        //     } else {
        //         $this.removeClass('pause-bg-music');
        //         $this.toggleClass('play-bg-music');
        //         backgroundMusicPlayer.pause();
        //     }
        // });

        function amountscrolled(){
            var winheight = jQuery(window).height()
            var docheight = jQuery(document).height()
            var scrollTop = jQuery(window).scrollTop()
            var trackLength = docheight - winheight
            var pctScrolled = Math.floor(scrollTop/trackLength * 100) // gets percentage scrolled (ie: 80 NaN if tracklength == 0)
            const windowWidth = window.innerWidth * window.devicePixelRatio;
            const windowHeight = window.innerHeight * window.devicePixelRatio;
            const screenWidth = window.screen.width;
            const screenHeight = window.screen.height;
            if (((windowWidth/screenWidth)>=0.95) && ((windowHeight/screenHeight)>=0.95)) {
                console.log("Fullscreen");
            }
            else {
                if(pctScrolled >= 3) {
                    // backgroundMusicPlayer.pause();
                    // plexusVideo.pause();
                } else {
                    // backgroundMusicPlayer.play();
                    plexusVideo.play();
                }
                if (pctScrolled < 70) {
                    // if (video_mac1.paused) {
                    //   // video_mac1.play(); 
                    // }
                    // else { 
                    //   video_mac1.pause(); 
                    // }
                }
            }
                
        }

        jQuery(window).on("scroll", function(){
            amountscrolled();
        });

        
    })
            
</script>
<script type="text/javascript">
    var height = window.innerHeight - 80;
    window.addEventListener('scroll', event => {
        if (window.scrollY > height) {
            $('.headerSection').show();
            plexusVideo.pause();
        } else {
            $('.headerSection').hide();
            plexusVideo.play();
        }
    })

    $(document).bind('scroll',function(e){
      $('section').each(function(){
          if ($(this).offset().top < window.pageYOffset + 100 && $(this).offset().top + $(this).height() > window.pageYOffset + 5){
            if($(this).attr('id') == "home"){
              $('li.nav-item').removeClass('active');
              $("#home-nav").toggleClass('active');
            } else if($(this).attr('id') == "about"){
              $('li.nav-item').removeClass('active');
              $("#about-nav").toggleClass('active');
            } else if($(this).attr('id') == "portfolios"){
              $('li.nav-item').removeClass('active');
              $("#portfolios-nav").toggleClass('active');
            } else if($(this).attr('id') == "calculators"){
              $('li.nav-item').removeClass('active');
              $("#calculator-nav").toggleClass('active');
            } else if($(this).attr('id') == "teams"){
              $('li.nav-item').removeClass('active');
              $("#team-nav").toggleClass('active');
            } else if($(this).attr('id') == "videos"){
              $('li.nav-item').removeClass('active');
              $("#videos-nav").toggleClass('active');
            }
          }
      });
  });
</script>
<script>
    var i = 0;
    $(document).ready(function() {
        setInterval(function(){ 
            $('li.banner-title-'+i).css('display','none');
            i++;
            if (i == 5)
                i = 0;
            $('li.banner-title-'+i).css('display','block');

         }, 4000);
    });
</script>