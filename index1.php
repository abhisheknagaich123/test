




<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no">
<meta name="author" content="Kings Gambit Labs">
<meta name="wot-verification" content="dd174b20fbdb0fd91285"/>
<title> Top DBMS Interview Questions and Answers(2024 Updated) - InterviewBit</title>
<meta name="site" content="InterviewBit" />
<meta name="description" content="This article lists the most frequently asked interview questions on DBMS with answers for freshers and experienced professionals." />
<meta property="og:site_name" content="InterviewBit" />
<meta property="og:site" content="InterviewBit" />
<meta property="og:description" content="This article lists the most frequently asked interview questions on DBMS with answers for freshers and experienced professionals." />
<meta property="og:image" content="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/211/original/IB_InterviewQuestions_25.jpg?1616070229" />
<meta property="og:url" content="https://www.interviewbit.com/dbms-interview-questions/" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@interview_bit" />
<meta name="twitter:creator" content="@interview_bit" />
<meta name="twitter:title" content=" Top DBMS Interview Questions and Answers(2024 Updated) - InterviewBit" />
<meta name="twitter:description" content="This article lists the most frequently asked interview questions on DBMS with answers for freshers and experienced professionals." />
<meta name="twitter:image" content="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/211/original/IB_InterviewQuestions_25.jpg?1616070229" />
<meta name="twitter:image:alt" content="InterviewBit" />
<link rel="canonical" href="https://www.interviewbit.com/dbms-interview-questions/" />
<link rel="amphtml" href="https://www.interviewbit.com/dbms-interview-questions/amp/" />

