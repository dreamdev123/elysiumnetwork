    <footer style="padding-top: 80px;">
        <div class="container" style="padding: 0px !important;">
            <div class="row mb-5">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 footer-hk-company-info">
                    <div class="footer-hk-logo">
                        <img src="{{asset('images/footer-hk-logo.png')}}">
                    </div>
                    <div class="company-info">
                        <p style="margin-top: 0px;">Elysium Capital Limited | Registered Address CS</p>
                        <p style="margin-top: 5px;">No.5, 17/F, Bonham Trade Centre, 50 Bonham Strand, Sheung Wan, Hong Kong.</p>
                        <p style="margin-top: 5px;">Registration Number: 2865940 | LEI: 984500CB3M451FAZ0914</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 footer-sweden-company-info" style="display: flex; align-items: center;">
                    <div class="footer-sweden-logo ml-auto">
                        <img src="{{asset('images/footer-sweden-logo.png')}}">
                    </div>
                    <div class="company-info">
                        <p style="margin-top: 0px;">Elysium Capital Limited | Representative Office [on appointment]</p>
                        <p style="margin-top: 5px;">Turning Torso, Lilla Varvsgatan 14, 211 15 Malmö, Sweden</p>
                        <p style="margin-top: 5px;">T: Enquiries +44 7723 503770 | support@elysiumcapital.io</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <ul class="footer-menu">
                        <li><a href="{{ route('marketing::legal::gdpr') }}" target="_blank">DATA PRIVACY POLICY [GDPR]</a></li>
                        <li><a href="{{ route('marketing::legal::terms-of-supply') }}" target="_blank">TERMS OF SUPPLY</a></li>
                        <li><a href="{{ route('marketing::legal::terms-of-use') }}" target="_blank">TERMS OF USE</a></li>
                        <li><a href="{{ route('marketing::contact-us') }}">CONTACT</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <p class="footer-copyright">Copyright © 2020 ELYSIUM CAPITAL LIMITED. All rights reserved.</p>
                </div>
            </div>
        </div>
        <div class="footer-disclaimer">
            <div class="container" style="padding: 0px !important;">
                <div class="row">
                    <div class="col-lg-12">
                        <p style="margin-top: 0px">DISCLAIMER</p>
                        <p style="margin-top: 20px;">ELYSIUM CAPITAL LTD AND/OR ITS SUBSIDIARIES ARE NOT DIRECTLY OR INDIRECTLY INVOLVED IN THE OFFERING OF SECURITIES OR ANY OTHER REGULATED ACTIVITY IN THE FINANCIAL MARKETS. CLIENTS CAN UTILISE OUR TRADING BOTS AT THEIR OWN DISCRETION AT THEIR PREFERRED 3RD PARTY BROKERAGES.</p>
                        <p style="margin-top: 20px;">We are a Fintech access provider and signal provider. We develop trading bot signals per quantitative analysis. Clients engage our EA's to execute their trades via their preferred 3rd part brokerage, not being Elysium Capital Limited or any of our subsidiaries. Clients can at all times manually intervene in their open positions. We grant cloud access to the data on trading bot operations. The prime brokerages we introduce our participants to, are regulated in several jurisdictions. The participant’s money is held in a segregated account with that 3rd party brokerage. Participants have full control over entries and exits. (1) Past performance is not an indication of future results. (2) This is not investment advice. (3) All transactions on the currency spot market are speculative and all investments should be made using risk capital that is not crucially required. (4) There may be a considerable risk of losses on the currency spot market and all transactions are at risk of capital loss. You should consider carefully whether such participation is appropriate to you when taking into account your financial assets. (5) We advise everyone to seek independent advice regarding participation in the currency spot market. No information on this website should be understood to constitute financial advice from Elysium Capital Limited. It is published solely for information and marketing purposes. Affiliates – Introducing Brokers earn performance fees, if derived, on participants and do not facilitate transactions and therefore can’t be involved in the receiving and transmitting of orders. (6) The information in this paper, website, is provided for general informational purposes only, and may not reflect the current law in your jurisdiction. In some jurisdictions, the act of referring clients are deemed to be regulated activities and, as such, require the Introducing Broker (IB) to have the necessary regulatory authorisation. It is the obligation of every IB to ensure that activities carried out and services provided by them are in accordance with local laws and regulations.</p>
                        <p style="margin-top: 20px;">We advise everyone to seek independent advice regarding issues concerning participation on the currency spot market. No information on this website should be understood to constitute financial advice from Elysium Capital Limited. It is published for informational and marketing purposes.</p>
                        <p style="margin-top: 20px;">Elysium Capital Limited does not accept clients from Afghanistan, Bahamas, Burundi, Central African Republic, Congo, Crimea, Cuba, Democratic Republic of Congo, Eritrea, Haiti, Iran, Israel, Libya, Myanmar, Nicaragua, North Korea, Panama, Somalia, Sudan, Syria, Turkmenistan, United States, Minor Outlying Islands, USA, Virgin Islands, US, Western Sahara, Yemen and Zimbabwe. Elysium Capital Limited, its subsidiaries or group companies, do not provide business in Hong Kong and to Hong Kong clients. Elysium Capital Limited may reject any applicant from any jurisdiction at their sole discretion without the requirement to explain the reason why. Elysium Capital Limited's trading bots can, at the client's discretion, be operated and executed by 3rd party accounts, operated by the client's preferred 3rd party prime brokerage and Liquidity Provider registered at the Financial Supervisory Authority.</p>
                        <p style="margin-top: 20px;">Our products and services are not intended for distribution, commercialisation, to, or use by any person in any country and jurisdiction where such distribution or use would be contrary to local law or regulation.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </section>

	<script type="text/javascript">
		const result = {
        init: function () {
            this.variables();
            this.addEventListeners();
        },
        variables: function () {
            this.initialInvestment = $('[name="initial_investment"]');
            this.initialInvestmentError = $('#initialInvestment-error');
            this.regularInvestment = $('[name="regular_investment"]');
            this.regularInvestmentError = $('#regularInvestment-error');
            this.regularInvestmentSelect = $('[name="regular_investment_select"]');
            this.compounded = $('[name="compounded"]');
            this.rorRate = $('[name="ror_rate"]');
            this.rorRateError = $('#rorRate-error');
            this.term = $('[name="term"]');
            this.termError = $('#term-error');
            this.startDate = $('[name="start_date"]');
            this.startDateError = $('#startDate-error');
            this.years = $('[data-content="years"]');
            this.investmentWorth = $('[data-content="investment-worth"]');
            this.initialWorth = $('[data-content="initial-worth"]');
            this.regularWorth = $('[data-content="regular-worth"]');
            this.returnOnReturn = $('[data-content="return-on-return"]');
            this.calculateButton = $('[data-button="calculate"]');
            this.resultContent = $('[data-content="result"]');
        },
        addEventListeners: function () {
            this.initialInvestment.on('focusout', function () {
                this.validateInput(this.initialInvestment, this.initialInvestmentError);
            }.bind(this));
            // this.regularInvestment.on('focusout', function () {
            //     this.validateInput(this.regularInvestment, this.regularInvestmentError);
            // }.bind(this));
            this.rorRate.on('focusout', function () {
                this.validateInput(this.rorRate, this.rorRateError);
            }.bind(this));
            this.term.on('focusout', function () {
                this.validateInput(this.term, this.termError);
            }.bind(this));
            this.calculateButton.on('click', function () {
                if (this.validateInput(this.initialInvestment, this.initialInvestmentError) &&
                    this.validateInput(this.rorRate, this.rorRateError) &&
                    this.validateInput(this.term, this.termError)) {
                    this.calculateRorCompound();
                    this.resultContent.slideDown();
                }
            }.bind(this));
        },
        calculateRorCompound: function () {
            var initialInvestmentValue = parseInt(this.initialInvestment.val());

            var regularInvestmentValue = parseInt(this.regularInvestment.val());
            if (Number.isNaN(regularInvestmentValue)) {
                regularInvestmentValue = 0;
            }

            var regularInvestmentVariantValue = parseInt(this.regularInvestmentSelect.val());

            var termValue = parseInt(this.term.val());
            if (Number.isNaN(termValue)) {
                alert("Please enter term.");
                termValue = 0;
            }


            var regularInvestmentCalc = parseInt((regularInvestmentValue * regularInvestmentVariantValue) * termValue);
            var rorRateValue = parseInt(this.rorRate.val());
            var c = parseInt(this.compounded.val());
            var i = rorRateValue / 100;
            var pow = termValue * c;
            var exponents = 1 + i/c;
            console.log(c, i, pow, exponents);
            var pow_parameter = Math.pow(exponents, pow);
            console.log(pow_parameter);
            this.years.html(termValue);
            this.initialWorth.html(initialInvestmentValue);
            this.regularWorth.html(regularInvestmentCalc);

            var monthly_contribution;
            switch (regularInvestmentVariantValue) {
                case 12:
                    monthly_contribution = regularInvestmentValue;
                    break;
                case 1:
                    monthly_contribution = regularInvestmentValue / 12;
                    break;
            }

            console.log(pow_parameter,initialInvestmentValue,monthly_contribution,c,i);

            var rorSum = initialInvestmentValue * pow_parameter + (monthly_contribution * (pow_parameter - 1) * 12) / i;
            var rorSum_tofixed = rorSum.toFixed(2);
            this.returnOnReturn.html(rorSum_tofixed - initialInvestmentValue - regularInvestmentCalc);

            this.investmentWorth.html(rorSum_tofixed);

        },
        validateInput: function (input, error) {
            var validationMessage = '';
            var formControl = input.parent('.form-group').find('.form-control');
            var value = input.val();

            if ((/^[0-9]{1,50}$/.test(value))) {
                formControl.addClass('valid-calculate');
                error.addClass('valid-calculate');
                error.hide();
            } else if (value === '') {
                validationMessage = 'This field is required.';
                formControl.removeClass('valid-calculate');
                formControl.addClass('error-calculate');
                error.removeClass('valid-calculate');
                error.show();
            } else {
                validationMessage = 'Please enter only digits.';
                formControl.removeClass('valid-calculate');
                formControl.addClass('error-calculate');
                error.removeClass('valid-calculate');
                error.show();
            }

            error.html(validationMessage);
            // input.focus();

            return ((/^[0-9]{1,50}$/.test(value)));
        },
        validateStartDateInput: function () {
            var validationMessage = '';
            var formControl = this.startDate.parent('.form-group').find('.form-control');
            var value = this.startDate.val();

            if ((/^([0-9][0-9][0-9][0-9])-(0[0-9]|1[0-2])-(0[0-9]|1[0-9]|2[0-9]|3[0-1])$/.test(value))) {
                formControl.addClass('valid-calculate');
                this.startDateError.addClass('valid-calculate');
                this.startDateError.hide();
            } else if (value === '') {
                validationMessage = 'This field is required.';
                formControl.removeClass('valid-calculate');
                formControl.addClass('error-calculate');
                this.startDateError.removeClass('valid-calculate');
                this.startDateError.show();
            } else {
                validationMessage = '"Please enter your birthday as MM/DD/YYYY."';
                formControl.removeClass('valid-calculate');
                formControl.addClass('error-calculate');
                this.startDateError.removeClass('valid-calculate');
                this.startDateError.show();
            }

            this.startDateError.html(validationMessage);

	            return ((/^([0-9][0-9][0-9][0-9])-(0[0-9]|1[0-2])-(0[0-9]|1[0-9]|2[0-9]|3[0-1])$/.test(value)));
	        }
	    };

		$(document).ready(function() {
			var check = true;

			result.init();
			function countNum() {
				console.log('xxxx');
				$('.count').each(function () {
				  var $this = $(this);
				  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
				    duration: 3000,
				    easing: 'swing',
				    step: function () {
				      $this.text(Math.ceil(this.Counter));
				    }
				  });
				});
			}
			
			function amountscrolled(){
				var winheight = jQuery(window).height()
				var docheight = jQuery(document).height()
				var scrollTop = jQuery(window).scrollTop()
				var trackLength = docheight - winheight
				var pctScrolled = Math.floor(scrollTop/trackLength * 100) // gets percentage scrolled (ie: 80 NaN if tracklength == 0)

				// if(pctScrolled >= 8) {
				// 	backgroundMusicPlayer.pause();
				// } else {
				// 	backgroundMusicPlayer.play();
				// }
				if (pctScrolled >= 71 && check == true) {
					check = false;
					countNum();
					console.log('xxxxx');
				}
				// console.log(pctScrolled + '% scrolled');
			}

			jQuery(window).on("scroll", function(){
				amountscrolled();
			});

			$('.member-slider').slick({
			  lazyLoad: 'ondemand',
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  arrows: true,
			});
		})
		
	</script>