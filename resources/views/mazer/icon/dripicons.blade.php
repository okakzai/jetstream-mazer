@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dripicons</h3>
                <p class="text-subtitle text-muted">Get over 1,000+ icons with Dripicons.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dripicons</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Icon List</h4>
            </div>
            <div class="card-body">
                <ul class="icons">
                    <ul class="glyphs css-mapping">
                        <li>
                            <div class="icon dripicons dripicons-alarm"></div>
                            <input type="text" readonly="readonly" value="alarm">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-align-center"></div>
                            <input type="text" readonly="readonly" value="align-center">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-align-justify"></div>
                            <input type="text" readonly="readonly" value="align-justify">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-align-left"></div>
                            <input type="text" readonly="readonly" value="align-left">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-align-right"></div>
                            <input type="text" readonly="readonly" value="align-right">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-anchor"></div>
                            <input type="text" readonly="readonly" value="anchor">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-archive"></div>
                            <input type="text" readonly="readonly" value="archive">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-arrow-down"></div>
                            <input type="text" readonly="readonly" value="arrow-down">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-arrow-left"></div>
                            <input type="text" readonly="readonly" value="arrow-left">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-arrow-right"></div>
                            <input type="text" readonly="readonly" value="arrow-right">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-arrow-thin-down"></div>
                            <input type="text" readonly="readonly" value="arrow-thin-down">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-arrow-thin-left"></div>
                            <input type="text" readonly="readonly" value="arrow-thin-left">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-arrow-thin-right"></div>
                            <input type="text" readonly="readonly" value="arrow-thin-right">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-arrow-thin-up"></div>
                            <input type="text" readonly="readonly" value="arrow-thin-up">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-arrow-up"></div>
                            <input type="text" readonly="readonly" value="arrow-up">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-article"></div>
                            <input type="text" readonly="readonly" value="article">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-backspace"></div>
                            <input type="text" readonly="readonly" value="backspace">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-basket"></div>
                            <input type="text" readonly="readonly" value="basket">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-basketball"></div>
                            <input type="text" readonly="readonly" value="basketball">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-battery-empty"></div>
                            <input type="text" readonly="readonly" value="battery-empty">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-battery-full"></div>
                            <input type="text" readonly="readonly" value="battery-full">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-battery-low"></div>
                            <input type="text" readonly="readonly" value="battery-low">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-battery-medium"></div>
                            <input type="text" readonly="readonly" value="battery-medium">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-bell"></div>
                            <input type="text" readonly="readonly" value="bell">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-blog"></div>
                            <input type="text" readonly="readonly" value="blog">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-bluetooth"></div>
                            <input type="text" readonly="readonly" value="bluetooth">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-bold"></div>
                            <input type="text" readonly="readonly" value="bold">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-bookmark"></div>
                            <input type="text" readonly="readonly" value="bookmark">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-bookmarks"></div>
                            <input type="text" readonly="readonly" value="bookmarks">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-box"></div>
                            <input type="text" readonly="readonly" value="box">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-briefcase"></div>
                            <input type="text" readonly="readonly" value="briefcase">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-brightness-low"></div>
                            <input type="text" readonly="readonly" value="brightness-low">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-brightness-max"></div>
                            <input type="text" readonly="readonly" value="brightness-max">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-brightness-medium"></div>
                            <input type="text" readonly="readonly" value="brightness-medium">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-broadcast"></div>
                            <input type="text" readonly="readonly" value="broadcast">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-browser"></div>
                            <input type="text" readonly="readonly" value="browser">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-browser-upload"></div>
                            <input type="text" readonly="readonly" value="browser-upload">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-brush"></div>
                            <input type="text" readonly="readonly" value="brush">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-calendar"></div>
                            <input type="text" readonly="readonly" value="calendar">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-camcorder"></div>
                            <input type="text" readonly="readonly" value="camcorder">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-camera"></div>
                            <input type="text" readonly="readonly" value="camera">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-card"></div>
                            <input type="text" readonly="readonly" value="card">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-cart"></div>
                            <input type="text" readonly="readonly" value="cart">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-checklist"></div>
                            <input type="text" readonly="readonly" value="checklist">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-checkmark"></div>
                            <input type="text" readonly="readonly" value="checkmark">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-chevron-down"></div>
                            <input type="text" readonly="readonly" value="chevron-down">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-chevron-left"></div>
                            <input type="text" readonly="readonly" value="chevron-left">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-chevron-right"></div>
                            <input type="text" readonly="readonly" value="chevron-right">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-chevron-up"></div>
                            <input type="text" readonly="readonly" value="chevron-up">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-clipboard"></div>
                            <input type="text" readonly="readonly" value="clipboard">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-clock"></div>
                            <input type="text" readonly="readonly" value="clock">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-clockwise"></div>
                            <input type="text" readonly="readonly" value="clockwise">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-cloud"></div>
                            <input type="text" readonly="readonly" value="cloud">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-cloud-download"></div>
                            <input type="text" readonly="readonly" value="cloud-download">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-cloud-upload"></div>
                            <input type="text" readonly="readonly" value="cloud-upload">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-code"></div>
                            <input type="text" readonly="readonly" value="code">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-contract"></div>
                            <input type="text" readonly="readonly" value="contract">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-contract-2"></div>
                            <input type="text" readonly="readonly" value="contract-2">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-conversation"></div>
                            <input type="text" readonly="readonly" value="conversation">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-copy"></div>
                            <input type="text" readonly="readonly" value="copy">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-crop"></div>
                            <input type="text" readonly="readonly" value="crop">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-cross"></div>
                            <input type="text" readonly="readonly" value="cross">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-crosshair"></div>
                            <input type="text" readonly="readonly" value="crosshair">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-cutlery"></div>
                            <input type="text" readonly="readonly" value="cutlery">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-device-desktop"></div>
                            <input type="text" readonly="readonly" value="device-desktop">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-device-mobile"></div>
                            <input type="text" readonly="readonly" value="device-mobile">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-device-tablet"></div>
                            <input type="text" readonly="readonly" value="device-tablet">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-direction"></div>
                            <input type="text" readonly="readonly" value="direction">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-disc"></div>
                            <input type="text" readonly="readonly" value="disc">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-document"></div>
                            <input type="text" readonly="readonly" value="document">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-document-delete"></div>
                            <input type="text" readonly="readonly" value="document-delete">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-document-edit"></div>
                            <input type="text" readonly="readonly" value="document-edit">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-document-new"></div>
                            <input type="text" readonly="readonly" value="document-new">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-document-remove"></div>
                            <input type="text" readonly="readonly" value="document-remove">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-dot"></div>
                            <input type="text" readonly="readonly" value="dot">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-dots-2"></div>
                            <input type="text" readonly="readonly" value="dots-2">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-dots-3"></div>
                            <input type="text" readonly="readonly" value="dots-3">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-download"></div>
                            <input type="text" readonly="readonly" value="download">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-duplicate"></div>
                            <input type="text" readonly="readonly" value="duplicate">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-enter"></div>
                            <input type="text" readonly="readonly" value="enter">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-exit"></div>
                            <input type="text" readonly="readonly" value="exit">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-expand"></div>
                            <input type="text" readonly="readonly" value="expand">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-expand-2"></div>
                            <input type="text" readonly="readonly" value="expand-2">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-experiment"></div>
                            <input type="text" readonly="readonly" value="experiment">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-export"></div>
                            <input type="text" readonly="readonly" value="export">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-feed"></div>
                            <input type="text" readonly="readonly" value="feed">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-flag"></div>
                            <input type="text" readonly="readonly" value="flag">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-flashlight"></div>
                            <input type="text" readonly="readonly" value="flashlight">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-folder"></div>
                            <input type="text" readonly="readonly" value="folder">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-folder-open"></div>
                            <input type="text" readonly="readonly" value="folder-open">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-forward"></div>
                            <input type="text" readonly="readonly" value="forward">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-gaming"></div>
                            <input type="text" readonly="readonly" value="gaming">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-gear"></div>
                            <input type="text" readonly="readonly" value="gear">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-graduation"></div>
                            <input type="text" readonly="readonly" value="graduation">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-graph-bar"></div>
                            <input type="text" readonly="readonly" value="graph-bar">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-graph-line"></div>
                            <input type="text" readonly="readonly" value="graph-line">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-graph-pie"></div>
                            <input type="text" readonly="readonly" value="graph-pie">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-headset"></div>
                            <input type="text" readonly="readonly" value="headset">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-heart"></div>
                            <input type="text" readonly="readonly" value="heart">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-help"></div>
                            <input type="text" readonly="readonly" value="help">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-home"></div>
                            <input type="text" readonly="readonly" value="home">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-hourglass"></div>
                            <input type="text" readonly="readonly" value="hourglass">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-inbox"></div>
                            <input type="text" readonly="readonly" value="inbox">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-information"></div>
                            <input type="text" readonly="readonly" value="information">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-italic"></div>
                            <input type="text" readonly="readonly" value="italic">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-jewel"></div>
                            <input type="text" readonly="readonly" value="jewel">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-lifting"></div>
                            <input type="text" readonly="readonly" value="lifting">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-lightbulb"></div>
                            <input type="text" readonly="readonly" value="lightbulb">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-link"></div>
                            <input type="text" readonly="readonly" value="link">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-link-broken"></div>
                            <input type="text" readonly="readonly" value="link-broken">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-list"></div>
                            <input type="text" readonly="readonly" value="list">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-loading"></div>
                            <input type="text" readonly="readonly" value="loading">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-location"></div>
                            <input type="text" readonly="readonly" value="location">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-lock"></div>
                            <input type="text" readonly="readonly" value="lock">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-lock-open"></div>
                            <input type="text" readonly="readonly" value="lock-open">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-mail"></div>
                            <input type="text" readonly="readonly" value="mail">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-map"></div>
                            <input type="text" readonly="readonly" value="map">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-media-loop"></div>
                            <input type="text" readonly="readonly" value="media-loop">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-media-next"></div>
                            <input type="text" readonly="readonly" value="media-next">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-media-pause"></div>
                            <input type="text" readonly="readonly" value="media-pause">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-media-play"></div>
                            <input type="text" readonly="readonly" value="media-play">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-media-previous"></div>
                            <input type="text" readonly="readonly" value="media-previous">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-media-record"></div>
                            <input type="text" readonly="readonly" value="media-record">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-media-shuffle"></div>
                            <input type="text" readonly="readonly" value="media-shuffle">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-media-stop"></div>
                            <input type="text" readonly="readonly" value="media-stop">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-medical"></div>
                            <input type="text" readonly="readonly" value="medical">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-menu"></div>
                            <input type="text" readonly="readonly" value="menu">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-message"></div>
                            <input type="text" readonly="readonly" value="message">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-meter"></div>
                            <input type="text" readonly="readonly" value="meter">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-microphone"></div>
                            <input type="text" readonly="readonly" value="microphone">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-minus"></div>
                            <input type="text" readonly="readonly" value="minus">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-monitor"></div>
                            <input type="text" readonly="readonly" value="monitor">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-move"></div>
                            <input type="text" readonly="readonly" value="move">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-music"></div>
                            <input type="text" readonly="readonly" value="music">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-network-1"></div>
                            <input type="text" readonly="readonly" value="network-1">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-network-2"></div>
                            <input type="text" readonly="readonly" value="network-2">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-network-3"></div>
                            <input type="text" readonly="readonly" value="network-3">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-network-4"></div>
                            <input type="text" readonly="readonly" value="network-4">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-network-5"></div>
                            <input type="text" readonly="readonly" value="network-5">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-pamphlet"></div>
                            <input type="text" readonly="readonly" value="pamphlet">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-paperclip"></div>
                            <input type="text" readonly="readonly" value="paperclip">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-pencil"></div>
                            <input type="text" readonly="readonly" value="pencil">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-phone"></div>
                            <input type="text" readonly="readonly" value="phone">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-photo"></div>
                            <input type="text" readonly="readonly" value="photo">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-photo-group"></div>
                            <input type="text" readonly="readonly" value="photo-group">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-pill"></div>
                            <input type="text" readonly="readonly" value="pill">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-pin"></div>
                            <input type="text" readonly="readonly" value="pin">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-plus"></div>
                            <input type="text" readonly="readonly" value="plus">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-power"></div>
                            <input type="text" readonly="readonly" value="power">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-preview"></div>
                            <input type="text" readonly="readonly" value="preview">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-print"></div>
                            <input type="text" readonly="readonly" value="print">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-pulse"></div>
                            <input type="text" readonly="readonly" value="pulse">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-question"></div>
                            <input type="text" readonly="readonly" value="question">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-reply"></div>
                            <input type="text" readonly="readonly" value="reply">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-reply-all"></div>
                            <input type="text" readonly="readonly" value="reply-all">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-return"></div>
                            <input type="text" readonly="readonly" value="return">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-retweet"></div>
                            <input type="text" readonly="readonly" value="retweet">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-rocket"></div>
                            <input type="text" readonly="readonly" value="rocket">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-scale"></div>
                            <input type="text" readonly="readonly" value="scale">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-search"></div>
                            <input type="text" readonly="readonly" value="search">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-shopping-bag"></div>
                            <input type="text" readonly="readonly" value="shopping-bag">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-skip"></div>
                            <input type="text" readonly="readonly" value="skip">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-stack"></div>
                            <input type="text" readonly="readonly" value="stack">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-star"></div>
                            <input type="text" readonly="readonly" value="star">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-stopwatch"></div>
                            <input type="text" readonly="readonly" value="stopwatch">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-store"></div>
                            <input type="text" readonly="readonly" value="store">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-suitcase"></div>
                            <input type="text" readonly="readonly" value="suitcase">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-swap"></div>
                            <input type="text" readonly="readonly" value="swap">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-tag"></div>
                            <input type="text" readonly="readonly" value="tag">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-tag-delete"></div>
                            <input type="text" readonly="readonly" value="tag-delete">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-tags"></div>
                            <input type="text" readonly="readonly" value="tags">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-thumbs-down"></div>
                            <input type="text" readonly="readonly" value="thumbs-down">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-thumbs-up"></div>
                            <input type="text" readonly="readonly" value="thumbs-up">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-ticket"></div>
                            <input type="text" readonly="readonly" value="ticket">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-time-reverse"></div>
                            <input type="text" readonly="readonly" value="time-reverse">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-to-do"></div>
                            <input type="text" readonly="readonly" value="to-do">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-toggles"></div>
                            <input type="text" readonly="readonly" value="toggles">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-trash"></div>
                            <input type="text" readonly="readonly" value="trash">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-trophy"></div>
                            <input type="text" readonly="readonly" value="trophy">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-upload"></div>
                            <input type="text" readonly="readonly" value="upload">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-user"></div>
                            <input type="text" readonly="readonly" value="user">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-user-group"></div>
                            <input type="text" readonly="readonly" value="user-group">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-user-id"></div>
                            <input type="text" readonly="readonly" value="user-id">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-vibrate"></div>
                            <input type="text" readonly="readonly" value="vibrate">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-view-apps"></div>
                            <input type="text" readonly="readonly" value="view-apps">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-view-list"></div>
                            <input type="text" readonly="readonly" value="view-list">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-view-list-large"></div>
                            <input type="text" readonly="readonly" value="view-list-large">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-view-thumb"></div>
                            <input type="text" readonly="readonly" value="view-thumb">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-volume-full"></div>
                            <input type="text" readonly="readonly" value="volume-full">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-volume-low"></div>
                            <input type="text" readonly="readonly" value="volume-low">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-volume-medium"></div>
                            <input type="text" readonly="readonly" value="volume-medium">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-volume-off"></div>
                            <input type="text" readonly="readonly" value="volume-off">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-wallet"></div>
                            <input type="text" readonly="readonly" value="wallet">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-warning"></div>
                            <input type="text" readonly="readonly" value="warning">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-web"></div>
                            <input type="text" readonly="readonly" value="web">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-weight"></div>
                            <input type="text" readonly="readonly" value="weight">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-wifi"></div>
                            <input type="text" readonly="readonly" value="wifi">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-wrong"></div>
                            <input type="text" readonly="readonly" value="wrong">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-zoom-in"></div>
                            <input type="text" readonly="readonly" value="zoom-in">
                        </li>
                        <li>
                            <div class="icon dripicons dripicons-zoom-out"></div>
                            <input type="text" readonly="readonly" value="zoom-out">
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('template/mazer/extensions/@icon/dripicons/dripicons.css') }}">
<link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/ui-icons-dripicons.css') }}">
@endpush