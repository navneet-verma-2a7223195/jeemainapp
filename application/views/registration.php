<html xmlns="http://www.w3.org/1999/xhtml"><head><title>
	Instructions
</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/Images/favicon.ico"><link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet"><link href="../App_Themes/ClassicNew/css/style.css" rel="stylesheet"><link href="<?php echo base_url();?>assets/css/chosen_New.css" rel="stylesheet"><link href="<?php echo base_url();?>assets/Font/font-awesome.min.css" rel="stylesheet">
    
    <script src="<?php echo base_url();?>assets/Bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/Bootstrap/js/bootstrap3.3.7.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        window.onload = window.history.forward(0);  //calling function on window onload
        window.history.forward(); function noBack() { window.history.forward(); }
        function burstCache() {
            if (!navigator.onLine) {
                window.location = "../SessionExpirePage.htm";
            }
        }
        history.go(1); /* undo user navigation (ex: IE Back Button) */
    </script>
    
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/script/Application.js"></script>
    
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/script/validation.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">

           function DisableButton() {
            var chkadharaggreement = document.getElementById('ctl00_ContentPlaceHolder1_chkagreement');
            var Buttvalidate = document.getElementById('ctl00_ContentPlaceHolder1_btnsubmit');
            Buttvalidate.disabled = true;
            chkadharaggreement.checked = false;
        }
        function EnableButton() {
           
            var chkadharaggreement = document.getElementById('ctl00_ContentPlaceHolder1_chkagreement');
            var Buttvalidate = document.getElementById('ctl00_ContentPlaceHolder1_btnsubmit');
            if (chkadharaggreement.checked == true) {
                Buttvalidate.disabled = false;
                return;
            }
            if (chkadharaggreement.checked == false) {
                Buttvalidate.disabled = true;
                return;
            }

        }



    </script>



</head>
<body onload="burstCache();">
    <form name="aspnetForm" method="post" action="<?php echo base_url().'index.php/Auth/registered'?>" id="aspnetForm" autocomplete="off">
<div>



<script src="/JEEMain23/WebResource.axd?d=P8YdepA6iynV7IzrTUtwhMnaq6FF-dDxt8gWHfkhyeOjv8F3NLMX8zz4oYtxqBgLUXgGtMUgwN84dQJkxhT-Cxx8Dig1&amp;t=637823563705833095" type="text/javascript"></script>

<script language="javascript" type="text/javascript">
window.history.forward();
         if (!navigator.onLine) {
             //alert(navigator.onLine);
             window.location = '~/SessionExpirePage.htm';
         }
     history.go(1); /* undo user navigation (ex: IE Back Button) */
    </script>