<meta name="env-name" data-id="interviewbit" />

    <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="Fhrlk5MdNOz9TX389drx91Ry18ZGjxjqO/qmv9sYxky50S0fozl/82HbXaL5lMyw+DG8J7SFjmeKxp9IMH7UIg==" />
      <script>
  var domain = 'interviewbit.com';
  if (domain.indexOf('www.') !== 0) {
    domain = 'www.' + domain;
  }

  if (0 === document.location.href.indexOf("https://")) {
    domain = "https://" + domain + "/";
    if (0 !== document.location.href.indexOf(domain)) {
      var newLocation = document.location.href.replace(/https:\/\/[^\/]+\//, domain);

      if (newLocation !== document.location.href) {
        document.location.replace(newLocation);
      }
    }
  } else {
    domain = "http://" + domain + "/";
    if (0 != document.location.href.indexOf(domain)) {
      var newLocation = document.location.href.replace(/http:\/\/[^\/]+\//, domain);

      if(newLocation !== document.location.href) {
        document.location.replace(newLocation);
      }
    }
  }
  </script>

    <script>
  window.ENV_VARS = {
    mode: "production",
    application: JSON.parse('{"env_id":"interviewbit","env_site_name":"InterviewBit","env_site_nick":"InterviewBit","env_domain":"interviewbit.com","env_base_url":"https://www.interviewbit.com","env_from_mailer":"info@interviewbit.com","env_reply_to_mailer":"info@interviewbit.com","env_support_mailer":"support@interviewbit.com","env_hello_mailer":"hello@interviewbit.com","env_calendar_organiser":"info@interviewbit.com","env_webpush_manifest":"/gcm-manifest-ib.json"}'),
    config: JSON.parse('{"speed_test_enabled":true,"seasonal_theme_mode":"none"}'),
    request_source: "web"
  };
</script>



      <link rel="preconnect" href="https://www.google.com">
      <link rel="preconnect" href="https://www.gstatic.com">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="preconnect" href="https://www.google-analytics.com">
      <link rel="preconnect" href="https://www.googletagmanager.com">
      <link rel="preconnect" href="https://assets.interviewbit.com" crossorigin>

        <script>
    const timeout = setTimeout(() => {
      var _ge = new CustomEvent('initializedGTM', { bubbles: true });
      document.dispatchEvent(_ge);
    }, 10000);
    window.addEventListener('load', function() {
      var isGTMLoaded = false
      function loadGTM() {

        if(!isGTMLoaded) {

          isGTMLoaded = true;

          (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.defer=true;j.src=
          'https://www.googletagmanager.com/gtm.js?id='+i+dl;

          j.addEventListener('load', function() {
            var _ge = new CustomEvent('initializedGTM', { bubbles: true });
            d.dispatchEvent(_ge);
          });
          f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer',"GTM-NMKZTRG");

          (function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
          h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
          (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
          })(window,document.documentElement,'async-hide','dataLayer',4000,
          {"GTM-NMKZTRG":true});

          window.removeEventListener('mousemove',loadGTM);
          window.removeEventListener('click',loadGTM);
          window.removeEventListener('scroll',loadGTM);
          window.removeEventListener('touchstart',loadGTM);
          window.removeEventListener('bypass_gtm_optimisation', loadGTM);
          clearTimeout(timeout);
        }
      }
      window.addEventListener('mousemove',loadGTM);
      window.addEventListener('click',loadGTM);
      window.addEventListener('scroll',loadGTM);
      window.addEventListener('touchstart',loadGTM);
      window.addEventListener('bypass_gtm_optimisation', loadGTM);
    })
  </script>

<script>
  var gtmServerEvents = [];

  var freeMentee = false;
  window.GTMData = (function () {
      var userType = "";
      
      return {
        isFreeProductUser: "",
        gtmDataLayerVariables: [],
        company: "interviewbit".toLowerCase(),
        isLoggedIn: false,
        email: "",
        userId: "",
        region: "india",
        ugEnrolled: "",
        isNewUser: false,
        cuIsUgStudent: "",
        cuTwelfthGradYear: "",
        userType,
        freeMentee: userType && userType.includes('mentee') ? freeMentee : undefined,
        gtmServerEvents,
      };
    })();
</script>

  

  

  <script src="https://assets.interviewbit.com/packs/js/frontend/tracking/gtm.ee3308.js"></script>

 

      

  

  <script src="https://assets.interviewbit.com/packs/js/frontend/tracking/navigation.929ad0.js"></script>


    <link rel="icon" type="image/png" href="https://assets.interviewbit.com/assets/ibpp/favicon-fcc4f9cdd2e768e1a9c0b884239242138fd250486c634d791103a152eee669a1.ico.gz">

    
  <link rel="preload" media="all" href="https://assets.interviewbit.com/assets/web/ibcms/interview_questions-22caf326266b1e845cb8888a1546f9f7663393ceb85aba74d9cb751551d34119.css.gz" as="style" fetchpriority="high" />
  <link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/assets/web/ibcms/interview_questions-22caf326266b1e845cb8888a1546f9f7663393ceb85aba74d9cb751551d34119.css.gz" />
  <link rel="stylesheet" media="none" href="https://assets.interviewbit.com/assets/web/ibcms/non_critical/shared-non-amp-662e44eb672a66f70f90c1ca848912505cb6b5cc8cc426294d8c1a3427522867.css.gz" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />
    <link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/packs/css/frontend/base.906e3d.css" />
    <link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/packs/css/frontend/ibpp/intervi~36432ee3.da64f1.css" />
<link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/packs/css/frontend/ibpp/qa.f37237.css" />



    <link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/packs/css/frontend/ib_admin~fro~f2704cda.5bfb1f.css" />

    <link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/packs/css/frontend/ibpp/onboarding.e4f2ec.css" />





    <link rel="stylesheet" media="all" href="https://assets.interviewbit.com/assets/master/products/ibpp-86dc4f2a99ee0bbc53ced1edb6f6001f26a4117b728aab184fcafb6a0f1cb546.css.gz" />
  </head>
  <body class="tex2jax_ignore">
    


  <div data-ribbon="rolling" class="ib-rolling-ribbon"></div>
  <header class="header deployment succesful" id="ibpp-header" data-gtm-sub-product="nav_bar">
    <div 
      class="header__container "
      id="ibpp-header-section"
    >
      <!-- Header Left section -->
      <div class="header__left-section">
        <!-- Mobile view burger button -->
        <div class="burger header__burger-button burger__icon">
          <div class="burger__line"></div>
          <div class="burger__line"></div>
          <div class="burger__line"></div>
        </div>

        <!-- Header Brand Logo -->
        <a class="header__brand" href="/">
          <img class="header__brand-logo" 
            alt="" 
            src="https://assets.interviewbit.com/assets/ibpp/brand-5c6255a15a1b1307a1b8a2bf0bcb149b1ff9513ab2854c7d391b3faf5f33848f.svg.gz" 
          />
        </a>

        <!-- Header Nav Bar -->
        <div class="header__nav header__nav--desktop header__nav-options--desktop">
          
        <a
          class="header__nav-item header__nav-item-fill gtm-track-element"
          href="/practice/"
          data-gtm-section="nav_bar"
          data-gtm-element="Practice"
          data-gtm-allowed-actions="click"
          data-gtm-type="nav"
        >
          Practice
        </a>
      
<div data-gtm-type="button" data-gtm-allowed-actions="click" data-gtm-parent="Resources" data-gtm-section="nav_bar" class="sr-dropdown-trigger header__nav-item header__nav-item-fill gtm-track-element" data-action="dropdown-toggle" data-activity="ib-header-dropdown-toggler" data-drop-down-padding="-17" data-dropdown-family="ib-header-nav" data-target="Resources">
  
        Resources
        <span class="icon-chevron-down"></span>

</div>      

<div
  id="Resources"
  data-alignment="right"
  class="sr-dropdown header__dropdown-container sr-dropdown--arrow-right"
>
  <div class="sr-dropdown__content ">
    
        <div class="header__dropdown">
            <a
              class="header__dropdown-item gtm-track-element"
              href="/technical-interview-questions/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Resources List"
              data-gtm-parent="Interview Guides"
              data-gtm-type="nav"
            >
                <img 
                  data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/interview-guides-12287e8c726c9cf3bfc2925c375041ca2456fa71c57f056674e583df86a62459.svg.gz" 
                  class="header__dropdown-item-image lazy-elem"
                >
              <span class="m-l-10 header__dropdown-item-title">Interview Guides</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/coding-interview-questions/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Resources List"
              data-gtm-parent="All Problems"
              data-gtm-type="nav"
            >
                <img 
                  data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/all-problems-c647d4c9e1bfc1df49deb02ea8333f105e8dc29a91f7e60c96aafc40ec2422b8.svg.gz" 
                  class="header__dropdown-item-image lazy-elem"
                >
              <span class="m-l-10 header__dropdown-item-title">All Problems</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/courses/fast-track/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Resources List"
              data-gtm-parent="Fast Track Courses"
              data-gtm-type="nav"
            >
                <img 
                  data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/fast-track-courses-420f67912f628db5ffdb5bd149b2eba2c7db127c5bbe94a3dc31154d0c98467b.svg.gz" 
                  class="header__dropdown-item-image lazy-elem"
                >
              <span class="m-l-10 header__dropdown-item-title">Fast Track Courses</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="https://discord.com/invite/gD2ZTC5j8K"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Resources List"
              data-gtm-parent="Community"
              data-gtm-type="nav"
            >
                <img 
                  data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/community-8509140d744878bc34874f66289fdae67294d4d2d6cfd288d4398a57bda3dc5d.svg.gz" 
                  class="header__dropdown-item-image lazy-elem"
                >
              <span class="m-l-10 header__dropdown-item-title">Community</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/blog/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Resources List"
              data-gtm-parent="Blog"
              data-gtm-type="nav"
            >
                <img 
                  data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/blog-a3683db2e9cea2c51cfbb2b59148d1add35fc96ceb53b3352b45af5661a3a5ba.svg.gz" 
                  class="header__dropdown-item-image lazy-elem"
                >
              <span class="m-l-10 header__dropdown-item-title">Blog</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/interview-preparation-kit/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Resources List"
              data-gtm-parent="Interview Preparation Kit"
              data-gtm-type="nav"
            >
                <img 
                  data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/study-plan-a121448bdfbced09ec0627fc622188b21ce5720ee9e443c3d270a0664f1acf14.svg.gz" 
                  class="header__dropdown-item-image lazy-elem"
                >
              <span class="m-l-10 header__dropdown-item-title">Interview Preparation Kit</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="https://www.interviewbit.com/api/v3/redirect/scaler_auth/?redirect_url=aHR0cHM6Ly9zY2FsZXIuY29tL3RvcGljcy9jb3Vyc2VzP3V0bV9zb3VyY2U9aWI="
              target="_blank"
              data-gtm-allowed-actions="click"
              data-gtm-section="Resources List"
              data-gtm-parent="Video Courses"
              data-gtm-type="nav"
            >
                <span class="lazy-elem header__dropdown-item-new three-fourth" 
                  data-image="header__dropdown-item-new"
                >
                </span>
                <img 
                  data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/video-courses-b478de17094fec3fb2377b91b8a003b5589baed23edc150762678361468e8076.svg.gz" 
                  class="header__dropdown-item-image lazy-elem"
                >
              <span class="m-l-10 header__dropdown-item-title">Video Courses</span>
            </a>
        </div>

  </div>
</div>
        <a
          class="header__nav-item header__nav-item-fill gtm-track-element"
          href="/contests/"
          data-gtm-section="nav_bar"
          data-gtm-element="Contests"
          data-gtm-allowed-actions="click"
          data-gtm-type="nav"
        >
          Contests
        </a>
      
<div data-gtm-type="button" data-gtm-allowed-actions="click" data-gtm-parent="Online IDE" data-gtm-section="nav_bar" class="sr-dropdown-trigger header__nav-item header__nav-item-fill gtm-track-element" data-action="dropdown-toggle" data-activity="ib-header-dropdown-toggler" data-drop-down-padding="-17" data-dropdown-family="ib-header-nav" data-target="Online IDE">
  
        Online IDE
        <span class="icon-chevron-down"></span>
          <div class="header__nav-item-new">
            New 
            <span class="header__nav-item-new__triangle"></span>
          </div>

</div>      

<div
  id="Online IDE"
  data-alignment="right"
  class="sr-dropdown header__dropdown-container sr-dropdown--arrow-right"
>
  <div class="sr-dropdown__content ">
    
        <div class="header__dropdown">
            <a
              class="header__dropdown-item gtm-track-element"
              href="/online-cpp-compiler/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Online IDE List"
              data-gtm-parent="Online C++ Compiler"
              data-gtm-type="nav"
            >
                <span class="lazy-elem fast-track cpp three-fourth" 
                  data-image="fast-track cpp"
                >
                </span>
              <span class="m-l-10 header__dropdown-item-title">Online C++ Compiler</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/online-c-compiler/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Online IDE List"
              data-gtm-parent="Online C Compiler"
              data-gtm-type="nav"
            >
                <span class="lazy-elem fast-track c three-fourth" 
                  data-image="fast-track c"
                >
                </span>
              <span class="m-l-10 header__dropdown-item-title">Online C Compiler</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/online-python-compiler/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Online IDE List"
              data-gtm-parent="Online Python Compiler"
              data-gtm-type="nav"
            >
                <span class="lazy-elem fast-track python three-fourth" 
                  data-image="fast-track python"
                >
                </span>
              <span class="m-l-10 header__dropdown-item-title">Online Python Compiler</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/online-java-compiler/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Online IDE List"
              data-gtm-parent="Online Java Compiler"
              data-gtm-type="nav"
            >
                <span class="lazy-elem fast-track java three-fourth" 
                  data-image="fast-track java"
                >
                </span>
              <span class="m-l-10 header__dropdown-item-title">Online Java Compiler</span>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/online-javascript-compiler/"
              target="_self"
              data-gtm-allowed-actions="click"
              data-gtm-section="Online IDE List"
              data-gtm-parent="Online JavaScript Compiler"
              data-gtm-type="nav"
            >
                <span class="lazy-elem fast-track javascript three-fourth" 
                  data-image="fast-track javascript"
                >
                </span>
              <span class="m-l-10 header__dropdown-item-title">Online JavaScript Compiler</span>
            </a>
        </div>

  </div>
</div>
      
<div data-gtm-type="button" data-gtm-allowed-actions="click" data-gtm-parent="Free Mock" class="sr-dropdown-trigger header__nav-item header__nav-item-fill gtm-track-element" data-action="dropdown-toggle" data-activity="ib-header-dropdown-toggler" data-drop-down-padding="-17" data-dropdown-family="ib-header-nav" data-target="Free Mock">
  
        Free Mock
        <span class="icon-chevron-down"></span>

</div>      

<div
  id="Free Mock"
  data-alignment="right"
  class="sr-dropdown header__dropdown-container mock-interview-dropdown sr-dropdown--arrow-right"
>
  <div class="sr-dropdown__content ">
    
        <div class="header__dropdown">
            <a
              class="header__dropdown-item gtm-track-element"
              href="/mock-interview/"
              target="_blank"
              data-gtm-section="Free Mock List"
              data-gtm-allowed-actions="click"
              data-gtm-parent="Free Mock Assessment"
              data-gtm-type="card"
            >
              <div class="header__dropdown-item-logo-section">
                Powered By <span class="header__dropdown-item-logo"></span>
              </div>
              <div class="header__dropdown-item-banner"></div>
              <div class="header__dropdown-item-heading" id="header-dropdown-heading">Free Mock Assessment</div>
              <div class="header__dropdown-item-description">Take popular mock tests for free with real life interview questions from top tech companies</div>
              <div class="header__dropdown-item-cta">Explore Mock Tests <span class="icon-chevron-right"> </span></div>
            </a>
            <a
              class="header__dropdown-item gtm-track-element"
              href="/peer-mock-interview/"
              target="_blank"
              data-gtm-section="Free Mock List"
              data-gtm-allowed-actions="click"
              data-gtm-parent="Mock Interview"
              data-gtm-type="card"
            >
              <div class="header__dropdown-item-logo-section">
                Powered By <span class="header__dropdown-item-logo"></span>
              </div>
              <div class="header__dropdown-item-banner"></div>
              <div class="header__dropdown-item-heading" id="header-dropdown-heading">Mock Interview</div>
              <div class="header__dropdown-item-description">Pair up with a peer like you and practise with hand-picked questions</div>
              <div class="header__dropdown-item-cta">Explore Mock Interviews <span class="icon-chevron-right"> </span></div>
            </a>
        </div>

  </div>
</div>
        <a
          class="header__nav-item header__nav-item-fill gtm-track-element"
          href="/events/"
          data-gtm-section="nav_bar"
          data-gtm-element="Events"
          data-gtm-allowed-actions="click"
          data-gtm-type="nav"
        >
          Events
            <span class="header__nav-item-label"> New </span>
        </a>
        <a
          class="header__nav-item header__nav-item-fill gtm-track-element"
          href="https://www.scaler.com/?utm_source=ib&amp;utm_campaign=ib_menu&amp;utm_medium=nav_menu"
          id="ib-to-scaler-nav-item"
          target="_blank"
          data-gtm-section="nav_bar"
          data-gtm-element="Scaler"
          data-gtm-allowed-actions="click"
          data-gtm-type="nav"
          onclick="window.trackGaEvent('NavMenu','scaler-click')"
        >
          Scaler
        </a>

<script>
  const headerLeftSideDropdownItems = document.querySelectorAll('.header__left-section a.header__dropdown-item');
  if (headerLeftSideDropdownItems) {
    headerLeftSideDropdownItems.forEach((dropdownItem) => {
      dropdownItem.addEventListener('click', () => {
        window.trackGaEvent('header','nav-link', `${dropdownItem.href}`);
        if (dropdownItem.innerText === 'Scaler Academy') {
          window.trackGaEvent('NavMenu','scaler-dropdown-click', 'scaler academy');
        }
        if (dropdownItem.innerText === 'Scaler Data Science and ML') {
          window.trackGaEvent('NavMenu','scaler-dropdown-click', 'scaler data science');
        }
      });
    });
  }

  // hard coding the class as this tracking will only be used for 1 month to track some specific data related
  // to scaler clicks
  // please consult before removing
  const scalerDropdownTrigger = document.querySelectorAll('.header__left-section div[data-target="Scaler"]')[0];
  const freeMockDropdownTrigger = document.querySelectorAll('.header__left-section div[data-target="Free mock"]')[0];
  if (scalerDropdownTrigger) {
    scalerDropdownTrigger.addEventListener('click', () => {
    window.trackGaEvent('NavMenu','scaler-dropdown-click', 'scaler-header-dropdown');
  });
  }
  if (freeMockDropdownTrigger) {
    freeMockDropdownTrigger.addEventListener('click', () => {
    window.trackGaEvent('NavMenu','free-mock-dropdown-click', 'free-mock-header-dropdown');
  });
  }

  // addign active state to header contest nav_icon and fast Track nav_icon in desktop view
  if (window.location.pathname.includes('/contests/')) {
    const contestsNav = document.querySelector('[href="/contests/"]');
    contestsNav.classList.add('header__nav-item--open');
  }
  if (window.location.pathname.includes('/courses/fast-track/')) {
    const resourcesDropdownTrigger = document.querySelector('[data-target="Resources"]');
    resourcesDropdownTrigger.classList.add('header__nav-item--open')
  }
</script>

        </div>

        <!-- Header Search Bar -->
        <div class="header__search-bar" id="ibpp-search-bar">
  <input 
    id="ibpp-search-input"
    class="header__search-bar-input"
    placeholder="Search Interviewbit.com "
  />
  <img 
    width=18
    height=18
    alt="magnifying glass"
    src=https://assets.interviewbit.com/assets/ibpp/header/magnifying-glass-fb2cac7aa3ac94de98dbb8bb0abff877b93bd2c531cb7319ae91d04f2bbf44fc.svg.gz 
    class="header__search-bar-icon"
  />
  <div class="hidden header__search-result-container" id="ibpp-search-result-container">
  </div>
</div>


        <div class="hide-in-above-tablet header__experience-scaler-tablet">
          <div class="header__user-logged-out-section header__user-experience-scaler header__item-hide" data-class="experience-scaler-cta">
  <a
    class="auth-trigger gtm-track-element ibpp-button primary"
    href='javascript:void(0)'
    target="_blank"
    data-gtm-parent="nav_bar"
    data-action="flow-trigger"
    data-gtm-section="nav_bar"
    data-target="auth"
    data-mode="login"
    data-gtm-type="nav"
    data-gtm-element="login"
    data-gtm-allowed-actions="click hover"
    data-trigger="ibpp-auth-flow"
    >
    <span class="auth-trigger__content-image"> 
      <img
        src="https://assets.interviewbit.com/assets/ibpp/header/lightning-9463be96c95d16c4ae338af9f9dac4fc5a9332c3d8dafe7cce84e67614cd2622.svg.gz"
      >
    </span>
    <span class="auth-trigger__content--tablet">
      Experience Scaler
    </span>
    <span class="auth-trigger__content--desktop">
      Experience Scaler
    </span>
  </a>
</div>
        </div>
      </div>


      <!-- Header Right section -->
      <div class="header__right-section">
        

<div 
  class="header__user-logged-in-section header__item-hide
  "
>
    <div class="user-details user-details--hide-in-above-tablet">
    <div class="header-nav-accordion__container">
      <div class="header-nav-accordion__header">
        
<button class="gtm-track-element accordion-trigger header-nav-accordion " data-gtm-parent="accordion_toggle" data-gtm-allowed-actions="click" data-gtm-tracking-allowed="" data-gtm-text="" data-gtm-type="accordion" data-action="accordion-toggle" data-target="header-nav-user-option-user-details-desktop-trigger-tablet" data-tracking="ga" data-ga-action="accordion-toggle" data-ga-label="header-nav-user-option-user-details-desktop-trigger-tablet">
  
          <svg class="user-details__icon" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#00ccb6" viewBox="0 0 256 256">
  <rect width="256" height="256" fill="none"></rect>
  <circle cx="128" cy="96" r="64" fill="none" stroke="#00ccb6" stroke-miterlimit="10" stroke-width="24"></circle>
  <path d="M31,216a112,112,0,0,1,194,0" fill="none" stroke="#00ccb6" stroke-width="24" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>

          <div class="user-details__avatar-name"></div>
          <i class="icon-chevron-down"></i>

</button>      </div>
      
<div class="accordion  " id="header-nav-user-option-user-details-desktop-trigger-tablet" style="height: 0px;">
  
        <div class="header-nav-accordion__items-container">
              <a
                class="header-nav-accordion__item user-details__profile-nav"
                href=""
                data-gtm-type="nav"
                data-gtm-allowed-actions="click"
                data-gtm-element="Profile"
                onclick="window.trackGaEvent('header','nav-link','')"
              >
                <span class="m-l-20 header-nav-accordion__item-text">
                  Profile
                </span>
              </a>
              <a
                class="header-nav-accordion__item "
                href="/settings/"
                data-gtm-type="nav"
                data-gtm-allowed-actions="click"
                data-gtm-element="Settings"
                onclick="window.trackGaEvent('header','nav-link','/settings/')"
              >
                <span class="m-l-20 header-nav-accordion__item-text">
                  Settings
                </span>
              </a>
              <a
                class="header-nav-accordion__item "
                href="/help_requests/"
                data-gtm-type="nav"
                data-gtm-allowed-actions="click"
                data-gtm-element="Help Requests"
                onclick="window.trackGaEvent('header','nav-link','/help_requests/')"
              >
                <span class="m-l-20 header-nav-accordion__item-text">
                  Help Requests
                </span>
              </a>
              <form
  name="logout"
  method="post"
  action="/users/sign_out/"
  style="display: block; width: 100%;"
  class="header-nav-accordion__item header-nav-accordion__logout-btn"
  class="header-nav-accordion__item header-nav-accordion__logout-btn"
>
  <input name="_method" value="delete" type="hidden" />
  <input 
    class="user-details__csrf-token"
    name="authenticity_token" type="hidden"
  />
  <input class="header__user-option-logout header-nav-accordion__item-text" 
    type="submit" 
    value="Log out"
  />
</form>

        </div>

</div>    </div>
  </div>
  <div class="auth-trigger__content--desktop">
      <div class="user-details user-details--hide-in-tablet">
          <div id="root" data-plugin="streak-widget"></div>


<link rel="stylesheet" media="none" href="https://assets.interviewbit.com/packs/css/frontend/assessments~~6eb80a90.fd81b3.css" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />
<link rel="stylesheet" media="none" href="https://assets.interviewbit.com/packs/css/frontend/interviewbit/sub_app/streak_widget_app.38de12.css" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />


        
<div data-gtm-type="button" data-gtm-allowed-actions="click" data-gtm-parent="user-details-desktop-trigger-tablet" class="sr-dropdown-trigger user-details__section" data-action="dropdown-toggle" data-activity="ib-header-dropdown-toggler" data-drop-down-padding="-17" data-dropdown-family="ib-header-nav" data-target="user-details-desktop-trigger-tablet">
  
          <svg class="user-details__icon" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#506b6a" viewBox="0 0 256 256">
  <rect width="256" height="256" fill="none"></rect>
  <circle cx="128" cy="96" r="64" fill="none" stroke="#506b6a" stroke-miterlimit="10" stroke-width="24"></circle>
  <path d="M31,216a112,112,0,0,1,194,0" fill="none" stroke="#506b6a" stroke-width="24" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
 

</div>        

<div
  id="user-details-desktop-trigger-tablet"
  data-alignment="right"
  class="sr-dropdown header__dropdown-container sr-dropdown--arrow-right"
>
  <div class="sr-dropdown__content ">
    
          <div class="header__dropdown">
                <a class="header__dropdown-item user-details__profile-nav" 
                  href=""
                >
                  <span class="m-l-10">Profile</span>
                </a>
                <a class="header__dropdown-item " 
                  href="/settings/"
                >
                  <span class="m-l-10">Settings</span>
                </a>
                <a class="header__dropdown-item " 
                  href="/help_requests/"
                >
                  <span class="m-l-10">Help Requests</span>
                </a>
                <form
  name="logout"
  method="post"
  action="/users/sign_out/"
  style="display: block; width: 100%;"
  class="header-nav-accordion__item header-nav-accordion__logout-btn"
  class="header-nav-accordion__item header-nav-accordion__logout-btn"
>
  <input name="_method" value="delete" type="hidden" />
  <input 
    class="user-details__csrf-token"
    name="authenticity_token" type="hidden"
  />
  <input class="header__user-option-logout header-nav-accordion__item-text" 
    type="submit" 
    value="Log out"
  />
</form>

          </div>

  </div>
</div>
      </div>
    
<a
  href="/notifications/"
  class="user-details__section user-details__notif-icon user-details--hide-in-tablet"
  aria-label="Notifications"
  target="_blank"
  rel="noopener noreferrer"
>
  <svg class="user-details__icon" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#506b6a" viewBox="0 0 256 256">
    <rect fill="none" d="M0 0h256v256H0z"/>
    <path d="M56.203 104a71.899 71.899 0 0 1 72.345-71.998c39.59.294 71.257 33.201 71.257 72.902V112c0 35.816 7.493 56.599 14.093 67.958A7.999 7.999 0 0 1 207.016 192H48.984a8 8 0 0 1-6.881-12.044c6.603-11.36 14.1-32.142 14.1-67.956ZM96 192v8a32 32 0 0 0 64 0v-8" fill="none" stroke="#506b6a" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/>
  </svg>
</a>

  </div>

</div>

<div class="header__user-logged-out-section header__item-hide 
  "
>
  <a
    class="header__user-sign-in-button auth-trigger gtm-track-element ibpp-button primary auth-trigger__accordian"
    href='javascript:void(0)'
    data-gtm-parent="nav_bar"
    data-action="flow-trigger"
    data-gtm-section="nav_bar"
    data-target="auth"
    data-mode="login"
    data-gtm-type="nav"
    data-gtm-element="login"
    data-gtm-allowed-actions="click hover"
    data-trigger="ibpp-auth-flow"
    onclick="window.trackGaEvent('onboarding','signin-cta-clicked','Sign in')";
    >
    <span class="auth-trigger__content--tablet">
      <span class="header-icon user"></span>
      Login to experience InterviewBit
      <i class="icon-chevron-right m-l-20"> </i>
    </span> 
    <span class="auth-trigger__content--desktop">
      Sign in
    </span>
  </a>
</div>

          <div class="header__user-logged-out-section header__user-experience-scaler header__item-hide" data-class="experience-scaler-cta">
  <a
    class="auth-trigger gtm-track-element ibpp-button primary"
    href='javascript:void(0)'
    target="_blank"
    data-gtm-parent="nav_bar"
    data-action="flow-trigger"
    data-gtm-section="nav_bar"
    data-target="auth"
    data-mode="login"
    data-gtm-type="nav"
    data-gtm-element="login"
    data-gtm-allowed-actions="click hover"
    data-trigger="ibpp-auth-flow"
    >
    <span class="auth-trigger__content-image"> 
      <img
        src="https://assets.interviewbit.com/assets/ibpp/header/lightning-9463be96c95d16c4ae338af9f9dac4fc5a9332c3d8dafe7cce84e67614cd2622.svg.gz"
      >
    </span>
    <span class="auth-trigger__content--tablet">
      Experience Scaler
    </span>
    <span class="auth-trigger__content--desktop">
      Experience Scaler
    </span>
  </a>
</div>
      </div>
    </div>

    <!-- Burger menu content -->
    <div class="header__burger">
      <div class="header__burger-head-elements">
        <!-- Mobile view burger button -->
        <div class="burger__close burger header__burger-button burger--active">
          <div class="burger__line"></div>
          <div class="burger__line"></div>
          <div class="burger__line"></div>
        </div>
        <a class="header__brand-burger-menu" href="/">
          <img class="header__brand-logo" 
            alt="" 
            src="https://assets.interviewbit.com/assets/ibpp/brand-5c6255a15a1b1307a1b8a2bf0bcb149b1ff9513ab2854c7d391b3faf5f33848f.svg.gz" 
          />
        </a>
      </div>
      <div class="header__nav header__nav--tablet hide-in-above-tablet">
        

<div 
  class="header__user-logged-in-section header__item-hide
  "
>
    <div class="user-details user-details--hide-in-above-tablet">
    <div class="header-nav-accordion__container">
      <div class="header-nav-accordion__header">
        
<button class="gtm-track-element accordion-trigger header-nav-accordion " data-gtm-parent="accordion_toggle" data-gtm-allowed-actions="click" data-gtm-tracking-allowed="" data-gtm-text="" data-gtm-type="accordion" data-action="accordion-toggle" data-target="header-nav-user-option-user-details-tablet-trigger--v2-instance-tablet" data-tracking="ga" data-ga-action="accordion-toggle" data-ga-label="header-nav-user-option-user-details-tablet-trigger--v2-instance-tablet">
  
          <svg class="user-details__icon" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#00ccb6" viewBox="0 0 256 256">
  <rect width="256" height="256" fill="none"></rect>
  <circle cx="128" cy="96" r="64" fill="none" stroke="#00ccb6" stroke-miterlimit="10" stroke-width="24"></circle>
  <path d="M31,216a112,112,0,0,1,194,0" fill="none" stroke="#00ccb6" stroke-width="24" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>

          <div class="user-details__avatar-name"></div>
          <i class="icon-chevron-down"></i>

</button>      </div>
      
<div class="accordion  " id="header-nav-user-option-user-details-tablet-trigger--v2-instance-tablet" style="height: 0px;">
  
        <div class="header-nav-accordion__items-container">
              <a
                class="header-nav-accordion__item user-details__profile-nav"
                href=""
                data-gtm-type="nav"
                data-gtm-allowed-actions="click"
                data-gtm-element="Profile"
                onclick="window.trackGaEvent('header','nav-link','')"
              >
                <span class="m-l-20 header-nav-accordion__item-text">
                  Profile
                </span>
              </a>
              <a
                class="header-nav-accordion__item "
                href="/settings/"
                data-gtm-type="nav"
                data-gtm-allowed-actions="click"
                data-gtm-element="Settings"
                onclick="window.trackGaEvent('header','nav-link','/settings/')"
              >
                <span class="m-l-20 header-nav-accordion__item-text">
                  Settings
                </span>
              </a>
              <a
                class="header-nav-accordion__item "
                href="/help_requests/"
                data-gtm-type="nav"
                data-gtm-allowed-actions="click"
                data-gtm-element="Help Requests"
                onclick="window.trackGaEvent('header','nav-link','/help_requests/')"
              >
                <span class="m-l-20 header-nav-accordion__item-text">
                  Help Requests
                </span>
              </a>
              <form
  name="logout"
  method="post"
  action="/users/sign_out/"
  style="display: block; width: 100%;"
  class="header-nav-accordion__item header-nav-accordion__logout-btn"
  class="header-nav-accordion__item header-nav-accordion__logout-btn"
>
  <input name="_method" value="delete" type="hidden" />
  <input 
    class="user-details__csrf-token"
    name="authenticity_token" type="hidden"
  />
  <input class="header__user-option-logout header-nav-accordion__item-text" 
    type="submit" 
    value="Log out"
  />
</form>

        </div>

</div>    </div>
  </div>
  <div class="auth-trigger__content--desktop">
      <div class="user-details user-details--hide-in-tablet">
          <div id="root" data-plugin="streak-widget"></div>





        
<div data-gtm-type="button" data-gtm-allowed-actions="click" data-gtm-parent="user-details-tablet-trigger--v2-instance-tablet" class="sr-dropdown-trigger user-details__section" data-action="dropdown-toggle" data-activity="ib-header-dropdown-toggler" data-drop-down-padding="-17" data-dropdown-family="ib-header-nav" data-target="user-details-tablet-trigger--v2-instance-tablet">
  
          <svg class="user-details__icon" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#506b6a" viewBox="0 0 256 256">
  <rect width="256" height="256" fill="none"></rect>
  <circle cx="128" cy="96" r="64" fill="none" stroke="#506b6a" stroke-miterlimit="10" stroke-width="24"></circle>
  <path d="M31,216a112,112,0,0,1,194,0" fill="none" stroke="#506b6a" stroke-width="24" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
 

</div>        

<div
  id="user-details-tablet-trigger--v2-instance-tablet"
  data-alignment="right"
  class="sr-dropdown header__dropdown-container sr-dropdown--arrow-right"
>
  <div class="sr-dropdown__content ">
    
          <div class="header__dropdown">
                <a class="header__dropdown-item user-details__profile-nav" 
                  href=""
                >
                  <span class="m-l-10">Profile</span>
                </a>
                <a class="header__dropdown-item " 
                  href="/settings/"
                >
                  <span class="m-l-10">Settings</span>
                </a>
                <a class="header__dropdown-item " 
                  href="/help_requests/"
                >
                  <span class="m-l-10">Help Requests</span>
                </a>
                <form
  name="logout"
  method="post"
  action="/users/sign_out/"
  style="display: block; width: 100%;"
  class="header-nav-accordion__item header-nav-accordion__logout-btn"
  class="header-nav-accordion__item header-nav-accordion__logout-btn"
>
  <input name="_method" value="delete" type="hidden" />
  <input 
    class="user-details__csrf-token"
    name="authenticity_token" type="hidden"
  />
  <input class="header__user-option-logout header-nav-accordion__item-text" 
    type="submit" 
    value="Log out"
  />
</form>

          </div>

  </div>
</div>
      </div>
    
<a
  href="/notifications/"
  class="user-details__section user-details__notif-icon user-details--hide-in-tablet"
  aria-label="Notifications"
  target="_blank"
  rel="noopener noreferrer"
>
  <svg class="user-details__icon" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#506b6a" viewBox="0 0 256 256">
    <rect fill="none" d="M0 0h256v256H0z"/>
    <path d="M56.203 104a71.899 71.899 0 0 1 72.345-71.998c39.59.294 71.257 33.201 71.257 72.902V112c0 35.816 7.493 56.599 14.093 67.958A7.999 7.999 0 0 1 207.016 192H48.984a8 8 0 0 1-6.881-12.044c6.603-11.36 14.1-32.142 14.1-67.956ZM96 192v8a32 32 0 0 0 64 0v-8" fill="none" stroke="#506b6a" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/>
  </svg>
</a>

  </div>

</div>

<div class="header__user-logged-out-section header__item-hide 
  "
>
  <a
    class="header__user-sign-in-button auth-trigger gtm-track-element ibpp-button primary auth-trigger__accordian"
    href='javascript:void(0)'
    data-gtm-parent="nav_bar"
    data-action="flow-trigger"
    data-gtm-section="nav_bar"
    data-target="auth"
    data-mode="login"
    data-gtm-type="nav"
    data-gtm-element="login"
    data-gtm-allowed-actions="click hover"
    data-trigger="ibpp-auth-flow"
    onclick="window.trackGaEvent('onboarding','signin-cta-clicked','Sign in')";
    >
    <span class="auth-trigger__content--tablet">
      <span class="header-icon user"></span>
      Login to experience InterviewBit
      <i class="icon-chevron-right m-l-20"> </i>
    </span> 
    <span class="auth-trigger__content--desktop">
      Sign in
    </span>
  </a>
</div>

        
        <a
          class="header__nav-item gtm-track-element"
          id="Practice__accordian"
          href="/practice/"
          data-gtm-section="nav_bar"
          data-gtm-parent="Practice"
          data-gtm-allowed-actions="click"
          data-gtm-type="nav"
          onclick="window.trackGaEvent('header','nav-link','/practice/')"
        >
          <div class="header__nav-item-container">
              <span class="header-icon practice">
              </span>
            <div class="header__nav-item-info">
              Practice
              <div class="header__nav-item-subtext">
                Improve your coding skills with our resources
              </div>
            </div>
          </div>
        </a>
      <div class="header-nav-accordion__container">
        <div 
          id="header-nav-accordion-trigger-1" 
          class="header-nav-accordion__header"
          data-gtm-section="nav_bar"
          onclick="document.getElementById('header-nav-accordion-trigger-1')
          .classList.toggle('header-nav-accordion--expand');
        ">
          
<button class="gtm-track-element accordion-trigger header-nav-accordion " data-gtm-parent="accordion_toggle" data-gtm-allowed-actions="click" data-gtm-tracking-allowed="" data-gtm-text="" data-gtm-type="accordion" data-action="accordion-toggle" data-target="header-nav-accordion-1" data-tracking="ga" data-ga-action="accordion-toggle" data-ga-label="header-nav-accordion-1">
  
            <span class="header-icon resources">
            </span>
            <span class="header-nav-accordion__trigger-text">
              Resources
              <div class="header__nav-item-subtext header-nav-accordion__trigger-subtext">
                Experience learning
              </div>
            </span>
            <i class="icon-chevron-down"></i>

</button>        </div>
        
<div class="accordion  " id="header-nav-accordion-1" style="height: 0px;">
  
          <div class="header-nav-accordion__items-container">
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/technical-interview-questions/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Resources List"
                data-gtm-parent="Interview Guides"
                data-gtm-type="nav"
              >
                  <img 
                    data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/interview-guides-12287e8c726c9cf3bfc2925c375041ca2456fa71c57f056674e583df86a62459.svg.gz" 
                    class="header__dropdown-item-image lazy-elem"
                  />
                <span class="m-l-10 header-nav-accordion__item-text">Interview Guides</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/coding-interview-questions/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Resources List"
                data-gtm-parent="All Problems"
                data-gtm-type="nav"
              >
                  <img 
                    data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/all-problems-c647d4c9e1bfc1df49deb02ea8333f105e8dc29a91f7e60c96aafc40ec2422b8.svg.gz" 
                    class="header__dropdown-item-image lazy-elem"
                  />
                <span class="m-l-10 header-nav-accordion__item-text">All Problems</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/courses/fast-track/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Resources List"
                data-gtm-parent="Fast Track Courses"
                data-gtm-type="nav"
              >
                  <img 
                    data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/fast-track-courses-420f67912f628db5ffdb5bd149b2eba2c7db127c5bbe94a3dc31154d0c98467b.svg.gz" 
                    class="header__dropdown-item-image lazy-elem"
                  />
                <span class="m-l-10 header-nav-accordion__item-text">Fast Track Courses</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="https://discord.com/invite/gD2ZTC5j8K"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Resources List"
                data-gtm-parent="Community"
                data-gtm-type="nav"
              >
                  <img 
                    data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/community-8509140d744878bc34874f66289fdae67294d4d2d6cfd288d4398a57bda3dc5d.svg.gz" 
                    class="header__dropdown-item-image lazy-elem"
                  />
                <span class="m-l-10 header-nav-accordion__item-text">Community</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/blog/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Resources List"
                data-gtm-parent="Blog"
                data-gtm-type="nav"
              >
                  <img 
                    data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/blog-a3683db2e9cea2c51cfbb2b59148d1add35fc96ceb53b3352b45af5661a3a5ba.svg.gz" 
                    class="header__dropdown-item-image lazy-elem"
                  />
                <span class="m-l-10 header-nav-accordion__item-text">Blog</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/interview-preparation-kit/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Resources List"
                data-gtm-parent="Interview Preparation Kit"
                data-gtm-type="nav"
              >
                  <img 
                    data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/study-plan-a121448bdfbced09ec0627fc622188b21ce5720ee9e443c3d270a0664f1acf14.svg.gz" 
                    class="header__dropdown-item-image lazy-elem"
                  />
                <span class="m-l-10 header-nav-accordion__item-text">Interview Preparation Kit</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="https://www.interviewbit.com/api/v3/redirect/scaler_auth/?redirect_url=aHR0cHM6Ly9zY2FsZXIuY29tL3RvcGljcy9jb3Vyc2VzP3V0bV9zb3VyY2U9aWI="
                target="_blank"
                data-gtm-allowed-actions="click"
                data-gtm-section="Resources List"
                data-gtm-parent="Video Courses"
                data-gtm-type="nav"
              >
                  <span class="lazy-elem header__dropdown-item-new three-fourth" 
                    data-image="header__dropdown-item-new"
                  >
                  </span>
                  <img 
                    data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/video-courses-b478de17094fec3fb2377b91b8a003b5589baed23edc150762678361468e8076.svg.gz" 
                    class="header__dropdown-item-image lazy-elem"
                  />
                <span class="m-l-10 header-nav-accordion__item-text">Video Courses</span>
              </a>
          </div>

</div>      </div>
        <a
          class="header__nav-item gtm-track-element"
          id="Contests__accordian"
          href="/contests/"
          data-gtm-section="nav_bar"
          data-gtm-parent="Contests"
          data-gtm-allowed-actions="click"
          data-gtm-type="nav"
          onclick="window.trackGaEvent('header','nav-link','/contests/')"
        >
          <div class="header__nav-item-container">
              <span class="header-icon contests">
              </span>
            <div class="header__nav-item-info">
              Contests
              <div class="header__nav-item-subtext">
                Compete in popular contests with top coders
              </div>
            </div>
          </div>
        </a>
      <div class="header-nav-accordion__container">
        <div 
          id="header-nav-accordion-trigger-3" 
          class="header-nav-accordion__header"
          data-gtm-section="nav_bar"
          onclick="document.getElementById('header-nav-accordion-trigger-3')
          .classList.toggle('header-nav-accordion--expand');
        ">
          
<button class="gtm-track-element accordion-trigger header-nav-accordion " data-gtm-parent="accordion_toggle" data-gtm-allowed-actions="click" data-gtm-tracking-allowed="" data-gtm-text="" data-gtm-type="accordion" data-action="accordion-toggle" data-target="header-nav-accordion-3" data-tracking="ga" data-ga-action="accordion-toggle" data-ga-label="header-nav-accordion-3">
  
            <span class="header-icon online-ide">
            </span>
            <span class="header-nav-accordion__trigger-text">
              Online IDE
              <div class="header__nav-item-subtext header-nav-accordion__trigger-subtext">
                Checkout our improved IDE
              </div>
            </span>
            <i class="icon-chevron-down"></i>

</button>        </div>
        
<div class="accordion  " id="header-nav-accordion-3" style="height: 0px;">
  
          <div class="header-nav-accordion__items-container">
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/online-cpp-compiler/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Online IDE List"
                data-gtm-parent="Online C++ Compiler"
                data-gtm-type="nav"
              >
                  <span class="lazy-elem fast-track cpp three-fourth" 
                    data-image="fast-track cpp"
                  >
                  </span>
                <span class="m-l-10 header-nav-accordion__item-text">Online C++ Compiler</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/online-c-compiler/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Online IDE List"
                data-gtm-parent="Online C Compiler"
                data-gtm-type="nav"
              >
                  <span class="lazy-elem fast-track c three-fourth" 
                    data-image="fast-track c"
                  >
                  </span>
                <span class="m-l-10 header-nav-accordion__item-text">Online C Compiler</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/online-python-compiler/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Online IDE List"
                data-gtm-parent="Online Python Compiler"
                data-gtm-type="nav"
              >
                  <span class="lazy-elem fast-track python three-fourth" 
                    data-image="fast-track python"
                  >
                  </span>
                <span class="m-l-10 header-nav-accordion__item-text">Online Python Compiler</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/online-java-compiler/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Online IDE List"
                data-gtm-parent="Online Java Compiler"
                data-gtm-type="nav"
              >
                  <span class="lazy-elem fast-track java three-fourth" 
                    data-image="fast-track java"
                  >
                  </span>
                <span class="m-l-10 header-nav-accordion__item-text">Online Java Compiler</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/online-javascript-compiler/"
                target="_self"
                data-gtm-allowed-actions="click"
                data-gtm-section="Online IDE List"
                data-gtm-parent="Online JavaScript Compiler"
                data-gtm-type="nav"
              >
                  <span class="lazy-elem fast-track javascript three-fourth" 
                    data-image="fast-track javascript"
                  >
                  </span>
                <span class="m-l-10 header-nav-accordion__item-text">Online JavaScript Compiler</span>
              </a>
          </div>

</div>      </div>
      <div class="header-nav-accordion__container">
        <div 
          id="header-nav-accordion-trigger-4"
          class="header-nav-accordion__header"
          data-gtm-section="nav_bar"
          onclick="document.getElementById('header-nav-accordion-trigger-4')
          .classList.toggle('header-nav-accordion--expand');
        ">
          
<button class="gtm-track-element accordion-trigger header-nav-accordion " data-gtm-parent="accordion_toggle" data-gtm-allowed-actions="click" data-gtm-tracking-allowed="" data-gtm-text="" data-gtm-type="accordion" data-action="accordion-toggle" data-target="header-nav-accordion-4" data-tracking="ga" data-ga-action="accordion-toggle" data-ga-label="header-nav-accordion-4">
  
            <span class="header-icon mock-interview">
            </span>
            <span class="header-nav-accordion__trigger-text">
              Free Mock
              <div class="header__nav-item-subtext header-nav-accordion__trigger-subtext">
                Assess yourself and prepare for interviews
              </div>
            </span>
            <i class="icon-chevron-down"></i>

</button>        </div>
        
<div class="accordion  " id="header-nav-accordion-4" style="height: 0px;">
  
          <div class="header-nav-accordion__items-container">
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/mock-interview/"
                data-gtm-allowed-actions="click"
                data-gtm-section="Mock Interview"
                data-gtm-parent="Free Mock Assessment"
                data-gtm-type="nav"
                onclick="window.trackGaEvent('NavMenu','free-mock-dropdown-click','/mock-interview/')"
              >
              <img 
                data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/scaler-forever-182db7e48ff42f84dacbca3377a55035cfe16a11546fdf39a66f87ea48c161be.svg.gz" 
                class="header__dropdown-item-image lazy-elem"
              />               
               <span class="m-l-10 header-nav-accordion__item-text">Free Mock Assessment</span>
              </a>
              <a
                class="header-nav-accordion__item gtm-track-element"
                href="/peer-mock-interview/"
                data-gtm-allowed-actions="click"
                data-gtm-section="Mock Interview"
                data-gtm-parent="Mock Interview"
                data-gtm-type="nav"
                onclick="window.trackGaEvent('NavMenu','free-mock-dropdown-click','/peer-mock-interview/')"
              >
              <img 
                data-src="https://assets.interviewbit.com/assets/ibpp/header/v2/peer-mock-interview-bf62edb2cf0e7a5670069abd039eb5f3bc95ddefefbe5c10608c653bcf9a9e13.svg.gz" 
                class="header__dropdown-item-image lazy-elem"
              />               
               <span class="m-l-10 header-nav-accordion__item-text">Mock Interview</span>
              </a>
          </div>

</div>      </div>
        <a
          class="header__nav-item gtm-track-element"
          id="Events__accordian"
          href="/events/"
          data-gtm-section="nav_bar"
          data-gtm-parent="Events"
          data-gtm-allowed-actions="click"
          data-gtm-type="nav"
          onclick="window.trackGaEvent('header','nav-link','/events/')"
        >
          <div class="header__nav-item-container">
              <img class="header__nav-item-container-image"
                src="https://d2beiqkhq929f0.cloudfront.net/public_assets/assets/000/022/395/original/Events_Desktop.svg?1672738540"
                alt="logo" 
              />
            <div class="header__nav-item-info">
              Events
              <div class="header__nav-item-subtext">
                Attend free live masterclass hosted by top tech professionals
              </div>
            </div>
              <span class="header__nav-item-label"> New </span>
          </div>
        </a>
        <a
          class="header__nav-item gtm-track-element"
          id="Scaler__accordian"
          href="https://www.scaler.com/?utm_source=ib&amp;utm_campaign=ib_menu&amp;utm_medium=nav_menu"
          target="_blank"
          data-gtm-section="nav_bar"
          data-gtm-parent="Scaler"
          data-gtm-allowed-actions="click"
          data-gtm-type="nav"
          onclick="window.trackGaEvent('NavMenu', 'scaler-click')"
        >
          <div class="header__nav-item-container">
            <span class="header-icon scaler">
            </span>
            <div class="header__nav-item-info">
              Scaler
              <div class="header__nav-item-subtext">
                Explore Offerings by SCALER
              </div>
            </div>
          </div>
        </a>

<script>
  const headerAccordianItems = document.querySelectorAll('.header__burger a.header-nav-accordion__item');
  if (headerAccordianItems) {
    headerAccordianItems.forEach((dropdownItem) => {
      dropdownItem.addEventListener('click', () => {
        window.trackGaEvent('header','nav-link', `${dropdownItem.href}`);
        if (dropdownItem.innerText === 'Scaler Academy') {
          window.trackGaEvent('NavMenu','scaler-dropdown-click', 'scaler academy');
        }
        if (dropdownItem.innerText === 'Scaler Data Science and ML') {
          window.trackGaEvent('NavMenu','scaler-dropdown-click', 'scaler data science');
        }
      });
    });
  }

  // hard coding the class as this tracking will only be used for 1 month to track some specific data related
  // to scaler clicks
  // please consult before removing
  const scalerAccordianTrigger = document.querySelectorAll('.header__burger button[data-target="header-nav-accordion-0"]')[0];
  const freeMockAccordianTrigger = document.querySelectorAll('.header__burger button[data-target="header-nav-accordion-5"]')[0];
  if (scalerAccordianTrigger) {
    scalerAccordianTrigger.addEventListener('click', () => {
    window.trackGaEvent('NavMenu','scaler-dropdown-click', 'scaler-header-dropdown');
  });
  }
  if (freeMockAccordianTrigger) {
    freeMockAccordianTrigger.addEventListener('click', () => {
    window.trackGaEvent('NavMenu','free-mock-dropdown-click', 'free-mock-header-dropdown');
  });
  }
  // addign active state to header contest nav_icon in tablet view
  if (window.location.pathname.includes('/contests/')) {
    const contestsNavAccordian = document.getElementById('Contests__accordian');
    contestsNavAccordian.classList.add('header__nav-item--open');
  }
  if (window.location.pathname.includes('/courses/fast-track/')) {
    const resourcesDropdownTrigger = document.getElementById('header-nav-accordion-trigger-2');
    resourcesDropdownTrigger.classList.add('header__nav-item--open')
  }
</script>

      </div>
    </div>

    <div class="header__backdrop"></div>
  </header>
<script>
  // this is a helper variable for our abTest script to know if the page is cached or not.
  window.__INTERVIEWBIT__ = {
    ...window.__INTERVIEWBIT__,
    isPageCached: true,
    authProviderUrls: {
      facebook: "/users/auth/facebook/",
      linkedin: "/users/auth/linkedin/",
      github: "/users/auth/github/",
      google: "/users/auth/google_oauth2/",
      sitekey: "6Lf3ngcTAAAAAAc199lejBXaJ5ZQbLp6MXHoRgWj"
    },
  }


  window.addEventListener('load', function() {
    const burger_menu = document.getElementById('ibpp-header');
    const burger_icon = document.querySelector('.burger__icon');
    const burger_icon_right = document.querySelector('.burger__icon-right');
    const headerSelector = '.header__nav.header__nav--desktop';
    const desktopHeader = document.querySelector(headerSelector);
    if (desktopHeader && window.innerWidth <= 768) {
      desktopHeader.innerHTML = '';
    }
    document.querySelector('.burger__close').addEventListener('click', function(){
      burger_menu.classList.remove('header--burger-open');
      burger_icon.classList.remove('burger--active');
    })
    if (burger_icon_right) {
      burger_icon_right.addEventListener('click', function(){
        burger_menu.classList.toggle('header--burger-open');
        burger_icon_right.classList.toggle('burger--active');
      })
    }
  })
</script>


    <div class="ib-content">
      <link rel="manifest" href="/gcm-manifest-ib.json">



  <script type='application/ld+json'>
    {
  "@context": "https://schema.org",
  "publisher": {
    "@type": "Organization",
    "name": "InterviewBit",
    "logo": {
      "@type": "ImageObject",
      "url": "http://ibassets.s3.amazonaws.com/static-assets/ib-logo-square.png"
    }
  },
  "@type": "VideoObject",
  "name": " Top DBMS Interview Questions and Answers(2024 Updated) - InterviewBit",
  "description": "To consolidate your knowledge and concepts in DBMS, here we've listed the most commonly asked DBMS interview questions to help you ace your interview!We have classified them into the following sections:DBMS Basic Interview QuestionsIntermediate DBMS Interview QuestionsAdvanced DBMS Interview Questions",
  "uploadDate": "2024-01-03T22:58:00.000+00:00",
  "contentUrl": "https://www.youtube.com/watch?v=_O-ckfDUYaA",
  "embedUrl": "https://www.youtube.com/embed/_O-ckfDUYaA",
  "thumbnailUrl": "https://i.ytimg.com/vi/_O-ckfDUYaA/mqdefault.jpg"
}
  </script>
  <script type='application/ld+json'>
    [
  {
    "@context": "https://schema.org",
    "publisher": {
      "@type": "Organization",
      "name": "InterviewBit",
      "logo": {
        "@type": "ImageObject",
        "url": "http://ibassets.s3.amazonaws.com/static-assets/ib-logo-square.png"
      }
    },
    "@type": "Article",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://www.interviewbit.com/dbms-interview-questions/"
    },
    "headline": " Top DBMS Interview Questions and Answers(2024 Updated) - InterviewBit",
    "description": "To consolidate your knowledge and concepts in DBMS, here we've listed the most commonly asked DBMS interview questions to help you ace your interview!We have classified them into the following sections:DBMS Basic Interview QuestionsIntermediate DBMS Interview QuestionsAdvanced DBMS Interview Questions",
    "image": [
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/263/original/dbms.png?1617187391",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/264/original/dbms-advantages.png?1617187523",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/265/original/acid_properties.png?1617187570",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/266/original/atomicity-1.png?1617187688",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/267/original/atomicity-2.png?1617187786",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/219/original/acid-consistency.png?1616074548",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/220/original/acid-isolation.png?1616074608",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/268/original/data_warehousing.png?1617187867",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/223/original/levels_of_abstraction.png?1616075395",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/269/original/E_R_Model.png?1617187943",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/270/original/1_to_1.png?1617188060",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/271/original/1_to_n.png?1617188084",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/272/original/m_to_m.png?1617188110",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/273/original/self_referencing.png?1617188132",
      "https://d3n0h9tb65y8q.cloudfront.net/public_assets/assets/000/002/819/original/normalization_forms.png?1645074158",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/275/original/normalization_ex.png?1617188308",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/276/original/1NF.png?1617188352",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/277/original/2NF.png?1617188407",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/278/original/2NF-02.png?1617188442",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/279/original/3NF.png?1617188565",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/280/original/3NF-01.png?1617188616",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/281/original/3NF-02.png?1617188646",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/282/original/db_keys.png?1617188783",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/240/original/relationship_between_keys.png?1616078153",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/283/original/2_tier.png?1617188844",
      "https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/284/original/3_tier.png?1617188871"
    ],
    "datePublished": "Jan 03, 2024",
    "dateModified": "Jan 03, 2024"
  },
  {
    "@context": "https://schema.org",
    "publisher": {
      "@type": "Organization",
      "name": "InterviewBit",
      "logo": {
        "@type": "ImageObject",
        "url": "http://ibassets.s3.amazonaws.com/static-assets/ib-logo-square.png"
      }
    },
    "@type": "VideoObject",
    "name": " Top DBMS Interview Questions and Answers(2024 Updated) - InterviewBit",
    "description": "To consolidate your knowledge and concepts in DBMS, here we've listed the most commonly asked DBMS interview questions to help you ace your interview!We have classified them into the following sections:DBMS Basic Interview QuestionsIntermediate DBMS Interview QuestionsAdvanced DBMS Interview Questions",
    "uploadDate": "2024-01-03T22:58:00.000+00:00",
    "contentUrl": "https://www.youtube.com/watch?v=_O-ckfDUYaA",
    "embedUrl": "https://www.youtube.com/embed/_O-ckfDUYaA",
    "thumbnailUrl": "https://i.ytimg.com/vi/_O-ckfDUYaA/mqdefault.jpg"
  }
]
  </script>




<meta property="fb:app_id" content="314158428787536" />
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="S2MerVlQ91s2aIs8lkpBSp34H3UxfSutd6CIrRiqOwjkqNYhaXS8RKr+q2KaBHwNMbt0lMN3vSDGnLFa88wpZg==" />

<meta name="env-name" data-id="interviewbit" />






<div id="exit-intent-modal" class="sr-modal exit-intent-modal ">
  <div class="sr-modal__content sr-modal__content--center ">
    <div class="sr-modal__body ">
      
  <div class="p-h-10 p-v-10">
    <img src='https://assets.interviewbit.com/assets/ibpp/exit-intent-icon-95110359577792e524969eb74e09428842ef828c74e03e93f33112ddb7494615.svg.gz' alt="exit-intent-icon" />
    <h3><b>Download Interview guide PDF</b></h3>
    <div class="m-v-20 flex-row">
      <div class="exit-intent-modal__description" id=DBMS Interview Questions>
        Before you leave, take this <b>DBMS Interview Questions</b> interview guide with you.
      </div>
    </div>
    <div 
      class="m-v-20 text-center exit-intent-modal__btn-container"
      data-gtm-section="exit-intent-modal"
      data-gtm-sub-product="interview_guides"
    >
      
<a
  class="auth-trigger gtm-track-element hidden enforce-signin ibpage__ibanner-button exit-intent-modal__btn-wrapper"
  style=""
  href=javascript:void(0)
  data-trigger="ibpp-auth-flow"
  data-action="flow-trigger"
  data-target="auth"
  data-mode="login"
  data-gtm-element="login"
  data-gtm-allowed-actions="click hover"
  data-source="exit-intent"
>
   
        <div
          class="text exit-intent-modal__download-btn p-10"
          data-gtm-text="Download PDF"
          data-gtm-element="Download PDF"
        >
            <img
              class="m-r-10"
              data-gtm-element="Download PDF"
              src='https://assets.interviewbit.com/assets/ibpp/download-4ced5a9b757182cb8efc2cdf6bf2af5199f9f903546aad5c9819c04792ffd258.svg.gz'
              alt="download-icon"
            />

          Download PDF
        </div>

</a>      <a
        class="sr-modal__close exit-intent-modal__btn-wrapper gtm-track-element"
        data-target="exit-intent-modal"
        data-action="modal-close"
        data-gtm-text="exit"
        data-gtm-allowed-actions="hover click"
      >
        <div class="text p-10" data-gtm-element="exit"> exit </div>
      </a>
    </div>
  </div>

    </div>
  </div>
</div>




<div id="career-roadmap-tool" class="sr-modal career-roadmap-tool ">
  <div class="sr-modal__content sr-modal__content--center ">
      <div class="sr-modal__header ">
        <div class="sr-modal__title h3 bold ">
          <img src='https://assets.interviewbit.com/assets/ibpp/scaler_logo_dark-7e93915e0999f5c6f33612b6918241ccd6927aeb15fe6adff7efc4d0613c1f81.svg.gz' class='career-roadmap-tool__scaler-logo'>
        </div>
        <a class="sr-modal__close" data-target="career-roadmap-tool" data-action="modal-close">
          <i class="icon-close"></i>
        </a>
      </div>
    <div class="sr-modal__body ">
      
  <div class="career-roadmap-tool__title">
    Get a Free
    <span class="career-roadmap-tool__title career-roadmap-tool__title--accent">
      Personalized Career
    </span>
    Roadmap
  </div>
  <div class="career-roadmap-tool__sub-title">
    Answer 4 simple questions about you and get a path to a lucrative career
  </div>
  <a
    href="https://www.scaler.com/career-plan/embedded?utm_source=ib&utm_medium=CRT_popup"
    target="_blank"
    class="career-roadmap-tool__expand"
  >
    <img
      src='https://assets.interviewbit.com/assets/ibpp/expand-icon-b3bdf1a30b26e10eccbf895f082747fc6551f9aa5aa7e3ffe4091997daf76696.svg.gz'
      alt="expand-icon"
      class="m-r-5"
    />
    Expand in New Tab
  </a>
  <iframe
    id="career-roadmap-tool-iframe",
    style="border-radius: 8px; max-width: 100%; max-height: 2880px;"
    title="Career Roadmaps"
    data-src="https://www.scaler.com/career-plan/embedded?iframe=true&amp;utm_source=ib&amp;utm_medium=interview-guides&amp;utm_campaign=career-tool&output=embed"
    width="100%"
    height="600"
    frameborder="0"
  ></iframe>

    </div>
  </div>
</div>



<div
  data-widget="auth-form-widget-root"
  
>
</div>

<link rel="stylesheet" media="none" href="https://assets.interviewbit.com/packs/css/frontend/styles.5a58aa.css" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />
<link rel="stylesheet" media="none" href="https://assets.interviewbit.com/packs/css/vendors~frontend/asse~dea72467.c652af.css" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />
<link rel="stylesheet" media="none" href="https://assets.interviewbit.com/packs/css/frontend/assessments~~38072d30.6c3adf.css" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />
<link rel="stylesheet" media="none" href="https://assets.interviewbit.com/packs/css/frontend/interviewbit~f39dc3cb.dd68db.css" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />
<link rel="stylesheet" media="none" href="https://assets.interviewbit.com/packs/css/frontend/interviewbit~10f19e2e.844b3b.css" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />


<script>
  window.__INTERVIEWBIT__ = {
    ...(window.__INTERVIEWBIT__ || {}),
    ab_testing: {
      ...(window.__INTERVIEWBIT__?.ab_testing || {}),
      ib_signup_fields: (
        window.__INTERVIEWBIT__?.ab_testing?.ib_signup_fields
          || "v2"
      ),
      ib_mandatory_signup_fields: (
        window.__INTERVIEWBIT__?.ab_testing?.ib_mandatory_signup_fields
          || "v2"
      ),
    },
  };
</script>





<article class="ibpage" data-gtm-page-sub-product="interview_guides">
    <div class="ib-articles-scroll-indicator">
  <div
    data-class="ib-articles-scroll-progress"
    class="ib-articles-scroll-indicator__progress"
  ></div>
</div>

    
<div class="ib-articles-header ib-articles-header__page-type--language" data-style-override="ib-articles-header-styles-overrides">
  <div class="ib-articles-header__details">
    <div class="ib-articles-header__breadcrumbs row align-c">
      <a class="m-r-5" href="/practice">
        <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/home-166c951f50d39c74e32bbc4f487ec04f013ff929602db205756754cb9fedea49.svg.gz" />
      </a>
      /
      <a class="m-h-5" href="/technical-interview-questions">
        Interview Guides
      </a>
      /
      <span class="m-l-5 ib-articles-header__breadcrumb-active">
        DBMS Interview Questions
      </span>
    </div>
    <h1 class="ib-articles-header__title darker">
      DBMS Interview Questions
    </h1>
      <div class="ib-articles-header__update-date darker">
        Last Updated: Jan 03, 2024
      </div>
  </div>
  <div class="ib-articles-header__actions ib-articles-header__actions-language-page">
      
<a
  class="responsive hidden ibpage__downloadable-a ibpage__downloadable download-pdf gtm-track-element"
  data-source="top_cta"
  data-gtm-text="Download PDF"
  data-gtm-allowed-actions="click"
  data-gtm-parent="Download PDF"
  data-gtm-section="top_cta"
>
  <span>
    <img class="ibpage__downloadable-img" 
      width="24" height="24" 
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/download_v2-f7bcad529b2845c93dddc78cd31acf9ecb098c42854a1757f0f8949950377c02.svg.gz"
    >
  </span>

  <span class="responsive text">
    Download PDF
  </span>
</a>

<a
  class="auth-trigger gtm-track-element hidden ibpage__downloadable ibpage__downloadable-a enforce-signin responsive"
  style=""
  href=javascript:void(0)
  data-trigger="ibpp-auth-flow"
  data-action="flow-trigger"
  data-target="auth"
  data-mode="login"
  data-gtm-element="Download PDF"
  data-gtm-allowed-actions="click hover"
  data-source="top_cta"
>
  
  <span>
    <img
      class="ibpage__downloadable-img" 
      width="24" height="24"
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/download_v2-f7bcad529b2845c93dddc78cd31acf9ecb098c42854a1757f0f8949950377c02.svg.gz"
      data-gtm-section="pdf"
      data-gtm-element="Download PDF"
    >
  </span>
  <span
    class="responsive text"
    data-gtm-section="pdf"
    data-gtm-text="Download PDF"
    data-gtm-element="Download PDF"
  >
    Download PDF
  </span>

</a>

<a id="auto-download-modal-trigger" data-id="" data-parent="" class="modal-trigger hidden gtm-track-element" data-gtm-allowed-actions="click" data-gtm-text="" data-gtm-type="button" data-gtm-parent="auto-download-modal" data-action="modal-open" data-target="auto-download-modal" data-gtm-tracking-allowed="" onclick="">
  
  &nbsp;

</a>
<div id="auto-download-modal" class="sr-modal  ">
  <div class="sr-modal__content sr-modal__content--center ">
    <div class="sr-modal__body ">
      
  <div class="p-h-10 p-v-10 gtm-track-element">
    <div
      class="row"
      style="justify-content: space-between;  align-items: center;"
    >
      <h3>Download PDF</h3>
      <a class="sr-modal__close" data-target="auto-download-modal" data-action="modal-close">
        <i class="icon-close"></i>
      </a>
    </div>
    <hr />
    <div class="m-v-10 text-center">
      Your requested download is ready!<br>
      Click
      <a
        class="pointer gtm-track-element"
        data-source="top_cta"
        data-action="start-download"
        data-gtm-section="pdf"
        data-gtm-element="here"
        data-gtm-text="Download PDF"
        data-gtm-allowed-actions="click"
      >
        here
      </a>
      to download.
    </div>
  </div>

    </div>
  </div>
</div>


      <div class="ib-articles-header__share-icons">
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.interviewbit.com/dbms-interview-questions/&title= Top DBMS Interview Questions and Answers(2024 Updated) - InterviewBit&summary= Top DBMS Interview Questions and Answers(2024 Updated) - InterviewBit&source=Interviewbit" target="_blank" onclick="google_analytics_tracking('linkedin')">
          <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/linkedin-18fa07f875ae588e6a13327ebe9daee5a86dc5d65033e0224c13479cc29e5f00.svg.gz"/>
        </a>
        <a href="https://www.facebook.com/v2.9/dialog/share?app_id=314158428787536&href=https://www.interviewbit.com/dbms-interview-questions/&quote=This article lists the most frequently asked interview questions on DBMS with answers for freshers and experienced professionals.&display=page&redirect_uri=https://www.interviewbit.com/dbms-interview-questions/" target="_blank" onclick="google_analytics_tracking('facebook')">
          <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/facebook-6870aeafddc4ab155bd097e17f8a2d1bf9922d1843ecd52ad1b72699987bcc9f.svg.gz"/>
        </a>
        <a href="https://twitter.com/intent/tweet?status= Top DBMS Interview Questions and Answers(2024 Updated) - InterviewBit&url=https://www.interviewbit.com/dbms-interview-questions/&via=Interview_Bit" target="_blank" onclick="google_analytics_tracking('twitter')">
          <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/twitter-e7bdcd6ec13ba60b234728b60a57f7d216d59e68918d16cdcde70a094836563d.svg.gz"/>
        </a>
        <a class="ib-articles-header__copy-icon" href="javascript:void(0)" onclick="copyToClipboard(event)">
          <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/copy-0f42138e74a5242bb38ef88af170b0dc8a4ce78fbd5afe52b130fb763e211646.svg.gz"/>
          <input type="text" value="https://www.interviewbit.com/dbms-interview-questions/" id="copy-field">
          <p class="social-share__text">Copied</p>
        </a>
      </div>
  </div>
</div>



    <div data-class="ib-articles-content" class="ib-articles-content">
        <div class="hidden-xs ibpage__sidebar-container ibpage__sidebar-container--v2 col-sm-3">
          
<nav class="false">
  <ul class="nav">
        <li>
          <a data-nav-accordion-toggler="0" class="ib-articles-content-navigation__accordion-toggler show" title="DBMS Basic Interview Questions">
            DBMS Basic Interview Questions
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/caret-a9af5420aed8ed3f8fe80e510c31872e90d61a21fe8195d355ff46f89d64b97d.svg.gz" />
          </a>
            <ul data-nav-accordion-content="0" class="nav ib-articles-content-navigation__accordion-content show">
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#what-is-dbms-and-its-utility-explain-rdbms-with-examples"
                    title="What is DBMS and what is its utility? Explain RDBMS with examples."
                  >
                    <span class="m-r-5">1.</span>
                    <span>What is DBMS and what is its utility? Explain RDBMS with examples.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#what-is-a-database"
                    title="What is a Database?"
                  >
                    <span class="m-r-5">2.</span>
                    <span>What is a Database?</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#dbms-vs-file-system"
                    title="Mention the issues with traditional file-based systems that make DBMS a better choice?"
                  >
                    <span class="m-r-5">3.</span>
                    <span>Mention the issues with traditional file-based systems that make DBMS a better choice?</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#dbms-advantages"
                    title="Explain a few advantages of a DBMS."
                  >
                    <span class="m-r-5">4.</span>
                    <span>Explain a few advantages of a DBMS.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#dbms-languages"
                    title="Explain different languages present in DBMS."
                  >
                    <span class="m-r-5">5.</span>
                    <span>Explain different languages present in DBMS.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#acid-properties-in-dbms"
                    title="What is meant by ACID properties in DBMS?"
                  >
                    <span class="m-r-5">6.</span>
                    <span>What is meant by ACID properties in DBMS?</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#are-null-values-same-as-blank-space-or-zero"
                    title="Are NULL values in a database the same as that of blank space or zero? "
                  >
                    <span class="m-r-5">7.</span>
                    <span>Are NULL values in a database the same as that of blank space or zero?</span>
                  </a>
                </li>
            </ul>
        </li>
        <li>
          <a data-nav-accordion-toggler="1" class="ib-articles-content-navigation__accordion-toggler " title="Intermediate DBMS Interview Questions">
            Intermediate DBMS Interview Questions
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/caret-a9af5420aed8ed3f8fe80e510c31872e90d61a21fe8195d355ff46f89d64b97d.svg.gz" />
          </a>
            <ul data-nav-accordion-content="1" class="nav ib-articles-content-navigation__accordion-content ">
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#what-is-data-warehousing"
                    title="What is Data Warehousing?"
                  >
                    <span class="m-r-5">1.</span>
                    <span>What is Data Warehousing?</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#levels-of-abstraction-in-dbms"
                    title="Explain different levels of data abstraction in a DBMS."
                  >
                    <span class="m-r-5">2.</span>
                    <span>Explain different levels of data abstraction in a DBMS.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#dbms-entity-relationship-model"
                    title="What is meant by an entity-relationship (E-R) model? Explain the terms Entity, Entity Type, and Entity Set in DBMS."
                  >
                    <span class="m-r-5">3.</span>
                    <span>What is meant by an entity-relationship (E-R) model? Explain the terms Entity, Entity Type, and Entity Set in DBMS.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#types-of-relationship-in-database-table"
                    title="Explain different types of relationships amongst tables in a DBMS."
                  >
                    <span class="m-r-5">4.</span>
                    <span>Explain different types of relationships amongst tables in a DBMS.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#intension-vs-extension"
                    title=" Explain the difference between intension and extension in a database."
                  >
                    <span class="m-r-5">5.</span>
                    <span> Explain the difference between intension and extension in a database.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#delete-vs-truncate-dbms-commands"
                    title="Explain the difference between the DELETE and TRUNCATE command in a DBMS."
                  >
                    <span class="m-r-5">6.</span>
                    <span>Explain the difference between the DELETE and TRUNCATE command in a DBMS.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#difference-between-dbms-shared-and-exclusive-lock"
                    title="What is a lock. Explain the major difference between a shared lock and an exclusive lock during a transaction in a database."
                  >
                    <span class="m-r-5">7.</span>
                    <span>What is a lock. Explain the major difference between a shared lock and an exclusive lock during a transaction in a database.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#normalization-and-denormalization"
                    title="What is meant by normalization and denormalization?"
                  >
                    <span class="m-r-5">8.</span>
                    <span>What is meant by normalization and denormalization?</span>
                  </a>
                </li>
            </ul>
        </li>
        <li>
          <a data-nav-accordion-toggler="2" class="ib-articles-content-navigation__accordion-toggler " title="Advanced DBMS Interview Questions">
            Advanced DBMS Interview Questions
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/caret-a9af5420aed8ed3f8fe80e510c31872e90d61a21fe8195d355ff46f89d64b97d.svg.gz" />
          </a>
            <ul data-nav-accordion-content="2" class="nav ib-articles-content-navigation__accordion-content ">
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#normalization-in-dbms"
                    title="Explain different types of Normalization forms in a DBMS."
                  >
                    <span class="m-r-5">1.</span>
                    <span>Explain different types of Normalization forms in a DBMS.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#dbms-keys"
                    title="Explain different types of keys in a database."
                  >
                    <span class="m-r-5">2.</span>
                    <span>Explain different types of keys in a database.</span>
                  </a>
                </li>
                <li>
                  <a
                    data-class="ib-articles-content-navigation-toggle"
                    class="ib-articles-content-navigation__point"
                    href="#difference-between-two-tier-and-three-tier-database-architecture"
                    title="Explain the difference between a 2-tier and 3-tier architecture in a DBMS."
                  >
                    <span class="m-r-5">3.</span>
                    <span>Explain the difference between a 2-tier and 3-tier architecture in a DBMS.</span>
                  </a>
                </li>
            </ul>
        </li>
    <li>
      <a href="#dbms-mcq" title="DBMS MCQ" class="ib-articles-content-navigation__sidebar-heading-element">
        DBMS MCQ
      </a>
    </li>
  </ul>
</nav>

        </div>
      <div class="ib-scaler-hub__container m-0">
  <div class="ib-scaler-hub__details-modal">
    <div class="ib-sp-mc">
  <div data-testid="backdrop" class="sr-backdrop" data-backdrop-identifier="react"></div>
  <div class="sr-modal" data-modal-identifier="scaler-hub-details-modal">
    <div class="sr-modal__content sr-modal__content--center">
      <div class="sr-modal__header">
        <div class="sr-modal__close" data-modal-close="scaler-hub-details-modal">
          <a class="tappable btn btn-icon btn-inverted" aria-label="close">
            <i class="icon-close"></i>
          </a>
        </div>
      </div>
      <div class="sr-modal__body">
        <div class="ib-sp-mc__details-modal">
          <div class="ib-sp-mc__details-upper-section">
            <div class="ib-sp-mc__details-upper-section-container">
              <div class="ib-sp-mc__details-host-image" data-lazy-update="mc-host-image">

              </div>
              <div class="ib-sp-mc__details-host-event">
                <div class="ib-sp-mc__details-heading">
                  <span data-lazy-update="mc-heading">
                    <!-- HEADING -->
                  </span>
                  <div class="ib-sp-mc__detail-scaler-logo">
                    <span class="logo-text">Powered by</span>
                    <img src="https://assets.interviewbit.com/assets/ibpp/header/scaler-logo-v2-b7646bd1419ce67c96da0d7ba2008664814411ce493778002c5493777b211665.svg.gz" alt="scaler-logo" class="logo-icon">
                  </div>
                </div>
                <div class="ib-sp-mc__details-subheading" data-lazy-update="mc-subheading">
                </div>
                <div class="ib-sp-mc__details-timing-section">
                  <div class="ib-sp-mc__timings-container">
                    <div class="ib-sp-mc__timings-text">
                      <div class="ib-sp-mc__duration">
                        <img class="ib-sp-mc__duration-icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/duration-icon-5ad1591dffbf8345f342bbda4acc72500c222e546cb540651c2356ed6c4c9296.svg.gz" />
                        <div class="ib-sp-mc__duration-text" data-lazy-update="mc-duration">
                          <!-- DURATION -->
                        </div>
                      </div>
                      <div class="ib-sp-mc__start-time">
                        <img class="ib-sp-mc__time-icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/time-icon-bc51adfa39898f83345559ba1ee183c41704a69ddbc85a91b42e0011b9a9d72a.svg.gz" />
                        <div class="ib-sp-mc__start-time-text">
                          <span class="time-text" data-lazy-update="mc-time">
                            <!-- TIME -->
                          </span>
                          <span class="time-text-divider"></span>
                          <span class="date-text" data-lazy-update="mc-date-and-year"> 
                            <!-- DATE AND YEAR-->
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="ib-sp-mc__certificate-detail">
                      <img class="ib-sp-mc__certificate-detail-icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/certificate-icon-f6e98b090858afe6c2ad347aceb10d788110555df7b5b3c81e475f8c25c0f722.svg.gz" />
                      <span class="ib-sp-mc__certificate-detail-text" data-lazy-update="mc-certificate-toggle">
                        Certificate included
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ib-sp-mc__details-event-offerings">
            <div class="ib-sp-mc__details-host">
              <div class="host-detail-header">
                <img class="host-detail-header__icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/header-icon-e1af7099724904d4b6ec273c9d68a87131efe9cabd31589e45bbe5c85d51c08d.svg.gz" />
                <span class="host-detail-header__text">About the Speaker</span>
              </div>
              <div class="host-detail-pointers" data-lazy-update="mc-instructor-details">
                
              </div>
            </div>
            <div class="ib-sp-mc__details-learnings">
              <div class="learnings-detail-header">
                <img class="learnings-detail-header__icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/learning-detail-header-23ea670c24cc165d546f12cb6ecc16e5137114ef73a751699a389e18d89e92b3.svg.gz" />
                <div class="learnings-detail-header__text">What will you Learn?</div>
              </div>
              <div class="host-detail-pointers" data-lazy-update="mc-event-details">
                
              </div>
            </div>
          </div>
          <div class="ib-sp-mc__details-register-action" 
            data-modal-section="scaler-hub-registration" 
            data-visibility="show"
          >
            <div class="ib-sp-mc__consent-toggler" data-class="wa-consent-section">
              <div class="checkbox">
                <input type="checkbox" class="checkbox__input" 
                  value="" 
                  checked="" 
                  data-class="wa-consent-scaler-hub"
                  data-checkbox-toggle="wa-consent"
                >
              </div>
              <span class="ib-sp-mc__consent-toggle-text">
                I wish to receive further updates and confirmation via whatsapp
              </span>
            </div>
            <a class="tappable ib-sp-mc__modal-action-button"
              data-action="one_click_registration"
              data-modal-action="event-details-modal"
              data-btn-placement="with-wa-consent"
            >Register Now</a>
          </div>
          <div class="ib-sp-mc__details-participants">
            <img class="ib-sp-mc__details-participants-icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/participant-logo-1904ad84c3f919b3aa4909ffcb9a648cddf59962c5875fb5c1002b915b0ce71c.svg.gz" />
            <span class="ib-sp-mc__details-participants-text" data-lazy-update="mc-participations">
              <!-- PARTICIPANTS COUNT -->
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</div>

<div id="ib-articles-tab-content" data-class="ib-articles-tab-content" class="ib-articles-tab-content">
  
<div
  data-target-active-class="articles-reading-track"
  class="ib-articles-reading-track"
>
  
  <section class="ibpage__articles">
      <article>
        <p>To consolidate your knowledge and concepts in <a href="https://www.interviewbit.com/blog/characteristics-of-dbms/" target="_blank" rel=""><strong>DBMS</strong></a>, here we've listed the most commonly asked DBMS interview questions to help you ace your interview!</p><p>We have classified them into the following sections:</p><ul>
<li><a href="https://www.interviewbit.com/dbms-interview-questions/#basic" rel="">DBMS Basic Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/dbms-interview-questions/#intermediate" rel="">Intermediate DBMS Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/dbms-interview-questions/#advanced" rel="">Advanced DBMS Interview Questions</a></li>
</ul><div class="raw-html-embed"><ib-youtube width="560" height="315" src="https://www.youtube.com/embed/_O-ckfDUYaA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" loading="lazy" videoid="_O-ckfDUYaA"></ib-youtube></div>
      </article>
    
  <div
    data-scroll-id="0"
    data-scroll-identifier="each-article-section"
    id="basic"
  >
    <h2>DBMS Basic Interview Questions</h2>

        <section class="ibpage-article-header" id="what-is-dbms-and-its-utility-explain-rdbms-with-examples">
          <h3>1. What is DBMS and what is its utility? Explain RDBMS with examples.</h3>
          <article class="ibpage-article">
            <p>DBMS stands for <a href="https://www.interviewbit.com/blog/components-of-dbms/" target="_blank" rel=""><strong>Database Management System</strong></a><strong>,</strong> is a set of applications or programs that enable users to create and maintain a database. DBMS provides a tool or an interface for performing various operations such as inserting, deleting, updating, etc. into a database. It is software that enables the storage of data more compactly and securely as compared to a file-based system. A DBMS system helps a user to overcome problems like data inconsistency, data redundancy, etc. in a database and makes it more convenient and organized to use it. Check this <a href="https://www.scaler.com/topics/dbms/" target="_blank" rel="">DBMS Tutorial by Scaler Topics</a>.</p><p><strong>Examples</strong> of popular DBMS systems are file systems, XML, Windows Registry, etc.</p><figure class="image"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/263/original/dbms.png?1617187391" class="lazy-elem"></figure><p>RDBMS stands for <strong>Relational Database Management System</strong> and was introduced in the 1970s to access and store data more efficiently than DBMS. RDBMS stores data in the form of tables as compared to DBMS which stores data as files. Storing data as rows and columns makes it easier to locate specific values in the database and makes it more efficient as compared to DBMS.</p><p><strong>Examples</strong> of popular RDBMS systems are MySQL, Oracle DB, etc.</p><p><a href="https://www.interviewbit.com/blog/difference-between-dbms-and-rdbms/" target="_blank" rel=""><strong>Learn More</strong></a></p>
          </article>
        </section>
          
  <div class="ib-articles-asset study_plan">
      <img
        src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/mobile/study_plan-bf1728cccc109be1b27549ae18f4571495aaa096b70f313c8232292849f9b07c.svg.gz"
        class="ib-articles-asset__img ib-articles-asset__img--mobile">
    <img
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/desktop/study_plan-fb58ec94dd27940f470d62dee6d85c8161f6afc2b9dcbced18278212ce50b8b9.svg.gz"
      class="ib-articles-asset__img ib-articles-asset__img--study_plan">
    <div
      data-class="ib-articles-asset-content-study_plan"
      class="ib-articles-asset__content"
    >
      <div class="ib-articles-asset__title-container">
        <span class="ib-articles-asset__title"></span>
        <span class="ib-articles-asset__title ib-articles-asset__title--mobile"></span>
        <span class="ib-articles-asset__title ib-articles-asset__title--highlighted">
          Create a free personalised study plan
        </span>
        <span class="ib-articles-asset__title ib-articles-asset__title--mobile ib-articles-asset__title--highlighted">
          Create a FREE custom study plan
        </span>
      </div>
      <div class="ib-articles-asset__description">
        Get into your dream companies with expert guidance
      </div>
      <div class="ib-articles-asset__description ib-articles-asset__description--mobile">
        Get into your dream companies with expert..
      </div>
      <div class="ib-articles-asset__keypoints">
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--right-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/code-99b8ddab28469d3e18187c7e7f62dcf921ece612e63043b7515547d441ea3ebb.svg.gz">
            Real-Life Problems
          </div>
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--right-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/suitcase-7129128344fb59d27c28914ce39a52b40df37b3da954c23330359726019a8fb7.svg.gz">
            Prep for Target Roles
          </div>
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--right-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/pencil-aaf6423aa93927b3965ae3006bc88653f14fee9586297e82fa1153ab475c8459.svg.gz">
            Custom Plan Duration
          </div>
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--right-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/calendar-blank-fd5b0a13bc91a3876224b83db892e456e05f669a469dbe4f3d62a6600836c79c.svg.gz">
            Flexible Plans
          </div>
      </div>
    </div>
      <div class="ib-articles-asset__action">
        <a
          data-class="articles-asset-touchpoint"
          data-gtm-text="Create My Plan"
          data-gtm-section="study_plan"
          href="/interview-preparation-kit/"
          class="ib-articles-asset__btn">
          Create My Plan
          <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/arrow-right-54a813c1b9b6df712c72a314c89081e5a96674ee7ee6454dd7c063d0fe79bb1c.svg.gz">
        </a>
      </div>
  </div>

        <section class="ibpage-article-header" id="what-is-a-database">
          <h3>2. What is a Database?</h3>
          <article class="ibpage-article">
            <p>A Database is an organized, consistent, and logical collection of data that can easily be updated, accessed, and managed. Database mostly contains sets of tables or objects (anything created using create command is a database object) which consist of records and fields. A tuple or a row represents a single entry in a table. An attribute or a column represents the basic units of data storage, which contain information about a particular aspect of the table. DBMS extracts data from a database in the form of queries given by the user. </p>
          </article>
        </section>
        <section class="ibpage-article-header" id="dbms-vs-file-system">
          <h3>3. Mention the issues with traditional file-based systems that make DBMS a better choice?</h3>
          <article class="ibpage-article">
            <p>The absence of indexing in a traditional file-based system leaves us with the only option of scanning the full page and hence making the access of content tedious and super slow. The other issue is redundancy and inconsistency as files have many duplicate and redundant data and changing one of them makes all of them inconsistent. Accessing data is harder in traditional file-based systems because data is unorganized in them.</p><p>Another issue is the lack of concurrency control, which leads to one operation locking the entire page, as compared to DBMS where multiple operations can work on a single file simultaneously.</p><p>Integrity check, data isolation, atomicity, security, etc. are some other issues with traditional file-based systems for which DBMSs have provided some good solutions.</p>
          </article>
        </section>
          <div class="ibpage__download-container">
  <div class="ibpage__download-banner">
    <div class="ibpage__download-text">
      <i class="icon-bell"></i>
      <span>
        You can download a PDF version of Dbms Interview Questions.
      </span>
    </div>
    <div class="ibpage__download-action">
      
<a
  class=" hidden ibpage__downloadable-a ibpage__downloadable download-pdf gtm-track-element"
  data-source="in_content"
  data-gtm-text="Download PDF"
  data-gtm-allowed-actions="click"
  data-gtm-parent="Download PDF"
  data-gtm-section="in_content"
>
  <span>
    <img class="ibpage__downloadable-img" 
      width="24" height="24" 
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/download_v2-f7bcad529b2845c93dddc78cd31acf9ecb098c42854a1757f0f8949950377c02.svg.gz"
    >
  </span>

  <span class=" text">
    Download PDF
  </span>
</a>

<a
  class="auth-trigger gtm-track-element hidden ibpage__downloadable ibpage__downloadable-a enforce-signin "
  style=""
  href=javascript:void(0)
  data-trigger="ibpp-auth-flow"
  data-action="flow-trigger"
  data-target="auth"
  data-mode="login"
  data-gtm-element="Download PDF"
  data-gtm-allowed-actions="click hover"
  data-source="in_content"
>
  
  <span>
    <img
      class="ibpage__downloadable-img" 
      width="24" height="24"
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/download_v2-f7bcad529b2845c93dddc78cd31acf9ecb098c42854a1757f0f8949950377c02.svg.gz"
      data-gtm-section="pdf"
      data-gtm-element="Download PDF"
    >
  </span>
  <span
    class=" text"
    data-gtm-section="pdf"
    data-gtm-text="Download PDF"
    data-gtm-element="Download PDF"
  >
    Download PDF
  </span>

</a>

<a id="auto-download-modal-trigger" data-id="" data-parent="" class="modal-trigger hidden gtm-track-element" data-gtm-allowed-actions="click" data-gtm-text="" data-gtm-type="button" data-gtm-parent="auto-download-modal" data-action="modal-open" data-target="auto-download-modal" data-gtm-tracking-allowed="" onclick="">
  
  &nbsp;

</a>
<div id="auto-download-modal" class="sr-modal  ">
  <div class="sr-modal__content sr-modal__content--center ">
    <div class="sr-modal__body ">
      
  <div class="p-h-10 p-v-10 gtm-track-element">
    <div
      class="row"
      style="justify-content: space-between;  align-items: center;"
    >
      <h3>Download PDF</h3>
      <a class="sr-modal__close" data-target="auto-download-modal" data-action="modal-close">
        <i class="icon-close"></i>
      </a>
    </div>
    <hr />
    <div class="m-v-10 text-center">
      Your requested download is ready!<br>
      Click
      <a
        class="pointer gtm-track-element"
        data-source="in_content"
        data-action="start-download"
        data-gtm-section="pdf"
        data-gtm-element="here"
        data-gtm-text="Download PDF"
        data-gtm-allowed-actions="click"
      >
        here
      </a>
      to download.
    </div>
  </div>

    </div>
  </div>
</div>

    </div>
  </div>
</div>

        <section class="ibpage-article-header" id="dbms-advantages">
          <h3>4. Explain a few advantages of a DBMS.</h3>
          <article class="ibpage-article">
            <p>Following are the few <a href="https://www.interviewbit.com/blog/features-of-dbms/" target="_blank" rel=""><strong>advantages of using a DBMS</strong></a>. </p><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/264/original/dbms-advantages.png?1617187523" class="lazy-elem"></figure><ul>
<li>
<strong>Data Sharing: </strong>Data from a single database can be simultaneously shared by multiple users. Such sharing also enables end-users to react to changes quickly in the database environment.</li>
<li>
<strong>Integrity constraints:</strong> The existence of such constraints allows storing of data in an organized and refined manner.</li>
<li>
<strong>Controlling redundancy in a database:</strong> Eliminates redundancy in a database by providing a mechanism that integrates all the data in a single database.</li>
<li>
<strong>Data Independence:</strong> This allows changing the data structure without altering the composition of any of the executing application programs.</li>
<li>
<strong>Provides backup and recovery facility:</strong> It can be configured to automatically create the backup of the data and restore the data in the database whenever required.</li>
<li>
<strong>Data Security:</strong> DBMS provides the necessary tools to make the storage and transfer of data more reliable and secure. Authentication (the process of giving restricted access to a user) and encryption (encrypting sensitive data such as OTP, credit card information, etc.) are some popular tools used to secure data in a DBMS.</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="dbms-languages">
          <h3>5. Explain different languages present in DBMS.</h3>
          <article class="ibpage-article">
            <p>Following are various languages present in DBMS:</p><ul>
<li>
<strong>DDL(Data Definition Language):</strong>  It contains commands which are required to define the database.<br>E.g., CREATE, ALTER, DROP, TRUNCATE, RENAME, etc.</li>
<li>
<strong>DML(Data Manipulation Language):</strong> It contains commands which are required to manipulate the data present in the database.<br>E.g., SELECT, UPDATE, INSERT, DELETE, etc.</li>
<li>
<strong>DCL(Data Control Language): </strong> It contains commands which are required to deal with the user permissions and controls of the database system.<br>E.g., GRANT and REVOKE.</li>
<li>
<strong>TCL(Transaction Control Language):</strong>  It contains commands which are required to deal with the transaction of the database.<br>E.g., COMMIT, ROLLBACK, and SAVEPOINT.</li>
</ul>
          </article>
        </section>
            <div class="ib-articles-scaler-courses">

  <div class="tracks-page-section-topics-courses m-v-20">
    <h2 class="tracks-page-section-topics-courses__heading">
      <img
        class="tracks-page-section-topics-courses__heading-icon"
        src="https://assets.interviewbit.com/assets/ibpp/interview_guides/monitor-play-834f8d9483abe09ad7c1d6449d2f7d188030cb9cef5137e09a374ce4a61cbbfd.svg.gz"
      >
      Learn via our Video Courses
    </h2>
    <div class="tracks-page-section-topics-courses__carousel-container">
      <div class="tracks-page-section-topics-courses__carousel-nav">
        <button
          data-class="scaler-topics-course-carousel-left"
          class="tracks-page-section-topics-courses__carousel-btn"
        >
          <i class="icon-chevron-left"></i>
        </button>
        <button
          data-class="scaler-topics-course-carousel-right"
          class="tracks-page-section-topics-courses__carousel-btn"
        >
          <i class="icon-chevron-right"></i>
        </button>
      </div>
      <div 
        class="tracks-page-section-topics-courses__container"
        data-class="scaler-topics-course-carousel"
      ></div>
    </div>
  </div>
</div>

        <section class="ibpage-article-header" id="acid-properties-in-dbms">
          <h3>6. What is meant by ACID properties in DBMS?</h3>
          <article class="ibpage-article">
            <p>ACID stands for Atomicity, Consistency, Isolation, and Durability in a DBMS these are those properties that ensure a safe and secure way of sharing data among multiple users.</p><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/265/original/acid_properties.png?1617187570" class="lazy-elem"></figure><ul><li>
<strong>Atomicity</strong>: This property reflects the concept of either executing the whole query or executing nothing at all, which implies that if an update occurs in a database then that update should either be reflected in the whole database or should not be reflected at all.</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/266/original/atomicity-1.png?1617187688" class="lazy-elem"></figure><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/267/original/atomicity-2.png?1617187786" class="lazy-elem"></figure><ul><li>
<strong>Consistency:</strong> This property ensures that the data remains consistent before and after a transaction in a database.</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/219/original/acid-consistency.png?1616074548" class="lazy-elem"></figure><ul><li>
<strong>Isolation: </strong>This property ensures that each transaction is occurring independently of the others. This implies that the state of an ongoing transaction doesn’t affect the state of another ongoing transaction.</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/220/original/acid-isolation.png?1616074608" class="lazy-elem"></figure><ul><li>
<strong>Durability:</strong> This property ensures that the data is not lost in cases of a system failure or restart and is present in the same state as it was before the system failure or restart.</li></ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="are-null-values-same-as-blank-space-or-zero">
          <h3>7. Are NULL values in a database the same as that of blank space or zero? </h3>
          <article class="ibpage-article">
            <p>No, a NULL value is very different from that of zero and blank space as it represents a value that is assigned, unknown, unavailable, or not applicable as compared to blank space which represents a character and zero represents a number.</p><p>Example: NULL value in “number_of_courses” taken by a student represents that its value is unknown whereas 0 in it means that the student hasn’t taken any courses.</p>
          </article>
        </section>
            
  <div class="ib-articles-asset moco">
      <img
        src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/mobile/moco-72ff76f92a9c14ca43d5a250cdfa321edad54c1d46f1a71bdee08a687643b3f5.svg.gz"
        class="ib-articles-asset__img ib-articles-asset__img--mobile">
    <img
      src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/desktop/moco-c7ebe9f8f47748ffae9ae0533cc6e71697ba1e8bb0df4c7c4f481b44b74c5d91.svg.gz"
      class="ib-articles-asset__img ib-articles-asset__img--moco">
    <div
      data-class="ib-articles-asset-content-moco"
      class="ib-articles-asset__content"
    >
      <div class="ib-articles-asset__title-container">
        <span class="ib-articles-asset__title">Advance your career with &nbsp;</span>
        <span class="ib-articles-asset__title ib-articles-asset__title--mobile"></span>
        <span class="ib-articles-asset__title ib-articles-asset__title--highlighted">
          Mock Assessments
        </span>
        <span class="ib-articles-asset__title ib-articles-asset__title--mobile ib-articles-asset__title--highlighted">
          Refine your coding skills with Mock Assessments
        </span>
      </div>
      <div class="ib-articles-asset__description">
        Real-world coding challenges for top company interviews
      </div>
      <div class="ib-articles-asset__description ib-articles-asset__description--mobile">
        Real-world coding challenges for top companies
      </div>
      <div class="ib-articles-asset__keypoints">
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--full-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/code-99b8ddab28469d3e18187c7e7f62dcf921ece612e63043b7515547d441ea3ebb.svg.gz">
            Real-Life Problems
          </div>
          <div class="ib-articles-asset__keypoint ib-articles-asset__keypoint--full-border">
            <img src="https://assets.interviewbit.com/assets/ibpp/interview_guides/assets/layout-alt-39a6b2a56b986dbae952a4e1a7fde9324f0bafeb365b03e4ecb507ff876531e0.svg.gz">
            Detailed reports
          </div>
      </div>
    </div>
      <div class="ibpage__ibanner-action">
        <div
          class="inline-banner__moco-general-test"
          data-gtm-sub-product="moco_banners"
          data-gtm-section="inline-ribbon"
        >
          <!-- DYNAMICALLY ANCHOR TAG OR DIV TAG WILL BE APPENDED -->
        </div>
      </div>
  </div>


  </div>
  <div
    data-scroll-id="1"
    data-scroll-identifier="each-article-section"
    id="intermediate"
  >
    <h2>Intermediate DBMS Interview Questions</h2>

        <section class="ibpage-article-header" id="what-is-data-warehousing">
          <h3>1. What is Data Warehousing?</h3>
          <article class="ibpage-article">
            <p>The process of collecting, extracting, transforming, and loading data from multiple sources and storing them in one database is known as <a href="https://www.interviewbit.com/data-warehouse-interview-questions/" target="_blank" rel=""><strong>data warehousing</strong></a>. A data warehouse can be considered as a central repository where data flows from transactional systems and other relational databases and is used for data analytics. A data warehouse comprises a wide variety of an organization’s historical data that supports the decision-making process in an organization.</p><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/268/original/data_warehousing.png?1617187867" class="lazy-elem"></figure>
          </article>
        </section>
        <section class="ibpage-article-header" id="levels-of-abstraction-in-dbms">
          <h3>2. Explain different levels of data abstraction in a DBMS.</h3>
          <article class="ibpage-article">
            <p>The process of hiding irrelevant details from users is known as data abstraction. Data abstraction can be divided into 3 levels:</p><figure class="image image_resized" style="width:50%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/223/original/levels_of_abstraction.png?1616075395" class="lazy-elem"></figure><ul>
<li>
<strong>Physical Level:</strong>  it is the lowest level and is managed by DBMS. This level consists of data storage descriptions and the details of this level are typically hidden from system admins, developers, and users.</li>
<li>
<strong>Conceptual or Logical level:</strong>  it is the level on which developers and system admins work and it determines what data is stored in the database and what is the relationship between the data points.</li>
<li>
<strong>External or View level:</strong> it is the level that describes only part of the database and hides the details of the table schema and its physical storage from the users. The result of a query is an example of View level data abstraction.  A view is a virtual table created by selecting fields from one or more tables present in the database.</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="dbms-entity-relationship-model">
          <h3>3. What is meant by an entity-relationship (E-R) model? Explain the terms Entity, Entity Type, and Entity Set in DBMS.</h3>
          <article class="ibpage-article">
            <p>An <a href="https://www.interviewbit.com/blog/er-model-in-dbms/" target="_blank" rel=""><strong>entity-relationship model</strong></a> is a diagrammatic approach to a database design where real-world objects are represented as entities and relationships between them are mentioned.</p><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/269/original/E_R_Model.png?1617187943" class="lazy-elem"></figure><ul>
<li>
<strong>Entity:</strong> An entity is defined as a real-world object having attributes that represent characteristics of that particular object. For example, a student, an employee, or a teacher represents an entity.</li>
<li>
<strong>Entity Type:</strong> An entity type is defined as a collection of entities that have the same attributes. One or more related tables in a database represent an entity type. Entity type or attributes can be understood as a characteristic which uniquely identifies the entity.  For example, a student represents an entity that has attributes such as student_id, student_name, etc.</li>
<li>
<strong>Entity Set:</strong> An entity set can be defined as a set of all the entities present in a specific entity type in a database. For example, a set of all the students, employees, teachers, etc. represent an entity set.</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="types-of-relationship-in-database-table">
          <h3>4. Explain different types of relationships amongst tables in a DBMS.</h3>
          <article class="ibpage-article">
            <p>Following are different types of relationship amongst tables in a DBMS system:</p><ul><li>
<strong>One to One Relationship: </strong> This type of relationship is applied when a particular row in table X is linked to a singular row in table Y.</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/270/original/1_to_1.png?1617188060" class="lazy-elem"></figure><ul><li>
<strong>One to Many Relationship:</strong> This type of relationship is applied when a single row in table X is related to many rows in table Y.</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/271/original/1_to_n.png?1617188084" class="lazy-elem"></figure><ul><li>
<strong>Many to Many Relationship: </strong>This type of relationship is applied when multiple rows in table X can be linked to multiple rows in table Y.</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/272/original/m_to_m.png?1617188110" class="lazy-elem"></figure><ul><li>
<strong>Self Referencing Relationship: </strong>This type of relationship is applied when a particular row in table X is associated with the same table.</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/273/original/self_referencing.png?1617188132" class="lazy-elem"></figure>
          </article>
        </section>
        <section class="ibpage-article-header" id="intension-vs-extension">
          <h3>5.  Explain the difference between intension and extension in a database.</h3>
          <article class="ibpage-article">
            <p>Following is the major difference between intension and extension in a database:</p><ul>
<li>
<strong>Intension:</strong> Intension or popularly known as database schema is used to define the description of the database and is specified during the design of the database and mostly remains unchanged.</li>
<li>
<strong>Extension:</strong> Extension on the other hand is the measure of the number of tuples present in the database at any given point in time. The extension of a database is also referred to as the snapshot of the database and its value keeps changing as and when the tuples are created, updated, or destroyed in a database.</li>
</ul>
          </article>
        </section>
            <div
  data-class="ib-promotion-scaler-app"
  data-promotion-placement="reading-track"
>
</div>

<link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/packs/css/frontend/interviewbit~6f5df9fb.c31445.css" defer="defer" />


        <section class="ibpage-article-header" id="delete-vs-truncate-dbms-commands">
          <h3>6. Explain the difference between the DELETE and TRUNCATE command in a DBMS.</h3>
          <article class="ibpage-article">
            <p><strong>DELETE command: </strong>this command is needed to delete rows from a table based on the condition provided by the WHERE clause.</p><ul>
<li>It deletes only the rows which are specified by the WHERE clause.</li>
<li>It can be rolled back if required.</li>
<li>It maintains a log to lock the row of the table before deleting it and hence it’s slow.</li>
</ul><p><strong>TRUNCATE command:</strong> this command is needed to remove complete data from a table in a database. It is like a DELETE command which has no WHERE clause.</p><ul>
<li>It removes complete data from a table in a database.</li>
<li>It can't be rolled back even if required. ( truncate can be rolled back in some databases depending on their version but it can be tricky and can lead to data loss). Check this <a href="https://codingsight.com/rollback-truncate-in-sql-server/" target="_blank" rel="noopener noreferrer nofollow">link</a> for more details</li>
<li>It doesn’t maintain a log and deletes the whole table at once and hence it’s fast.</li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="difference-between-dbms-shared-and-exclusive-lock">
          <h3>7. What is a lock. Explain the major difference between a shared lock and an exclusive lock during a transaction in a database.</h3>
          <article class="ibpage-article">
            <p>A database lock is a mechanism to protect a shared piece of data from getting updated by two or more database users at the same time. When a single database user or session has acquired a lock then no other database user or session can modify that data until the lock is released.</p><ul>
<li>
<strong>Shared Lock: </strong>A shared lock is required for reading a data item and many transactions may hold a lock on the same data item in a shared lock. Multiple transactions are allowed to read the data items in a shared lock.</li>
<li>
<strong>Exclusive lock:</strong> An exclusive lock is a lock on any transaction that is about to perform a write operation. This type of lock doesn’t allow more than one transaction and hence prevents any inconsistency in the database. </li>
</ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="normalization-and-denormalization">
          <h3>8. What is meant by normalization and denormalization?</h3>
          <article class="ibpage-article">
            <p><a href="https://www.scaler.com/topics/normalization-in-dbms/" target="_blank" rel=""><strong>Normalization</strong></a> is a process of reducing redundancy by organizing the data into multiple tables. Normalization leads to better usage of disk spaces and makes it easier to maintain the integrity of the database.  </p><p><strong>Denormalization</strong> is the reverse process of normalization as it combines the tables which have been normalized into a single table so that data retrieval becomes faster. JOIN operation allows us to create a denormalized form of the data by reversing the normalization. </p>
          </article>
        </section>

  </div>
  <div
    data-scroll-id="2"
    data-scroll-identifier="each-article-section"
    id="advanced"
  >
    <h2>Advanced DBMS Interview Questions</h2>

        <section class="ibpage-article-header" id="normalization-in-dbms">
          <h3>1. Explain different types of Normalization forms in a DBMS.</h3>
          <article class="ibpage-article">
            <p>Following are the major normalization forms in a DBMS:</p><figure class="image image_resized" style="width:75%;"><img data-src="https://d3n0h9tb65y8q.cloudfront.net/public_assets/assets/000/002/819/original/normalization_forms.png?1645074158" class="lazy-elem"></figure><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/275/original/normalization_ex.png?1617188308" class="lazy-elem"></figure><p><strong><u>Considering the above Table-1 as the reference example for understanding different normalization forms.</u></strong></p><ul><li>1NF: It is known as the first normal form and is the simplest type of normalization that you can implement in a database. A table to be in its first normal form should satisfy the following conditions:<ul>
<li>Every column must have a single value and should be atomic.</li>
<li>Duplicate columns from the same table should be removed.</li>
<li>Separate tables should be created for each group of related data and each row should be identified with a unique column.</li>
</ul>
</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/276/original/1NF.png?1617188352" class="lazy-elem"></figure><p><i><strong><u>Table-1 converted to 1NF form</u></strong></i></p><ul><li>
<strong>2NF: </strong>It is known as the second normal form. A table to be in its second normal form should satisfy the following conditions:<ul>
<li>The table should be in its 1NF i.e. satisfy all the conditions of 1NF.</li>
<li>Every non-prime attribute of the table should be fully functionally dependent on the primary key i.e. every non-key attribute should be dependent on the primary key in such a way that if any key element is deleted then even the non_key element will be saved in the database.</li>
</ul>
</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/277/original/2NF.png?1617188407" class="lazy-elem"></figure><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/278/original/2NF-02.png?1617188442" class="lazy-elem"></figure><p><i><strong><u>Breaking Table-1 into 2 different tables to move it to 2NF.</u></strong></i></p><ul><li>3NF: It is known as the third normal form. A table to be in its third normal form should satisfy the following conditions:<ul>
<li>The table should be in its 2NF i.e. satisfy all the conditions of 2NF.</li>
<li>There is no transitive functional dependency of one attribute on any attribute in the same table.</li>
</ul>
</li></ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/279/original/3NF.png?1617188565" class="lazy-elem"></figure><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/280/original/3NF-01.png?1617188616" class="lazy-elem"></figure><figure class="image image_resized" style="width:50%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/281/original/3NF-02.png?1617188646" class="lazy-elem"></figure><p><i><strong><u>Breaking Table-1 into 3 different tables to move it to 3NF. </u></strong></i></p><ul><li>
<strong>BCNF:</strong> BCNF stands for <a href="https://www.scaler.com/topics/bcnf-in-dbms/" target="_blank" rel="">Boyce-Codd Normal Form</a> and is an advanced form of 3NF. It is also referred to as 3.5NF for the same reason. A table to be in its BCNF normal form should satisfy the following conditions:<ul>
<li>The table should be in its 3NF i.e. satisfy all the conditions of 3NF.</li>
<li>For every functional dependency of any attribute A on B<br>(A-&gt;B), A should be the super key of the table. It simply implies that A can’t be a non-prime attribute if B is a prime attribute.</li>
</ul>
</li></ul>
          </article>
        </section>
        <section class="ibpage-article-header" id="dbms-keys">
          <h3>2. Explain different types of keys in a database.</h3>
          <article class="ibpage-article">
            <p>There are mainly 7 types of keys in a database:</p><ul>
<li>
<strong>Candidate Key:</strong> The candidate key represents a set of properties that can uniquely identify a table. Each table may have multiple candidate keys. One key amongst all candidate keys can be chosen as a primary key. In the below example since studentId and firstName can be considered as a Candidate Key since they can uniquely identify every tuple.</li>
<li>
<strong>Super Key:</strong> The super key defines a set of attributes that can uniquely identify a tuple. Candidate key and primary key are subsets of the super key, in other words, the super key is their superset.</li>
</ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/282/original/db_keys.png?1617188783" class="lazy-elem"></figure><ul>
<li>
<strong>Primary Key:</strong> The primary key defines a set of attributes that are used to uniquely identify every tuple. In the below example studentId and firstName are candidate keys and any one of them can be chosen as a Primary Key. In the given example studentId is chosen as the primary key for the student table.</li>
<li>
<strong>Unique Key:</strong> The unique key is very similar to the primary key except that primary keys don’t allow NULL values in the column but unique keys allow them. So essentially unique keys are primary keys with NULL values.</li>
<li>
<strong>Alternate Key:</strong> All the candidate keys which are not chosen as primary keys are considered as alternate Keys. In the below example, firstname and lastname are alternate keys in the database.</li>
<li>
<strong>Foreign Key:</strong>  The foreign key defines an attribute that can only take the values present in one table common to the attribute present in another table. In the below example courseId from the Student table is a foreign key to the Course table, as both, the tables contain courseId as one of their attributes.</li>
<li>
<strong>Composite Key:</strong>  A composite key refers to a combination of two or more columns that can uniquely identify each tuple in a table. In the below example the studentId and firstname can be grouped to uniquely identify every tuple in the table.</li>
</ul><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/240/original/relationship_between_keys.png?1616078153" class="lazy-elem"></figure>
          </article>
        </section>
        <section class="ibpage-article-header" id="difference-between-two-tier-and-three-tier-database-architecture">
          <h3>3. Explain the difference between a 2-tier and 3-tier architecture in a DBMS.</h3>
          <article class="ibpage-article">
            <p>The <strong>2-tier architecture</strong> refers to the client-server architecture in which applications at the client end directly communicate with the database at the server end without any middleware involved.<br><strong>Example</strong> – Contact Management System created using MS-Access or Railway Reservation System, etc.</p><figure class="image image_resized" style="width:50%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/283/original/2_tier.png?1617188844" class="lazy-elem"></figure><p style="text-align:center;"><i><strong><u>The above picture represents a 2-tier architecture in a DBMS.</u></strong></i></p><p>The <strong>3-tier architecture</strong> contains another layer between the client and the server to provide GUI to the users and make the system much more secure and accessible. In this type of architecture, the application present on the client end interacts with an application on the server end which further communicates with the database system.</p><p><strong>Example</strong> – Designing registration form which contains a text box, label, button or a large website on the Internet, etc.</p><figure class="image image_resized" style="width:75%;"><img data-src="https://s3.ap-south-1.amazonaws.com/myinterviewtrainer-domestic/public_assets/assets/000/000/284/original/3_tier.png?1617188871" class="lazy-elem"></figure><p style="text-align:center;"><i><strong><u>The above picture represents a 3-tier architecture in a DBMS.</u></strong></i></p><p><i><strong><u>Recommended Tutorials:</u></strong></i></p><ul>
<li><a href="https://www.interviewbit.com/dbms-mcq/" target="_blank" rel="">DBMS MCQ with Answers</a></li>
<li><a href="https://www.interviewbit.com/blog/dbms-architecture/" target="_blank" rel="">DBMS Architecture</a></li>
<li><a href="https://www.interviewbit.com/blog/applications-of-dbms/" target="_blank" rel="">Top Applications of DBMS</a></li>
<li><a href="https://www.interviewbit.com/sql-interview-questions/" rel="">SQL Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/sql-server-interview-questions/" rel="">SQL Server Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/sql-query-interview-questions/" target="_blank" rel="">SQL Queries Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/mysql-interview-questions/" rel="">MySQL Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/mongodb-interview-questions/" rel="">MongoDB Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/pl-sql-interview-questions/" target="_blank" rel="">PL SQL Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/database-testing-interview-questions/" target="_blank" rel="">Database Testing Interview Questions</a></li>
<li><a href="https://www.interviewbit.com/blog/file-system-vs-dbms/" target="_blank" rel="">File System vs DBMS</a></li>
<li><a href="https://www.interviewbit.com/technical-interview-questions/" target="_blank" rel="">Interview Preparation Guide</a></li>
</ul>
          </article>
        </section>

  </div>

<script>
  window.__INTERVIEWBIT__.should_run_article_experiment = true
</script>

  </section>
</div>

  
<script>
  window.__INTERVIEWBIT__ = {
    ...window.__INTERVIEWBIT__,
    sectionalProblems: {}
  }
</script>

  
  <div
    data-target-active-class="articles-mcqs"
    class="ib-articles-mcqs"
  >
      <section class="ibpage-problems" id="dbms-mcq">
        
<h2>DBMS MCQ</h2>

  <section class="ibpage-problems__item" id="interviewbit-question-acf3">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">1.</span>
      <div>
        <p>An entity set is represented by what in an E-R diagram?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="0"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13158" id="p_13158_a_Circle" value="">
        <label class="form-check__label form-check__label--v2" for="p_13158_a_Circle">
          Circle
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="0"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13158" id="p_13158_a_Rectangle" value="">
        <label class="form-check__label form-check__label--v2" for="p_13158_a_Rectangle">
          Rectangle
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="0"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13158" id="p_13158_a_Ellipse" value="">
        <label class="form-check__label form-check__label--v2" for="p_13158_a_Ellipse">
          Ellipse
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="0"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13158" id="p_13158_a_Diamond Box" value="">
        <label class="form-check__label form-check__label--v2" for="p_13158_a_Diamond Box">
          Diamond Box
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-24cd">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">2.</span>
      <div>
        <p>A record in a relational DBMS is also known as:</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="1"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13159" id="p_13159_a_Attribute" value="">
        <label class="form-check__label form-check__label--v2" for="p_13159_a_Attribute">
          Attribute
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="1"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13159" id="p_13159_a_Tuple" value="">
        <label class="form-check__label form-check__label--v2" for="p_13159_a_Tuple">
          Tuple
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="1"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13159" id="p_13159_a_Relation" value="">
        <label class="form-check__label form-check__label--v2" for="p_13159_a_Relation">
          Relation
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="1"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13159" id="p_13159_a_Criteria" value="">
        <label class="form-check__label form-check__label--v2" for="p_13159_a_Criteria">
          Criteria
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-349c">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">3.</span>
      <div>
        <p>What does ODBC in a database stand for:</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="2"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13160" id="p_13160_a_Oral Database Connectivity" value="">
        <label class="form-check__label form-check__label--v2" for="p_13160_a_Oral Database Connectivity">
          Oral Database Connectivity
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="2"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13160" id="p_13160_a_Oracle Database Connectivity" value="">
        <label class="form-check__label form-check__label--v2" for="p_13160_a_Oracle Database Connectivity">
          Oracle Database Connectivity
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="2"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13160" id="p_13160_a_Open Database Connectivity" value="">
        <label class="form-check__label form-check__label--v2" for="p_13160_a_Open Database Connectivity">
          Open Database Connectivity
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="2"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13160" id="p_13160_a_Object Database Connectivity" value="">
        <label class="form-check__label form-check__label--v2" for="p_13160_a_Object Database Connectivity">
          Object Database Connectivity
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-8083">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">4.</span>
      <div>
        <p>Which of the following represents a one-to-many relationship?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="3"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13161" id="p_13161_a_Many teachers have one class" value="">
        <label class="form-check__label form-check__label--v2" for="p_13161_a_Many teachers have one class">
          Many teachers have one class
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="3"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13161" id="p_13161_a_Many teachers have many classes" value="">
        <label class="form-check__label form-check__label--v2" for="p_13161_a_Many teachers have many classes">
          Many teachers have many classes
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="3"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13161" id="p_13161_a_One teacher has many classes" value="">
        <label class="form-check__label form-check__label--v2" for="p_13161_a_One teacher has many classes">
          One teacher has many classes
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="3"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13161" id="p_13161_a_One teacher has one class" value="">
        <label class="form-check__label form-check__label--v2" for="p_13161_a_One teacher has one class">
          One teacher has one class
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-879d">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">5.</span>
      <div>
        <p>Which of the following contains information about the data stored in a DBMS?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="4"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13162" id="p_13162_a_Directory" value="">
        <label class="form-check__label form-check__label--v2" for="p_13162_a_Directory">
          Directory
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="4"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13162" id="p_13162_a_Sub Data" value="">
        <label class="form-check__label form-check__label--v2" for="p_13162_a_Sub Data">
          Sub Data
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="4"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13162" id="p_13162_a_Warehouse" value="">
        <label class="form-check__label form-check__label--v2" for="p_13162_a_Warehouse">
          Warehouse
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="4"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13162" id="p_13162_a_Meta Data" value="">
        <label class="form-check__label form-check__label--v2" for="p_13162_a_Meta Data">
          Meta Data
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-55d2">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">6.</span>
      <div>
        <p>Which of the following does DBA stand for?</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="5"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13163" id="p_13163_a_Data Administrator" value="">
        <label class="form-check__label form-check__label--v2" for="p_13163_a_Data Administrator">
          Data Administrator
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="5"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13163" id="p_13163_a_Database Administrator" value="">
        <label class="form-check__label form-check__label--v2" for="p_13163_a_Database Administrator">
          Database Administrator
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="5"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13163" id="p_13163_a_Data Bank Administrator" value="">
        <label class="form-check__label form-check__label--v2" for="p_13163_a_Data Bank Administrator">
          Data Bank Administrator
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="5"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13163" id="p_13163_a_None of the above" value="">
        <label class="form-check__label form-check__label--v2" for="p_13163_a_None of the above">
          None of the above
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>
  <section class="ibpage-problems__item" id="interviewbit-question-462e">
    <div class="ibpage-problems__header ibpage-problems__header--v2">
      <span class="m-r-5 h3">7.</span>
      <div>
        <p> In a DBMS, TCL means:</p>
      </div>
    </div>

    <div class="ibpage-problems__options ibpage-problems__options--v2">
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="6"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13164" id="p_13164_a_Ternary Control Language" value="">
        <label class="form-check__label form-check__label--v2" for="p_13164_a_Ternary Control Language">
          Ternary Control Language
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="6"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13164" id="p_13164_a_Transmission Control Language" value="">
        <label class="form-check__label form-check__label--v2" for="p_13164_a_Transmission Control Language">
          Transmission Control Language
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="false"
        data-problem-index="6"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13164" id="p_13164_a_Transaction Central Language" value="">
        <label class="form-check__label form-check__label--v2" for="p_13164_a_Transaction Central Language">
          Transaction Central Language
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
      <div 
        class="form-check gtm-track-element form-check--v2"
        data-correct="true"
        data-problem-index="6"
      >
        <input class="form-check__input form-check__input--v2" type="radio" name="p_13164" id="p_13164_a_Transaction Control Language" value="">
        <label class="form-check__label form-check__label--v2" for="p_13164_a_Transaction Control Language">
          Transaction Control Language
        </label>
          <img
            class="form-check__icon form-check__icon--success"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/green-check-99d545a1dcb848c7091601c1fd4db93c999464c9bf455b9bd01bc6430fc0b31c.svg.gz"
          />
          <img
            class="form-check__icon form-check__icon--error"
            src="https://assets.interviewbit.com/assets/ibpp/interview_guides/cross-616d53c8a18ddd89009f8e6f794dacb2f53684c574b98b2238a78edece4dd588.svg.gz"
          />
      </div>
    </div>

  </section>

      </section>
  </div>

</div>

    </div>
  

<div class="ib-cms__mc-widget hide" data-class="ib-cms-mc-widget">
  <div class="ib-cms__mc-widget-expand" data-class="ib-cms-mc-trigger">
    <img class="ib-cms__mc-widget-expand-icon" src="https://assets.interviewbit.com/assets/ibpp/interview_guides/scholar-2fda88467222e9cac399ac611c54199f51c587319403f06c29bb15104a1dccf1.svg.gz" >
    <span class="ib-cms__mc-widget-expand-text" id="mc-compressed-heading">Excel at your interview with Masterclasses</span>
    <span class="ib-cms__mc-widget-expand-trigger" id="mc-compressed-trigger-heading">
      Know More
      <span class="icon-chevron-up"></span>
    </span>
  </div>
  <div class="ib-cms__mc-layout hide" data-class="ib-cms-mc-layout">
    <i class="icon-close" data-class="ib-cms-mc-layout-close"></i>
    <div data-class="ib-cms-mc-details" class="ibpp-reusable-components">
    <div class="ib-cms__mc-instructor-section">
  <div class="ib-cms__mc-instructor" data-lazy-population="ib-cms-mc-instructor-image">
    <div class="ib-cms__mc-instructor-image"></div>
  </div>
  <div class="ib-cms__mc-text">
    <div class="ib-cms__mc-title-text">
      <span class="ib-cms__mc-title-heading-text" data-lazy-population="ib-cms-mc-heading">
        <!-- DYNAMICALLY VIA JS-->
      </span>
    </div>
    <div class="ib-cms__mc-title-subtext" data-lazy-population="ib-cms-mc-subheading">
      <!-- DYNAMICALLY VIA JS-->
    </div>
  </div>
</div>

    <div class="ib-cms__mc-details-timing-section">
  <div class="ib-cms__mc-timings-container">
    <div class="ib-cms__mc-timings-text">
      <div class="ib-cms__mc-duration" data-lazy-population="ib-cms-mc-duration-container">
        <img class="ib-cms__mc-duration-icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/duration-icon-5ad1591dffbf8345f342bbda4acc72500c222e546cb540651c2356ed6c4c9296.svg.gz" />
        <div class="ib-cms__mc-duration-text" data-lazy-population="ib-cms-mc-duration">
          <!-- DYNAMICALLY VIA JS-->
        </div>
      </div>
      <div class="ib-cms__mc-start-time">
        <img class="ib-cms__mc-time-icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/time-icon-bc51adfa39898f83345559ba1ee183c41704a69ddbc85a91b42e0011b9a9d72a.svg.gz" />
        <div class="ib-cms__mc-start-time-text">
          <span class="mc-cms-time-text" data-lazy-population="ib-cms-mc-time">
            <!-- DYNAMICALLY VIA JS-->
          </span>
          <span class="mc-cms-time-text-divider"></span>
          <span class="mc-cms-date-text" data-lazy-population="ib-cms-mc-date-and-year"> 
            <!-- DYNAMICALLY VIA JS-->
          </span>
        </div>
      </div>
    </div>
    <div class="ib-cms__mc-certificate-detail">
      <img class="ib-cms__mc-certificate-detail-icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/certificate-icon-f6e98b090858afe6c2ad347aceb10d788110555df7b5b3c81e475f8c25c0f722.svg.gz" />
      <span class="ib-cms__mc-certificate-detail-text">
        Certificate included
      </span>
    </div>
  </div>
</div>
    <div class="ib-cms__mc-details-learnings" data-class="mc-non-registered-state">
  <div class="cms-mc-learnings-detail-header">
    <img class="cms-mc-learnings-detail-header__icon" src="https://assets.interviewbit.com/assets/ibpp/scaler_hub/learning-detail-header-23ea670c24cc165d546f12cb6ecc16e5137114ef73a751699a389e18d89e92b3.svg.gz" />
    <div class="cms-mc-learnings-detail-header__text">What will you Learn?</div>
  </div>
  <div class="cms-mc-host-detail-pointers" data-lazy-population="ib-cms-mc-event-details">
    
  </div>
</div>
    <div class="ib-cms__mc-footer-actions" data-class="mc-non-registered-state">
  <div class="ib-cms__mc-consent-toggler" data-class="wa-consent-section">
    <div class="checkbox">
      <input type="checkbox" class="checkbox__input" 
        value=""
        checked=""
        data-class=""
        data-checkbox-toggle="ib-cms-mc-wa-consent"
      >
    </div>
    <span class="ib-cms__mc-consent-toggle-text">
      I wish to receive further updates and confirmation via whatsapp
    </span>
  </div>
  <a class="tappable ib-cms__mc-modal-action-button" data-class="ib-cms-mc-widget-action-register" id="cms-mc-action-button">
    Register Now For FREE!
  </a>
  <div class="ib-cms__mc-title-scaler-logo">
    Powered By
    <img
      class="ib-cms__mc-title-scaler-logo-image"
      src="https://assets.interviewbit.com/assets/ibpp/header/scaler-logo-v2-b7646bd1419ce67c96da0d7ba2008664814411ce493778002c5493777b211665.svg.gz"
    >
  </div>
</div>

<div class="ib-cms__mc-footer-action hide" data-class="mc-registered-state">
  <div class="ib-cms__mc-registration-successfull" data-class="registration-template">
    <div class="ib-cms__mc-registration-marker">
      <img
        class="ib-cms__mc-registration-marker-icon"
        src="https://assets.interviewbit.com/assets/ibpp/interview_guides/check-circle-6a81cd3114426ae720b2b534665cb738650cf0cdedb285110be1340f9f56f894.svg.gz"
      >
    </div>
    <div class="ib-cms__mc-registration-message">
      You Have Successfully registered!
    </div>
    <div class="ib-cms__mc-registration-wa">
      Join our WhatsApp group for free learning material and session link.
    </div>
  </div>
  <a class="tappable ib-cms__mc-modal-action-button" data-class="ib-cms-mc-widget-action-dynamic" id="cms-mc-action-button">
    <!-- DYNAMICALLY UPDATE ON THE BASIS OF EVENT START TIME AND ENDTIME -->
  </a>
</div>

    </div>
  </div>
</div>

</article>



  <script>
    window.addEventListener('load', function() {
      window.Interviewbit.authFlow();
    });
  </script>



    </div>

    
<div
  data-gtm-element="footer_section"
  data-gtm-allowed-actions="scroll"
  class="gtm-track-element footer"
  id="ibpp_footer"
>
  <div class="footer__wrapper">
    <div class="sr-container">
      <a href="/">
        <img class="footer__brand-icon lazy-elem" data-src="https://assets.interviewbit.com/assets/ibpp/brand-inv-a62b6669d8645925b8094c7322d36b2039344b7af7a6a252a64acd867556b610.svg.gz" />
      </a>
      <div class="footer__content">
          <div class="footer__section footer__brand-section">
            <a 
              href="https://app.scaler.com/N4wL" target="_blank" 
              class="footer__section-app-promotion"
            >
              <div
  data-class="ib-promotion-scaler-app"
  data-promotion-placement="ibpp-footer"
>
</div>




            </a>
            <ul class="footer__items footer__social footer__links">
                <li class="footer__item"><a target="_blank" href="https://www.interviewbit.com/blog/">Blog</li>
                <li class="footer__item"><a target="" href="/discussion/">Community</li>
                <li class="footer__item"><a target="" href="/pages/about_us/">About Us</li>
                <li class="footer__item"><a target="" href="/pages/faq/">FAQ</li>
                <li class="footer__item"><a target="" href="/pages/contact_us/">Contact Us</li>
                <li class="footer__item"><a target="" href="/pages/terms/">Terms</li>
                <li class="footer__item"><a target="" href="/pages/privacy/">Privacy Policy</li>
            </ul>
            <ul class="footer__icons footer__social">
                <li class="footer__icon">
                  <a target="_blank" rel="noopener" href="https://www.instagram.com/interview_bit/">
                    <img alt="instagram-icon" class="lazy-elem" src="https://d2beiqkhq929f0.cloudfront.net/public_assets/assets/000/021/795/original/Instagram.png?1671197017" data-image="footer-social">
                    </img>
                  </a>
                </li>
                <li class="footer__icon">
                  <a target="_blank" rel="noopener" href="https://www.linkedin.com/company/interviewbit/">
                    <img alt="instagram-icon" class="lazy-elem" src="https://d2beiqkhq929f0.cloudfront.net/public_assets/assets/000/021/796/original/LInkedin.png?1671197085" data-image="footer-social">
                    </img>
                  </a>
                </li>
                <li class="footer__icon">
                  <a target="_blank" rel="noopener" href="https://twitter.com/interview_bit/">
                    <img alt="instagram-icon" class="lazy-elem" src="https://d3n0h9tb65y8q.cloudfront.net/public_assets/assets/000/004/096/original/icons8-twitterx_1.png?1699279958" data-image="footer-social">
                    </img>
                  </a>
                </li>
                <li class="footer__icon">
                  <a target="_blank" rel="noopener" href="https://www.facebook.com/interviewbit/">
                    <img alt="instagram-icon" class="lazy-elem" src="https://d2beiqkhq929f0.cloudfront.net/public_assets/assets/000/021/936/original/facebook_icon.svg?1671443880" data-image="footer-social">
                    </img>
                  </a>
                </li>
            </ul>
            <ul class="footer__items footer__practice">
              <li class="m-b-10">
                <ul class="footer__col">
                    <li class="footer__item">
                      <a class="footer__item__link" href="/practice/"><b>Practice Questions</b></a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/programming/">Programming</a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/shell/">Scripting</a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/system-design/">System Design</a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/databases/">Databases</a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/puzzles/">Puzzle</a>
                    </li>
                </ul>
              </li>
              <li class="m-b-10">
                <ul class="footer__col">
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/fast-track/"><b>Fast Track Courses</b></a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/fast-track-python/">Python</a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/fast-track-java/">Java</a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/fast-track-cpp/">C++</a>
                    </li>
                    <li class="footer__item">
                      <a class="footer__item__link" href="/courses/fast-track-js/">Javascript</a>
                    </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="footer__section footer__other-section">
            <ul class="footer__items footer__items--no-margin">
              <li class="footer__item"><b>Online Interviewbit Compilers</b></li>
            </ul>
           <ul class="footer__items footer__items--no-margin footer__interview-links">
                <li class="footer__item">
                  <a class="footer__item__link" href="/online-c-compiler/">Online C Compiler</a>
                </li>
                <li class="footer__item">
                  <a class="footer__item__link" href="/online-cpp-compiler/">Online C++ Compiler</a>
                </li>
                <li class="footer__item">
                  <a class="footer__item__link" href="/online-java-compiler/">Online Java Compiler</a>
                </li>
                <li class="footer__item">
                  <a class="footer__item__link" href="/online-javascript-compiler/">Online Javascript Compiler</a>
                </li>
                <li class="footer__item">
                  <a class="footer__item__link" href="/online-python-compiler/">Online Python Compiler</a>
                </li>
            </ul>
            <br>
            <ul class="footer__items footer__items--no-margin">
              <li class="footer__item"><b>Interview Preparation</b></li>
            </ul>
            <div class="footer-sections">
                
<div class="footer-sections__section">
  <span class="footer-sections__heading">Top Interview Questions</span>

    
<span class="footer-sections__title">Language, Tools &amp; Technologies</span>


<ul class="footer-sections__item-list">
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/java-interview-questions/"
      >
        Java Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/sql-interview-questions/"
      >
        Sql Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/python-interview-questions/"
      >
        Python Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/javascript-interview-questions/"
      >
        Javascript Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/angular-interview-questions/"
      >
        Angular Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/networking-interview-questions/"
      >
        Networking Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/selenium-interview-questions/"
      >
        Selenium Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/data-structure-interview-questions/"
      >
        Data Structure Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/data-science-interview-questions/"
      >
        Data Science Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/system-design-interview-questions/"
      >
        System Design Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/hr-interview-questions/"
      >
        Hr Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/html-interview-questions/"
      >
        Html Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/c-interview-questions/"
      >
        C Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/technical-interview-questions/"
      >
        View All
      </a>
    </li>
</ul>


    
<span class="footer-sections__title">Companies</span>


<ul class="footer-sections__item-list">
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/amazon-interview-questions/"
      >
        Amazon Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/facebook-interview-questions/"
      >
        Facebook Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/google-interview-questions/"
      >
        Google Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/tcs-interview-questions/"
      >
        Tcs Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/accenture-interview-questions/"
      >
        Accenture Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/infosys-interview-questions/"
      >
        Infosys Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/capgemini-interview-questions/"
      >
        Capgemini Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/wipro-interview-questions/"
      >
        Wipro Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/cognizant-interview-questions/"
      >
        Cognizant Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/deloitte-interview-questions/"
      >
        Deloitte Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/zoho-interview-questions/"
      >
        Zoho Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/hcl-interview-questions/"
      >
        Hcl Interview Questions
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/technical-interview-questions/"
      >
        View All
      </a>
    </li>
</ul>



  
<ul class="footer-sections__item-list">
</ul>

</div>

                
<div class="footer-sections__section">
  <span class="footer-sections__heading">Top Articles</span>


  
<ul class="footer-sections__item-list">
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/highest-paying-jobs-in-india/"
      >
        Highest Paying Jobs In India
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/c-projects/"
      >
        Exciting C Projects Ideas With Source Code
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/java-8-features/"
      >
        Top Java 8 Features
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/angular-vs-react/"
      >
        Angular Vs React
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/data-structures-and-algorithms-books/"
      >
        10 Best Data Structures And Algorithms Books
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/c-projects/"
      >
        Exciting C Projects Ideas With Source Code
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/best-full-stack-developer-courses/"
      >
        Best Full Stack Developer Courses
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/best-data-science-courses/"
      >
        Best Data Science Courses
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/python-commands/"
      >
        Python Commands List
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/data-scientist-salary/"
      >
        Data Scientist Salary
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/maximum-subarray-sum/"
      >
        Maximum Subarray Sum   Kadane’s Algorithm
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/blog/"
      >
        View All
      </a>
    </li>
</ul>

</div>

                
<div class="footer-sections__section">
  <span class="footer-sections__heading">Top Cheat Sheet</span>


  
<ul class="footer-sections__item-list">
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/python-cheat-sheet/"
      >
        Python Cheat Sheet
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/cpp-cheat-sheet/"
      >
        C++ Cheat Sheet
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/javascript-cheat-sheet/"
      >
        Javascript Cheat Sheet
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/git-cheat-sheet/"
      >
        Git Cheat Sheet
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/java-cheat-sheet/"
      >
        Java Cheat Sheet
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/technical-interview-questions/"
      >
        View All
      </a>
    </li>
</ul>

</div>

                
<div class="footer-sections__section">
  <span class="footer-sections__heading">Top MCQ</span>


  
<ul class="footer-sections__item-list">
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/java-mcq/"
      >
        Java Mcq
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/data-structure-mcq/"
      >
        Data Structure Mcq
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/dbms-mcq/"
      >
        Dbms Mcq
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/c-programming-mcq/"
      >
        C Programming Mcq
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/cpp-mcq/"
      >
        C++ Mcq
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/python-mcq/"
      >
        Python Mcq
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/javascript-mcq/"
      >
        Javascript Mcq
      </a>
    </li>
    <li class="footer-sections__item">
      <a
        class="footer-sections__item-link"
        href="/technical-interview-questions/"
      >
        View All
      </a>
    </li>
</ul>

</div>

            </div>
          </div>
        </div>
      </div>
  </div>
</div>

    
      

  <script src="https://assets.interviewbit.com/packs/js/vendors~frontend/asse~0ce54b3b.6c70b2.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/vendors~frontend/asse~ba4fdf37.60cbcd.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/vendors~frontend/asse~b046599b.943021.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/vendors~frontend/base.f348d2.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/assessments~~d9242633.07e9dd.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/base~fronten~2a208f12.adedbe.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/base.72fdd4.js"></script>

  <script src="https://assets.interviewbit.com/packs/js/vendors~frontend/ibpp~cb7290a3.f4c3a9.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/common~~f2f13b87.976458.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/intervi~36432ee3.76343e.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/qa.0c0d3d.js"></script>
  

  <script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/tracking.bebb1a.js"></script>

  

  

  <script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/common~~2e7cc86c.bb5e95.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/ib_admin~fro~f2704cda.c86f50.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/common~~3014468f.59fd0a.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/common.d9a0cb.js"></script>
  

  <script src="https://assets.interviewbit.com/packs/js/vendors~frontend/ibpp~be415150.824aba.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/onboarding.e5ec9a.js"></script>


    
  <script>
    window.__INTERVIEWBIT__.articlesVersion = 'v2';
    window.__INTERVIEWBIT__.is_articles_page = true;
  </script>

  



  <!--
  commenting the typeform trigger button to stop the onboardig flow
  <button
    id="ib-typeform"
    data-tf-popup="pdcEGehE"
    data-tf-opacity="100"
    data-tf-size="100"
    data-tf-iframe-props="title=Onboarding experiment"
    data-tf-transitive-search-params
    style="display:none"
  >
    Try me!
  </button>
  -->

  <script>
    window.__INTERVIEWBIT__ = window.__INTERVIEWBIT__ || {};
    window.__INTERVIEWBIT__.context = "DBMS".toLowerCase();
    window.__INTERVIEWBIT__.type = "tech";
    window.__INTERVIEWBIT__.is_articles_page = true;
  </script>


          <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMKZTRG" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

      <script>
    var gaSendMethod = 'send';

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.defer=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-56207880-1', {'siteSpeedSampleRate': 100});
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

    // added so that the files that are common on both ib and scaler can handle their respective ga calls
    window.trackGaEvent = function(...args) {
        const gaArgs = [gaSendMethod, 'event', ...args];
        window.ga(...gaArgs);
        // This is a temporary workaround
        if (gaArgs[1] !== 'exception' && typeof storeEsEvent !== 'undefined') {
            let eventTitle = "";
            for (let i = 2; i < gaArgs.length; i++) {
                if (i != 2)
                    eventTitle = eventTitle + "-";
                eventTitle = eventTitle + gaArgs[i];
            }
            storeEsEvent(eventTitle);
        }
    }
</script>

      
<div id="g_id_onload"
  data-client_id="555034069712-3l6fq4ijgqmbufisic1da21ov6gmh83k.apps.googleusercontent.com"
  data-login_uri="https://www.interviewbit.com/google_one_tap/"
  data-auto_prompt="false"
  data-context="use">
</div>


<script>

  function initializeGSIClient() {
    var logged_in = 'false';
    var scriptLoaded = false;

    var showPrompt = function () {
      var addScript = !scriptLoaded && (true || window.googleOneTapConfig.disableAutoPropmt);

      if (addScript) {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.src = 'https://accounts.google.com/gsi/client';
        s.onload = function () {
          google.accounts.id.prompt();
        }

        document.body.appendChild(s);
        scriptLoaded = true;
      } else {
        google.accounts.id.prompt();
      }
    };

    window.googleOneTapConfig = window.googleOneTapConfig || {};
    window.googleOneTapConfig.showGooglePrompt = showPrompt;

    window.onGoogleLibraryLoad = function () {
      var disableAutoPropmt = true || window.googleOneTapConfig.disableAutoPropmt;

      if (logged_in === 'false' && !disableAutoPropmt) {
        showPrompt();
      }
    };
  }

    document.addEventListener('initializeGSIClient',() => {
      initializeGSIClient();
    })
</script>

    <link rel="stylesheet" media="screen" href="https://assets.interviewbit.com/assets/master/products/ibpp/pages/event-a381fa4e509b856f0705b31f59895b575790c307f1526717f0076939fd0c6c91.css.gz" />

<div class="login-popup login-popup--close">
  <div class="login-popup__close-action login-popup__close-action--hide">
    <i class="icon-close"></i>
  </div>
  <div class="login-popup__container">
    <div class="login-popup__unlock">
      <span>Unlock the complete InterviewBit <br/>experience for free</span>
    </div>
    <div class="login-popup__register">
        Sign Up Using
        <div class="login-popup__auth" >
          <div data-class="auth-triggers">
            <a
              data-class="auth-triggers"
              data-auth-trigger-name="facebook"
              data-auth-trigger-name="google"
              href="/users/auth/facebook/" class="auth-providers__action" 
            >
              <img data-class="auth-triggers" data-gtm-element="facebook" src="https://assets.interviewbit.com/assets/ibpp/onboarding/facebook-ce5cc4f440dc3cb23e5a7bbe9db41da57804f29595c83dd7b603ac79c8034724.svg.gz">
            </a> 
          </div>
          <div data-class="auth-triggers">
            <a
              data-class="auth-triggers"
              data-auth-trigger-name="github"
              href="/users/auth/github/" class="auth-providers__action" 
            >
              <img 
                data-class="auth-triggers"
                data-auth-trigger-name="github"
                src="https://assets.interviewbit.com/assets/ibpp/onboarding/github-e7de13c97e442cae5b2791c0045dbc2a2752b60a246dbbadd15f7e08b58183b9.svg.gz">
            </a>
          </div>
          <div data-class="auth-triggers">
            <a
              data-class="auth-triggers"
              data-auth-trigger-name="google"
              href="/users/auth/google_oauth2/" class="auth-providers__action" 
            >
              <img data-class="auth-triggers"               
                data-auth-trigger-name="google"
                src="https://assets.interviewbit.com/assets/ibpp/onboarding/google-36d787f315453b7698d0f060d807e211b297198aa30b2fa59d2af526d1035e92.svg.gz">
            </a>  
          </div>
          <div>
            <a
              data-class="auth-triggers"
              data-auth-trigger-name="linkedin"
              href="/users/auth/linkedin/" 
              class="auth-providers__action" 
            >
              <img data-class="auth-triggers" data-auth-trigger-name="linkedin"
              src="https://assets.interviewbit.com/assets/ibpp/onboarding/linkedin-eba2839477afbc53e085df2352f4388f3470879ff9e191826d619cac64452992.svg.gz">
            </a>
          </div>
        </div>
    </div>
    <div 
      class="login-popup__trigger"
      data-class="auth-triggers"
      data-auth-trigger-name="email"
      onclick="window.trackGaEvent('full_interstitial', 'link_clicked', 'email')"
    >
      Or use email
    </div>
    <div class="login-popup__bricks-content">
      <div>
        <p>1 Million +</p> 
        Strong Tech Community
      </div>
      <div>
        <p>500 +</p>
        Questions to Practice
      </div>
      <div>
        <p>100 +</p>
        Expert Interview Guides
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" media="none" href="https://assets.interviewbit.com/assets/master/products/ibpp/pages/moco-event-form/index-6a694c9cfe3233951cf15eed3159ebdf7532c6d6ba78476632838116b5e8996d.css.gz" as="style" onload="this.onload=null; this.media=&quot;all&quot;" />


<div id="application-modal" class="sr-modal sp-form-modal marketing-form marketing-form--borderless sp-form-modal__react-instance ">
  <div class="sr-modal__content sr-modal__content--right ">
    <div class="sr-modal__body ">
      
  
<script>
</script>


<!--
  HERE data-form-version signifies version of form being used,
  no api call needed as AB testing results are finalised
-->
<form id="moco-event-register" novalidate data-form-version="v2">
  <div class="moco-event-register row" data-class="moco-event-form" 
    data-gtm-sub-product="Moco"
  >
    <i class="icon-close trigger-moco-form"></i>
    <div class="moco-event-register__form column">
      <div class="version-v1">
        <div class="moco-ib-header moco-ib-header__left">
  <div class="moco-ib-header__section-brand">
    <img class="moco-ib-header__ib-logo" 
      src="https://assets.interviewbit.com/assets/ibpp/moco-images/brand-bcc717b4058fed9412d98ef3bcd39d8f240669d8d79ddc3d331d26fb6529413c.svg.gz">
    <div class = "moco-ib-header__heading">
      <span class="moco-ib-header__test-title">Free Mock Assessment</span>
      <div class="moco-event-register__scaler-logo header">
        <span>Powered By <img src="https://assets.interviewbit.com/assets/ibpp/moco-images/scaler-logo-40ee66d1a8bae334500f41e98b8c773993e98c129873fac82d271135bb9b51eb.svg.gz" /></span>
      </div> 
    </div>
    <div class="version-v2">
      <div class="moco-ib-header__section-test-detail">
      </div>
    </div>
  </div>
  <div class="version-v2">
    <div class="moco-ib-header__section-test-instructions">
    </div>
  </div>
</div>
      </div>
      <div class="version-v2">
        <div class="moco-ib-header">
  <div class="moco-ib-header__heading-right">
    Fill up the details for personalised experience.
  </div>
</div>
      </div>

      <div class="moco-event-register__form-section">
        <div class="moco-event-register__form-section-static">
          <!-- TYPE OF TEST SELECTION BASIC OR ADVANCE -->
          <div class="moco-ib-content moco-ib-content--hide" id="moco-course-selection" >
  <div class="moco-ib-content__container">
    <!-- INNER CONTENT WOULD BE SET , DYNAMICALLY -->
  </div>
</div>

        </div>
        <div class="moco-event-register__form-section-dynamic">
          <!-- THIS PORTION OF FORM WILL KEEP ONCHANGING, VIA JS -->
        </div>

        <div class="moco-event-register__form-section-static">
          <div class="moco-event-register__form-section-static version-v2 assigned-version-v2">
  <div class="row space-between flex-grid">
    <!-- PHONE INPUT WITH COUNTRY CODE -->
    <div class="moco-event-register__phone-input">
      

<div
  class="form-field "
  data-name="phone-number-field"
>
    <div class="form-field__label">
      
<div class="form-label">
  <div class="form-label__text">
    Phone Number
      <span class="form-label__required" data-class="asterisk-mark">*</span>
  </div>
    <div class="form-label__hint">
      OTP will be sent to this number for verification
    </div>
</div>
    </div>
  <div class="form-field__input">
    
  <div class="scaler-event__phone-field-wrap">
    <div class="ib-phone-input scaler-event__phone-input">
      <div class="ib-select ib-phone-input-country has-value is-searchable">
        
<div id="moco-phone-country-code" class="sr-select">
  <div class="sr-select__control ">
    <input data-gtm-element="phone_country_code" 
      autocomplete="none" 
      class="sr-select__input gtm-track-element" 
      name="select-ignore-phone_country_code" 
      type="text"
       
      aria-label= "select phone_country_code"
    />
    <input
      autocomplete="none"
      autocomplete="off"
      class="sr-select__value-input "
      tabindex="-1"
      name="phone_country_code"
      id="input-moco-phone-country-code"
      type="text"
      required
      value="+91"
      aria-label="phone_country_code"
      
      data-is-creatable="false"
    />
    <div class="sr-select__box" id='moco-phone-country-code-select-box'>
      <div data-gtm-element="phone_country_code" class="sr-select__placeholder">
        +91
          <span class="form-label__required" data-class="asterisk-mark">*</span>
      </div>
      <div class="sr-select__value">
      </div>
      <div class="sr-select__loader">
      </div>
      <div class="sr-select__arrow">
        <i class="icon-chevron-down"></i>
      </div>
    </div>
  </div>
  <div class="sr-select__dropdown sr-select__dropdown--bottom">
    <div class="sr-select__hint hidden">
      Type to search
    </div>
    <div class="sr-select__options" role="listbox">
      
          <div class="sr-select__option" role="option" data-value="+91">
            <div class="phone-input__option">
              <div class="phone-input__flag">
                <span class="iti__flag iti__in"> </span>
              </div>
              <div class="phone-input__option-code">
                +91
              </div>
            </div>
          </div>

    </div>
    <div class="sr-select__create-option hidden">
    </div>
    <div class="sr-select__no-options hidden">
      No results found
    </div>
  </div>
</div>
      </div>
      <div class="ib-spacing-horiz" ></div>
      <div class="moco-event-register__material-input-group">
        <input class="ib-phone-input-number moco-event-register__text-input form-input moco-input-normalized_phone" type="tel" id="moco-normalized-phone" name="normalized_phone" required value="">
        <label class="moco-event-register__input-label moco-label-normalized_phone" for="moco-normalized-phone"> Phone Number </label>     
        <span class="moco-event-register__text-input-error-msg moco-error-normalized_phone"></span>
      </div>
    </div>
    <a class="scaler-event__change-phone-number hide" id="change-phone-number">Change Number</a>
  </div>

  </div>
  <div class="form-field__error form-field__error--hidden">
  </div>
</div>
    </div>
    <div class="moco-grad-year layout__content--fit">
    <!-- GRADYEAR SELECT -->
      

<div
  class="form-field moco-event-register__gradyear-input"
  data-name=""
>
    <div class="form-field__label">
      
<div class="form-label">
  <div class="form-label__text">
    Graduation Year
      <span class="form-label__required" data-class="asterisk-mark">*</span>
  </div>
</div>
    </div>
  <div class="form-field__input">
    
  
<div id="moco-event-gradyear" class="sr-select">
  <div class="sr-select__control ">
    <input data-gtm-element="orgyear" 
      autocomplete="none" 
      class="sr-select__input gtm-track-element" 
      name="select-ignore-orgyear" 
      type="text"
       
      aria-label= "select orgyear"
    />
    <input
      autocomplete="none"
      autocomplete="off"
      class="sr-select__value-input "
      tabindex="-1"
      name="orgyear"
      id="input-moco-event-gradyear"
      type="text"
      required
      value=""
      aria-label="orgyear"
      
      data-is-creatable="false"
    />
    <div class="sr-select__box" id='moco-event-gradyear-select-box'>
      <div data-gtm-element="orgyear" class="sr-select__placeholder">
        Graduation Year
          <span class="form-label__required" data-class="asterisk-mark">*</span>
      </div>
      <div class="sr-select__value">
      </div>
      <div class="sr-select__loader">
      </div>
      <div class="sr-select__arrow">
        <i class="icon-chevron-down"></i>
      </div>
    </div>
  </div>
  <div class="sr-select__dropdown sr-select__dropdown--bottom">
    <div class="sr-select__hint hidden">
      Type to search
    </div>
    <div class="sr-select__options" role="listbox">
      
      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="1994"
>
  
        1994

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="1995"
>
  
        1995

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="1996"
>
  
        1996

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="1997"
>
  
        1997

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="1998"
>
  
        1998

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="1999"
>
  
        1999

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2000"
>
  
        2000

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2001"
>
  
        2001

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2002"
>
  
        2002

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2003"
>
  
        2003

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2004"
>
  
        2004

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2005"
>
  
        2005

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2006"
>
  
        2006

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2007"
>
  
        2007

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2008"
>
  
        2008

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2009"
>
  
        2009

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2010"
>
  
        2010

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2011"
>
  
        2011

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2012"
>
  
        2012

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2013"
>
  
        2013

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2014"
>
  
        2014

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2015"
>
  
        2015

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2016"
>
  
        2016

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2017"
>
  
        2017

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2018"
>
  
        2018

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2019"
>
  
        2019

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2020"
>
  
        2020

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2021"
>
  
        2021

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2022"
>
  
        2022

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2023"
>
  
        2023

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2024"
>
  
        2024

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2025"
>
  
        2025

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2026"
>
  
        2026

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2027"
>
  
        2027

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2028"
>
  
        2028

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="2029"
>
  
        2029

</div>
    </div>
    <div class="sr-select__create-option hidden">
    </div>
    <div class="sr-select__no-options hidden">
      No results found
    </div>
  </div>
</div>

  </div>
  <div class="form-field__error form-field__error--hidden">
  </div>
</div>
      <span class="moco-event-register__gradyear-input-error-msg" data-visibility="hide">
      </span>
    </div>
  </div>
  <span class="moco-ib-header__subheading-right moco-event-register__phone-input"> 
    <i> <sup>*</sup>Enter the expected year of graduation if you're student </i>
  </span>
  <!-- COMPANY SELECT -->
  <div class="layout__content--fit">
    

<div
  class="form-field moco-event-register__orgname-input orgname-hide"
  data-name=""
>
    <div class="form-field__label">
      
<div class="form-label">
  <div class="form-label__text">
    Current Employer
  </div>
</div>
    </div>
  <div class="form-field__input">
    
  
<div id="moco-event-orgname" class="sr-select">
  <div class="sr-select__control ">
    <input data-gtm-element="orgname" 
      autocomplete="none" 
      class="sr-select__input gtm-track-element" 
      name="select-ignore-orgname" 
      type="text"
       
      aria-label= "select orgname"
    />
    <input
      autocomplete="none"
      autocomplete="off"
      class="sr-select__value-input "
      tabindex="-1"
      name="orgname"
      id="input-moco-event-orgname"
      type="text"
      
      value=""
      aria-label="orgname"
      
      data-is-creatable="false"
    />
    <div class="sr-select__box" id='moco-event-orgname-select-box'>
      <div data-gtm-element="orgname" class="sr-select__placeholder">
        Company Name
      </div>
      <div class="sr-select__value">
      </div>
      <div class="sr-select__loader">
      </div>
      <div class="sr-select__arrow">
        <i class="icon-chevron-down"></i>
      </div>
    </div>
  </div>
  <div class="sr-select__dropdown sr-select__dropdown--bottom">
    <div class="sr-select__hint hidden">
      Type to search
    </div>
    <div class="sr-select__options" role="listbox">
      

    </div>
    <div class="sr-select__create-option hidden">
    </div>
    <div class="sr-select__no-options hidden">
      No results found
    </div>
  </div>
</div>
  
  </div>
  <div class="form-field__error form-field__error--hidden">
  </div>
</div>
    <span class="moco-event-register__orgname-input-error-msg" data-visibility="hide">
    </span>
  </div>
  <!-- UNIVERSITY SELECT -->
  <div class="layout__content--fit">
    

<div
  class="form-field moco-event-register__university-input university-hide"
  data-name=""
>
    <div class="form-field__label">
      
<div class="form-label">
  <div class="form-label__text">
    College you graduated from
  </div>
</div>
    </div>
  <div class="form-field__input">
    
  
<div id="moco-event-university" class="sr-select">
  <div class="sr-select__control ">
    <input data-gtm-element="university" 
      autocomplete="none" 
      class="sr-select__input gtm-track-element" 
      name="select-ignore-university" 
      type="text"
       
      aria-label= "select university"
    />
    <input
      autocomplete="none"
      autocomplete="off"
      class="sr-select__value-input "
      tabindex="-1"
      name="university"
      id="input-moco-event-university"
      type="text"
      
      value=""
      aria-label="university"
      
      data-is-creatable="false"
    />
    <div class="sr-select__box" id='moco-event-university-select-box'>
      <div data-gtm-element="university" class="sr-select__placeholder">
        College/University Name
      </div>
      <div class="sr-select__value">
      </div>
      <div class="sr-select__loader">
      </div>
      <div class="sr-select__arrow">
        <i class="icon-chevron-down"></i>
      </div>
    </div>
  </div>
  <div class="sr-select__dropdown sr-select__dropdown--bottom">
    <div class="sr-select__hint hidden">
      Type to search
    </div>
    <div class="sr-select__options" role="listbox">
      

    </div>
    <div class="sr-select__create-option hidden">
    </div>
    <div class="sr-select__no-options hidden">
      No results found
    </div>
  </div>
</div>

  </div>
  <div class="form-field__error form-field__error--hidden">
  </div>
</div>
    <span class="moco-event-register__university-input-error-msg" data-visibility="hide">
    </span>
  </div>
  <!-- JOB TITLE SELECT -->
  <div class="layout__content--fit">
    

<div
  class="form-field moco-event-register__job-title-input job-title-hide"
  data-name=""
>
    <div class="form-field__label">
      
<div class="form-label">
  <div class="form-label__text">
    Job Title
  </div>
</div>
    </div>
  <div class="form-field__input">
    
  
<div id="moco-event-job-title" class="sr-select">
  <div class="sr-select__control ">
    <input data-gtm-element="job_title" 
      autocomplete="none" 
      class="sr-select__input gtm-track-element" 
      name="select-ignore-job_title" 
      type="text"
       
      aria-label= "select job_title"
    />
    <input
      autocomplete="none"
      autocomplete="off"
      class="sr-select__value-input "
      tabindex="-1"
      name="job_title"
      id="input-moco-event-job-title"
      type="text"
      
      value=""
      aria-label="job_title"
      
      data-is-creatable="false"
    />
    <div class="sr-select__box" id='moco-event-job-title-select-box'>
      <div data-gtm-element="job_title" class="sr-select__placeholder">
        Job Title
      </div>
      <div class="sr-select__value">
      </div>
      <div class="sr-select__loader">
      </div>
      <div class="sr-select__arrow">
        <i class="icon-chevron-down"></i>
      </div>
    </div>
  </div>
  <div class="sr-select__dropdown sr-select__dropdown--bottom">
    <div class="sr-select__hint hidden">
      Type to search
    </div>
    <div class="sr-select__options" role="listbox">
      
      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Engineering Leadership"
>
  
        Engineering Leadership

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Software Development Engineer (Backend)"
>
  
        Software Development Engineer (Backend)

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Software Development Engineer (Frontend)"
>
  
        Software Development Engineer (Frontend)

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Software Development Engineer (Full Stack)"
>
  
        Software Development Engineer (Full Stack)

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Data Scientist"
>
  
        Data Scientist

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Android Engineer"
>
  
        Android Engineer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="iOS Engineer"
>
  
        iOS Engineer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Devops Engineer"
>
  
        Devops Engineer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Support Engineer"
>
  
        Support Engineer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Research Engineer"
>
  
        Research Engineer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Engineering Intern"
>
  
        Engineering Intern

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="QA Engineer"
>
  
        QA Engineer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Co-founder"
>
  
        Co-founder

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="SDET"
>
  
        SDET

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Product Manager"
>
  
        Product Manager

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Product Designer"
>
  
        Product Designer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Backend Architect"
>
  
        Backend Architect

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Program Manager"
>
  
        Program Manager

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Release Engineer"
>
  
        Release Engineer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Security Leadership"
>
  
        Security Leadership

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Database Administrator"
>
  
        Database Administrator

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Data Analyst"
>
  
        Data Analyst

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=false 
  data-value="Data Engineer"
>
  
        Data Engineer

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=true 
  data-value="Non Coder"
>
  
        Non Coder

</div>      
<div 
  class="sr-select__option" 
  data-gtm-element="option" 
  role="option" 
  data-permanent=true 
  data-value="Other"
>
  
        Other

</div>
    </div>
    <div class="sr-select__create-option hidden">
    </div>
    <div class="sr-select__no-options hidden">
      No results found
    </div>
  </div>
</div>

  </div>
  <div class="form-field__error form-field__error--hidden">
  </div>
</div>
<!-- Other Position -->

    <span class="moco-event-register__job-title-input-error-msg" data-visibility="hide">
    </span>
  </div>
  <div
    class="lazy-recaptcha m-v-10"
    id="ib-moco-lazy-recaptcha"
  ></div>
</div>

          <!-- OTP FORM -->
          
<div class="moco-event-register__otp-form hide">
  <div class="moco-event-register__otp-heading hide"> 
    Please verify your phone number 
  </div>
  <div class="moco-event-register__phone-details">
    <div class="moco-event-register__phone-number-container">
    <!-- WILL HAVE PHONE NUMBER DETAILS -->
      <div class="country-code">
        <!-- COUNTRY CODE -->
      </div>
      <div class="number-value">
        <!-- PHONE NUMBER VALUE -->
      </div>
    </div>
    <div id="moco-event-register-handleback">
      <span data-class="edit-phone-number"> Edit </span>
      <div class="moco-event-register__otp-timer version-v1">
        <!-- OTP TIMER, "30 secs" -->
      </div>
    </div>
  </div>
  <div class="moco-event-register__otp-details">
    <div class="moco-event-register__otp-input">
      <div class="moco-event-register__otp-input-blocks">
          <input type="text" class="otp-value" />
          <input type="text" class="otp-value" />
          <input type="text" class="otp-value" />
          <input type="text" class="otp-value" />
          <input type="text" class="otp-value" />
          <input type="text" class="otp-value" />
      </div>
      <div class="moco-event-register__otp-error">
        <span class="moco-event-register__text-input-error-msg moco-phone-otp-error"></span>
      </div>
    </div>
    <div class="moco-event-register__otp-info">
      <div class="moco-event-register__otp-timer version-v2">
        <!-- OTP TIMER, "30 secs" -->
      </div>
      <div class="moco-event-register__otp-resend">
        Resend OTP
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
      
      <div class="moco-event-register__footer-group">
        <button class="moco-event-register__submit"></button>
        <button class="moco-event-register__skip moco-event-register__skip--disable">
          Skip
          <i class="moco-event-register__right-arrow"></i>
        </button>
        <div class="moco-event-register__steps">
          <div class="moco-event-register__steps-progress"></div>
          <span class="moco-event-register__steps-completed"></span>
        </div>
      </div>
      <div class="moco-event-register__form-terms"> 
        By clicking on Start Test, I agree to be contacted by Scaler in the future.
      </div>
      <div class="moco-event-register__auth-message">
          Already have an account? 
        <span
          class="moco-event-register__auth-message-trigger gtm-track-element" 
          data-gtm-allowed-actions="click"
          data-gtm-element="Moco form login button"
          data-gtm-section="Moco_form"
        > 
          Log in
        </span> 
      </div>
      <div class="moco-event-register__scaler-logo footer">
        <span>Powered By <img src="https://assets.interviewbit.com/assets/ibpp/scaler-logo-0b2789a8342be57762ac2306c5ccb8e34f83fc8152222fbe2736f6ce16d258ca.svg.gz" /></span>
      </div> 
    </div>
    <div class="moco-event-register__banner">
      <div class="moco-event-register__banner-section">
        <span class="version-v2">
          <div class="moco-ib-header moco-ib-header__left">
  <div class="moco-ib-header__section-brand">
    <img class="moco-ib-header__ib-logo" 
      src="https://assets.interviewbit.com/assets/ibpp/moco-images/brand-bcc717b4058fed9412d98ef3bcd39d8f240669d8d79ddc3d331d26fb6529413c.svg.gz">
    <div class = "moco-ib-header__heading">
      <span class="moco-ib-header__test-title">Free Mock Assessment</span>
      <div class="moco-event-register__scaler-logo header">
        <span>Powered By <img src="https://assets.interviewbit.com/assets/ibpp/moco-images/scaler-logo-40ee66d1a8bae334500f41e98b8c773993e98c129873fac82d271135bb9b51eb.svg.gz" /></span>
      </div> 
    </div>
    <div class="version-v2">
      <div class="moco-ib-header__section-test-detail">
      </div>
    </div>
  </div>
  <div class="version-v2">
    <div class="moco-ib-header__section-test-instructions">
    </div>
  </div>
</div>  
        </span>
      </div>
    </div>
  </div>
</form>

<script>
	if(!window.recaptchaSiteKey) {
		window.recaptchaSiteKey = "6Lf3ngcTAAAAAAc199lejBXaJ5ZQbLp6MXHoRgWj"
    function recaptchaError(id) {
			var el = document.getElementById(id)
			el.style.color = 'red';
			el.innerText = 'recaptcha failed to load, please reload';
    }
    window.recaptchaResponseHash = window.recaptchaResponseHash || {}

    function addRecaptcha(id) {
			const el = document.getElementById(id);
			if (!el?.childNodes?.length) {
				if (!window?.recaptchaV2Loaded) {
					const scriptEl = document.createElement('script');
					document.body.appendChild(scriptEl);
					scriptEl.addEventListener('load', () => {
						const recaptchaScripts = Array.from(
							document.scripts
						).filter(
							el => el.src.includes('recaptcha__en')
						)?.[0];
						recaptchaScripts?.addEventListener('load', () => {
							const response = window.grecaptcha?.render(id, {
								sitekey: window.recaptchaSiteKey,
							});
							window.recaptchaResponseHash[id] = response;
							const event = new Event('recaptcha-loaded');
							document.dispatchEvent(event, { bubbles: true });
    					window.recaptchaV2Loaded = true;
						});
					});
					scriptEl.setAttribute(
						'src',
						`https://www.google.com/recaptcha/api.js?render=explicit`,
					);
					scriptEl.setAttribute(
						'onerror',
						`recaptchaError("${id}")`,
					);
				} else {
					const res = window.grecaptcha.render(id, {
						sitekey: window.recaptchaSiteKey,
					});
					window.recaptchaResponseHash[id] = res;
				}
				const event = new Event('recaptcha-loaded');
				document.dispatchEvent(event, { bubbles: true });
			}
    }

    function initialiseRecaptcha() {
			const els = Array.from(document.getElementsByClassName('lazy-recaptcha'));
			els.forEach(el => {
				const {
					id
				} = el;
				el.parentNode.addEventListener('click', () => addRecaptcha(id));
			});
    }
    window.addEventListener('load', () => {
      initialiseRecaptcha()
    })
	}
</script>


  

  <script src="https://assets.interviewbit.com/packs/js/vendors~frontend/asse~9ee18cef.278339.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/vendors~frontend/asse~f1a15526.2a1fdd.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/vendors~frontend/asse~adf69c61.b818a0.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/assessments~~c72beafe.42b0ab.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/assessments~~a3d26db3.c08f4a.chunk.js"></script>
<script src="https://assets.interviewbit.com/packs/js/frontend/ibpp/moco_event.b03fa7.js"></script>



    </div>
  </div>
</div>

<div class="moco-test-confirmation-modal" data-id="moco-test-start-modal" data-visibility="hide">
  <div class="moco-test-start-modal__logo">
    <img class="moco-ib-header__ib-logo" src="https://assets.interviewbit.com/assets/ibpp/moco-images/brand-bcc717b4058fed9412d98ef3bcd39d8f240669d8d79ddc3d331d26fb6529413c.svg.gz">
  </div>
  <div class="moco-test-start-modal__test-name bold h2" data-class="moco-test-name">
  </div>
  <div class="moco-test-start-modal__instructions-heading">
    <b> Instructions from Interviewbit </b>
  </div>
  <div class="moco-test-start-modal__test-content" data-class="moco-test-instructions">
  </div>
  <div class="moco-test-start-modal__redirect-btn h5 cursor" data-class="moco-test-start-handler">
    Start Test
  </div>
</div>

<div data-test-id="moco-form-backdrop" class="moco-form-backdrop"></div>



  </body>
</html>
