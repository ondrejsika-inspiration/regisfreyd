<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="title" content="{{ $page->meta_title ?? $page->siteTitle }}">
  <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">
  <meta name="author" content="Regis Freyd">
  <link rel="canonical" href="https://www.regisfreyd.com/">
  <link rel="home" href="{{ $page->baseUrl }}">
  <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

  <!-- favicon -->
  <link rel="icon" href="/assets/img/favicon-32.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32.png">

  <!-- meta data -->
  <meta property="og:site_name" content="Regis Freyd" />
  <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ $page->getUrl() }}" />
  <meta property="og:description" content="{{ $page->siteDescription }}" />
  <meta property="twitter:site" content="@djaiss">

  <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

  @stack('meta')

  @if ($page->production)
  <!-- Insert analytics code here -->
  @endif

  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <script language="JavaScript">
    function unScramble(eMail1, eMail2, linkText, subjectText, statusText) {
      var a, b, c, d, e;
      a = eMail1;
      c = linkText;
      b = eMail2.substring(0, eMail2.length - 5);
      if (subjectText != "") {
        d = "?subject=" + escape(subjectText);
      } else {
        d = "";
      }
      if (statusText != "") {
        e = " onMouseOver=\"top.status=\'" + statusText +
          "\'\;return true\;\" onMouseOut=\"top.status=\'\'\;return true\;\"";
      } else {
        e = "";
      }
      document.write("<A HREF=\"mai" + "lto:" + a + "@" + b + d + "\"" + e + ">" + c + "</A>");
    }
  </script>
</head>

<body>
  <main role="main" class="mw6 center mt5 ph3 ph0-ns">
    @yield('body')
  </main>

  <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

  @stack('scripts')
</body>

</html>