<script src="/JEEMain23/ScriptResource.axd?d=t_LMw8Qp7GYTCC8OEOCNJcIxhNbBfSHaVHbo-1yBOdtCxGliND_x-hoRNSpa1x-UusWENMI5RNspcIMnyqZCUmxxi7uSHCCSqGcIWYD2gsM4EIed0&amp;t=705c9838" type="text/javascript"></script>
<script src="/JEEMain23/ScriptResource.axd?d=Fslu5kRD0_MJla-vTRBCoaRajWmkvQVMLIJtRJRR-i7Ud7h2asIJVNmNLchRt4I__Smg2Q7uQ9PYlBRpXtY2KEm1huuaCxeWVIokMcDopuSbzBDmzObr013sGqs7jrO55Wkxgg2&amp;t=705c9838" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0BEFC1F1">
	<input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0">
	<input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0">
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="kr/KNspIwib9ujmET1flFjpAiySiHozNeQfZ+S4TshtaGCdH08w8ue9saHDdk8YGVEp5fBwXyi0CmetD39EW5jLdBeyieghza78aTRCB82CI12JKuva9UnHgcUGefpXQzs/5RhMAENVX4ZNO4fpDHNGkgr4=">
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ToolkitScriptManager1', 'aspnetForm', [], [], [], 90, 'ctl00');
//]]>
</script>


        <section class="headerfirst">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <img id="ctl00_imgLogoRight" class="img-responsive pull-left" src="https://examinationservices.nic.in/JEEMain23/Handler/Handler1.ashx?value=R&amp;appFormId=101032311" style="border-width:0px;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h1 class="text-center">
                            <span id="ctl00_lblHeader">JEE(Main) 2023</span>
                        </h1>
                        <h3 class="text-center">
                            <span id="ctl00_lblSubHeader">Session 1</span>
                        </h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <img id="ctl00_imgLogoLeft" class="img-responsive pull-right" src="https://examinationservices.nic.in/JEEMain23/Handler/Handler1.ashx?value=L&amp;appFormId=101032311" style="border-width:0px;">
                    </div>
                </div>
            </div>
        </section>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url(); ?>" id="ctl00_aHome" class="nav-link"><i class="fa fa-home">&nbsp;</i>Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!---------------Start Script to Use active class in Each menu --------------->
        <script type="text/javascript">
            $(document).ready(function () {

                var url = window.location;
                $('ul.nav li a').each(function () {
                    if (this.href == url) {
                        $("ul.nav li").each(function () {
                            if ($(this).hasClass("active")) {
                                $(this).removeClass("active");
                            }
                        });
                        $(this).parents().addClass('active');
                    }

                });

            });
        </script>
        <!---------------End Script to Use active class in Each menu --------------->
        
    <script type="text/javascript" language="javascript">
        function popup() {
            my_window = window.open('onlineform.aspx', '_blank', 'width=900,height=700,toolbar=0,resizable=1,scrollbars=1,menubar=0,status=1');
        }

        function confirmShow() {
            var msg = confirm("Do you want to proceed?");
            if (msg)
                return true;
            else {
                return false;
            }
        }
    </script>
    <style>
        .contentmid ul li {
            font-size: 14px;
        }
    </style>
    <div class="container contentmid">
        
        <div>
            <h4>
                Instructions and Procedure for online submission of Application Form
                <br><br>
                <span id="ctl00_ContentPlaceHolder1_lblheading">ऑनलाइन आवेदन पत्र जमा करने के दिशा निर्देश और प्रक्रिया</span>
            </h4>

            <table width="100%">
                <tbody><tr>
                    <td colspan="2" align="center">
                        <br>
                        <a id="ctl00_ContentPlaceHolder1_hlBulletinURL" title="Download Information Bulletin" class="btn btn-warning" href="https://cdnbbsr.s3waas.gov.in/s3f8e59f4b2fe7c5705bf878bbd494ccdf/uploads/2022/12/2022121526.pdf" target="_blank">Download Information Bulletin <i class="fa fa-download"></i> </a>                       
                        <!-- <a id="ctl00_ContentPlaceHolder1_hlExamCityView" title="View Examination City" class="btn btn-primary" href="../Root/ExaminationCityView.aspx" target="_blank"> View Examination City <i class="fa fa-eye"></i> </a> -->
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding: 0px 5px;">
                        <div class="table-responsive">
        <table style="width:100%">
            <tbody>
                <tr>                      <td style="vertical-align:top">1.</td>                      <td>                          Please download and read carefully the Information Bulletin and instructions/ procedure given therein and below, before you start                          filling the Application Form online.<br>                          इससे पहले कि आप ऑनलाइन आवेदन पत्र भरना शुरू करें, कृपया सूचना विवरणिका  और उसमें और नीचे दिए गए निर्देशों / प्रक्रिया को ध्यान से डाउनलोड करें और पढ़ें।                      </td>                  </tr>
                <tr>                      <td style="vertical-align:top">2.</td>                      <td>                          You can apply for JEE (Main) - 2023 ‘ON-LINE’ only through the official website of JEE(Main) - <strong>(https://jeemain.nta.nic.in)</strong>.                          <br>                          आप जेईई (मुख्य) - 2023 'ऑन-लाइन' के लिए केवल जेईई (मुख्य) की आधिकारिक वेबसाइट - (https://jeemain.nta.nic.in) के माध्यम से आवेदन कर सकते हैं।                      </td>                  </tr>
                <tr>                      <td style="vertical-align:top">3.</td>                      <td>                          Please ensure your eligibility as per the criteria laid down for JEE(Main), JEE (Advanced), and participating State Institutions (as applicable).<br>                          कृपया जेईई (मुख्य), जेईई (एडवांस्ड), और भाग लेने वाले राज्य संस्थानों (जैसा लागू हो) के लिए निर्धारित मानदंडों के अनुसार अपनी पात्रता सुनिश्चित करें।                      </td>                  </tr>
                <tr>
                    <td style="vertical-align:top">4.</td>
                    <td>
                        <strong>Examination Fee : The Fee for JEE(Main) - 2023 per Session</strong> is as follows :<br>                          परीक्षा शुल्क: जेईई (मुख्य) - 2023 प्रति सत्र के लिए शुल्क इस प्रकार है:
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <table cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-condensed" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="width:38%">                                                              Course(s) / Paper(s)<br>                                                              पाठ्यक्रम / परीक्षा पत्र                                                          </th>
                                                        <th>                                                              Category/ PwD<br>                                                              श्रेणी / दिव्यांगजन व्यक्ति                                                          </th>
                                                        <th>                                                              Gender<br>                                                              लिंग                                                          </th>
                                                        <th>                                                              Fee Per Session In India (In Rs.)<br>                                                              भारत में प्रति सत्र शुल्क (रुपये में)                                                          </th>
                                                        <th>                                                              Fee Per Session Outside India (In Rs.)<br>                                                              भारत के बाहर प्रति सत्र शुल्क (रुपये में)                                                          </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="6">                                                              Paper 1: B.E./B. Tech<br>                                                              or<br>                                                              Paper 2A: B. Arch<br>                                                              or<br>                                                              Paper 2B: B.Planning                                                          </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2">General/Gen-EWS/ OBC(NCL)</td>
                                                        <td>Male</td>
                                                        <td>1000</td>
                                                        <td>5000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Female</td>
                                                        <td>800</td>
                                                        <td>4000</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2">SC/ST/PwD</td>
                                                        <td>Male</td>
                                                        <td>500</td>
                                                        <td>2500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Female</td>
                                                        <td>500</td>
                                                        <td>2500</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2">Third Gender</td>
                                                        <td>500 </td>
                                                        <td>3000</td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="6">                                                              Paper 1: B.E./B. Tech &amp; Paper 2A: B. Arch<br>                                                              or<br>                                                              Paper 1: B.E./B. Tech &amp; Paper 2B: B. Planning<br>                                                              or<br>                                                              Paper 1: B.E./B.Tech, Paper 2A: B. Arch &amp; Paper 2B : B.Planning<br>                                                              or<br>                                                              Paper 2A: B. Arch &amp; Paper 2B: B.Planning                                                          </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2">General/Gen-EWS/OBC(NCL)</td>
                                                        <td>Male</td>
                                                        <td>2000</td>
                                                        <td>10000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Female</td>
                                                        <td>1600</td>
                                                        <td>8000</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2">SC/ST/PwD</td>
                                                        <td>Male</td>
                                                        <td>1000</td>
                                                        <td>5000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Female</td>
                                                        <td>1000</td>
                                                        <td>5000</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2">Third Gender</td>
                                                        <td>1000 </td>
                                                        <td>5000</td>
                                                    </tr>
                                                    <tr>                                                          <td colspan="4">                                                              <strong>                                                                  Service Charges &amp; GST (as applicable) will be charged extra by the Bank.<br>                                                                  सेवा शुल्क और जीएसटी (जैसा लागू हो) बैंक द्वारा अतिरिक्त शुल्क लिया जाएगा।                                                              </strong>                                                          </td>                                                      </tr>
                                                </tbody>
                                            </table>
                                        </div>                                          &nbsp;                                          <div>                                              <table cellpadding="0" cellspacing="0">                                                  <tbody>                                                      <tr>                                                          <td>                                                              <strong>                                                                  “Candidates are requested to fill in the Application Form very carefully.                                                                  No corrections will be permitted once the Application Form is submitted.”<br>                                                                  “अभ्यर्थियों  से अनुरोध है कि वे आवेदन पत्र को बहुत सावधानी से भरें। एक बार आवेदन पत्र जमा करने के बाद किसी                                                                  भी सुधार की अनुमति नहीं दी जाएगी।"                                                              </strong>                                                          </td>                                                      </tr>                                                  </tbody>                                              </table>                                          </div>                                          <br>                                          [<strong>Note</strong> : (i).In the first session, only <strong>Session 1</strong> will be visible and candidates can                                          opt for that.                                          In the next session, <strong>Session 2</strong> will be visible, and the candidates can opt for that Session.                                          The application window                                          will be re-opened immediately after the conduct of Session 1. Examination for Session 2 will be the last Examination for the                                          JEE (Main) - 2023.<br>                                          (i) पहले सत्र में, केवल <strong>सत्र 1</strong> दिखाई देगा और अभ्यर्थी   इसका विकल्प चुन सकते हैं।                                          अगले सत्र में, <strong>सत्र 2</strong> दिखाई देगा, और अभ्यर्थी   उस सत्र को चुन सकते हैं।                                           आवेदन पत्र भरने की प्रक्रिया सत्र 1 के आयोजन के तुरंत बाद फिर से खोली जाएगी। सत्र 2 परीक्षा, जेईई (मुख्य) – 2023 के लिए अंतिम परीक्षा होगी ।                                          <br>                                          <br>                                          A candidate can apply for Session 1 and pay the exam fee accordingly in the                                          given duration.<strong>                                              If a candidate wishes to apply for Session 2, he/she has to apply again when the window will be re-opened                                              after the conduct of Session 1 and pay the Examination Fee during that period. Multiple Application Forms submitted                                              by a candidate                                              for the same Session(s) will not be accepted at any cost.                                          </strong>                                          <br>                                          एक अभ्यर्थी सत्र 1 के लिए आवेदन कर सकता है और दी गई अवधि के अनुसार परीक्षा शुल्क का भुगतान कर सकता है। यदि कोई अभ्यर्थी   सत्र 2                                          के लिए आवेदन करना चाहता है,                                          तो उसे सत्र 1 के आयोजन के बाद फिर से आवेदन करना होगा और उस अवधि के                                          दौरान परीक्षा शुल्क का भुगतान करना होगा। एक ही सत्र (सत्रों) के लिए एक अभ्यर्थी द्वारा जमा किए गए एकाधिक आवेदन पत्र किसी भी कीमत पर                                          स्वीकार नहीं किए जाएंगे।                                          <br>                                          <br>                                          (ii). The fee can be submitted only online through Net Banking, Credit Card, Debit Card, UPI.                                          Processing charges and GST as applicable are chargeable                                          to the candidate (in addition to the examination fee) by the concerned Bank/Payment Gateway Integrator. For details/ procedure,                                          <strong>please see Appendix-II of the Information Bulletin.</strong>                                          <br>                                          &nbsp;                                          (ii) शुल्क केवल नेट बैंकिंग, क्रेडिट कार्ड, डेबिट कार्ड, यूपीआई सेवाओं के माध्यम से ऑनलाइन जमा किया जा सकता है।                                          संबंधित बैंक/पेमेंट गेटवे इंटीग्रेटर द्वारा अभ्यर्थी   से                                          (परीक्षा शुल्क के अतिरिक्त)                                          प्रसंस्करण शुल्क और जीएसटी लागू होता है। विवरण/प्रक्रिया के लिए, कृपया सूचना विवरणिका  का परिशिष्ट-II देखें।                                          <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>                   <td style="vertical-align:top">5.</td>                   <td>                        <strong>                       Application Procedure: Steps to be followed to apply online.<br>                       आवेदन प्रक्रिया: ऑनलाइन आवेदन करने के लिए अनुसरण किए जाने वाले चरण।                           </strong>                        <br>                      <br>                         <strong>                          Candidates must read carefully the Instructions (including how to fill up the Application Form online) given in the Information                          Bulletin available on the NTA Website. Candidates not complying with the Instructions shall be summarily disqualified.<br>                          अभ्यर्थियों  को एनटीए वेबसाइट पर उपलब्ध सूचना विवरणिका  में दिए गए निर्देशों (ऑनलाइन आवेदन पत्र कैसे भरें सहित) को ध्यान से पढ़ना चाहिए।                       निर्देशों का पालन नहीं करने वाले अभ्यर्थियों को अयोग्य घोषित कर दिया जाएगा।                      </strong><br>                       &nbsp;                       </td>                   </tr>
                <tr>                      <td style="vertical-align:top">&nbsp;</td>                      <td>                          <table cellpadding="0" cellspacing="0">                              <tbody>                                  <tr>                           <td style="vertical-align:top">                               <strong>                               Step 1: Registration Form:<br>                                चरण 1: पंजीकरण फॉर्म:                                   </strong>                               </td>                            <td colspan="2">                              Register for the Online Application Form and note down the system-generated Application Number.                              The candidate should supply the required details while filling the Online Application Form and is also required                              to create PASSWORD and choose Security Question and enter his/her Answer. After successful submission of the personal                              details, an Application number will be generated and it will be used to complete the remaining Steps of the Application                              Form and will also be required for all future reference/correspondence. This application number will also be used/referred                              for both Sessions of JEE (Main) - 2023. For subsequent logins, the candidate will be able to login directly with the                              respective system generated <strong>Application Number</strong> and created <strong>Password</strong><br>                              ऑनलाइन आवेदन पत्र के लिए पंजीकरण करें और प्राप्त आवेदन संख्या नोट करें: अभ्यर्थी ऑनलाइन आवेदन पत्र भरते समय आवश्यक विवरणों को प्रविष्ट                               करें जो कुंजिका बनाने, उससे संबंधित सुरक्षा प्रश्न चुनने और उसका उत्तर दर्ज करने के लिए आवश्यक है। व्यक्तिगत विवरणों को सफलतापूर्वक प्रस्तुत करने के बाद,                               आवेदन संख्या प्राप्त होगी जिसका उपयोग आवेदन पत्र के शेष चरणों को पूरा करने के लिए किया जाएगा और जो भविष्य के सभी संदर्भ/पत्राचार के लिए भी आवश्यक                               होगा। इस आवेदन संख्या का उपयोग/संदर्भ जेईई (मुख्य) 2023 के दोनों सत्रों के लिए किया जाएगा । लॉग इन करने के लिए अभ्यर्थी संबंधित सिस्टम जनित आवेदन                               संख्या एवं स्वयं बनाई हुई कुंजिका से लॉग इन कर सकेगें।                          </td>                                </tr>                                  <tr>                                      <td style="vertical-align:top">                                          <br>                              <strong>                                              Step 2: Application Form :<br> चरण 2: आवेदन पत्र:                                          </strong>                                      </td>                                      <td style="vertical-align:top">                                          <br>                                          The Candidates can log in with the system-generated Application Number and pre-created Password for                                          completing the Application Form including filling up of personal details, applying for the Paper,                                          choosing the Examination Cities, providing the details of Educational Qualifications, and uploading                                          the images and documents (if any).<br>                                          अभ्यर्थीसिस्टम जनित आवेदन संख्या एवं कुंजिका  के साथ लॉग इन कर सकते हैं                                          व्यक्तिगत विवरण भरने सहित आवेदन पत्र को पूरा करना, पेपर के लिए आवेदन करना,                                          परीक्षा शहरों का चयन करना, शैक्षिक योग्यता का विवरण प्रदान करना और चित्र, दस्तावेज (जहां भी लागू हो)अपलोड करना ।                                      </td>                                  </tr>                                  <tr>                                      <td style="vertical-align:top">&nbsp;</td>                                      <td style="vertical-align:top">                                          <br>                                          <strong>                                              Upload Scanned Images of Candidate’s Photograph, Signature, Category Certificate(wherever applicable)                                              and PwD Certificate (wherever applicable) : <br>                                              अभ्यर्थी   की तस्वीर, हस्ताक्षर, श्रेणी प्रमाणपत्र (जहां लागू हो) और दिव्यांगजन प्रमाणपत्र (जहां लागू हो) की स्कैन की गई छवियां अपलोड करें:                                          </strong>                                          <ol style="list-style-type:lower-roman">                                              <li>                                                  <strong>                                                      The recent passport size photograph should be either in colour or black &amp; white with 80% face (without mask)                                                      visible including ears against white background. It should be in JPG format (clearly legible) and between<strong>                                                          10 kb to 200 kb                                                      </strong>.<br>                                                      हाल में खींची गई पासपोर्ट आकार की तस्वीर (या तो रंगीन या काले एवं सफेद पृष्ठभूमि के साथ)जिसमें कानों के साथ-साथ 80% चेहरा साफ दिखाई देना चाहिए                                                      (मास्क के बिना)।यह JPG प्रारूप (स्पष्ट रूप से सुपाठ्य) और<strong>10 kb से 200 kb</strong> के बीच होना चाहिए।                                                  </strong>                                              </li>                                              <li>                                                  Signature should be in JPG format (clearly legible) and between <strong>4 kb to 30 kb</strong>.  <br>                                                  हस्ताक्षर JPG प्रारूप (स्पष्ट रूप से सुपाठ्य) और <strong>4 kb से 30 kb</strong> के बीच होना चाहिए।                                              </li>                                              <li>                                                  Size of the scanned copy of Category Certificate and PwD certificate should be between<strong> 10 kb to 300 kb</strong>                                                  (clearly legible)<br>                                                  श्रेणी प्रमाण पत्र और प्रमाणपत्र की स्कैन की गई प्रति का आकार <strong>10 kb से 300 kb</strong> के बीच और स्पष्ट रूप से पढ़ने योग्य होना चाहिए।                                              </li>                                          </ol>                                          <br>                                          <strong>[Note:</strong> The Candidate has to upload only his/ her own photograph, signature, and certificate(s)                                          as mentioned above (and not of anybody else) in a correct/proper manner,<strong>                                              as the facility for correction                                              will not be given in the future.                                          </strong> In case, it is found at any time in the future that the Candidate has                                          used/uploaded the photograph, signature, and certificate(s) of someone else in his/her Application Form/Admit Card,                                          or <strong>                                              he/she has tampered   his/her Admit Card/Result/Scorecard, these acts of the candidate shall be treated as                                  Unfair Means (UFM) Practices and he/she shall be proceeded with the actions as contemplated under the provisions of the                                  Information Bulletin relating to Unfair Means Practices.                                          </strong><br>                              <br>                                <br>                              अभ्यर्थी  को केवल अपना फोटो, हस्ताक्षर और प्रमाण पत्र अपलोड करना होगा किसी और का नहीं ।                               सुधार की सुविधा भविष्य में नहीं दी जाएगी। भविष्य में किसी भी समय अगर यह पाया जाता है कि अभ्यर्थी                               ने अपने आवेदन पत्र/प्रवेश पत्र में किसी अन्य व्यक्ति की तस्वीर, हस्ताक्षर और प्रमाण पत्र का उपयोग/अपलोड किया है,                              या  उसने अपना प्रवेश पत्र/परिणाम/स्कोरकार्ड खराब कर दिया है तो अभ्यर्थी  के इन कृत्यों को अवैध माना जाएगा |                                          अभ्यर्थी  के इस आचरण के लिए सूचना विवरणिका  में दिए गए अनफेयर मीन्स (यूएफएम) आचरण और उसके प्रावधानों के तहत अपेक्षित कार्यवाही की जाएगी ।                                                        <br>                              &nbsp;                                      </td>                                  </tr>                                  <tr>                                      <td style="vertical-align:top">                                          <strong>                                              Step 3: Fee Payment:<br>                                              चरण 3: शुल्क भुगतान:                                          </strong>                                      </td>                                      <td colspan="2">                                          After completing Step 1 and Step 2, the candidates have to pay the requisite examination fee.                                          The fee can be submitted only online through Net Banking, Credit Card, Debit Card, UPI.                                          Processing charges and GST as applicable are chargeable to the candidate (in addition to the examination fee)                                          by the concerned Bank/Payment Gateway Integrator.<br>                                          <br>                                          After successful payment, candidate will be able to print the Confirmation Page.                                          In case the Confirmation Page is not generated after payment of fee then the transaction                                          is cancelled and the candidates have to approach the concerned bank for refund of amount.                                          However the candidate has to make another payment/transaction, in case the Confirmation Page is not generated.<br>                                          चरण 1 और चरण 2 को पूरा करने के बाद, अभ्यर्थी को अपेक्षित परीक्षा शुल्क का भुगतान करना होगा।                                          शुल्क केवल नेट बैंकिंग, क्रेडिट कार्ड, डेबिट कार्ड, यूपीआई के माध्यम से ऑनलाइन जमा किया जा सकता है।                                          प्रसंस्करण शुल्क और जीएसटी (लागू होने पर) संबंधित बैंक/पेमेंट गेटवे इंटीग्रेटर द्वारा अतिरिक्त शुल्क लिया जाएगा।                                          <br> <br>                                          सफल भुगतान के बाद, अभ्यर्थी पुष्टि-पृष्ठ प्रिंट कर सकेंगे। यदि शुल्क के भुगतान के बाद पुष्टि-पृष्ठ प्राप्त नहीं होता है                                          तो लेनदेन रद्द कर दिया जाएगा और अभ्यर्थियों को राशि वापस के लिए संबंधित बैंक से संपर्क करना होगा। यदि पुष्टि-पृष्ठ प्राप्त                                          नहीं होता है तो अभ्यर्थी को एक और भुगतान/ लेनदेन करना होगा।                                      </td>                                  </tr>                              </tbody>                          </table>                      </td>                  </tr>
                <tr>                      <td style="vertical-align:top">6.</td>                      <td>                          <strong>                        Important Instruction about PASSWORD<br>                        पासवर्ड के बारे में महत्वपूर्ण निर्देश                          </strong>                      </td>                  </tr>
                <tr>                   <td style="vertical-align:top">&nbsp;</td>                  <td>                        <table cellpadding="0" cellspacing="0">                         <tbody>                             <tr>                            <td style="vertical-align:top">                               <ol style="list-style-type:lower-roman">                               <li>                                    During online form filling, the candidate will be required to choose PASSWORD and Security Question and its Answer.                                  The candidate is advised to record/remember their password for all future logins.<br>                                   ऑनलाइन फॉर्म भरने के दौरान, अभ्यर्थी   को पासवर्ड और सुरक्षा प्रश्न और उसके उत्तर का चयन करना होगा।                                  अभ्यर्थी   को सलाह दी जाती है कि वह भविष्य में होने वाले सभी लॉग इन के लिए अपना पासवर्ड रिकॉर्ड/याद रखें।                                    </li>                                <li>                                  For subsequent logins, the candidate will be able to login directly with their respective                                  system-generated Application Number and the chosen Password.<br>                                  बाद में लॉग इन के लिए अभ्यर्थी अपने संबंधित सिस्टम आवेदन संख्या और चुने गई कुंजिका के साथ सीधे लॉग इन कर सकेंगे ।                              </li>                              <li>                                  The candidate is advised not to disclose or share their password with anybody.                                  Neither NTA nor NIC will be responsible for the violation or misuse of the password of a candidate.<br>                                  अभ्यर्थी को सलाह दी जाती है कि वह अपना पासवर्ड किसी के साथ प्रकट या साझा न करें।                                   अभ्यर्थी के पासवर्ड के उल्लंघन या दुरुपयोग के लिए न तो एनटीए और न ही एनआईसी जिम्मेदार होगा।                              </li>                                 <li>                                  Candidates can change his/her passwords after login if desired.<br>                                  यदि वांछित हो तो, अभ्यर्थी लॉग इन के बाद अपनी कुंजिका बदल सकते हैं ।                              </li>                               <li>                                  Candidates should remember to log out at the end of their session so that the particulars of                                  the candidate cannot be tampered with or modified by unauthorized persons.<br>                                  अभ्यर्थी को अपने सत्र के अंत में लॉग आउट करना चाहिए ताकि अनाधिकृत व्यक्तियों द्वारा अभ्यर्थी के विवरण से छेड़छाड़ या संशोधन नहीं किया जा सके ।                              </li>                                   </ol>                              </td>                               </tr>                             <tr>                             <td style="vertical-align:top">                                 The Password must be as per the following Password policy.<br>                               पासवर्ड निम्नलिखित पासवर्ड नीति के अनुसार होना चाहिए।                                </td>                                 </tr>                             <tr>                            <td>                                  <ol style="list-style-type:lower-roman">                                    <li>                                      Password must be <strong>8 to 13 characters long.</strong><br>                                                                          कुंजिका<strong> 8 से 13 </strong>अक्षरों की होनी चाहिए।                                  </li>                                    <li>                                      Password must have at least <strong>one Upper</strong> case alphabet.<br>                                      कुंजिका में कम से कम एक अपर केस एल्फाबेट होना चाहिए।                                  </li>                                   <li>                                      Password must have at least <strong>one Lower</strong> case alphabet.<br>                                      कुंजिका में कम से कम एक लोअर केस एल्फाबेट होना चाहिए।                                  </li>                                     <li>                                      Password must have at least <strong>one numeric value.</strong><br>                                      कुंजिका में कम से कम एक संख्या मान होना चाहिए।                                  </li>                                    <li>                                      Password must have at least <strong>one special character eg.!@#$%^&amp;*-.</strong><br>                                                                         कुंजिका में कम से कम एक विशेष वर्ण होना चाहिए जैसे.! @#$%^&amp;*-.                                  </li>                                   </ol>                               </td>                              </tr>                           </tbody>                           </table>                        </td>                     </tr>
                <tr>                    <td style="vertical-align:top">7.</td>                   <td>                      <strong>How to reset your Password : </strong>The following options are available to reset Password<br>                      अपनी कुंजिका कैसे रीसेट करें: कुंजिका रीसेट करने के लिए निम्नलिखित विकल्प उपलब्ध हैं                  </td>                   </tr>
                <tr>                     <td style="vertical-align:top">&nbsp;</td>                        <td>                          <table cellpadding="0" cellspacing="0">                       <tbody>                           <tr>                           <td style="vertical-align:top">                                  <ol style="list-style-type:lower-roman">                                   <li>                                      Using Security Question and its Answer you have chosen during Form filling.<br>                                      फॉर्म भरने के दौरान अपने सुरक्षा प्रश्न एवं इसके चुने हुए उत्तर का उपयोग करके।                                  </li>                                  <li>                                    Using a verification code sent via text message (SMS) to your Registered Mobile No.<br>                                     आपके पंजीकृत मोबाइल नंबर पर टेक्स्ट संदेश (एसएमएस) के माध्यम से भेजे गए सत्यापन कोड का उपयोग करना।                                   </li>                                 <li>                                  Using a reset link sent via Email to your Registered Email address.<br>                                                                  आपके पंजीकृत ईमेल पते पर ईमेल के माध्यम से भेजे गए रीसेट लिंक का उपयोग करके।                              </li>                                      </ol>                                </td>                               </tr>                            </tbody>                           </table>                       </td>                   </tr>
                <tr>
                    <td style="vertical-align:top">8.</td>
                    <td>                      The Application Number printed on the computer-generated Confirmation Page must be mentioned in                      all such correspondences. It is therefore essential to note down the application number printed                      on the Confirmation Page.<br>                      कंप्यूटर जनित पुष्टि-पृष्ठ पर मुद्रित आवेदन संख्या का उल्लेख सभी पत्राचार में किया जायेगा। इसलिए पुष्टि-पृष्ठ पर मुद्रित आवेदन संख्या को दर्ज़/नोट करना आवश्यक है।                  </td>
                </tr>

            </tbody>
        </table>
    </div>
                    </td>
                </tr>
                <tr>
                    <td height="10px;"></td>
                </tr>
                

                <tr>
                    <td>
                        <table class="bordernone" style="width: 100%;">
                            <tbody><tr>
                                <td style="width: 25px; vertical-align: top">
                                    <input id="ctl00_ContentPlaceHolder1_chkagreement" type="checkbox" name="ctl00$ContentPlaceHolder1$chkagreement" onclick="javascript:EnableButton();">
                                </td>
                                <td style="vertical-align: top;">
                                    <span id="ctl00_ContentPlaceHolder1_lblDecleration"><strong>
        <p>
            I have downloaded the Information Bulletin of JEE (Main) - 2023, read and understood all the Instructions therein as well as those mentioned above, and will fill up the online Application Form for the JEE (Main) – 2023 accordingly. Any Candidate with more than one Application Number (more than one Confirmation Page, Admit Card, Score Card) will be treated as Unfair Means (UFM), even if found at a later stage.
            <br>मैंने जेईई (मुख्य) - 2023 के सूचना विवरणिका  को डाउनलोड कर लिया है, उसमें दिए गए सभी निर्देशों के साथ-साथ ऊपर वर्णित सभी निर्देशों को पढ़ और समझ लिया है, और तदनुसार मैं जेईई (मुख्य) - 2023 के लिए ऑनलाइन आवेदन पत्र भर रहा / रही हूँ| एक से अधिक आवेदन संख्या (एक से अधिक पुष्टिकरण पृष्ठ, प्रवेश पत्र, स्कोर कार्ड) वाले किसी भी अभ्यर्थी को अनुचित साधन (यूएफएम) माना जाएगा, भले ही बाद के चरण में पाया गया हो।
        </p>
    </strong></span>
                                
                                </td>
                            </tr>
                        </tbody></table>



                    </td>
                </tr>

                <tr>
                    <td align="center" colspan="2" height="10px;">
                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnsubmit" value="Click here to Proceed" id="ctl00_ContentPlaceHolder1_btnsubmit" class="btn btn-primary" disabled="">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
             <script type="text/javascript" language="javascript">
                    DisableButton();
                </script>
            </tbody></table>
        </div>
    </div>


        <section class="footersec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <p class="text-left">
                            <b>Disclaimer:</b><br>
                            <span id="ctl00_lblDisclaimer">This site is designed, developed and hosted by Navneet verma.</span>
                            <span id="ctl00_lblVersion"> (Ver 1.0.48.2.0)</span>
                        </p>
                    </div>

                    
                </div>
            </div>
        </section>
    

<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("ctl00_ToolkitScriptManager1_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();
theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
//]]>
</script>
</form>




</body></html>
