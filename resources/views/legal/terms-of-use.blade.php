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

    <div class="row innerPagesWrapper">
        <div class="container">
            <div class="row innerPageHead">
                <div class="col-sm-6">
                    <h3 class="title">GLOBAL CODE OF CONDUCT - POLICIES AND PROCEDURES – IB/AFFILIATE AGREEMENT. </h3>
                </div>
                <div class="col-sm-6 innerLogo"><img src="{{ asset('images/blackRed-Logo.png') }}"
                                                     class="img-fluid"></div>
            </div>
            @if(!$flgCyprus)
            <div class="row company-reg-addr-block">
              <div class="col">
                <p>ELYSIUM | CAPITAL LIMITED  REG: 2865940<br>
                No.5, 17/F, Bonham Trade Centre, 50 Bonham<br>
                Strand, Sheung Wan, Hong Kong.</p>
              </div>
            </div>
            @endif
            @if(!$flgEstonia)
            <div class="row company-reg-addr-block">
              <div class="col">
                <p>ELYSIUM CAPITAL PLC  OÜ  REG: 14895905<br>
                Tartu mnt 67/1-13B, 10115 Tallinn, Estonia</p>
              </div>
            </div>
            @endif
            <p class="font-weight-bold text-uppercase">SECTION 1 – INTRODUCTION </p>

      <p>From this point forward Elysium Capital will be referred to as “Elysium” while Elysium Introducing Brokers and Affiliates will be referred to as “IB/Affiliates”. </p>

      <p>These Policies and Procedures govern the way in which a IB/Affiliates conducts business with Elysium. These Policies and Procedures such as may now exist or hereafter be amended, constitute the complete and binding agreement and understanding between Elysium IB/Affiliates and Elysium. Failure to comply with the provisions of any of these documents may result in the termination of this IB/Affiliates Agreement. </p>

      <p>Should any portion of the Agreement, or any instrument published by Elysium be declared invalid in a court of jurisdiction, the balance of such rules, applications, or instruments shall remain in full force and effect. </p>

      <p class="font-weight-bold">1.1 IB/Affiliate Code of Conduct. </p>
      <p>I will be honest and fair in my dealing as an IB/Affiliate of Elysium.</p>
      <p>I will perform my business in a manner that will enhance my reputation and the positive reputation established by Elysium.</p>
      <p>I will be courteous and respectful of every person I contact in the course of my Elysium independent activities. 
      I will not misrepresent Elysium products and services or the Compensation Plan.</p>
      <p>I will remember that even my personal experience received from Elysium products, services or programs,
      may be interpreted as unauthorized “extension of labeling claims”.</p>
      <p>I understand and agree that I am solely responsible for all financial and/or legal obligations I incur in the course of my business as an IB/Affiliate and will discharge all debts and duties as required of a IB/Affiliates. </p>
      
      <p class="font-weight-bold text-uppercase">IB/AFFILIATE AGREEMENT</p> 

      <p class="font-weight-bold">1.2 Independent Contractor Status. </p>

      <p>An IB/Affiliate will not be treated as an employee for tax purposes. All IB/Affiliates are independent contractors engaged in their own separate business pursuits. IB/Affiliates are not considered purchasers of a franchise, nor does the Agreement between Elysium and its IB/Affiliates create an employee/employer relationship, agency, partnership or joint venture. IB/Affiliates are strictly prohibited from stating or implying, whether orally or in writing, that their relationship is any other than as above outlined. </p>

      <p>Each IB/Affiliates shall hold Elysium harmless from any claims, damages or liabilities arising out of such IB/Affiliate’s business practices. IB/Affiliates have no authority to bind Elysium to any obligation. Each IB/Affiliates is encouraged to set up his/her own hours and to determine his/her methods of sales and promotions, as long as he/she complies with the terms of the Agreement.</p>

      <p class="font-weight-bold">1.3 Business Conduct. </p>

      <p>Each IB/Affiliate will perform all of his/her business activities in a professional and ethical manner, which will enhance the IB/Affiliate’s reputation and the positive reputation of Elysium. IB/Affiliates will not engage in any conduct that could negatively reflect on Elysium or any other IB/Affiliate’s image. IB/Affiliates will be courteous and respectful of every person contacted, including employees and executives of the corporate office of Elysium, and will conduct their business in a way as to respect the products and professionalism of Elysium and its other IB/Affiliates. A IB/Affiliates will under no circumstances disparage or infringe upon the Elysium name or reputation in connection with the marketing of Elysium products or misappropriate any confidential or proprietary information or trade secrets (including IB/Affiliates names and address lists) of Elysium for use by the IB/Affiliate or others. </p>

      <p class="font-weight-bold">Our Products mentioned: EOS - XOOM - SoHo- Elysium Marketing Collateral. Elysium Merchandise. Our only and official website on which our product and services are offered: elysiumnetwork.io</p>

      <p class="font-weight-bold">E-mail contact can be established via our website or at the following addresses:</p>

      <p class="font-weight-bold text-primary">support@elysiumnetwork.io | payments@elysiumnetwork.io | enquiries@elysiumnetwork.io </p>

      <p class="font-weight-bold">1.4 No Purchase Required. </p>

      <p class="font-weight-bold">IB/Affiliate Support</p>

      <p class="font-weight-bold">Questions regarding payments, refunds etc. General enquiries.</p>

      <p>No Elysium Affiliate is required to purchase further products or services.</p>

      <p class="font-weight-bold">1.5 Confidentiality Agreement</p>

      <p>IB/Affiliates may gain access to confidential information of Elysium. Specifically, without limiting the foregoing, confidential information includes information contained in any genealogical report provided or accessible to an IB/Affiliate, client lists, manufacturer information, commission or sales reports, service formulas, and other financial and business information of Elysium.</p>

      <p>All such information (whether in electronic, oral or written form) is proprietary to and owned by Elysium, and is transmitted or available to IB/Affiliates in strict confidence. Each IB/Affiliates agrees that he/she will not disclose any such confidential or proprietary information to any third party, directly or indirectly, or use the information to compete with Elysium or for any other purpose except as expressly authorized by the Agreement. This information is to be used only for the promotion of the Elysium program in accordance with the Agreement. IB/Affiliates and Elysium agree that without this agreement of confidentiality and non-disclosure, Elysium would not provide the information or make it accessible to IB/Affiliates. This provision shall survive the termination or expiration of the IB/Affiliates Agreement.</p>

      <p>All genealogy reports provided to a IB/Affiliates are proprietary to and owned by Elysium. Each IB/Affiliate acknowledges that the reports may contain information concerning the IB/Affiliates, including, but not limited to, the IB/Affiliate’s name, address, phone number, products purchased and sold and earnings. The IB/Affiliates, by executing the Agreement, consents to the use and dissemination by Elysium of the reports and information therein and any other information concerning a IB/Affiliates collected by Elysium in connection with Elysium’s business, including to enforce the terms of and its rights under the Agreement and to comply with applicable laws. A IB/Affiliates may not use the reports in any manner or for any purpose except in connection with IB/Affiliate’s business. </p>

      <p class="font-weight-bold">SECTION 2 – BECOMING A ELYSIUM INDEPENDENT IB/AFFILIATE</p>

      <p class="font-weight-bold">2.1 IB/Affiliate Enrollment.</p>

      <p>An applicant may mail the Elysium IB/Affiliates Agreement, to Elysium’s corporate offices and enroll on the replicated website.</p>

      <p class="font-weight-bold">2.2 IB/Affiliate Rights.</p>
      All Elysium IB/Affiliates are authorized to sell Elysium products and services and to participate in the Elysium Compensation Plan.

      <p class="font-weight-bold">2.3 Legal Age.</p>

      <p>An IB/Affiliate must be of legal age in his or her country or state of residence to be a Elysium IB/Affiliates.</p>

      <p class="font-weight-bold">2.4 Married Couples.</p>

      <p>Each participant or legal entity can have multiple positions. Husbands, wives or common-law couples (collectively “spouses”) who wish to become a Elysium IB/Affiliates can enroll on their own rights. </p>

      <p class="font-weight-bold">2.5 Corporations, Partnerships and Trusts.</p>

      <p>Corporations, limited liability companies, partnerships and/or trusts may become an IB/Affiliate ONLY when the completed IB/Affiliates Agreement is accompanied by copies of the articles of incorporation, articles of organization, partnership agreement, or trust document or other charter or organizational document as filed with the state (where applicable). </p>

      <p>To ensure compliance with the IB/Affiliates Agreement, IB/Affiliates must disclose a complete list of all directors, officers and shareholders involved in the corporation. Limited liability companies must disclose a complete list of all members, officers and managers. Partnerships must disclose all general and limited partners. Trusts must disclose the trustee(s) and beneficiary/beneficiaries. This information may be faxed or emailed to Elysium and must be updated by the IB/Affiliates. Proof must be provided of a Federal Tax ID number and a copy of the annual certification from the Secretary of State issued in the state of incorporation, organization, and partnership registration. If any shareholder, partner, member or manager of a IB/Affiliates is itself an entity, then the information required above for the IB/Affiliates shall also be required for such shareholder, partner, member or manager. </p>

      <p>Shareholders, members, partners, employees, agents, beneficiaries, trustees and those who promote the legal entity, as applicable, agree to remain personally liable to Elysium and bound by the Agreement. A completed “Operating Under a Business Name” or DBA (Doing Business As) form must be on file with Elysium. In any IB/Affiliates position involving the efforts of more than one individual, whether as a corporation, partnership, limited liability company or trust, the actions of one participant shall reflect on the IB/Affiliate- ship as a whole. If one participant is found to have violated the terms and conditions of the Agreement, then the IB/Affiliate ship as a whole will be considered to be in violation. </p>

      <p class="font-weight-bold">2.6 Fictitious and/or Assumed Names. </p>

      <p>A person or entity may not apply for a IB/Affiliate ship using a fictitious or assumed name or use the identity of another person or entity that will not be associated with the IB/Affiliate ship. No one may enter a Social Security Number or Federal Identification Number that was not assigned to the primary individual or entity on the IB/Affiliate ship.</p>

      <p class="font-weight-bold">2.7 Tax Identification Number. (TIN) </p>

      <p>All IB/Affiliates ,if required by your jurisdiction’s law, should obtain a Tax Identification Number or Federal Identification Number and provide it to Elysium. Elysium will use that number for all government reporting purposes if requested. </p>

      <p class="font-weight-bold">2.8 Taxation.</p>

      <p>Elysium IB/Affiliates will be treated as independent contractors for federal and/or state tax purposes. As independent contractors, IB/Affiliates will not be treated as employees, franchisees, joint ventures, partners, or agents with respect to the Internal Revenue Code, Social Security Act, Federal Unemployment Act, State Unemployment Act, or any other federal, state or local statute, ordinance, rule or regulation. IB/Affiliates are responsible for the payment of all income, self-employment and other taxes relating to their business and earnings. </p>

      <p class="font-weight-bold">2.9 Absence of IB/Affiliate Activities </p>

      <p>Elysium may, in its sole discretion, terminate the Agreement and convert the status of the IB/Affiliate's account. However, the position of the account in the enrollment tree and the placement tree will remain and any accrued volume will not flush personal volume requirements to maintain an Active status. The converted Wholesale Client may retain his/her Replicated Website. If the IB/Affiliate desires to engage in IB/Affiliates activities by earning commissions, he or she must agree to the then current Agreement in order to become a IB/Affiliates. No additional enrollment fee will be required to re-apply to become a IB/Affiliates and his/her structure will be restored. </p>

      <p class="font-weight-bold text-uppercase">SECTION 3 – LEGAL COMPLIANCE</p>

      <p class="font-weight-bold">3.1 Legal Compliance. </p>

      <p>All Elysium IB/Affiliates shall comply with all federal and state statutes, regulations and local ordinances and regulations concerning the operation of their business. All IB/Affiliates are responsible for their own managerial decisions and expenditures. Since IB/Affiliates are not Elysium employees, Elysium will not be responsible for payment or co-payment of any employee benefits.</p>

      <p class="font-weight-bold">3.2 No Exclusive Territories. </p>

      <p>There are no exclusive territories for recruiting purposes nor shall any IB/Affiliates imply or state that he/she has any exclusive territory rights. There are no geographic limitations on IB/Affiliates sponsoring except in those foreign countries that have not officially been opened/assigned by Elysium.</p>

      <p class="font-weight-bold">3.3 Representation of Government Endorsements. </p>

      <p>Federal and state regulatory agencies do not endorse direct selling programs or their products or services. Therefore, IB/Affiliates may not represent, directly or indirectly, that the Elysium Compensation Plan or its products or services have been approved, reviewed or endorsed by any government agency.</p>

      <p class="font-weight-bold">3.4 Legal Approval</p>

      <p>An Elysium IB/Affiliates must understand that he/she may not say, directly or indirectly, that any Elysium product or service is approved, or discuss or suggest that Elysium IB/Affiliates may make no claims regarding Elysium products except as expressly authorized in writing by Elysium. </p>

      <p class="font-weight-bold">3.5 Personal Information. </p>

      <p>Personal information such as the IB/Affiliates ID number, a IB/Affiliate’s address, telephone number, and etc. will be treated as confidential and will not be used except in connection with Elysium’s business, unless required by law. In the event of an emergency, the inquiring party may contact Elysium Compliance Department, who will advise the IB/Affiliates that someone is attempting to contact him/her.</p>

      <p class="font-weight-bold">3.6 Non-Solicitation.</p>

      <p>During the term hereof and for a period of twelve (12) months after the termination or expiration of the IB/Affiliates Agreement, for any reason whatsoever, a IB/Affiliates shall not on his/her own behalf, or on behalf of any other person or other entity, hire, solicit or enroll any employee, IB/Affiliates, client, manufacturer, or supplier of Elysium or any of its affiliates, or in any manner attempt to influence or induce any employee, IB/Affiliates, client, manufacturer or supplier of Elysium or any of its affiliates, to alter or terminate their employment or business relationship with Elysium or its affiliates. No IB/Affiliates shall use or disclose to any person any information of Elysium obtained while the IB/Affiliates Agreement was in effect, including names and addresses of Elysium’s or any affiliates’ employees or IB/Affiliates. It is agreed that this provision shall survive the termination or expiration of the IB/Affiliates Agreement.</p>

      <p>Solicitation includes, but is not limited to, (i) producing or offering any promotional materials for another competitive company which is used to solicit Elysium IB/Affiliates to such company; (ii) promoting or selling products which compete with Elysium products to Elysium clients or IB/Affiliates; (iii) introducing or presenting, directly or indirectly, another competitive company business to any Elysium IB/Affiliates; or (iv) offering any other company’s products, services or business opportunity at any Elysium meeting or event. </p>

      <p class="font-weight-bold">3.7 Non-Competition. </p>

      <p>Each IB/Affiliates agrees not to compete with the protectable business interests of Elysium by selling or promoting other competing products or opportunities (except as detailed under Section 3.11) during the term of the IB/Affiliates Agreement. </p>

      <p>IB/Affiliates acknowledges and recognizes these restrictions are necessary for Elysium to protect its valuable interests and agrees that any injunction and/or other remedy is necessary and appropriate for Elysium to protect such interests. </p>

      <p class="font-weight-bold">3.8 Vendor Confidentiality. </p>

      <p>Elysium business relationships with its third-party brokerages, trading desks, vendors, manufacturers and suppliers are confidential. A IB/Affiliates shall not contact, directly or indirectly, speak with, or communicate with any representative or any brokerage, trading desk, supplier, manufacturer, or vendor except at a Elysium sponsored event which the representative is present at the request of Elysium. </p>

      <p class="font-weight-bold">3.9 Endorsements. </p>

      <p>No endorsements by any third parties may be alleged, except as expressly communicated in Elysium literature and communications. A Elysium IB/Affiliates may not state, directly or indirectly, that any Elysium third party product or service is approved by the FCA or other governmental agency in a specific jurisdiction or may make any claim regarding its products or services not expressly authorized in writing by Elysium.</p>

      <p class="font-weight-bold">3.10 Liability.</p>

      <p>Violation of any provision of the Agreement may be grounds for suspension and/or termination of that individual’s IB/Affiliate ship. The violator also may be subject to civil or criminal liability resulting from violation of the IB/Affiliates Agreement, the Code of Professional Ethics, the Policies and Procedures of Elysium, or state or federal law. Additionally, Elysium may offset payment to any Elysium IB/Affiliates to offset any damages suffered by Elysium as the result of a IB/Affiliate’s violation of the IB/Affiliates Agreement, the Code of Professional Ethics, the Policies and Procedures of Elysium, or state or federal law in a particular country.</p>

      <p class="font-weight-bold">3.11 Other Services and Products.</p>

      <p>IB/Affiliates are not restricted from selling the services and products of other companies during the term of the Agreement (subject to Section 3.6 and 3.7).</p>

      <p class="font-weight-bold">3.12 Crossline Recruiting.</p>

      <p>Recruiting others, directly or indirectly, whether through written, spoke or implied means, from one (1) Elysium IB/Affiliates organization to another is strictly prohibited. </p>

      <p class="font-weight-bold">SECTION 4 – MULI-TIER & TRAINING AND TERMS OF TERMINATION</p>

      <p class="font-weight-bold">4.1 Sponsoring.</p>

      <p>Elysium IB/Affiliates are entitled to sponsor other individuals into their organization in territories officially opened by Elysium. IB/Affiliates are compensated only for the generation of sales of product and services and not for sponsoring new IB/Affiliates into the program.</p>

      <p class="font-weight-bold">4.2 Sale/Transfer of IB/Affiliate ship.</p>

      <p>A Elysium independent IB/Affiliates position may be sold or transferred to a non-IB/Affiliates only following a period of six (6) months from the IB/Affiliates origination date. A completed and notarized Sales/Transfer form must be submitted to Elysium either through mail, email or fax. All transfers are subject to a EURO 50 transfer fee. When such transfer is approved and accepted by Elysium, any volume previously accumulated may be removed. Change in business status (individual to corporation or vice versa) also requires a completed and notarized Sales/Transfer form and is subject to a EURO 50 fee. All fees are payable to Elysium.</p>

      <p>Notwithstanding anything herein to the contrary, any transfer of a sponsor or downline IB/Affiliates(s) from his or her current position in the genealogy will only be made if Elysium deems it to be in the best interests of its business, as determined by Elysium in its sole discretion. If such a change is to be made, Elysium will contact all affected IB/Affiliates in writing.</p>

      <p>IB/Affiliates waive any and all claims and causes of action that relate to or arise from Elysium’s decision to transfer a sponsorship or any IB/Affiliates in a structure.</p>

      <p class="font-weight-bold">4.3 Multiple Applications.</p>

      <p>If one applicant submits multiple IB/Affiliates Agreement forms listing different sponsors, only the first completed form to be received by Elysium will be accepted. Elysium reserves the right, in its sole discretion, to make the final decision with respect to all such disputes.</p>

      <p class="font-weight-bold">4.4 Placement Changes/Corrections.</p>

      <p>One placement change or correction of sponsors may be requested within a period of three (3) days from the date of enrollment. Such adjustments require written permission from both the sponsor and the applicant and shall be directed to the Compliance Department of Elysium. There will be no fee for the first change requested within the initial three (3) day period.</p>

      <p>After the initial three (3) day term, requests for placement change or correction of sponsorship will be reviewed by Elysium and may be approved by Elysium in its sole discretion, with additional conditions and restrictions as may be required by Elysium. Such adjustments require written permission from three (3) upline IB/Affiliates, including the sponsor. All requests for change shall be submitted to the Compliance Department of Elysium. In the event a placement change or sponsorship change is approved under this paragraph, the IB/Affiliates shall pay a change fee of EURO 50 to Elysium.</p>

      <p>4.5 Sponsor Corrections.</p>

      <p>Sponsor changes are not permitted. However, sponsor corrections can be made if the error is reported to Elysium within three (3) days of enrollment. Sponsor corrections must be requested from the current (original) sponsor, stating the reason that the correction needs to be made.</p>

      <p>4.6 Acquisition of Business.</p>

      <p>A IB/Affiliates desiring to acquire another IB/Affiliate’s business must first terminate his/her IB/Affiliates status and wait a period of six (6) months from the date of the resignation notice, before becoming eligible for such purchase. All such transactions must be fully disclosed through the completion of a Sales/Transfer form submitted to Elysium and is subject to Elysium’s approval.</p>

      <p class="font-weight-bold">4.7 Adding of Co-Applicants.</p>

      <p>When adding a co-applicant (either an individual or a business entity) to an existing IB/Affiliate ship, Elysium requires both a written request and a properly executed IB/Affiliates Agreement containing both the applicant and co-applicant’s Government Registration Number and signatures. The original applicant must remain party to the original IB/Affiliates Agreement. If the original IB/Affiliates wants to terminate his/her IB/Affiliates relationship with Elysium, he/she must do so in accordance to the Elysium policy. If this is not followed, the business shall be terminated upon withdrawal of the original IB/Affiliates. All bonus and commission checks will be sent to the address on record for the IB/Affiliates position. A co-applicant may not under any circumstance be party to another IB/Affiliate- ship. The modification permitted within the scope of this section does not include change of sponsorship. There is a Twenty-Five EURO (EURO 25.00) processing fee for changes or additions. </p>

      <p class="font-weight-bold">4.8 Training Requirement.</p>

      <p>IB/Affiliates are required to assure the adequate training of IB/Affiliates they sponsor. “Adequate training” shall include, but is not limited to, education regarding the Policies and Procedures, Compensation Plan, product information, sound business practices, sales strategies, and ethical business behavior. A sponsor must maintain an ongoing, professional leadership association with IB/Affiliates in his/her organization and must fulfill the obligation of performing a bona fide supervisory, sales or distributive function on the sale or delivery of product and services to the ultimate consumer.</p>

      <p class="font-weight-bold">4.9 Resignation.</p>

      <p>Any IB/Affiliates may voluntarily resign his/her IB/Affiliates status by failing to renew when required or by sending written notice to the Elysium Compliance Department. Resignation is effective upon receipt of such notice. A IB/Affiliates who fails to renew or resigns his/her IB/Affiliate ship may not reapply, either individually or have a financial interest in any other IB/Affiliates entity, for a period of six (6) months from the date of resignation.</p>

      <p class="font-weight-bold">4.10 Suspension.</p>

      <p>Elysium reserves the right to suspend any IB/Affiliates position at any time for cause when it is deemed that the IB/Affiliate may have violated the provisions of the Agreement, as they might be amended from time to time, or the provisions of the applicable laws and standards of fair dealing. Elysium shall make such involuntary suspension at its discretion pending the investigation of possible Policy violation. Elysium will notify the IB/Affiliates by postal delivery and/or email sent to the latest address listed with Elysium for the IB/Affiliates. In the event of a suspension, a IB/Affiliates agrees to immediately cease representing himself/herself as a IB/Affiliates with Elysium. </p>

      <p>During the investigation period of the suspension, any commissions, overrides or bonuses, which may be due, if any, will be held in abeyance by Elysium pending resolution. Should the infraction be deemed unsubstantiated by Elysium, the suspension shall be lifted and any commissions, overrides or bonuses will be credited to the IB/Affiliate ship. During the applicable suspension period, Elysium shall have the right to prohibit the suspended IB/Affiliates from purchasing products and services. However, the suspended IB/Affiliates does not have the right to represent himself/herself as a IB/Affiliates or promote his/her IB/Affiliates business or the products during the applicable suspension period.</p>

      <p class="font-weight-bold">4.11 Termination.</p>

      <p>A IB/Affiliates may be terminated for violating any of the terms of the Agreement. Notice of the termination, citing the reason(s) for the action, shall be provided in writing to the IB/Affiliates and delivered either through postal or email. Termination shall be effective as set forth therein, if a timely appeal is not provided by the IB/Affiliates in accordance with the appeal procedure set forth below.</p>

      <p>Immediately upon termination, the terminated IB/Affiliates:</p>

      <p>1.a) Must remove and permanently discontinue the use of the trademarks, service marks, trade names and any signs, labels, stationery or advertising referring to or relating to any Elysium product, plan or program; </p>
      <p>2.b) Must cease representing himself or herself as an IB/Affiliate of Elysium; </p>
      <p>3.c) Loses all rights to his/her IB/Affiliate ship and position in the Compensation Plan and to all future commissions 
      and earnings resulting there from; and</p> 
      <p>4.d) Must take all action reasonably required by Elysium relating to its materials and protection of its confidential 
      information and intellectual property.</p>

      <p>Elysium has the right to offset any amounts owed by a IB/Affiliates to Elysium. Where applicable laws on termination are inconsistent with this policy, the applicable law shall apply.</p>

      <p class="font-weight-bold">4.12 Appeal.</p> 

      <p>A terminated IB/Affiliate may appeal the action by submitting a letter to the Compliance Department of Elysium stating the grounds of appeal. (Note: No telephone calls will be accepted under any circumstances) Elysium must receive the letter of appeal within ten (10) business days of the date of such notice of termination, or as stated in the notification. If Elysium has not received the letter of appeal by the deadline date, the involuntary termination shall automatically become final.</p>

      <p>If an IB/Affiliate files a timely appeal, Elysium will, at its sole discretion, review and notify the IB/Affiliate of its decision. The decision of Elysium shall be final and will not be subject to further review. </p>

      <p>In the event that an appeal is denied, the termination shall remain in effect as of the date of Elysium’s original notice.</p>

      <p class="font-weight-bold">4.13 Cumulative Remedies. </p>

      <p>All rights, powers and remedies given to Elysium are cumulative, not exclusive and in addition to any and all other rights provided by law. Upon a breach of the Agreement by a IB/Affiliates, in addition to suspension and/or termination, Elysium shall have the right to impose fines as established by Elysium from time to time and/or to pursue all legal and equitable remedies to enforce its rights under the Agreement as set forth in Section 11.6. Elysium will have the right to offset against commissions owed to an IB/Affiliates for any amounts owed to Elysium by such IB/Affiliates.</p>

      <p class="font-weight-bold">SECTION 5 – SUCCESSION, DIVORCE OR DISSOLUTION</p>

      <p class="font-weight-bold">5.1 Succession.</p>

      <p>Notwithstanding any other provisions of this section, upon the death of a IB/Affiliate, the IB/Affiliate entity shall pass to his/her successor in interest as provided by law. However, Elysium will not recognize such transfer until the successor in interest has submit- ted a completed Sales/Transfer form to Elysium, together with certified copies of the death certificate and will, trust or other instrument, and executed an IB/Affiliates Agreement. The successor shall thereafter be entitled to all the rights and subject to all the obligations as any other IB/Affiliates. In addition, the successor-in-interest must be of legal age in his/her country of residence.</p>

      <p class="font-weight-bold">5.2 Divorce or Dissolution.</p>

      <p>During the pendency of divorce or entity dissolution, both parties must adopt one of the following methods of operation: </p>

      <p>One of the parties may, with written consent of the other(s) and with Elysium, operate the Elysium business, agreeing to deal directly and solely with the other spouse or non- relinquishing shareholder, partner, or trustee; or the parties may continue to operate the Elysium business jointly on a business-as-usual basis, whereby all compensation paid by Elysium will be paid in the joint names of the IB/Affiliates or in the name of the entity to be divided as the parties may independently agree between themselves.</p>

      <p>Under no circumstance will Elysium split commissions and bonus checks between divorcing spouses or members of dissolving entities. Elysium will recognize only one (1) downline organization and will issue only one (1) commission check per Elysium business per commission cycle. Commission checks shall always be issued to the same individual or entity. In the event that parties of a divorce or a dissolution proceeding are unable to resolve a dispute over the disposition of commissions and ownership of the business, the IB/Affiliates Agreement shall be involuntarily cancelled.</p>

      <p class="font-weight-bold">SECTION 6 – TRADEMARK, LITERATURE AND ADVERTISING.</p>

      <p class="font-weight-bold">6.1 Trademark.</p>

      <p>The name of Elysium and the name of all the Elysium products, services and programs are the trademarks of and are owned by Elysium. Only Elysium is authorized to produce and market products and literature under these trademarks. This includes, but is not limited to, slides, overheads, brochures, videos, domain addresses, and training and/or marketing materials and all promotional material, such as, but not limited to, t-shirts, caps, pins, magnetic signs, etc. Use of the Elysium name on any item not produced or authorized by Elysium is prohibited.</p>

      <p>IB/Affiliate acknowledges that any right to use Elysium’s trademarks and copyrighted materials is non- exclusive and that Elysium has the right and sole discretion to grant others the right to use such trademarks and copyrighted materials. IB/Affiliates expressly recognizes that any and all goodwill associated with the trademarks and copyrighted materials (including goodwill arising from IB/Affiliate’s use) inures directly and exclusively to the benefit of Elysium and is the property of Elysium and that, on expiration or termination of the IB/Affiliates Agreement, no monetary amount shall be attributable to any goodwill associated with IB/Affiliate’s use of the trademarks or copyrighted materials. </p>

      <p>IB/Affiliates are liable to Elysium for any damages arising out of their misuse of Elysium’s trade names, trademarks, service marks, copyrights and other intellectual property rights, in any form, except as specifically authorized by these Policies and Procedures or as otherwise approved in writing by Elysium. </p>

      <p class="font-weight-bold">6.2 Yellow and White Page Listings. </p>

      <p>IB/Affiliates are not permitted to use the Elysium trade name in advertising their telephone number and fax number in the white or yellow page section of the telephone directory or on the Internet without identifying themselves as independent IB/Affiliates or independent contractors.</p>

      <p class="font-weight-bold">6.3 “Toll Free” Telephone Number Listings. </p>

      <p>Elysium IB/Affiliates are not permitted to list their “toll free” telephone numbers under the Elysium trade name without submitting a request for approval from the Compliance Department of Elysium. If approval is granted, it must be stated in the following manner: </p>

      <p>John Smith<br>
      Independent Elysium Capital Limited IB/Affiliate<br>
      OR<br>
      Independent Elysium Capital Limited Contractor.<br>
      No other variation may be used to describe the IB/Affiliate’s association with Elysium. </p>

      <p class="font-weight-bold">6.4 Imprinted Checks. </p>

      <p>Elysium IB/Affiliates are not permitted to use the Elysium trade name or any of its trademarks on their business or personal checking accounts.</p>

      <p class="font-weight-bold">6.5 Imprinted Business Cards or Letterheads. </p>

      <p>Elysium independent IB/Affiliates are not permitted to create their own business cards or letterhead with the use of the Elysium name or trademark without written approval from Elysium. </p>

      <p class="font-weight-bold">6.6 Elysium Literature. </p>

      <p>Only official Elysium literature may be used in presenting Elysium products and/or the Elysium Compensation Plan and business. Elysium literature may not be duplicated or reprinted without prior written permission from Elysium, which may be obtained through email communication, mail or fax directed to the Compliance Department. Banners, trade show materials, and other related promotion- al material must be approved in advance and in writing by Elysium. Items on the corporate website and the replicating website may be downloaded for promotional purposes.</p>

      <p class="font-weight-bold">6.7 Advertising. </p>

      <p>Only Elysium approved materials may be used in the placement of any advertising in any print, radio, television, internet, electronic or other media. No person shall use the Elysium name, logos, trademarks or copyrighted material, including Elysium’s 3rd party vendors, brokerages and custodians, in any advertising produced by Elysium without express written permission from the Compliance Department of Elysium. For approval mail, fax or email a copy of the proposed advertising material to the Elysium Compliance Department. Once approval is obtained, no text may be amended or changed. If any change is made whatsoever, the new material must be submitted for approval. IB/Affiliates should allow forty-eight (48) hours from receipt for processing.</p>

      <p class="font-weight-bold">6.8 Internet and Website Policy. </p>

      <p>A Elysium IB/Affiliates may promote his/her IB/Affiliates business through Elysium’s replicating website program only. The website links seamlessly and directly to the official Elysium website, giving the IB/Affiliates a professional and Elysium-approved presence on the Internet. No IB/Affiliates may independently design a website that uses the names, logos, or product descriptions of Elysium or otherwise promote (directly or indirectly) Elysium products or the Compensation Plan. IB/Affiliates may not use the trademarks of Elysium or any derivative or abbreviation thereof as a domain name or email address. IB/Affiliates may not advertise or promote their IB/Affiliates business or Elysium’s business, products or marketing / compensation plan or use Elysium’s name in any electronic media or transmission, including on the Internet via web sites or otherwise, without the prior written approval of Elysium, which approval may be withheld in its sole discretion. If written approval is given, IB/Affiliates must abide by the guidelines set forth by Elysium, including, but not limited to, the following: (a) IB/Affiliates shall not make offers or solicitations in the guise of research, surveys or informal communication, when the real intent is to sell products or services or sponsor IB/Affiliates; (b) IB/Affiliates operating on-line websites, whether or not they collect personal information from individual consumers, shall disclose to the consumer in a prominent place on the website.</p>

      <p>How the consumer information will be used; (c) IB/Affiliates sharing personal information collected on-line shall provide individual consumers with an opportunity to prohibit the dissemination of such information, and if any consumer requests that his or her personal information not be shared, IB/Affiliates shall refrain from sharing such information; (d) IB/Affiliates shall provide individual consumers the option to terminate any further communication between the IB/Affiliates and the consumer and if any consumer requests that a IB/Affiliates cease communication, the IB/Affiliates shall immediately stop communicating upon such request; (e) IB/Affiliates must abide by all laws and regulations regarding electronic communications; (f) IB/Affiliates may not distribute content by use of distribution lists or to any person who has not given specific permission to be included in such a process; spamming or distribution of chain letters or junk mail is not allowed; (g) IB/Affiliates may not distribute content that is unlawful, harassing, libelous, slanderous, abusive, threatening, harmful, vulgar, obscene or otherwise objectionable material or which could give rise to civil liability or otherwise violate any applicable local, state, national or international law or regulation; and (h) IB/Affiliates may not, directly or indirectly, send bulk, unsolicited e-mails to persons with whom they have no prior or existing personal or business relationship.</p>

      <p class="font-weight-bold">6.9 Domain Names. </p>

      <p>IB/Affiliates may not use or attempt to register any Elysium trade names, trademarks, service marks, product names, Elysium name or any derivative thereof, for any Internet domain name without permission.</p>

      <p class="font-weight-bold">6.10 Email and Newsgroup Marketing.</p>

      <p>IB/Affiliates emailing, or employing the services to email, unsolicited and unapproved email flyers are fully responsible for all information regarding the product and marketing program which is not expressly contained in advertising and promotional materials supplied directly by Elysium. “Spamming”, as well as telephoning or faxing, without compliance with various laws is strictly prohibited. IB/Affiliates shall not defame, abuse, harass, stalk, threaten or otherwise violate the legal rights (such as rights of privacy and publicity) of others. IB/Affiliates shall not publish, post, upload, distribute, or communicate any inappropriate, profane, defamatory, infringing, obscene, indecent or unlawful topic, name, material or information. IB/Affiliates shall not advertise or offer to sell any goods or services for any commercial purpose or conduct or forward surveys, contests, or chain letters. Users of Elysium website will not participate in any activity that will restrict or inhibit any other user from using and enjoying the website.</p>

      <p class="font-weight-bold">6.11 Internet Sites.</p>

      <p>IB/Affiliates may not market, promote or sell Elysium’s marketing plan, products or services or the Elysium business on any e-commerce, auction, classified ad or social networking Internet site. Unless via Elysium’s SoHo application platform.</p>

      <p>This prohibition includes, but is not limited to, Internet sites that have their content based on user participation and user-generated content, forums, message boards, blogs and podcasts such as eBay, Facebook, Instagram, LinkedIn, WhatsApp, Craig’s List, Twitter, YouTube, Vimeo, Wikipedia or Flickr. Elysium products, marketing plan and business may be marketed and sold on the Internet only through Elysium websites and not through IB/Affiliates or third-party websites of any kind. The use of Elysium’s trademarks, service marks or copyrights is explicitly prohibited on the Internet in the selling of Elysium products (except on company websites). Elysium publications,  videos, recorded video calls etc. may not be posted on all of the above media.</p>

      <p class="font-weight-bold">6.12 Income Claims. </p>

      <p>IB/Affiliates may not display, in any manner for recruiting purposes or any other reasons, commission checks or make specific income claims or representations.</p>

      <p>IB/Affiliates must truthfully and fairly describe the Compensation Plan. No past, potential or actual income claims may be made to prospective IB/Affiliates, nor may IB/Affiliates use their own incomes as indications of the success assured to others. Income claims include statements of average or non- average earnings, statements of earning ranges, income testimonials, lifestyle claims and hypothetical claims. Commission checks may not be used as marketing materials. IB/Affiliates may not guarantee commissions or estimate expenses to prospects. Any earnings information or statements regarding income in the Compensation Plan are solely to explain the Compensation Plan and are not representations or guarantees of any earnings or income. Elysium does not guarantee or imply any specific earnings or income. Individual income results may vary significantly and are based on many factors, including an IB/Affiliate’s individual efforts, business experience and skills. Elysium makes no warranty or representation as to the level of success, if any, IB/Affiliates may achieve by selling any product or in soliciting IB/Affiliates or clients. </p>

      <p class="font-weight-bold">6.13 Trade Shows/Auction Sites. </p>

      <p>With prior written authorization from Elysium, IB/Affiliates may display Elysium products and the opportunity at trade shows. Requests for participation in trade shows must be received in writing by Elysium at least two (2) weeks prior to the event. Elysium products and the Elysium business are the only products and opportunity that may be offered, directly or indirectly, at the trade show booth or table. Only Elysium approved marketing materials may be displayed or distributed.</p>

      <p>IB/Affiliates may not market or sell Elysium products or services or promote the Elysium marketing plan or business via live, silent or any other type of auction, including without limitation, on the Internet.</p>

      <p class="font-weight-bold">6.14 Re-Packaging, Branding Prohibited.</p>

      <p>The digital or non-digital repackaging or branding of Elysium products or services for resale or for any reason whatsoever is prohibited.</p>

      <p class="font-weight-bold">6.15 Recordings.</p>

      <p>IB/Affiliates shall not produce or reproduce Elysium produced audio or video materials detailing the Elysium opportunity or products. IB/Affiliates shall not audiotape in any manner any Elysium function.</p>

      <p class="font-weight-bold">6.16 Telephone Answering.</p>

      <p>IB/Affiliates may not answer the telephone or create recordings saying “Elysium” or anything similar that could lead the caller to believe that he or she has reached the Corporate Office of Elysium.</p>

      <p class="font-weight-bold">6.17 Voicemail Systems.</p>

      <p>Elysium maintains a voicemail system for use by IB/Affiliates. This system is a tool intended to promote communication with downline organizations. Under no circumstance shall a IB/Affiliates use the Elysium voicemail system XOOMTM to promote the sale of other services and products or any non- Elysium program or opportunity.</p>

      <p class="font-weight-bold">6.18 Media Interviews.</p>

      <p>IB/Affiliates are prohibited from granting radio, television, newspaper, tabloid, Internet, or magazine interviews, or using public appearances, public speaking engagements, or making any type of statement to the public media to publicize Elysium, its products or their Elysium businesses, without the express prior written approval of Elysium. All media inquiries should be referred to Elysium’s corporate office.</p>

      <p class="font-weight-bold">6.19 Third Party Materials.</p>

      <p>IB/Affiliates may not sell any training, sales or leadership products, materials, systems or programs (collectively “Third Party Products”) to Elysium IB/Affiliates, whether or not such Third-Party Products are produced by the IB/Affiliates or another person or entity or contain any trademarks, service marks or copyrights of Elysium. If any IB/Affiliates desires to use (not sell) any Third-Party Materials in his or her Elysium business, he or she must obtain the written consent of Elysium prior to use.</p>

      <p class="font-weight-bold">SECTION 7 – PAYMENT OF BONUSES AND OVERRIDES</p>

      <p class="font-weight-bold">7.1 IB/Affiliate Agreement.</p>

      <p>Bonuses and overrides cannot be paid until a completed Elysium IB/Affiliates Agreement has been received and accepted by Elysium. Bonuses are paid ONLY on the sales of Elysium products. No bonuses are paid on the recruitment of IB/Affiliates.</p>

      <p class="font-weight-bold">7.2 Commission Checks.</p>

      <p>The minimum amount of payment of commission pay-outs is EURO 25.00 or as otherwise mandated by any country in which Elysium operates. If the earned amount is less than that amount, it will be accumulated until such time that the amount exceeds EURO 25.</p>

      <p class="font-weight-bold">7.3 Deductions.</p>

      <p>A check processing fee of Two and 50/100 Euro (EURO 2.50) will be deducted from all commission pay-outs.</p>

      <p class="font-weight-bold">7.4 Unclaimed Commissions and Credits.</p>

      <p>There shall be a Fifteen Euro (EURO 15.00) charge for reissuing a check and a Ten Euro (EURO 10.00) fee for each notice that is sent to the IB/Affiliates advising that the check had not been cashed.</p>

      <p class="font-weight-bold">7.5 Dormant Outstanding Commission Payments.</p>

      <p>A monthly dormant commission fee of Twenty Euro (EURO 20.00) will be charged for the following:<br>
      1. All outstanding commissions checks that have not been negotiated within six (6) months of issuance;<br> 
      2. Commissions in a IB/Affiliate's wallet when there has been no activity in the wallet for a period of six (6) months;<br>
      3. Pending commission payments that are delayed for a period of six (6) months due to the action or inaction of a IB/Affiliates.<br></p>

      <p>The fee will be charged monthly on each outstanding weekly commission payment. The dormant commission fee cannot reduce the commission below EURO 0. </p>

      <p class="font-weight-bold">SECTION 8 – PURCHASE AND SALE OF PRODUCTS</p>

      <p class="font-weight-bold">8.1 Sales Presentations.</p>

      <p>At sales presentations, IB/Affiliates shall truthfully identify themselves, the Elysium products, services, and the purpose of their business to prospective clients. IB/Affiliates may not use any misleading, deceptive, or unfair sales practices. Explanation and demonstration of products offered shall be accurate and complete, including, but not limited to, with regard to price, terms of payment, refund rights, guarantees, and after-sales services and delivery. Personal or telephone contacts shall be made in a reasonable manner and during reasonable hours to avoid intrusiveness. IB/Affiliates must immediately discontinue a demonstration or sales presentation upon the request of the consumer. IB/Affiliates shall not directly or by implication denigrate any other company or product. IB/Affiliates shall refrain from using comparisons that are likely to mislead and that are incompatible to the principles of fair competition. Points of comparison shall not be unfairly selected and shall be based on facts which can be substantiated. IB/Affiliates shall not abuse the trust of individual consumers, shall respect the lack of commercial experience of consumers and shall not exploit a client’s age, illness, lack of understanding or lack of language expertise.</p>

      <p class="font-weight-bold">8.2 Purchase</p>

      <p>Elysium IB/Affiliates are entitled to purchase products and services from Elysium at a market conform price.</p>

      <p class="font-weight-bold">8.3 Stockpiling Prohibited.</p>

      <p>The success of Elysium depends upon sales to the ultimate consumer; therefore, all forms of stockpiling are discouraged. Although we mostly sell SaaS. Elysium recognizes that IB/Affiliates may wish to purchase certain products in reasonable quantities for their own use, for inventory purposes and for the purpose of provisioning new IB/Affiliates as they are sponsored. However, Elysium strictly prohibits the purchase of products solely in an attempt to qualify for advancement in the Compensation Plan.</p>

      <p class="font-weight-bold">8.4 Back Orders.</p>

      <p>Should any Elysium product or sales material be unavailable for any period of time, Elysium IB/Affiliates will be given the option of placing the order(s) and waiting for availability or cancelling the order with full reimbursement without penalties until those items are ready for shipping.</p>

      <p class="font-weight-bold">8.5 Seventy Percent Rule.</p>

      <p>In order to qualify for commission and overrides, each IB/Affiliates must certify with the purchase of product that he/she has sold to retail clients and/or has consumed seventy percent (70%) of all products previously purchased. This is known in the “industry” as the “Seventy Percent Rule”. Within Elysium type of business, we require a certain amount of clients, see our Compensation Plan for details.</p>

      <p class="font-weight-bold">8.6 Retail Sales Required.</p>

      <p>In order to qualify for any compensation payable under the Elysium Compensation Plan, an IB/Affiliates should make retail sales to the ultimate consumer. (SaaS)</p>

      <p class="font-weight-bold">8.7 Shipping Address.</p>

      <p>Elysium will only accept street addresses for shipping purposes. Orders of physical products will be shipped via USPS or other shipper as determined by Elysium so that they may be tracked and, if necessary, replaced in a timely manner. Post office boxes are accepted for the mailing of commission checks only. (If applicable in your country)</p>

      <p class="font-weight-bold">8.8 Direct Purchases.</p>

      <p>A Elysium IB/Affiliates should purchase product needs directly from Elysium. In the event that a IB/Affiliates obtains product from his/her sponsor or upline IB/Affiliate’s personal inventory, the commissions associated with the purchase will be attributed to the sponsor or upline IB/Affiliate who purchased the product.</p>

      <p class="font-weight-bold">8.9 Credit Card Purchases.</p>

      <p>Credit card purchases may only be made by the individual whose name and address is on the credit card. Any IB/Affiliate who uses another individual’s credit card to pay for purchases should submit a credit card authorization form to Elysium with the order prior to placing the order. Elysium considers unauthorized credit card use as fraudulent and will report such actions to the proper authorities for settlement. </p>

      <p class="font-weight-bold">8.10 Credit Card Chargebacks.</p>

      <p>Under no circumstance will any IB/Affiliate charge back any credit card purchase. Any IB/Affiliates who does so will immediately lose all credit card ordering privileges until the charges are replaced with certified funds. If an erroneous charge is applied to a IB/Affiliate’s credit card, the IB/Affiliates should immediately contact Elysium to initiate an investigation and resolution.</p>

      <p class="font-weight-bold">8.11 Commission Adjustments.</p>

      <p>Any upline IB/Affiliates affected by returned or cancelled products to Elysium will accordingly be subject to adjustment in his/her commissions, overrides and bonus accounts, personal volume, etc. based upon all commissions and bonuses paid on the returned or cancelled products.</p>

      <p class="font-weight-bold">8.12 Bonus Buying.</p>

      <p>Bonus buying includes (a) the enrollment of an individual or entity as a Elysium IB/Affiliate without the knowledge of and/or execution of a IB/Affiliate Agreement by such individual or entity; (b) the fraudulent enrollment of an individual or entity as a IB/Affiliate; (c) the enrollment or attempted enrollment of non-existent individuals or entities as IB/Affiliate (phantoms); or (d) the use of a credit card on behalf of a IB/Affiliates when the IB/Affiliates is not the account holder of such credit card. Bonus buying constitutes a breach of these Policies and Procedures and is strictly prohibited.</p>

      <p class="font-weight-bold">8.13 Shipping Costs.</p>

      <p>It is the ordering IB/Affiliate’s sole responsibility to indicate (a) method and means of shipping and (b) destination address. The methods available are stated on each order form and on the Elysium website along with prepaid costs for shipping. Shipping costs will be automatically calculated.</p>

      <p>Should the receiving party of an order shipped from Elysium refuse delivery and the shipment is returned to Elysium, the ordering IB/Affiliate’s status will be made “suspended” pending resolution of the delivery refusal. Return delivery charges will be deducted from the IB/Affiliate’s account.</p>

      <p class="font-weight-bold">8.14 Returned Packages.</p>

      <p>In the event that a package is returned due to a IB/Affiliate’s error or if the package was not picked up in a timely manner and returned, Elysium will charge the IB/Affiliates a re-shipping fee.</p>

      <p class="font-weight-bold">8.15 Special Orders.</p>

      <p>Elysium will not “hold” orders or delay shipment of products that have been processed. Once payment has been received, all orders must be released for shipping or online activation.</p>

      <p class="font-weight-bold">8.16 Consignment.</p>

      <p>In order to protect the Elysium business and the integrity of Elysium, Elysium products may not be delivered to a Elysium IB/Affiliate or another party on consignment. Only authorized Elysium IB/Affiliates may sell Elysium products and services.</p>

      <p class="font-weight-bold">8.17 Damaged Shipments.</p> 

      <p>1.Accept delivery. <br>
      2.Before the driver leaves, document on the delivery receipt the number of boxes which appear to be damaged, while also including photographic evidence of such. <br>
      3.Save the damaged product and box(es) for inspection by the shipping agent. <br>
      4.Make an appointment with the shipping company to have the damaged goods inspected. <br>
      5.File a claim with the shipping company. <br>
      6.Notify the Client Service Department of Elysium. <br></p>

      <p class="font-weight-bold">8.18 Short Shipments.</p>

      <p>Elysium takes pride in fulfilling orders in an accurate and timely manner. However, in those rare instances where errors may occur, a correction will be handled quickly to avoid further delay to the recipient. IB/Affiliate must report any damages within five (5) business days following receipt of shipment. Once notified and verified, Elysium will ship missing items to the address on the original order.</p>

      <p class="font-weight-bold">8.19 Sales Tax.</p>

      <p>For purchases made from Elysium, Elysium collects and remits applicable state and local taxes, which may be due on the suggested retail price of those products and/or materials. The applicable rate of tax due is based upon the address to which the product and/or sales materials are to be delivered. Exemption from payment of sales tax is applicable to orders that are shipped to a state in which a valid sales tax exemption of a IB/Affiliate is on file with and accepted by Elysium. Tax exemptions are not retroactive.</p>

      <p class="font-weight-bold">SECTION 9 – SALES AND PRICING</p>

      <p class="font-weight-bold">9.1 Price Changes.</p>

      <p>All Elysium product, services and literature prices are subject to change without prior notice. 9.2 Standard Pricing. 
      Elysium provides Standard pricing as a guideline. An IB/Affiliate is not permitted to advertise any price below the Elysium-suggested price. This includes, but is not limited to, “free” products or any other special pricing that would fall below the suggested retail price. No Elysium product may be offered along with the products of any other company.</p> 
      <p class="font-weight-bold">9.3 Receipts: Retail Clients.</p>

      <p>Elysium IB/Affiliates will provide all retail clients of Elysium products with printed sales receipts.</p>

      <p class="font-weight-bold">9.4 Insufficient Funds.</p>

      <p>It is the responsibility of each IB/Affiliate to make certain that current credit card, payment, information is on file for recurring payments and that there are sufficient funds for the draft.</p>

      <p class="font-weight-bold">9.5 Returned Checks. </p>

      <p>All IB/Affiliates checks used for payment of product will be re-submitted for payment. A Twenty-Five Euro (EURO 25.00) processing fee will be charged to the account of the offending IB/Affiliate. All subsequent orders must be paid by credit card, money order or cashier’s check.</p>

      <p class="font-weight-bold">SECTION 10 - RETAIL GUARANTEE AND REFUND POLICY</p>

      <p class="font-weight-bold">10.1 Retail Client Returns. </p>

      <p>Elysium offers a thirty (30) day, one hundred percent (100%) unconditional money back guarantee on products and services to all retail clients. Each Elysium IB/Affiliate is bound by his/her IB/Affiliate Agreement and the Policies and Procedures to honor this guarantee. Prior to the completion of any retail sale, a IB/Affiliates must make a verbal disclosure of the right to cancel. If a retail client is dissatisfied with any Elysium product or service for any reason, then the retail client may return the unused product(s) to the Company if purchased online or to the IB/Affiliates from whom it was purchased within thirty (30) days from the date of purchase for either a replacement, exchange for another product or a full refund of the purchase price of the product. </p>

      <p>Elysium will replace the returned product to the IB/Affiliates providing the following steps and conditions are met: 
      Elysium is notified of a pending retail client return. The IB/Affiliate through whom it was originally purchased returns the product to Elysium as instructed by Elysium Client Service.</p>

      <p>The product is received by Elysium within fifteen (15) days from the return date to the IB/Affiliates.</p>

      <p>The return* is accompanied by the following:</p>

      <p>A signed statement from the client identifying the reason for the return and include: A dated copy of the original sales receipt; The product as received from the client; and The name, address and telephone number of the client.</p>

      <p>Proper shipping carton(s) and packing material are to be used in packaging the product(s) being returned for replacement, and the best and most economical means of shipping is suggested. Elysium will pay the cost of shipping replacement product(s) to the IB/Affiliate. </p>

      <p>Elysium will not refund, to any IB/Affiliate, the purchase price of any client returns and no replacement products will be released if the conditions of the rule are not met.</p>

      <p>*Retail sales return requests must be clearly written with complete details (name, address, telephone number, email – if available, and any other information which would allow Elysium to verify the sale and subsequent return). Unverifiable retail sales cannot be replaced. Falsified information could lead to further investigation and possible suspension of IB/Affiliate ship.</p>

      <p class="font-weight-bold">10.2 Return by Online Clients.</p>

      <p>Elysium offers clients an unconditional thirty (30) day money back guarantee. If for any reason an Online or Preferred client is dissatisfied with any Elysium product, he/she may return his/her initial purchase of that product within thirty (30) days for a replacement, exchange or full refund of the purchase price (less shipping). </p>

      <p class="font-weight-bold">10.3 Return Product Authorization.</p>

      <p>Before any product may be returned to Elysium, whether it is a shipping error, retail client return, damaged product or resignation, the IB/Affiliate must contact Elysium client service either by fax, postal delivery or email to obtain a Return Merchandise Authorization number (RMA). Any package received without such identification clearly visible on the package exterior will be refused.</p>

      <p class="font-weight-bold">10.4. Quality Control (QC).</p>

      <p>Elysium will replace, within thirty (30) days of purchase, any product found to be defective. However, no product should be returned to Elysium prior to the approval to do so from Elysium Client Service, whether through a telephone, mail, fax, or email request. In order to assure that replacement product will be issued, strict compliance to the following procedure is required: </p>

      <p>1.A written replacement request must be submitted, stating the reason for the request, and accompanied by verification of payment and a copy of the product order form and packing slip. <br>
      2.Upon notification Elysium will instruct the IB/Affiliates where to ship the product and will issue an RMA (Return Merchandise Authorization) number, which must be clearly written on the exterior of the returned package(s). Upon receipt and verification Elysium will ship out the replacement product(s). </p>

      <p class="font-weight-bold">10.5 Resignation Returns. </p>

      <p>All international returns must be made within ninety (90) days from the date of purchase and are subject to all other guidelines stated herein.</p>

      <p>In the event that inventory is returned that does not meet the above conditions for return, such merchandise will be held for a period of thirty (30) days during which time the IB/Affiliates has the right to request return of those items. IB/Affiliates will pay for all shipping charges. Should this request not be received by the client service department in the time period noted above, Elysium reserves the right to destroy such inventory without further compensation to that IB/Affiliate.</p>

      <p>Where a state or international law is inconsistent with the terms of these Policies, the state or international law will control. </p>

      <p>In order to ensure that a IB/Affiliate refund is issued in a timely manner, the following steps should be followed:<br>
      1.A written request must be submitted, either by fax, postal delivery or email to Elysium client service, clearly citing the reason for the resignation and for the return of product and/or sales materials.<br>
      2.Upon receipt of the proper information, Elysium will instruct the IB/Affiliates where to ship the products along with
      the RMA (Return Merchandise Authorization) number, which must be clearly visible on the exterior of all packages.<br>
      Any return without this information on the outside of the package will be refused without exception.<br>
      Elysium will issue the refund within approximately thirty (30) days from the date of receipt of the authorized merchandise. The IB/Affiliates assumes the cost of shipping any merchandise to Elysium. <br>
      3.The IB/Affiliates assumes responsibility for packing and shipping products in a manner that will ensure that it is received in a timely manner and with minimal damage. Elysium will not accept damaged merchandise for refund.<br> 
      4. Refunds will be issued in the same manner that payment was received. This means that if a credit card was used to place the order, the reimbursement will be issued back to that same card. If the payment was made by check, the refund will be issued in the form of a check.</p>

      <p class="font-weight-bold">10.6 Unauthorized Returns. </p>

      <p>Should a IB/Affiliate refuse delivery of any Elysium shipment or request to return any previously purchased product for a refund, such request will be deemed as a voluntary suspension. </p>

      <p class="font-weight-bold">10.7 Buyer’s Right to Cancel. </p>

      <p>Federal law empowers a buyer to cancel certain sales without penalty prior to midnight of the third (3rd) business day following the transaction. This rule covers consumer sales of EURO 25.00 or more made in the home and from temporary locations (not permanent retail locations). After March 15, 2015, the threshold for consumer sales from temporary locations will increase to EURO 130.00. Please see the website for the required retail receipt and instructions. In addition, the IB/Affiliates must orally inform the buyer of the three (3) day right to cancel at the time the buyer signs the contract of sales or purchases the goods.</p>

      <p class="font-weight-bold">10.8 Exchanges. </p>

      <p>Elysium will not accept product exchanges from IB/Affiliates.</p>

      <p class="font-weight-bold">10.9 Warranties.</p>

      <p>Except as expressly stated herein, Elysium makes no warranty or representation as to the merchantability, fitness for a particular purpose, workmanship or any other warranty concerning any product or service purchased from or through Elysium.</p>

      <p>EXCEPT AS EXPRESSLY MADE BY ELYSIUM IN WRITING, ELYSIUM MAKES NO WARRANTY OR REPRESENTATION, EXPRESS OR IMPLIED, AS TO THE MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, WORKMANSHIP, NON-INFRINGEMENT OR ANY OTHER WARRANTY ARISING BY LAW, STATUTE, USAGE OF TRADE OR COURSE OF DEALING CONCERNING ANY PRODUCT OR SERVICE PURCHASED FROM OR THROUGH ELYSIUM. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, ALL PRODUCTS AND SERVICES OF ELYSIUM ARE PROVIDED “AS IS,” “WITH ALL FAULTS,” AND “AS AVAILABLE.” ELYSIUM DOES NOT WARRANT THAT ITS PRODUCTS OR SERVICES WILL BE COMPATIBLE WITH ANY HARDWARE OR SOFTWARE SYSTEMS OR THAT ON-LINE SERVICES WILL BE UNINTERRUPTED OR ERROR FREE. ELYSIUM DOES NOT WARRANT THAT ANY WEBSITE OPERATED, SPONSORED OR HOSTED BY ELYSIUM OR ANY OF ITS AFFILIATES WILL BE UNINTERRUPTED OR FREE FROM ERROR. ELYSIUM IS NOT RESPONSIBLE FOR INTERRUPTED, INACCESSIBLE OR UNAVAILABLE NETWORKS, SERVER, SATELLITES AND/OR SERVICE PROVIDERS; OR FOR MISCOMMUNICATIONS, FAILED, JUMBLED, SCRAMBLED, DELAYED OR MISDIRECTED COMPUTER, TELEPHONE OR CABLE TRANS- MISSIONS; OR FOR ANY TECHNICAL MALFUNCTIONS, FAILURES OR DIFFICULTIES.</p>

      <p class="font-weight-bold">SECTION 11 – GENERAL PROVISIONS </p>

      <p class="font-weight-bold">11.1 Record Keeping.</p>

      <p>Elysium encourages all of its IB/Affiliate to maintain complete and accurate records of their business transactions. Elysium may exercise its option to request records relating to retail sales or other matters as described herein or as required by applicable law.</p>

      <p class="font-weight-bold">11.2 Amendments.</p>

      <p>Elysium, at its discretion, reserves the right to amend the Policies and Procedures as set forth therein, its IB/Affiliates or suggested retail prices, product availability and formulations, and Compensation Plan, as it deems appropriate without prior notice. Such Policies and Procedures and Compensation Plan modifications, and all changes thereto, shall become a binding part of the Agreement upon publication on the official Elysium website. It is the IB/Affiliate’s responsibility to stay abreast of current and updated information, and Elysium is in no way liable for any IB/Affiliate’s lack of knowledge of the updated and current information. In the event of any conflict between the applicable Agreement and any such amendment, the amendment shall control. If Elysium brochures, product catalogs, price lists, literature, website, fax on demand information, etc. are revised, only the most current version is authorized for use by Elysium IB/Affiliates.</p>

      <p class="font-weight-bold">11.3 Non-Waiver Provisions. </p>

      <p>No failure of Elysium to exercise any power under these Policies and Procedures or to insist on strict compliance by an IB/Affiliate with any obligation to provision herein, and no custom or practice of the parties at variance with these Policies and Procedures, shall constitute a waiver of Elysium’s right to demand exact compliance with these Policies and Procedures. Waiver by Elysium can be affected only in writing by an authorized officer of Elysium. Elysium’s waiver of any particular default by a IB/Affiliate shall not affect or impair Elysium’s right or obligation of any other IB/Affiliate, nor shall any delay or omission by Elysium to exercise any right arising from default affect or impair Elysium’s right as to that or any subsequent default. </p>

      <p class="font-weight-bold">11.4 Administration fees </p>

      <p>The repayment of all administrative fees and services shall be at not less than ninety percent (90%) of the cost to the IB/Affiliate of such fees and services and shall reflect all administrative services that have not, at the time of resignation, been provided to the IB/Affiliates. Elysium shall further refund not less than ninety percent (90%) of the cost to the IB/Affiliates of any other consideration paid by the IB/Affiliates in order to participate in the program. The IB/Affiliate will be held responsible for all shipping expenses incurred in returning sales aids or products to Elysium.</p>

      <p class="font-weight-bold">11.5 Reporting Policy Violations.</p>

      <p>IB/Affiliates observing a policy violation by another IB/Affiliate should submit a written report of the violation to the Compliance Department of Elysium, either through fax, postal delivery or email. Such documents must bear the IB/Affiliate’s signature and Personal Identification Number (PIN). Anonymous complaints will not be accepted under any condition. No telephone calls will be accepted with such matters, as documentation must be presented in writing from both the complaining party(ies) and ultimately from the individual(s) cited for the policy violation. Details of the incident such as dates, number of occurrences, persons involved, witnesses and any other supporting documentation should be included in the report.</p>

      <p class="font-weight-bold">11.6 Arbitration. </p>

      <p>All disputes and claims relating to Elysium, the Agreement, or its products, the rights and obligations of a IB/Affiliates of Elysium, or any claims or causes of actions relating to the performance of either a IB/Affiliates or any Elysium under the Agreement, and/or a IB/Affiliate’s purchase of product(s) shall be settled totally and finally by arbitration in 
      @if(!$flgEstonia)
        Estonia
      @else
        Hong Kong
      @endif
      , or such other location as Elysium prescribes, in accordance with the applicable laws. There shall be one (1) arbitrator, an attorney at law, who shall have expertise in business law transactions, with preference being an attorney knowledgeable in the affiliate marketing industry. Each party to the arbitration shall be responsible for its own costs and expenses of arbitration, including legal and filing fees. If an IB/Affiliate files a claim or counterclaim against Elysium, an IB/Affiliate shall do so on an individual basis and not with any other IB/Affiliate or as part of a class action. The decision of the arbitrator shall be final and binding on the parties and may, if necessary, be reduced to a judgment in any court of competent jurisdiction. This agreement for arbitration shall survive any termination or expiration of the IB/Affiliate Agreement. </p>

      <p>Notwithstanding the foregoing, the arbitrator shall have no jurisdiction over disputes relating to the ownership, validity or registration or any mark of other intellectual property or proprietary or confidential information of Elysium, without Elysium’s written consent. Elysium may seek any applicable remedy in any applicable forum with respect to these disputes and with respect to money owing to Elysium. In addition to monetary damages, Elysium may obtain injunctive relief against an IB/Affiliate in violation of the Agreement, and for any violation of misuse of Elysium’s trademark, copyright or confidential information policies. </p>

      <p>Nothing in this rule shall prevent Elysium from terminating the IB/Affiliate Agreement or from applying to and obtaining from any court having jurisdiction a writ of attachment, a temporary injunction, preliminary injunction and/or other injunctive or emergency relief available to safeguard and protect Elysium’s interests prior to the filing of or during or following any arbitration or other proceeding or pending the handing down of a decision or award in connection with any arbitration or other proceeding.</p>

      <p>Nothing contained herein shall be deemed to give the arbitrator any authority, power, or right to alter, change, amend, modify, add to, or to subtract from any of the provisions of the Policies or Procedures, Compensation Plan, or the IB/Affiliates Agreement.</p>

      <p>The existence of any claim or cause of action by an IB/Affiliate against Elysium, whether predicated on the IB/Affiliate Agreement or otherwise, shall not constitute a defense to Elysium enforcement of the covenants and agreements contained in the IB/Affiliate Agreement.</p>

      <p class="font-weight-bold">11.7 Entire Agreement.</p>

      <p>This Agreement (comprised of these Policies and Procedures, the IB/Affiliates Agreement, and the Compensation Plan, as may exist or hereafter be amended) constitutes the entire agreement of the parties regarding their relationship and the subject matter hereof and related hereto.</p>

      <p class="font-weight-bold">11.8 Severability. </p>

      <p>If under any applicable and binding law or rule of any applicable jurisdiction, any provision of the Agreement, including these Policies and Procedures, or any specification, standard or operating procedure that Elysium has prescribed is held to be invalid or unenforceable, Elysium shall have the right to modify the invalid or unenforceable provision, specification, standard operating procedure or any portion thereof to the extent required to be valid and enforceable. An IB/Affiliate shall be bound by any such modification. The modification shall be effective in the jurisdiction on which it is required. </p>

      <p class="font-weight-bold">11.9 Limitation of Damages.</p>

      <p>To the extent allowed by law, Elysium and its affiliates, officers, directors, employees and other IB/Affiliates shall not be liable for and each IB/Affiliate hereby releases the foregoing from, and waives any claim for loss of profit, incidental, special, consequential or exemplary damages, which may arise out of any claims whatsoever relating to Elysium’s performance, non-performance, act of omission with respect to the business relationship or other matter between the IB/Affiliate and Elysium whether in contract, tort or strict liability. Furthermore, it is agreed that any damage to the IB/Affiliate shall not exceed and is hereby expressly limited to the amount of unsold Elysium product owned by the IB/Affiliate, which was directly purchased thereby from Elysium, and any commissions or bonuses due.</p>

      <p class="font-weight-bold">11.10 Indemnity Agreement.</p>

      <p>Each and every IB/Affiliate agrees to indemnify and hold harmless Elysium, its shareholders, officers, directors, employees, agents and successors in interest from and against any claim, demand, liability, loss, cost or expense including, but not limited to, court costs and attorneys’ fees, asserted against or suffered or incurred by any of them, directly or indirectly, arising out of or in any way related to or connected with allegedly or otherwise, the IB/Affiliate’s (a) activities as a IB/Affiliate; (b) breach of the terms of the IB/Affiliate Agreement or these Policies and Procedures; and/or (c) violation of or failure to comply with any applicable federal, state or local law or regulation.</p>

      <p class="font-weight-bold">11.11 Force Majeure.</p>
      <p>Elysium shall not be responsible for delays or failure in performance caused by circumstances beyond a party’s control, such as strikes, labor difficulties, fire, war, government decrees or orders or curtailment of a party’s usual source of supply. </p>

      <p class="font-weight-bold">11.12 Governing Law.</p>
      @if(!$flgEstonia)
        @if(!$flgCyprus)
        <p>The Agreement shall be governed by the laws of Estonia and Hong Kong.</p>
        @else
        <p>The Agreement shall be governed by the laws of Estonia.</p>
        @endif
      @else
      <p>The Agreement shall be governed by the laws of Hong Kong.</p>
      @endif
      <p class="font-weight-bold">11.13 Authorization to Use Name and Likeness.</p>

      <p>By executing the Agreement, each IB/Affiliate grants to Elysium and its affiliates and agents the absolute, perpetual and worldwide right and license to use, to record, photograph, publish, reproduce, advertise, display, edit, and sell in any manner for all purposes, his or her name, photograph, likeness, voice testimony, biographical information, image and other information related to IB/Affiliate’s business with Elysium (collectively the “Likeness”) in marketing, promotional, advertising and training materials, whether in print, radio or television broadcasts (including cable and satellite transmissions) audio and videotapes on the Internet or in other media (“Publicity Materials”) for an unlimited number of times, without compensation, in perpetuity. Each IB/Affiliate waives any right to inspect or approve any Publicity Materials including or accompanying his or her Likeness. Each IB/Affiliate further releases Elysium from any liability or obligation that may arise as a result of the use of his or her Likeness, including without limitation, claims for invasion of privacy, infringement of right of publicity and defamation (including libel and slander). An IB/Affiliate may withdraw his or her authorization of any use of his or her Likeness that has not already been publicized by providing written notice to Elysium. IB/Affiliates agree that any information given by IB/Affiliates, including his or her testimonial, is true and accurate. </p>

      <p class="font-weight-bold">11.14 Privacy.</p>

      <p>IB/Affiliates must comply with all applicable privacy and data security laws, including security breach notification laws. IB/Affiliates must take appropriate steps to safeguard and protect all private information, including, without limitation, credit card and social security numbers, provided by a retail client, prospective retail client or other IB/Affiliates. IB/Affiliates must hold such information in strict confidence. IB/Affiliates are responsible for the secure handling and storage of all documents that may contain such private information. IB/Affiliates must adopt, implement, and maintain appropriate administrative, technical, and physical safeguards to protect against anticipated threats or hazards to the security of confidential information and client data. Appropriate safeguards may include, but are not limited to: (i) encrypting data before electronically transmitting it; (ii) storing records in a secure location; (iii) password-protecting computer files, or (iv) shredding paper files containing confidential information or client data. IB/Affiliates should retain documents containing such information for only as long as necessary to complete the transaction.</p>

      <p>IB/Affiliates should dispose of any paper or electronic record containing client data and other confidential information after use by taking all reasonable steps to destroy the information by: (A) shredding; (B) permanently erasing and deleting; or (C) otherwise modifying the client data and other confidential information in those records to make it unreadable, unreconstructible, and indecipherable through any means.</p>

      <p class="font-weight-bold">11.15 Sales Forces of Other Companies.</p>

      <p>IB/Affiliates may not encourage members of the sales force of another company to violate the terms of their contract with such company. IB/Affiliates bear the sole risk and sole liability for such activities, which activities are not endorsed or supported by Elysium.</p>

      <p class="font-weight-bold">11.16 Survival. </p>

      <p>Any provision of the Policies, which, by its terms, is intended to survive termination or expiration of the Agreement shall so survive, including, without limitation, the arbitration, non-competition, non- solicitation, trade secrets and confidential information covenants contained in the Policies.</p>

      <p>https://www.elysiumnetwork.io/beta/legal/gdpr | https://www.elysiumnetwork.io/beta/legal/terms-of-supply |https://www.elysiumnetwork.io/beta/legal/terms-of-use</p>

      <p>This concludes Elysium’s GLOBAL CODE OF CONDUCT - POLICIES AND PROCEDURES – IB/AFFILIATE AGREEMENT. </p>


        </div>
    </div>

@endsection
