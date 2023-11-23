@extends('fronts.layouts.app')
@section('front-title')

@endsection
@section('front-content')

<script>
    function  isCurrentLangEnglish() {
        return ;

    }
</script>
<script type="text/javascript" src="./localization/localizationStringJs.js"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-P62C9GH"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="mobileSeperator"></div> <div id="fb-root" style="width:350px"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.Event.subscribe(
            'ad.loaded',
            function(placementID) {
                // console.log('ad loaded');
            }
        );

        FB.Event.subscribe(
            'ad.error',
            function(errorCode, errorMessage, placementID) {
                // console.log('ad error ' + errorCode + ': ' + errorMessage);
            }
        );

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=163381390349456";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            // Logged into your app and Facebook.
            getUserProfile();
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status')?document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.':'';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status')?  document.getElementById('status').innerHTML = 'Please log ' +
                'into Facebook.':'';
        }
    }
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    };

    var fbuser= {
        id:'',
        name: '',
        picture: ''
    };

    function getUserProfile() {
        FB.api('/me?fields=id,name,cover,picture.width(500).height(500)', function(response) {
            fbuser.id=response.id;
            fbuser.name=response.name;
            fbuser.picture=response.picture.data.url;
            if(document.getElementById('status')) {
                document.getElementById('status').innerHTML =
                    'Welcome ' + response.name + '!';
            }
        });
    }
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.getRegistrations().then(function(registrations) {
            for(let registration of registrations) {
                registration.unregister()
            }
        });
    }

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollToTopButton")?
                document.getElementById("scrollToTopButton").style.display = "block":'';
        } else {
            document.getElementById("scrollToTopButton")?
                document.getElementById("scrollToTopButton").style.display = "none":'';
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    }


</script>
    <style>
    #scrollToTopButton {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #c60009;
        color: white;
        cursor: pointer;
        padding: 15px;
        border: 0;
        line-height: 56px;
        min-width: 0;
        width: 56px;
        height: 56px;
        vertical-align: middle;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
        border-radius: 50%;
        background-clip: padding-box;
        overflow: hidden;
        -webkit-transition: all 0.3s cubic-bezier(0.55, 0, 0.55, 0.2);
        transition: all 0.3s cubic-bezier(0.55, 0, 0.55, 0.2);
        -webkit-transition-property: background-color, box-shadow, -webkit-transform;
        transition-property: background-color, box-shadow, transform, -webkit-transform;
    }

    #scrollToTopButton:hover {
        background-color: #555;
    }
</style>

    <script src="../js/loginManager.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.0/firebase-auth.js"></script>
            <script>
                // Initialize Firebase



                var config= {apiKey: "AIzaSyDz9DzH59ZfYKqwMJpE1Id0LtCyVkAvYY8",authDomain: "hamropatro.firebaseapp.com",databaseURL: "https://hamropatro.firebaseio.com",projectId: "hamropatro",storageBucket: "",messagingSenderId: "366682898353"};
                firebase.initializeApp(config);
                function logout() {
                    if(JSON.parse(localStorage.getItem('user_info'))) {
                        firebase.auth().signOut()
                            .then(function () {
                                localStorage.clear();
                                window.location.reload();
                            })
                            .catch(function (error) {
                                // An error happened
                            });
                    }else {
                        login();
                    }
                }
                function login() {
                    if(!JSON.parse(localStorage.getItem('user_info'))){
                        location.href=location.origin+'/login.php?'+location.href;
                    }
                }

                if(JSON.parse(localStorage.getItem('user_info'))){
                    var userImage = JSON.parse(localStorage.getItem('user_info')).user_profile.photo_url;
                    var userName = JSON.parse(localStorage.getItem('user_info')).user_profile.displayName;

                    document.getElementById('user_imagae').src = userImage;
                    document.getElementById('user_image').src = userImage;
                    document.getElementById('uName').innerText =userName ;

                }else {
                    document.getElementById('logout').innerText='Login'
                    $('#uName').innerText='Login';

                }

            </script>
            <script>
        $(".open").pageslide();
        $(".open").click(function(){
           var overflow_class =  $('body').attr('class');
        		   if(overflow_class!='overflow-hidden'){
        				$('body').addClass('overflow-hidden');
        		   }else{
        			    $('body').removeClass('overflow-hidden');
        		   }

			   $( this ).toggleClass( "active" );
        });

        $("body").click(function(){
            $(this).removeClass('overflow-hidden');
			$("#nav_btn").removeClass('active');
        });

    </script>
          </div>
        </div>
      </div>
        <script type="text/javascript">
      var currenttime = "July 20, 2023 22:48:43";
      var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
      var numbers = Array("&#2406;", "&#2407;", "&#2408;", "&#2409;", "&#2410;", "&#2411;", "&#2412;", "&#2413;", "&#2414;", "&#2415;");
      var serverdate = new Date(currenttime);
      function padlength(what) {
        var output = (what.toString().length == 1) ? "0" + what : what
        return output
      }
      displaytime();

