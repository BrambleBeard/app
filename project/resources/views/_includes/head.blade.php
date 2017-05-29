<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ Config::get('app.site_title') }}</title>

<meta name="viewport" content="width=device-width">
<meta name="description" content="{{ Config::get('app.site_description') }}">
<link rel="canonical" href="http://bramblebeard.github.io//">

<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Web application to store secret information securely." />
<meta property="og:url" content="http://bramblebeard.github.io/" />
<meta property="og:site_name" content="BrambleBeard" />
<meta property="og:image" content="{{ asset('/assets/ico/favicon.png') }}" />

<link rel="icon" href="{{ asset('/assets/ico/favicon.png') }}">

<link rel="stylesheet" href="{{ asset('/assets/vendor/bulma/css/bulma.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/vendor/fontawesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/custom.min.css') }}">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
