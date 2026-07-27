@php
    $siteName = config('app.name', 'Laravel');
    $pageTitle = $seoSetting?->title ?: $siteName;
    $description = $seoSetting?->description;
    $keywords = $seoSetting?->keywords_string;
    $canonicalUrl = $seoSetting?->canonical_url ?: url()->current();
    $ogImage = $seoSetting?->og_image_url;
    $robots = $seoSetting?->robots_content ?: 'index, follow';
@endphp

<title>{{ $pageTitle }}</title>

@if(filled($description))
    <meta name="description" content="{{ $description }}">
@endif

@if(filled($keywords))
    <meta name="keywords" content="{{ $keywords }}">
@endif

<meta name="robots" content="{{ $robots }}">
<link rel="canonical" href="{{ $canonicalUrl }}">

<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:url" content="{{ $canonicalUrl }}">

@if(filled($description))
    <meta property="og:description" content="{{ $description }}">
@endif

@if(filled($ogImage))
    <meta property="og:image" content="{{ $ogImage }}">
@endif

<meta name="twitter:card" content="{{ $seoSetting?->twitter_card ?: 'summary_large_image' }}">
<meta name="twitter:title" content="{{ $pageTitle }}">

@if(filled($description))
    <meta name="twitter:description" content="{{ $description }}">
@endif

@if(filled($ogImage))
    <meta name="twitter:image" content="{{ $ogImage }}">
@endif