function displaytime() {
	serverdate.setSeconds(serverdate.getSeconds() + 1)
        var datestring = montharray[serverdate.getMonth()] + " " + padlength(serverdate.getDate()) + ", " + serverdate.getFullYear()
        var timestring = padlength(serverdate.getHours()) + ":" + padlength(serverdate.getMinutes()) + ":" + padlength(serverdate.getSeconds())
        if (timestring == "23:59:59") {
            window.location.reload()
        } else {
            document.getElementById("time_check").innerHTML = " " + timestring;
        }
	     setInterval('displaytime()',1000);
    }
</script>

    <style>
    * {
        box-sizing: border-box;
    }

    #userInput {
        width: 100%;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url(/css/images/search-icon.svg);
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 6px 10px 6px 35px;
        background-color: white;
    }

    #searchResult {
        background-color: white;
        list-style-type: none;
        padding: 0;
        margin: 0;
        position: absolute;
        z-index: 100;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 6px, rgba(0, 0, 0, 0.12) 0px 1px 4px;
        width:225px;
    }


    #searchResult li {
        text-align: justify;
        padding: 10px 8px ;
    }

    #searchResult li:hover{
        background-color:#e5e5e5;
    }

    a{
        color: #111111;
    }

    #search{
        background-color: #f7f7f7;
        height: fit-content;
    }

    #errorbar{
        width: 300px;
        float: left;
        height: 32px;
        margin-top: 4px;
        padding-top: 3px;
        padding-bottom: 3px;
        margin-left: 24px;
    }

    #errorMessage{
        float: right;
    }

    #errorClose{
        display: none;
        float: right;
    }

    #errorClose img {
        border:1px solid #021a40;
        margin-left:4px;
        width: 12px;
        height:12px;
    }

    #searchbar {
        float: right;
    }
    .userInputMargin{
        margin-top: 2px;
    }
    .userInputAfterSearchResult{
        margin-top: 0px;
    }
    .heading{
        font-size: 18px !important;
        font-weight: 600 !important;
        color: #797777;
        margin-top: 10px;
    }

    @media only screen and (max-width: 600px) {
        #search{
            height: 127px;
        }
        .heading{margin-bottom: 25px;font-size: 13px !important;}
        #searchbar{margin-top: 15px;}
        .userInputMargin{
            margin-top: -34px;
        }
        .searchStyle{
            margin-bottom: 0px !important;
            margin-right: 0px !important;
            margin-left: 0px !important;
            margin-top: 22px !important;
        }
    }



