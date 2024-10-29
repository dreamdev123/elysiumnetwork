@extends('_layouts.clean')

@section('meta.title',          __('pages/index.meta_title'))
@section('meta.description',    __('pages/index.meta_description'))
@section('meta.keywords',       __('pages/index.meta_keywords'))


@section('PAGE_LEVEL_STYLES')
<!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/style_new.css') }}" rel="stylesheet">

    <style type="text/css">
        .bannerSection {
            position: relative;
            display: none !important;
        }

        .headerSection nav.navbar.navbar-default {
            border-bottom: solid 2px #a0a0a000 !important;
        }
        .cp-terms-of-sup-content p {
            font-family: 'Calibri Light';
            font-size: 18px;
            color: #454545;
            margin: 10px 0;
        }
    </style> -->
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<!-- <script type="text/javascript">
    $('.headerSection').show();
</script> -->
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_END')
@endsection


@section('content')

    <div class="row innerPagesWrapper cp-terms-of-sup-content">
        <div class="container">
            <div class="row innerPageHead">
                <div class="col-sm-8">
                    <h3 class="title">Terms of Supply</h3>
                </div>
                <div class="col-sm-4 innerLogo"><img src="{{ asset('images/blackRed-Logo.png') }}"
                                                     class="img-fluid"></div>
            </div>
            <p>This page (together with the documents referred to on it) tells you the terms and conditions on which we supply any of the SaaS (Software as a Service ) electronic and/or physical products (“Products”) listed on the website pages of our site https://www.elysiumnetwork.io (“site”) to you. Please read these terms and conditions carefully before ordering any Products from our site. You should understand that by ordering any of our Products, you agree to be bound by these terms and conditions.</p>
      <p>You should keep a copy of these terms and conditions for future reference</p>
      <p>Please understand that if you refuse to accept these terms and conditions, you will not be able to order any Products and Services from our site.</p>
      <h5>INFORMATION ABOUT US</h5>
      @if(!$flgEstonia)
      <p>The webpages of http://www.elysiumnetwork.io are licensed to Elysium Capital PLC OÜ (“Elysium”, “Company” or “we”). They are registered in Estonia under company registration number 14895905 and our ofﬁce is located at Tartu mnt 67/1-13B, 10115 Tallinn, Estonia.</p>
      @else
      <p>The webpages of http://www.elysiumnetwork.io are licensed to Elysium Capital PLC OÜ (“Elysium”, “Company” or “we”). They are registered in Hong Kong under company registration number 2865940 and our ofﬁce is located at No.5, 17/F, Bonham Trade Centre, 50 Bonham
      @endif
      <h5>YOUR STATUS</h5>
      <p>By placing an order through our site, you warrant that:<br />
      2.1. You are legally capable of entering into binding contracts; and 2.2. You are at least 18 years old.</p>
      <h5>OUR RIGHT TO VARY THESE TERMS AND CONDITIONS</h5>
      <p>3.1. We reserve the right to change these terms and conditions at any time. Any such changes will take effect when posted on the site and it is your responsibility to read the terms and conditions on each occasion you use this site. Your continued use of the site shall signify your acceptance to be bound by the latest terms and conditions<br /><br />
        3.2. Certain site services will require registration, and subsequent access to those services will be subject to an approved login name and password ("Password Details"). Information that you provide on this site must be accurate and complete. Password Details are accepted and may be withdrawn at our sole discretion and are exclusive to you and non-transferable and must be treated as strictly conﬁdential at all times. In the event that you have any concerns regarding your Password Details or become aware of any misuse then you must inform us immediately.
        </p>
        <h5>ORDERING</h5>
        <p> 4.1.  If you order via this site the following will apply:<br /><br />
            4.2.  Your order constitutes an offer to us to buy Product. All orders that you place on this site will be subject to acceptance by us in accordance with the following conditions.<br /><br />
            4.3.  When you place an order, we will send you an email acknowledging and setting out the ﬁnal details of your order. This email does not constitute an order conﬁrmation or acceptance of your order by Elysium.<br /><br />
            4.4.  Acceptance of your order will take place and the contract between us (“Contract”) will be formed on dispatch to you of the Products (unless you cancel the order in accordance with Condition 8). A conﬁrmation notice of dispatch will be posted to the Back Ofﬁce of the Afﬁliate or IB, which can be accessed from http://www.elysiumnetwork.io<br /><br />
            4.5.  You should print out, or otherwise keep, a copy of these terms and conditions and the order acknowledgement for your own records.
            </p>
            <h5>DELIVERY</h5>
            <p>5.1.  This web site is only intended for SaaS and physical product, (brochures, training materials etc.), use by Afﬁliates and Introducing Brokers (IB’s) residing in those countries shown as open. We do not accept orders from individuals outside those areas.<br /><br />
                5.2.  Subject to Condition 5.3, physical Products will be delivered no later than thirty (30) days from the date of conﬁrmation or acceptance of your order.<br /><br />
                5.3.  Delivery charges and estimated timescales are speciﬁed when you place an order. We make every effort to deliver Products within the estimated timescales. However, delays are occasionally inevitable due to unforeseen circumstances. Time for delivery shall not be of the essence of the contract and Elysium shall not be liable for any delay or failure to deliver the Products within the estimated timescales.
             </p>
             <h5>RISK AND TITLE</h5>
             <p>6.1.  The Products will be at your risk from the time of delivery or on the date of ﬁrst attempted delivery.<br /><br />
                6.2.  Ownership of the Products will pass to you only when we receive full payment of all sums due in respect of the Products, including delivery charges.
                </p>
            <h5>PRICE AND PAYMENT</h5>
            <p>7.1. We accept payment by debit or credit card, bank wire etc. We will take payment at the time we receive your order, once we have checked stock availability. Physical Products are subject to availability. In the event that we are unable to supply the Products, we will inform you of this as soon as possible. A full refund will be given where you have already paid for the Products. If we are unable to supply the products within a reasonable period of time, a full refund will be given to you upon request for the products not received.<br /><br />
                Merchant will not sell, purchase, provide, exchange or in any other manner disclose Account or Transaction data, or personal information of or about a Cardholder to anyone, except, it’s Acquirer, Visa / Mastercard Corporations or in response to valid government demands. <br/><br/>
                7.2.  The price you pay is the price displayed on this site at the time we receive your order. However, while we try and ensure that all prices on our site are accurate, errors may occur. If we discover an error in the price of Products you have ordered we will inform you as soon as possible and give you the option of reconﬁrming your order at the correct price or cancelling it. If we are unable to contact you, we will treat the order as cancelled. If you cancel and you have already paid for the Products, you will receive a full refund. We are under no obligation to provide the Product to you at the incorrect (lower) price, if the pricing error is obvious and unmistakable and could have reasonably been recognized by you as a mispricing.<br /><br />
                7.3.  Delivery charges are be added where applicable at the current rates unless expressly stated otherwise.
            </p>
            <h5>8. CANCELLATIONS, SUBSTITUTIONS, RETURNS AND COMPLAINTS</h5>
            <p>8.1. Notice of Cancellation<br /><br />
            8.1.1 Except where you are purchasing in the course of a business or as a Elysium Afﬁliate or IB, you may cancel a contract for any reason at any time within nine (9) working days of delivery (or, if it is later, within fourteen (14) days of the order). Working days do not include Saturdays, Sundays or bank holidays. You must give a notice of cancellation in writing within the period speciﬁed above to Elysium by:<br /><br />
            (a)  Submitting a ticket through your back ofﬁce that gives notice of cancellation; or<br /><br />
            (b)  Call our Client Service Department at the number provided on this website.<br /><br />
            You will receive a full refund of the price paid for the Products within thirty (30) days of notice being given in accordance with the conditions in this section 8. If you cancel the order for Products, you must take reasonable care of the Products both before cancellation and for at least twenty-one (21) days after cancellation. You must return the Products, in case of physical products, to the Elysium distribution depot; [current address available at our client service department], at your own expense and take reasonable care to ensure that Elysium receives the Products and that the Products are not damaged in transit. You will be liable for any loss of or damage to the Products as a result of any failure by you to take reasonable care of the Products. Customers may not cancel an order or contract, or return products for the supply of goods made to their speciﬁcation or clearly personalized which by reason of their nature cannot be returned or are liable to deteriorate rapidly.<br /><br />
            8.1.2  You may not cancel an order or contract, or return Products for the supply of Products made to your speciﬁcation or clearly personalized which by reason of their nature cannot be returned or are liable to deteriorate rapidly.<br /><br />
            8.1.3  The return and cancellation rights for an Elysium Afﬁliate or IB’s are set out in the terms and conditions of this Afﬁliate and IB Application and Agreement which are incorporated into these Elysium Generic Website Terms and Conditions of Supply.<br /><br />
            8.2.  Returns. In addition to the cancellation rights detailed in Condition 8.1 above, Elysium offers a 100% thirty (30) day return policy (less shipping charges) to all Afﬁliates and IB’s Products shall be deemed "resalable" if each of the following elements is satisﬁed: 1) they are unopened and unused; 2) packaging has not been altered or damaged; 3) the Product and packaging are in a condition such that it is a commercially reasonable practice within the trade to sell the merchandise at full price; Any merchandise that is clearly identiﬁed at the time of sale as nonreturnable, discontinued, or as a seasonal item, shall not be resalable) (“Guarantee”). Elysium will not provide a refund on any Products that are not returned to Elysium in a Resalable Condition. Subsequent purchases may not be returned under this Guarantee.<br /><br />
            8.3.  Returns by Afﬁliates and IB’s. Elysium offers a 100% 30-day money-back Guarantee to all Afﬁliates and IB’s, on the ﬁrst purchase of a Elysium Product only. (SaaS) Subscriptions must be cancelled 7 days prior to due.<br /><br />
            8.4.1 Procedures for All Returns. The following procedures apply to all returns for refund, repurchase, or exchange:<br /><br />
            a)  All Products must be returned by the Afﬁliate or IB who purchased it directly from Elysium.<br /><br />
            b)  You must obtain a Return Merchandise Authorisation number (“RMA”) by calling or e-mailing the Customer Service Department. This RMA number must be written on each carton returned.<br /><br />
            c)  The return must be accompanied by:<br /><br />
            i. the unused portion of the Product in its original packaging.<br /><br />
            d)  You must package the Product in proper shipping carton(s) and packing materials and the best and most economical means of shipping is suggested. All returns must be shipped to Elysium shipping pre-paid. Elysium does not accept shipping-collect packages. The risk of loss in shipping for returned Products shall be on the Afﬁliate or IB/Customer. If the returned Product is not received by Elysium’s Distribution Centre, it is the responsibility of the Afﬁliate, IB to trace the shipment and for this reason we strongly suggest you send Product to us special delivery and insure the contents for loss or damage in transit.<br /><br />
            No refund or replacement of Product will be made if the conditions of these rules are not met.<br /><br />
            8.5. Complaints Procedure. You may address any complaints to the Client Service Department from your Elysium Back Ofﬁce by creating a Help Desk Ticket.
            </p>
            <h5>INTELLECTUAL PROPERTY</h5>
            <p>You acknowledge and agree that we are the owner or the licensee of all intellectual property rights in our site and in the material published on it. Those works are protected by copyright laws and treaties around the world. All such rights are reserved. As an Afﬁliate or IB, you acknowledge and agree that the material and content published on the site is made available for your use in connection with the promotion of your Elysium business only and that you may only download such material and content for the purpose of using this site and promoting your Elysium business. You further acknowledge that any other use of the material and content of this site is strictly prohibited and you agree not to (and agree not to assist or facilitate any third party to) copy, reproduce, transmit, publish, display, distribute, commercially exploit or create derivative works of such material and content.</p>
            <h5>LIABILITY AND INDEMNITY</h5>
            <p>10.1. We warrant to you that any Product purchased from us through our site is of satisfactory quality and reasonably ﬁt for all the purposes for which Products of the kind are commonly supplied.<br /><br />
                10.2.  Our liability (whether in contract, tort, or otherwise) for losses you suffer as a result of us breaking this agreement is strictly limited to the purchase price of the Product you purchased.<br /><br />
                10.3.  This does not include or limit in any way our liability:<br /><br />
                10.3.1 for death or personal injury caused by our negligence;<br /><br />
                10.3.2 for fraud or fraudulent misrepresentation; or<br /><br />
                10.3.3 for any matter for which it would be illegal for us to exclude, or attempt to exclude, our liability.<br /><br />
                10.4.  Elysium will use reasonable endeavors to verify the accuracy of any information on the site but makes no representation or warranty of any kind express or implied statutory or otherwise regarding the contents or availability of the site or that it will be timely or error-free, that defects will be corrected, or that the site or the server that makes it available are free of viruses or bugs or represents the full functionality, accuracy, reliability of the site. Elysium will not be responsible or liable to you for any loss of content or material uploaded or transmitted through the site and Elysium accepts no liability of any kind for any loss or damage from action taken or taken in reliance on material or information contained on the site.<br /><br />
                10.5.  Subject to condition 10.3 and other than as expressly provided in these terms and conditions all indemnities, warranties, terms and conditions (whether express or implied) are hereby excluded to the fullest extent permitted under applicable law.<br /><br />
                10.6. Subject to condition 10.3 we are not responsible for indirect losses which happen as a side effect of the main loss or damage and which are not foreseeable by you and us, including but not limited to:<br /><br />
                10.6.1 loss of income or revenue; 10.6.2 loss of business; 10.6.3 loss of proﬁts or contracts; 10.6.4 loss of anticipated savings; and 10.6.5 loss of data.
            </p>
            <h5>11. GENERAL PROVISIONS</h5>
            <p>11.1. Contracts for the purchase of Products through our site and any dispute or claim arising out of or in connection with them or their subject matter or formation (including non-contractual disputes or claims) will be governed by 
                @if(!$flgEstonia)
                Estonia
                @else
                Hong Kong
                @endif
            law.<br /><br />
            11.2.  Elysium shall be under no liability for any delay or failure to deliver Products or otherwise perform any obligation under the Contract if the same is wholly or partly caused whether directly or indirectly by circumstances beyond its reasonable control.<br /><br />
            11.3.  To provide increased value to our Afﬁliates and IB’s, we may provide links to other sites or resources for you to access at your sole discretion. You acknowledge and agree that, as you have chosen to enter the linked site we are not responsible for the availability of such external sites or resources, and do not review or endorse and are not responsible or liable, directly or indirectly for (i) the privacy practices of such sites, (ii) the content of such sites, including (without limitation) any advertising, content, Products, goods or other materials or services on or available from such sites or resources or (iii) the use to which others make of these sites or resources, nor for any damage, loss or offence caused or alleged to be caused by, or in connection with, the use of or reliance on any such advertising, content, Products, goods or other materials or services available on such external sites or resources.<br /><br />
            11.4.  You may not transfer, assign, charge or otherwise dispose of a Contract, or any of your rights or obligations arising under it, without our prior written consent.<br /><br />
            11.5.  We may transfer, assign, charge, sub-contract or otherwise dispose of a Contract, or any of our rights or obligations arising under it, at any time during the term of the Contract.<br /><br />
            11.6.  If any of these terms and conditions or any provisions of a Contract are determined by any competent authority to be invalid, unlawful or unenforceable to any extent, such term, condition or provision will to that extent be severed from the remaining terms, conditions and provisions which will continue to be valid to the fullest extent permitted by law.<br /><br />
            11.7.  These terms and conditions do not create or confer any rights or beneﬁts enforceable by any person that is not a party.<br /><br />
            11.8.  No delay or failure by Elysium to exercise any powers, rights or remedies under these terms and conditions will operate as a waiver of them nor will any single or partial exercise of any such powers, rights or remedies preclude any other or further exercise of them. Any waiver to be effective must be in writing and signed by an authorized representative of Elysium.<br /><br />
            11.9.  These terms and conditions and any document expressly referred to in them constitute the whole agreement between us and supersede any previous arrangement, understanding or agreement between us, relating to the subject matter of any Contract. We each acknowledge that, in entering into a Contract, (and the documents referred to in it), neither of us relies on any statement, representation, assurance or warranty (“Representation”) of any person (whether a party to that Contract or not) other than as expressly set out in these terms and conditions. Each of us agrees that the only rights and remedies available to us arising out of or in connection with a Representation shall be for breach of contract as provided in these terms and conditions. Nothing in this clause shall limit or exclude any liability for fraud.
            </p>
            <p>We recommend you print out or otherwise save a copy of these terms and conditions for your future reference.</p>
            <p>Revised: September 2019</p>


        </div>
    </div>

@endsection
