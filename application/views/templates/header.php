<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url();?>/res/css/materialize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/res/css/materialize.min.css">
    <style>
      /* fallback */
      @font-face {
        font-family: 'Material Icons';
        font-style: normal;
        font-weight: 400;
        src: local('Material Icons'), local('MaterialIcons-Regular'), url(http://fonts.gstatic.com/s/materialicons/v21/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
      }

      .material-icons {
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -moz-font-feature-settings: 'liga';
        -moz-osx-font-smoothing: grayscale;
      }
      .nopadding{
        padding: none;
        padding-left: none;
        padding-right: none;
        padding-top: none;
        padding-bottom: none;
      }
      body{
        padding-top: none;
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }
      main{
        flex: 1 0 auto;
      }
      .cursoreauto{
        cursor: auto;
      }
      th{
        color: #fff;
      }
      .flexcroll{
        overflow: hidden;
      }
      .flexcroll:hover{
        overflow: scroll;
      }
      div.bgimagesetimg1{
        background-image: url('media/img1.jpg');
        background-size: 100%;
      }
      h5.sizingtext:hover{
        font-size: 45px;
        transition: 0.3s;
      }
      input.noplattext{
        color: #009688;
        text-transform: uppercase;
        font-weight: bold;
      }
    </style>
  </head>
  <body class="blue-grey">