</style>
    <div id="search">
      <div style="padding:10px 0 12px 0" class="container12 ">
        <div class="column8 searchStyle">
          <h1 class="heading" id="heading" style="margin-top:5px;display: block">Aajako
            Rashifal | Daily Rashifal | आजको राशिफल</h1>
        </div>
        <div class="column4" id="searchbar">
          <input type="text" id="userInput" class="userInputMargin"
            placeholder="Search events" title="Type event name">
          <ul id="searchResult">
          </ul>
        </div>
        <script>
                //not displaying search result if clicked outside of search result box

                $(document).on('keyup input keydown keypress paste change','#userInput', function(event) {
                    var input;
                    input = document.getElementById("userInput");
                    var inp = String.fromCharCode(event.keyCode);
                    if (/[a-zA-Z0-9-_ ]/.test(inp) || (event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 65 && event.keyCode <= 90) || event.keyCode===8 || event.keyCode===13 || event.keyCode===32){
                        callApi(input.value);
                    }
                });

                $(document).ready(function(){
                    $('body').click(function(event){
                        if(event.target.id != 'userInput' && event.target.id != "searchResult")
                            document.getElementById("searchResult").style.display="none";
                    });});

                //close errro message if cross button clicked
                //executed on text input by user
                // function searchEvent(event) {
                //     var input;
                //     input = document.getElementById("userInput");
                //     var inp = String.fromCharCode(event.keyCode);
                //     if (/[a-zA-Z0-9-_ ]/.test(inp) || event.keyCode===8){
                //         callApi(input.value);
                //     }
                // }
                //call api
                function callApi(input){
                    $("#searchResult").html('<div style="padding: 10px;">searching...</div>');
                    var firstEventLink;
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            $("#searchResult").html("searching...");
                            var text='';
                            var events='';
                            var obj = JSON.parse(this.responseText);
                            //showing top 5 matching results
                            for (i = 0; i < 5; i++) {

                                if(obj.eventList[i]) {
                                    var eventKey = obj.eventList[i].eventKey;
                                    var eventName = obj.eventList[i].eventName;
                                    var eventDate = obj.eventList[i].eventDate;
                                    if(i===0) {
                                        firstEventLink = "/date/" + eventDate;
                                    }
                                    text = text+appendEvent(i, eventKey, eventName,eventDate) ;
                                }
                            }


                            document.getElementById("searchResult").style.display="block";
                            if(obj.query==input){
                                $("#searchResult").html(text);
                            }
                            $("#searchResult").html(text);

                            document.getElementById('userInput').className='userInputAfterSearchResult';

                            //redirect to first result if user input is completely not typed
                            $("#userInput").on('keyup', function (e) {
                                if (e.keyCode == 13) {
                                    if(firstEventLink) {
                                        document.location.href = firstEventLink;
                                    }
                                }
                            });

                        }
                        //for error
                        else if(this.readyState==4){ // unauthorised exceptions
                        }
                    };
                    xhttp.open("GET", 'https://hamropatro-android.appspot.com/api/events/search?'+"query="+input, true);
                    xhttp.setRequestHeader("Content-type", "application/json");
                    xhttp.send();
                }

                //appending the event outcomes to list
                function appendEvent(id,eventKey,eventName,eventDate){
                    if(eventKey){
                        return '<a href="/date/'+eventDate+'\"><li id="event'+id+'\" class="clearfix" style="list-style-type: none;margin-left: 0px;cursor: pointer"  style="height:1px;border:solid 1px #666; "><span>'+eventName+'</span></li></a>'
                    }
                    else {
                        return '<a href="/date"><li id="event'+id+'\" class="clearfix" style="list-style-type: none;margin-left: 0px;cursor: pointer"  style="height:1px;border:solid 1px #666; "><span>'+eventName+'</span></li></a>'
                    }
                }
            </script>
      </div>
    </div>

    {{-- <script>document.getElementById('heading').innerText = '४ साउन, २०८० - बिहिवार - आजको राशिफल'</script> --}}

    <div id="content">
      <div class="container12">

        <div class="container12"
          style="border-bottom: 2px #b71c1c solid;margin-bottom: 30px">
          <div class="column7">
            <h2 class="articleTitleNew"><span><a style="color:#B51F23;">आज - ०४
                  साउन २०८० बिहिवार को राशिफल</a> </span></h2>
          </div>
          <div class="column5 desktopviewRasidal">
            <div class="rasifalTab"><a href="/rashifal">Daily</a></div>
            <div class="rasifalNOnSelectTab"><a href="/rashifal/weekly">Weekly</a></div>
            <div class="rasifalNOnSelectTab"><a href="/rashifal/monthly">Monthly</a></div>
            <div class="rasifalNOnSelectTab"><a href="/rashifal/yearly">Yearly</a></div>
          </div>
          <div class="column6">
            <div class="BlogcategoriesMobile" style="margin-top: -22px;">
              <select name="selCategory"
                onchange="changeRasifal(this.options[this.selectedIndex].value+'/')"
                class="blogSelect">

                <option value="daily" selected class="vName">Daily</option>
                <option value="weekly" class="vName">Weekly</option>
                <option value="monthly" class="vName">Monthly</option>
                <option value="yearly" class="vName">Yearly</option>

                <!--        <option  value="bookmark" --><!-- class="vName">BookMark</option>-->
              </select>
            </div>
          </div>
        </div>
        <script>
    function changeRasifal(type) {
        window.location.href="rashifal/"+type;

    }
</script>

        <div class="column12">

          <div class="article">

            <div id="rashifal" data-columns>
              <a href="rashifal/daily/Mesh">
                <div class="item">
                  <h3>मेष</h3>
                  <img src="images/dummy/ic_sodiac_1.png" alt class="alignright" />
                  <div class="desc"><p>मेष (चु, चे, चो, ला, लि, लु, ले, लो, अ)
                      सम्पत्ति हराउने वा नष्ट होला । अरुको भर पर्दा धोका पाइनेछ
                      । राजनैतिक कार्यमा बाधा आउनेछ । सानातिना समस्यामा
                      अल्झिनुपर्ने हुन्छ । </p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Brish">
                <div class="item">
                  <h3>बृष</h3>
                  <img src="images/dummy/ic_sodiac_2.png" alt class="alignright" />
                  <div class="desc"><p>वृष (इ, उ, ए, ओ, वा, वि, वु, वे, वो) आज
                      इच्छा र आकाङ्क्षा पूर्ण होला । पठनपाठनमा प्रगति हुनेछ ।
                      नजिकको मित्रसँग भेटघाट हुनेछ । दिनको उत्तरार्धमा केही धन
                      खर्च बढ्नेछ ।</p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Mithun">
                <div class="item">
                  <h3>मिथुन</h3>
                  <img src="images/dummy/ic_sodiac_3.png" alt class="alignright" />
                  <div class="desc"><p>मिथुन (का, कि, कु, घ, ङ, छ, के, को, हा)
                      आज आफन्त र साथीभाइबाट सहयोग तथा हौसला प्राप्त हुनेछ ।
                      शुभकार्यको चर्चा चल्नेछ । मनमा उत्साहका साथै बोली बिक्ने
                      समय छ ।</p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Karkat">
                <div class="item">
                  <h3>कर्कट</h3>
                  <img src="images/dummy/ic_sodiac_4.png" alt class="alignright" />
                  <div class="desc"><p>कर्कट (हि, हु, हे, हो, डा, डि, डु, डे,
                      डो) आज आकस्मिक धन लाभ हुने र मनमा शान्ति छाउनेछ ।
                      मनोरञ्जनमा सहभागिता भइएला । पुराना र नयाँ कार्यको प्रारम्भ
                      गर्न सकिनेछ । </p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Singha">
                <div class="item">
                  <h3>सिंह</h3>
                  <img src="images/dummy/ic_sodiac_5.png" alt class="alignright" />
                  <div class="desc"><p>सिंह (मा, मि, मु, मे, मो, टा, टि, टु, टे)
                      आज जीवनसाथीसित वैचारिक मतभेद हुनसक्छ । सानातिना घरायसी
                      समस्याहरू देखिए पनि तिनले दैनिकीमा खास फरक पार्ने स्थिति
                      छैन । </p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Kanya">
                <div class="item">
                  <h3>कन्या</h3>
                  <img src="images/dummy/ic_sodiac_6.png" alt class="alignright" />
                  <div class="desc"><p>कन्या (टो, पा, पि, पु, ष, ण, ठ, पे, पो)
                      अरुलाई प्रभावित पारेर काम बन्नेछ । कार्य सम्पादनमा सहजता
                      मिल्नेछ । पराक्रम बढ्नुका साथै शरीर पनि स्वस्थ रहनेछ ।
                      प्यारो साथी सँग भेट होला ।</p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Tula">
                <div class="item">
                  <h3>तुला</h3>
                  <img src="images/dummy/ic_sodiac_7.png" alt class="alignright" />
                  <div class="desc"><p>तुला (रा, रि, रु, रे, रो, ता, ति, तु, ते)
                      आज एकपछि अर्को अवसर आउनाले मन प्रसन्न रहनेछ । कहीँकतैबाट
                      कुनै उपहार प्राप्त होला । नयाँ कार्यको सुरुवात पनि गर्न
                      सकिनेछ ।</p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Brischik">
                <div class="item">
                  <h3>बृश्चिक</h3>
                  <img src="images/dummy/ic_sodiac_8.png" alt class="alignright" />
                  <div class="desc"><p>वृश्चिक (तो, ना, नि, नु, ने, नो, या, यि,
                      यु) इष्टमित्र एवं साथीभाइहरूसँग भेटघाट हुनेछ । चिताएको
                      कामले तीव्रता लिनेछ । कार्य सम्पादनमा सहजता मिल्नेछ ।
                      आस्थामा पनि वृद्धि होला । </p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Dhanu">
                <div class="item">
                  <h3>धनु</h3>
                  <img src="images/dummy/ic_sodiac_9.png" alt class="alignright" />
                  <div class="desc"><p>धनु (ये, यो, भा, भि, भु, धा, फा, ढा, भे)
                      आज महत्त्वपूर्ण अवसर गुम्न सक्छ । मानसिक चिन्ता बढ्नेछ ।
                      दाम्पत्य जीवनमा मतभेद भएपनि माया एवं समझदारीको भने कायम
                      रहनेछ । </p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Makar">
                <div class="item">
                  <h3>मकर</h3>
                  <img src="images/dummy/ic_sodiac_10.png" alt
                    class="alignright" />
                  <div class="desc"><p>मकर
                      (भो,जा,जि,जु,जे,जो,ख,खि,खु,खे,खो,गा,गि) आँटेको र ताकेको
                      कार्य पुरा होला । कूटनीतिक नियोगको सहयोग मिल्नेछ । प्रेममा
                      मधुरता छाउला । साहित्यिक क्षेत्रमा रुचि बढ्नेछ । </p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Kumbha">
                <div class="item">
                  <h3>कुम्भ</h3>
                  <img src="images/dummy/ic_sodiac_11.png" alt
                    class="alignright" />
                  <div class="desc"><p>कुम्भ (गु, गे, गो, सा, सि, सु, से, सो,
                      दा) धनार्जनका नयाँ स्रोतहरू पत्ता लाग्नेछन् । महिला वा
                      नजिकैको मित्रबाट साथ र सहयोग मिल्नेछ । शैक्षिक क्षेत्रमा
                      पनि सफलता मिल्नेछ । </p>
                  </div>
                </div>
              </a>
              <a href="rashifal/daily/Meen">
                <div class="item">
                  <h3>मीन</h3>
                  <img src="images/dummy/ic_sodiac_12.png" alt
                    class="alignright" />
                  <div class="desc"><p>मीन (दि, दु, थ, झ, ञ, दे, दो, चा, चि) आज
                      नयाँ र शुभ समाचार सुन्न पाइएला । प्यारो साथी सँग भेट हुनेछ
                      । नयाँ कार्यको थालनी होला । राजनीतिक कार्यमा सफलता मिल्नेछ
                      ।
                      राशिफल जे जस्तो भएपनि तपाईंको दिन मङ्गलमय रहोस् ।
                      - ज्यो.प. नारायणप्रसाद दुलाल </p>
                  </div>
                </div>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div><!-- BOTTOM -->

    <!-- END OF FOOTER -->
    <button onclick="topFunction()" id="scrollToTopButton"><img
        src="images/icon/goToTop.svg" alt /></button>
    <script src="https://www.gstatic.com/firebasejs/5.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.0/firebase-auth.js"></script>
    <script>
    // Initialize Firebase
    var config =  {apiKey: "AIzaSyDz9DzH59ZfYKqwMJpE1Id0LtCyVkAvYY8",authDomain: "hamropatro.firebaseapp.com",databaseURL: "https://hamropatro.firebaseio.com",projectId: "hamropatro",storageBucket: "",messagingSenderId: "366682898353"};
    firebase.initializeApp(config);
</script>

    <script type="text/javascript">

    window.twttr=(function(d,s,id){
        var js,
            fjs=d.getElementsByTagName(s)[0],
            t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>

    <script type="text/javascript" src="js/ecardfbv2.js"></script>

    <script src="//vjs.zencdn.net/5.8.8/video.js"></script>
    <script type="text/javascript">
            var elem=document.getElementById("ls_embed_1481719089");
           elem.onload=function(){
              hideIcons();
            }
            function hideIcons(){
              var elem=document.getElementById("ls_embed_1481719089");
              var iframe=elem.contentDocument || elem.contentWindow.document;
              var social=iframe.getElementsByClassName("toolbar_right_icons");
              var arrSocial=Array.from(social);
              arrSocial[0].style.display="none";
            }
    </script>
@endsection