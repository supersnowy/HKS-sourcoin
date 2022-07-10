<?php
    header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="en" class="sr">
<head>
    <meta charset="utf-8" />
    <title>SourCoin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
        @font-face {
            font-family: "Material Icons";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/materialicons/v97/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format("woff2");
        }
        .material-icons {
            font-family: "Material Icons";
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
            -webkit-font-feature-settings: "liga";
            -webkit-font-smoothing: antialiased;
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fCRc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fABc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fCBc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+1F00-1FFF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fBxc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0370-03FF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fCxc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fChc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 300;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format("woff2");
            unicode-range: U+1F00-1FFF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format("woff2");
            unicode-range: U+0370-03FF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCRc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCBc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+1F00-1FFF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fBxc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0370-03FF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fCxc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fChc4AMP6lbBP.woff2) format("woff2");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        @font-face {
            font-family: "Roboto";
            font-style: normal;
            font-weight: 500;
            src: url(https://fonts.gstatic.com/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <link rel="icon" type="image/x-icon" href="assets/icons/sour-logo.png" />
    <style>
        @charset "UTF-8";
        @import url(https://fonts.googleapis.com/css2?family=Kanit:wght@100;*,:after,:before{box-sizing:border-box;}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth;}}body{margin:0;font-family:var(--bs-font-sans-serif);font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent;}body,html{height:100%;overflow:hidden!important;font-family:Kanit;color:#f5f5f5;overflow:hidden;color:#f4eeff;background:#1f2641;}*{margin:0;padding:0;box-sizing:border-box;font-family:Kanit,sans-serif;}*{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}:root{--scrollbarBG:#27262c;--thumbBG:#03a9f4;}body{scrollbar-width:thin;scrollbar-color:var(--thumbBG) var(--scrollbarBG);};
    </style>
    <link rel="stylesheet" href="styles.7b3eda860498d4811f50.css" media="all" onload="this.media='all'" />
    <noscript><link rel="stylesheet" href="styles.7b3eda860498d4811f50.css" /></noscript>
    <style>
        .page-container[_ngcontent-ryl-c104] {
            position: relative;
            width: 100%;
            height: calc(100% - 64px);
        }
        .greyOverlay[_ngcontent-ryl-c104] {
            filter: brightness(30%) blur(3px);
        }
    </style>
    <style>
        .header[_ngcontent-ryl-c102] {
            top: 0;
            left: 0;
            width: 100%;
            height: 64px;
            padding-left: 7px;
            padding-right: 16px;
            position: relative;
            border-bottom: 2px solid #ffffff1a;
            z-index: 20;
            transition: 0.25s ease-in;
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
        }
        .header[_ngcontent-ryl-c102] #profileIcon[_ngcontent-ryl-c102],
        .header[_ngcontent-ryl-c102] #toggleNavigationBtn[_ngcontent-ryl-c102] {
            opacity: 1;
            transition: 0.15s ease-in;
            width: 40px;
            overflow: hidden;
        }
        .header[_ngcontent-ryl-c102] #navigateToAppButton[_ngcontent-ryl-c102] {
            background-color: #01de8c;
        }
        .header[_ngcontent-ryl-c102] h2[_ngcontent-ryl-c102] {
            font-size: 30px;
        }
        .header[_ngcontent-ryl-c102] .header-logo[_ngcontent-ryl-c102] {
            margin: auto 0 auto 1rem;
            height: 38px;
            width: 38px;
        }
        .wallet-token[_ngcontent-ryl-c102] {
            align-items: center;
            border: 0;
            margin: auto;
            border-radius: 16px;
            cursor: pointer;
            display: inline-flex;
            font-family: inherit;
            font-size: 16px;
            font-weight: 600;
            justify-content: center;
            letter-spacing: 0.03em;
            line-height: 1;
            opacity: 1;
            outline: 0;
            transition: background-color 0.2s ease 0s, opacity 0.2s ease 0s;
            height: 32px;
            padding: 0 16px;
            background-color: #353547;
            box-shadow: none;
            color: #1fc7d4;
        }
        .website-header[_ngcontent-ryl-c102] {
            background-color: initial;
            border-bottom: 2px solid #fff0;
            box-shadow: unset;
            height: 90px;
        }
        .website-header[_ngcontent-ryl-c102] #profileIcon[_ngcontent-ryl-c102],
        .website-header[_ngcontent-ryl-c102] #toggleNavigationBtn[_ngcontent-ryl-c102] {
            width: 0;
            opacity: 0;
            margin: 0 !important;
        }
        .website-header[_ngcontent-ryl-c102] .header-logo[_ngcontent-ryl-c102] {
            margin: auto 0 auto 1rem;
            transition: 0.25s ease-in;
            height: 45px;
            width: 45px;
        }
        #walletButton[_ngcontent-ryl-c102] {
            height: unset !important;
        }
        .external-nav-items[_ngcontent-ryl-c102] {
            height: 64px;
            display: flex;
            margin-right: 35px;
            transition: 0.25s ease-in;
            border-bottom: 2px solid #0000;
            cursor: pointer;
        }
        .external-nav-items[_ngcontent-ryl-c102] a[_ngcontent-ryl-c102] {
            text-decoration: none;
            color: #f5f5f5;
            margin: auto;
        }
        .external-nav-items[_ngcontent-ryl-c102]:hover {
            border-bottom: 2px solid #f5f5f5;
        }
        @media only screen and (max-width: 1200px) {
            .external-nav-items[_ngcontent-ryl-c102] {
                margin-right: 20px;
            }
        }
        @media only screen and (max-width: 900px) {
            .external-nav-items[_ngcontent-ryl-c102] {
                display: none;
            }
        }
        @media only screen and (max-width: 600px) {
            .header-logo[_ngcontent-ryl-c102] {
                margin-left: 0 !important;
            }
            h2[_ngcontent-ryl-c102] {
                display: none;
            }
        }
        #home-logo-button[_ngcontent-ryl-c102] {
            background: none !important;
            border: none !important;
            display: flex;
            color: #fff;
        }
    </style>
    <style>
        .navigation[_ngcontent-ryl-c103] {
            height: calc(100vh - 64px);
            width: 56px;
            border-right: 2px solid #ffffff1a;
            transition: padding-top 0.2s ease 0s, width 0.2s cubic-bezier(0.4, 0, 0.2, 1) 0s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-x: hidden;
        }
        .navigation[_ngcontent-ryl-c103] a[_ngcontent-ryl-c103] {
            text-decoration: none;
        }
        .navigation[_ngcontent-ryl-c103] .nav-route[_ngcontent-ryl-c103] {
            cursor: pointer;
            display: flex;
            align-items: center;
            height: 48px;
            padding-left: 6px;
            font-size: 16px;
            background-color: initial;
            color: #b8add2;
            box-shadow: none;
            flex-shrink: 0;
            overflow: hidden;
        }
        .navigation[_ngcontent-ryl-c103] .nav-route[_ngcontent-ryl-c103] a[_ngcontent-ryl-c103] {
            color: #b8add2;
        }
        .navigation[_ngcontent-ryl-c103] .nav-route[_ngcontent-ryl-c103] span[_ngcontent-ryl-c103] {
            white-space: nowrap;
            display: none;
            text-decoration: none !important;
        }
        .navigation[_ngcontent-ryl-c103] .nav-route.active-page[_ngcontent-ryl-c103] {
            background-color: #0000001a;
        }
        .bottom-nav[_ngcontent-ryl-c103] {
            flex: 0 0 auto;
            border-top: 2px solid #ffffff1a;
        }
        .website-style[_ngcontent-ryl-c103] {
            width: 0;
            border: none;
        }
        .website-style[_ngcontent-ryl-c103] .bottom-nav[_ngcontent-ryl-c103] {
            display: none;
        }
        @media only screen and (max-width: 600px) {
            .navigation[_ngcontent-ryl-c103] {
                width: 0;
                border-right: none;
            }
            .opened[_ngcontent-ryl-c103] {
                border-right: 2px solid #ffffff1a !important;
            }
        }
        .opened[_ngcontent-ryl-c103] {
            width: 240px;
        }
        .opened[_ngcontent-ryl-c103] span[_ngcontent-ryl-c103] {
            display: unset !important;
        }
    </style>
    <style>
        .mat-button .mat-button-focus-overlay,
        .mat-icon-button .mat-button-focus-overlay {
            opacity: 0;
        }
        .mat-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay,
        .mat-stroked-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay {
            opacity: 0.04;
        }
        @media (hover: none) {
            .mat-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay,
            .mat-stroked-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay {
                opacity: 0;
            }
        }
        .mat-button,
        .mat-icon-button,
        .mat-stroked-button,
        .mat-flat-button {
            box-sizing: border-box;
            position: relative;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
            outline: none;
            border: none;
            -webkit-tap-highlight-color: transparent;
            display: inline-block;
            white-space: nowrap;
            text-decoration: none;
            vertical-align: baseline;
            text-align: center;
            margin: 0;
            min-width: 64px;
            line-height: 36px;
            padding: 0 16px;
            border-radius: 4px;
            overflow: visible;
        }
        .mat-button::-moz-focus-inner,
        .mat-icon-button::-moz-focus-inner,
        .mat-stroked-button::-moz-focus-inner,
        .mat-flat-button::-moz-focus-inner {
            border: 0;
        }
        .mat-button.mat-button-disabled,
        .mat-icon-button.mat-button-disabled,
        .mat-stroked-button.mat-button-disabled,
        .mat-flat-button.mat-button-disabled {
            cursor: default;
        }
        .mat-button.cdk-keyboard-focused .mat-button-focus-overlay,
        .mat-button.cdk-program-focused .mat-button-focus-overlay,
        .mat-icon-button.cdk-keyboard-focused .mat-button-focus-overlay,
        .mat-icon-button.cdk-program-focused .mat-button-focus-overlay,
        .mat-stroked-button.cdk-keyboard-focused .mat-button-focus-overlay,
        .mat-stroked-button.cdk-program-focused .mat-button-focus-overlay,
        .mat-flat-button.cdk-keyboard-focused .mat-button-focus-overlay,
        .mat-flat-button.cdk-program-focused .mat-button-focus-overlay {
            opacity: 0.12;
        }
        .mat-button::-moz-focus-inner,
        .mat-icon-button::-moz-focus-inner,
        .mat-stroked-button::-moz-focus-inner,
        .mat-flat-button::-moz-focus-inner {
            border: 0;
        }
        .mat-raised-button {
            box-sizing: border-box;
            position: relative;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
            outline: none;
            border: none;
            -webkit-tap-highlight-color: transparent;
            display: inline-block;
            white-space: nowrap;
            text-decoration: none;
            vertical-align: baseline;
            text-align: center;
            margin: 0;
            min-width: 64px;
            line-height: 36px;
            padding: 0 16px;
            border-radius: 4px;
            overflow: visible;
            transform: translate3d(0, 0, 0);
            transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mat-raised-button::-moz-focus-inner {
            border: 0;
        }
        .mat-raised-button.mat-button-disabled {
            cursor: default;
        }
        .mat-raised-button.cdk-keyboard-focused .mat-button-focus-overlay,
        .mat-raised-button.cdk-program-focused .mat-button-focus-overlay {
            opacity: 0.12;
        }
        .mat-raised-button::-moz-focus-inner {
            border: 0;
        }
        ._mat-animation-noopable.mat-raised-button {
            transition: none;
            animation: none;
        }
        .mat-stroked-button {
            border: 1px solid currentColor;
            padding: 0 15px;
            line-height: 34px;
        }
        .mat-stroked-button .mat-button-ripple.mat-ripple,
        .mat-stroked-button .mat-button-focus-overlay {
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
        }
        .mat-fab {
            box-sizing: border-box;
            position: relative;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
            outline: none;
            border: none;
            -webkit-tap-highlight-color: transparent;
            display: inline-block;
            white-space: nowrap;
            text-decoration: none;
            vertical-align: baseline;
            text-align: center;
            margin: 0;
            min-width: 64px;
            line-height: 36px;
            padding: 0 16px;
            border-radius: 4px;
            overflow: visible;
            transform: translate3d(0, 0, 0);
            transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
            min-width: 0;
            border-radius: 50%;
            width: 56px;
            height: 56px;
            padding: 0;
            flex-shrink: 0;
        }
        .mat-fab::-moz-focus-inner {
            border: 0;
        }
        .mat-fab.mat-button-disabled {
            cursor: default;
        }
        .mat-fab.cdk-keyboard-focused .mat-button-focus-overlay,
        .mat-fab.cdk-program-focused .mat-button-focus-overlay {
            opacity: 0.12;
        }
        .mat-fab::-moz-focus-inner {
            border: 0;
        }
        ._mat-animation-noopable.mat-fab {
            transition: none;
            animation: none;
        }
        .mat-fab .mat-button-wrapper {
            padding: 16px 0;
            display: inline-block;
            line-height: 24px;
        }
        .mat-mini-fab {
            box-sizing: border-box;
            position: relative;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
            outline: none;
            border: none;
            -webkit-tap-highlight-color: transparent;
            display: inline-block;
            white-space: nowrap;
            text-decoration: none;
            vertical-align: baseline;
            text-align: center;
            margin: 0;
            min-width: 64px;
            line-height: 36px;
            padding: 0 16px;
            border-radius: 4px;
            overflow: visible;
            transform: translate3d(0, 0, 0);
            transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
            min-width: 0;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            padding: 0;
            flex-shrink: 0;
        }
        .mat-mini-fab::-moz-focus-inner {
            border: 0;
        }
        .mat-mini-fab.mat-button-disabled {
            cursor: default;
        }
        .mat-mini-fab.cdk-keyboard-focused .mat-button-focus-overlay,
        .mat-mini-fab.cdk-program-focused .mat-button-focus-overlay {
            opacity: 0.12;
        }
        .mat-mini-fab::-moz-focus-inner {
            border: 0;
        }
        ._mat-animation-noopable.mat-mini-fab {
            transition: none;
            animation: none;
        }
        .mat-mini-fab .mat-button-wrapper {
            padding: 8px 0;
            display: inline-block;
            line-height: 24px;
        }
        .mat-icon-button {
            padding: 0;
            min-width: 0;
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            line-height: 40px;
            border-radius: 50%;
        }
        .mat-icon-button i,
        .mat-icon-button .mat-icon {
            line-height: 24px;
        }
        .mat-button-ripple.mat-ripple,
        .mat-button-focus-overlay {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            pointer-events: none;
            border-radius: inherit;
        }
        .mat-button-ripple.mat-ripple:not(:empty) {
            transform: translateZ(0);
        }
        .mat-button-focus-overlay {
            opacity: 0;
            transition: opacity 200ms cubic-bezier(0.35, 0, 0.25, 1), background-color 200ms cubic-bezier(0.35, 0, 0.25, 1);
        }
        ._mat-animation-noopable .mat-button-focus-overlay {
            transition: none;
        }
        .mat-button-ripple-round {
            border-radius: 50%;
            z-index: 1;
        }

        .mat-button .mat-button-wrapper > *,
        .mat-flat-button .mat-button-wrapper > *,
        .mat-stroked-button .mat-button-wrapper > *,
        .mat-raised-button .mat-button-wrapper > *,
        .mat-icon-button .mat-button-wrapper > *,
        .mat-fab .mat-button-wrapper > *,
        .mat-mini-fab .mat-button-wrapper > * {
            vertical-align: middle;
        }
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button,
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: inherit;
            width: 2.5em;
            height: 2.5em;
        }
        .cdk-high-contrast-active .mat-button,
        .cdk-high-contrast-active .mat-flat-button,
        .cdk-high-contrast-active .mat-raised-button,
        .cdk-high-contrast-active .mat-icon-button,
        .cdk-high-contrast-active .mat-fab,
        .cdk-high-contrast-active .mat-mini-fab {
            outline: solid 1px;
        }
        .cdk-high-contrast-active .mat-button-base.cdk-keyboard-focused,
        .cdk-high-contrast-active .mat-button-base.cdk-program-focused {
            outline: solid 3px;
        }
    </style>
    <style>
        .mat-icon {
            background-repeat: no-repeat;
            display: inline-block;
            fill: currentColor;
            height: 24px;
            width: 24px;
        }
        .mat-icon.mat-icon-inline {
            font-size: inherit;
            height: inherit;
            line-height: inherit;
            width: inherit;
        }
        [dir="rtl"] .mat-icon-rtl-mirror {
            transform: scale(-1, 1);
        }
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon {
            display: block;
        }
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon {
            margin: auto;
        }
    </style>
    <style>
        .home-container[_ngcontent-ryl-c133] {
            height: 100%;
            padding: 2rem;
            display: flex;
            overflow-x: hidden !important;
            flex-direction: column;
        }
        .home-container[_ngcontent-ryl-c133] section[_ngcontent-ryl-c133] {
            margin-top: 15rem;
            margin-bottom: 15rem;
        }
        .home-container[_ngcontent-ryl-c133] .wrapper[_ngcontent-ryl-c133] {
            position: relative;
            z-index: 5;
        }
        .wave-background[_ngcontent-ryl-c133] {
            height: 0;
            width: 100%;
        }
        .wave-background[_ngcontent-ryl-c133] img[_ngcontent-ryl-c133] {
            position: absolute;
            left: 0;
            width: 100%;
            z-index: 1;
        }
        .wave-background[_ngcontent-ryl-c133] .rightSideImg[_ngcontent-ryl-c133] {
            width: unset;
            left: unset;
            right: 0;
        }
        .wave-background[_ngcontent-ryl-c133] .roadmap-background-image[_ngcontent-ryl-c133] {
            opacity: 0.15;
            width: 189px;
            left: 12.5%;
            transform: translateY(60px);
            object-fit: contain;
        }
        #about-bg[_ngcontent-ryl-c133] {
            transform: translateY(100px);
        }
        .promo-content[_ngcontent-ryl-c133] {
            margin-top: 170px;
            width: 670px;
            flex: 0 0 670px;
        }
        .promo-img[_ngcontent-ryl-c133] {
            position: absolute;
            top: 50px;
            right: -100px;
            z-index: -1;
            max-width: 720px;
            max-height: 720px;
            margin-top: 1rem;
            object-fit: contain;
        }
        #about-kudoge-image[_ngcontent-ryl-c133] {
            top: 150px;
            max-width: 580px;
        }
        .token-stats-container[_ngcontent-ryl-c133] {
            display: flex;
            margin-bottom: 45px;
            flex-wrap: wrap;
            grid-gap: 1rem;
            gap: 1rem;
        }
        .token-stat[_ngcontent-ryl-c133] {
            display: inline-block;
            background-color: #ffffff1a;
            border-radius: 5px;
            padding: 7px 10px 5px;
            min-height: 48px;
        }
        .token-stat[_ngcontent-ryl-c133] h6[_ngcontent-ryl-c133] {
            font-size: 0.75em;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 0.4em;
            color: #ffffffbf;
        }
        .token-stat[_ngcontent-ryl-c133] p[_ngcontent-ryl-c133] {
            font-weight: 550;
            font-size: 0.8em;
            text-transform: none;
            margin-top: -4px;
            margin-bottom: 0;
        }
        .token-stat[_ngcontent-ryl-c133] p[_ngcontent-ryl-c133]:empty {
            margin-top: 0.2em;
            height: 1.1em;
            background-color: #fff3;
            border-radius: 3px;
            animation: load 1s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }
        @keyframes load {
            0% {
                background-color: #fff3;
            }
            50% {
                background-color: #ffffff4d;
            }
            to {
                background-color: #fff3;
            }
        }
        .token-stat[_ngcontent-ryl-c133]:first-child > p[_ngcontent-ryl-c133]:empty {
            min-width: 173px;
        }
        .token-stat[_ngcontent-ryl-c133]:nth-child(2) > p[_ngcontent-ryl-c133]:empty {
            min-width: 77px;
        }
        .token-stat[_ngcontent-ryl-c133]:nth-child(3) > p[_ngcontent-ryl-c133]:empty {
            min-width: 136px;
        }
        .token-btn[_ngcontent-ryl-c133] {
            margin-right: 1.5rem;
            background-color: #00dd8a;
        }
        .token-btn[_ngcontent-ryl-c133]:hover {
            background-color: #00b46f;
            color: #fff;
        }
        .tg-btn[_ngcontent-ryl-c133] {
            margin-right: 1.5rem;
            background-color: #0097dd;
        }
        .tg-btn[_ngcontent-ryl-c133]:hover {
            background-color: #0074aa;
        }
        .metamask-btn[_ngcontent-ryl-c133] {
            background-color: #ea8b32;
        }
        .metamask-btn[_ngcontent-ryl-c133]:hover {
            background-color: #cd6116;
            color: #fff;
        }
        .about-special-title[_ngcontent-ryl-c133] {
            color: #545c79;
            margin-bottom: 30px;
            text-align: left;
            padding-left: 50px;
            position: relative;
        }
        .about-special-title[_ngcontent-ryl-c133]:after {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            left: 0;
            border-bottom: 1px solid;
        }
        #core-features-section[_ngcontent-ryl-c133] {
            margin-top: 35rem;
        }
        .section-services[_ngcontent-ryl-c133] {
            background: url(token-img-1.9cd8b5f63e0cb6de110e.png) no-repeat 50%;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] {
            display: flex;
            flex-wrap: wrap;
            min-height: 800px;
            width: 100%;
            grid-gap: 2rem;
            gap: 2rem;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card-spacer[_ngcontent-ryl-c133] {
            min-width: 150px;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card[_ngcontent-ryl-c133] {
            flex: 1;
            height: 300px;
            min-width: 150px;
            margin: auto;
            display: flex;
            flex-direction: column;
            background: none;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card[_ngcontent-ryl-c133] > div[_ngcontent-ryl-c133] {
            background: none;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card[_ngcontent-ryl-c133] .card-background[_ngcontent-ryl-c133] {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            border-radius: 10px;
            transition: width 0.4s, height 0.4s;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card[_ngcontent-ryl-c133]:hover .card-background[_ngcontent-ryl-c133] {
            width: 105%;
            height: 105%;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card[_ngcontent-ryl-c133] img[_ngcontent-ryl-c133] {
            height: 63px;
            width: 63px;
            margin: auto;
            z-index: 1;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card[_ngcontent-ryl-c133] h4[_ngcontent-ryl-c133] {
            margin: auto;
            text-align: center;
            z-index: 1;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card-red[_ngcontent-ryl-c133] {
            background-color: #e85f70;
            box-shadow: 0 0 51px #e85f70bd;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card-orange[_ngcontent-ryl-c133] {
            background-color: #fa8936;
            background-image: linear-gradient(-234deg, #ea9d64, #fa8936);
            box-shadow: 0 0 51px #fa8936bd;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card-green[_ngcontent-ryl-c133] {
            background-image: linear-gradient(-234deg, #6ae472, #4bc253);
            box-shadow: 0 0 51px #4bc253bd;
        }
        .section-services[_ngcontent-ryl-c133] .section-services__items[_ngcontent-ryl-c133] .card-blue[_ngcontent-ryl-c133] {
            background-color: #0090d5;
            background-image: linear-gradient(-234deg, #29aceb, #0090d5);
            box-shadow: 0 0 51px #0090d5bd;
        }
        .token__info-list[_ngcontent-ryl-c133] {
            list-style-type: none;
        }
        .token__info-list[_ngcontent-ryl-c133] li[_ngcontent-ryl-c133] {
            font-weight: 400;
            color: #aab2cd;
            margin-bottom: 5px;
            display: flex;
        }
        .token__info-list[_ngcontent-ryl-c133] li[_ngcontent-ryl-c133] *[_ngcontent-ryl-c133] {
            flex: 1;
            text-decoration: none;
            color: #aab2cd;
        }
        .token__info-list[_ngcontent-ryl-c133] li[_ngcontent-ryl-c133] span[_ngcontent-ryl-c133]:first-child {
            font-weight: 500;
            color: #fff;
        }
        .tokenomics-row[_ngcontent-ryl-c133] {
            justify-content: flex-end;
        }
        #tokenomics-promo-img[_ngcontent-ryl-c133] {
            right: unset;
            top: 150px;
            left: -100px;
            transform: none;
        }
        .buy-sour-button[_ngcontent-ryl-c133] {
            background: linear-gradient(90deg, #ed8a4c 0, #ea485c);
        }
        .buy-sour-button[_ngcontent-ryl-c133]:hover {
            color: #fff;
        }
        .custom-footer[_ngcontent-ryl-c133] {
            display: flex;
            z-index: 5;
            position: relative;
        }
        .road__item[_ngcontent-ryl-c133] {
            position: relative;
            padding-left: 40px;
            margin-bottom: 30px;
        }
        .road__item[_ngcontent-ryl-c133]:not(:last-child):after {
            content: "";
            position: absolute;
            top: 2px;
            left: 8.5px;
            width: 1px;
            border-left: 1px solid #00cde4;
            height: calc(100% + 30px);
        }
        .road__item[_ngcontent-ryl-c133]:last-child {
            margin-bottom: 0;
        }
        .road__item-metka[_ngcontent-ryl-c133] {
            width: 17px;
            height: 17px;
            border: 2px solid #00cde4;
            border-radius: 50%;
            background-color: #1f2641;
            position: absolute;
            top: 2px;
            left: 0;
            z-index: 1;
        }
        .road__item-title[_ngcontent-ryl-c133] {
            font-size: 1rem;
            color: #fff;
            font-weight: 700;
            margin-bottom: 10px;
            text-align: left;
        }
        .road[_ngcontent-ryl-c133] p[_ngcontent-ryl-c133] {
            line-height: 25px;
            text-align: left !important;
        }
        .road__item-active[_ngcontent-ryl-c133] .road__item-metka[_ngcontent-ryl-c133]:after {
            content: "";
            display: block;
            border-radius: 50%;
            width: 15px;
            height: 15px;
            background-color: #ed824e;
        }
        .road__item-active[_ngcontent-ryl-c133]:after {
            border-left: 1px dashed #c6c6c6;
        }
        .road__item-active[_ngcontent-ryl-c133] .road__item-metka[_ngcontent-ryl-c133] {
            width: 31px;
            height: 31px;
            border: 2px solid #00cde4;
            position: absolute;
            top: -5px;
            left: -7px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #socialItems[_ngcontent-ryl-c133] {
            grid-gap: 1rem;
            gap: 1rem;
        }
        #socialItems[_ngcontent-ryl-c133] a[_ngcontent-ryl-c133] {
            border: 1px solid #ffffff80;
            border-radius: 42px;
            width: 42px;
            height: 42px;
            display: flex;
            cursor: pointer;
        }
        #socialItems[_ngcontent-ryl-c133] a[_ngcontent-ryl-c133] img[_ngcontent-ryl-c133] {
            filter: brightness(0) invert(1);
            width: 24px;
            height: 24px;
            margin: auto;
        }
        @media only screen and (min-width: 1200px) {
            .road__item[_ngcontent-ryl-c133] {
                margin-bottom: 50px;
            }
            .road__item[_ngcontent-ryl-c133]:not(:last-child):after {
                height: calc(100% + 50px);
            }
        }
        @media only screen and (min-width: 992px) {
            .road__item[_ngcontent-ryl-c133] {
                padding-left: 106px;
            }
            .road__item[_ngcontent-ryl-c133]:before {
                left: 40px;
                width: 47px;
            }
        }
        @media only screen and (min-width: 768px) {
            .road__item[_ngcontent-ryl-c133] {
                padding-left: 80px;
            }
            .road__item[_ngcontent-ryl-c133]:before {
                content: "";
                position: absolute;
                top: 11px;
                left: 30px;
                width: 40px;
                border-bottom: 1px solid #495170;
            }
        }
        @media only screen and (min-width: 576px) {
            .road__item-title[_ngcontent-ryl-c133] {
                position: absolute;
                left: -230px;
                text-align: right;
                width: 200px;
                top: -1px;
            }
        }
        @media only screen and (max-width: 1400px) {
            .promo-img[_ngcontent-ryl-c133] {
                right: -200px;
            }
            #about-sour-image[_ngcontent-ryl-c133] {
                right: -100px;
                max-width: 440px;
            }
            #tokenomics-promo-img[_ngcontent-ryl-c133] {
                transform: translate(-25%);
            }
            #about-bg[_ngcontent-ryl-c133] {
                transform: translateY(190px);
            }
        }
        @media only screen and (max-width: 1200px) {
            .promo-img[_ngcontent-ryl-c133] {
                right: -400px;
            }
            #about-sour-image[_ngcontent-ryl-c133] {
                right: -160px;
            }
            .section-services[_ngcontent-ryl-c133] {
                background: none;
            }
            .card[_ngcontent-ryl-c133] {
                min-width: 40% !important;
                margin: 0 !important;
            }
            .card-spacer[_ngcontent-ryl-c133] {
                display: none;
            }
            .section-services[_ngcontent-ryl-c133] {
                margin-top: 5em;
            }
            .section-services__items[_ngcontent-ryl-c133] {
                min-height: 0 !important;
            }
            #tokenomics-promo-img[_ngcontent-ryl-c133] {
                transform: translate(-50%);
            }
            #about-bg[_ngcontent-ryl-c133] {
                transform: translateY(220px);
            }
            .wave-background[_ngcontent-ryl-c133] .roadmap-background-image[_ngcontent-ryl-c133] {
                left: 5%;
                height: 800px;
            }
        }
        @media only screen and (max-width: 991px) {
            .promo-img[_ngcontent-ryl-c133] {
                display: none;
            }
            .promo-content[_ngcontent-ryl-c133] {
                margin-top: 0;
            }
            .tokenomics-row[_ngcontent-ryl-c133] {
                justify-content: flex-start;
            }
        }
        @media only screen and (max-width: 900px) {
            .responsive-img[_ngcontent-ryl-c133],
            .small-responsive-img[_ngcontent-ryl-c133] {
                display: none;
            }
            #core-features-section[_ngcontent-ryl-c133] {
                margin-top: 10rem;
            }
        }
        @media only screen and (max-width: 768px) {
            .custom-footer[_ngcontent-ryl-c133] {
                flex-direction: column;
                margin-bottom: 30px !important;
            }
            .custom-footer[_ngcontent-ryl-c133] p[_ngcontent-ryl-c133] {
                text-align: center !important;
            }
            #socialItems[_ngcontent-ryl-c133],
            .copyright-footer[_ngcontent-ryl-c133] {
                justify-content: center;
            }
            .copyright-footer[_ngcontent-ryl-c133] h2[_ngcontent-ryl-c133] {
                margin-right: 0 !important;
            }
        }
        @media only screen and (max-width: 600px) {
            .section-services__items[_ngcontent-ryl-c133] .card[_ngcontent-ryl-c133] {
                min-width: 150px;
            }
            .home-container[_ngcontent-ryl-c133] {
                padding: 1rem;
            }
            .token-stats-container[_ngcontent-ryl-c133] {
                flex-direction: column;
            }
            .top-button-container[_ngcontent-ryl-c133] {
                flex-direction: column;
                grid-gap: 1rem;
            }
            .top-button-container[_ngcontent-ryl-c133] > button[_ngcontent-ryl-c133] {
                margin-right: 0;
            }
            .metamask-btn[_ngcontent-ryl-c133] {
                display: none;
            }
            .section-services[_ngcontent-ryl-c133] {
                background: none;
            }
            .section-services__items[_ngcontent-ryl-c133] {
                flex-direction: column;
            }
            .card[_ngcontent-ryl-c133] {
                min-height: 250px;
            }
            .rightSideImg[_ngcontent-ryl-c133] {
                display: none;
            }
            .tokenomics-reveal[_ngcontent-ryl-c133] {
                transform: none !important;
                opacity: 1 !important;
                visibility: visible !important;
            }
        }
        @media only screen and (max-width: 600px) and (min-width: 576px) {
            .road__item-title[_ngcontent-ryl-c133] {
                left: -200px;
                text-align: right;
                width: 170px;
            }
        }
    </style>
    <style>
        .mat-button-wrapper {
            position: relative;
            top: 5px;
        }
    </style>
    <meta name="description" content="Official website for $SOUR token.">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: 'https://poocoin.moocow.dev/get_SOUR_price',
                method: "GET",
                success: function (data) {
                    let BNB = data.close;
                    let BNBPrice = data.baseClose;
                    let SOURPrice = Math.round(BNB * BNBPrice * 10000) / 10000
                    $('#price').text(`$${SOURPrice}`);
                    $('#market-cap').text(`$${SOURPrice * 10000}`)
                }
            });
        });
    </script>
</head>
<body style="height: 100%;">
<div class="ng-tns-c104-0">
    <div _ngcontent-ryl-c104="" class="ng-tns-c104-0" _nghost-ryl-c102="">
        <header _ngcontent-ryl-c102="" class="header website-header">
            <div _ngcontent-ryl-c102="" class="d-flex">
                <button _ngcontent-ryl-c102="" mat-icon-button="" id="toggleNavigationBtn" class="mat-focus-indicator m-auto mat-icon-button mat-button-base mat-button-disabled" disabled="true">
                            <span class="mat-button-wrapper">
                                <mat-icon _ngcontent-ryl-c102="" role="img" class="mat-icon notranslate material-icons mat-icon-no-color ng-star-inserted" aria-hidden="true" data-mat-icon-type="font">menu</mat-icon>
                            </span>
                    <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span><span class="mat-button-focus-overlay"></span>
                </button>
                <button _ngcontent-ryl-c102="" id="home-logo-button" tabindex="0">
                    <img _ngcontent-ryl-c102="" src="assets/icons/sour-logo.png" draggable="false" alt="logo" class="header-logo" width="72" height="72" />
                    <h2 _ngcontent-ryl-c102="" class="m-auto ms-2">$SOUR</h2>
                </button>
            </div>
            <div _ngcontent-ryl-c102="" class="d-flex m-auto ng-star-inserted">
                <div _ngcontent-ryl-c102="" class="external-nav-items">
                    <a _ngcontent-ryl-c102="" href="index.php"><span _ngcontent-ryl-c102="">Home</span></a>
                </div>
                <div _ngcontent-ryl-c102="" class="external-nav-items">
                    <a _ngcontent-ryl-c102="" href="https://discord.gg/mcevents" target="_blank"><span _ngcontent-ryl-c102="">Discord</span></a>
                </div>
                <div _ngcontent-ryl-c102="" class="external-nav-items">
                    <a _ngcontent-ryl-c102="" href="https://pancakeswap.finance/swap?outputCurrency=0x849c55a11bf7ecc2092297dcff2978c68a3debf0"><span _ngcontent-ryl-c102="">Buy Now</span></a>
                </div>
                <div _ngcontent-ryl-c102="" class="external-nav-items">
                    <a _ngcontent-ryl-c102="" href="stake.php"><span _ngcontent-ryl-c102="">Stake</span></a>
                </div>
            </div>
        </header>
    <div _ngcontent-ryl-c104="" class="d-flex h-100 ng-tns-c104-0">
        <app-navigation-bar _ngcontent-ryl-c104="" class="ng-tns-c104-0" _nghost-ryl-c103="">
            <nav _ngcontent-ryl-c103="" class="navigation website-style">
                <div _ngcontent-ryl-c103="" class="d-flex flex-column pt-3">
                    <div _ngcontent-ryl-c103="" routerlinkactive="active-page" class="nav-route active-page" tabindex="0">
                        <button _ngcontent-ryl-c103="" mat-icon-button="" class="mat-focus-indicator mat-icon-button mat-button-base">
                                    <span class="mat-button-wrapper">
                                        <mat-icon _ngcontent-ryl-c103="" role="img" class="mat-icon notranslate material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">home</mat-icon>
                                    </span>
                            <span class="mat-ripple mat-button-ripple mat-button-ripple-round"></span><span class="mat-button-focus-overlay"></span>
                        </button>
                        <span _ngcontent-ryl-c103="">Home</span>
                    </div>
                </div>
            </nav>
        </app-navigation-bar>
        <div _ngcontent-ryl-c104="" class="page-container ng-tns-c104-0 ng-trigger ng-trigger-routeAnimations">
            <router-outlet _ngcontent-ryl-c104="" class="ng-tns-c104-0"></router-outlet>
            <div _nghost-ryl-c133="" class="ng-tns-c133-1 ng-star-inserted" style="">
                <div _ngcontent-ryl-c133="" class="home-container overflow-auto position-relative ng-tns-c133-1">
                    <div _ngcontent-ryl-c133="" class="container ng-tns-c133-1">
                        <section _ngcontent-ryl-c133="" class="mt-3 ng-tns-c133-1" style="margin-bottom: 8rem;">
                            <div _ngcontent-ryl-c133="" class="wrapper ng-tns-c133-1">
                                <div _ngcontent-ryl-c133="" class="row ng-tns-c133-1">
                                    <div _ngcontent-ryl-c133="" class="promo-content col ng-tns-c133-1">
                                        <h1 _ngcontent-ryl-c133="" class="ng-tns-c133-1">SourCoin</h1>
                                        <br _ngcontent-ryl-c133="" class="ng-tns-c133-1" />
                                        <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">SourCoin is a coin on the Binance Smart Chain, made by Sourblock.</p>
                                        <div _ngcontent-ryl-c133="" class="token-stats-container ng-tns-c133-1">
                                            <div _ngcontent-ryl-c133="" class="token-stat ng-tns-c133-1">
                                                <h6 _ngcontent-ryl-c133="" class="ng-tns-c133-1">Price Per $SOUR</h6>
                                                <p _ngcontent-ryl-c133="" class="ng-tns-c133-1" id="price">Loading...</p>
                                            </div>
                                            <div _ngcontent-ryl-c133="" class="token-stat ng-tns-c133-1">
                                                <h6 _ngcontent-ryl-c133="" class="ng-tns-c133-1">Market Cap</h6>
                                                <p _ngcontent-ryl-c133="" class="ng-tns-c133-1" id="market-cap">Loading...</p>
                                            </div>
                                            <div _ngcontent-ryl-c133="" class="token-stat ng-tns-c133-1">
                                                <h6 _ngcontent-ryl-c133="" class="ng-tns-c133-1">Total Supply</h6>
                                                <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">10,000 $SOUR</p>
                                            </div>
                                        </div>
                                        <div _ngcontent-ryl-c133="" class="d-flex top-button-container ng-tns-c133-1">
                                            <a _ngcontent-ryl-c133="" href="https://pancakeswap.finance/swap?outputCurrency=0x849c55a11bf7ecc2092297dcff2978c68a3debf0" class="mat-focus-indicator token-btn ng-tns-c133-1 mat-raised-button mat-button-base" tabindex="0">
                                                <span class="mat-button-wrapper">Buy Tokens</span><span class="mat-ripple mat-button-ripple"></span><span class="mat-button-focus-overlay"></span>
                                            </a>
                                            <a _ngcontent-ryl-c133="" href="https://discord.gg/mcevent" color="primary" class="mat-focus-indicator tg-btn ng-tns-c133-1 mat-raised-button mat-button-base mat-primary">
                                                <span class="mat-button-wrapper">Discord</span><span class="mat-ripple mat-button-ripple"></span><span class="mat-button-focus-overlay"></span>
                                            </a>
                                            <a _ngcontent-ryl-c133="" mat-raised-button="" class="mat-focus-indicator metamask-btn ng-tns-c133-1 mat-raised-button mat-button-base">
                                                <span class="mat-button-wrapper">Add to Metamask</span><span class="mat-ripple mat-button-ripple"></span><span class="mat-button-focus-overlay"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <img _ngcontent-ryl-c133="" src="assets/images/KCC_2.png" draggable="false" alt="" class="col promo-img responsive-img ng-tns-c133-1" />
                                </div>
                            </div>
                        </section>
                        <div _ngcontent-ryl-c133="" class="wave-background ng-tns-c133-1">
                            <img _ngcontent-ryl-c133="" src="assets/images/video-bg.png" draggable="false" class="small-responsive-img ng-tns-c133-1" />
                            <img _ngcontent-ryl-c133="" src="assets/images/services-bg-1.png" draggable="false" class="ng-tns-c133-1" />
                            <img _ngcontent-ryl-c133="" src="assets/images/about-bg.png" draggable="false" id="about-bg" class="small-responsive-img ng-tns-c133-1" />
                        </div>
                        <section _ngcontent-ryl-c133="" class="ng-tns-c133-1">
                            <div _ngcontent-ryl-c133="" class="wrapper ng-tns-c133-1">
                                <div _ngcontent-ryl-c133="" class="row ng-tns-c133-1">
                                    <div _ngcontent-ryl-c133="" class="promo-content col ng-tns-c133-1">
                                        <h4 _ngcontent-ryl-c133="" class="about-special-title ng-tns-c133-1">ABOUT SOURCOIN</h4>
                                        <h1 _ngcontent-ryl-c133="" class="ng-tns-c133-1">SourCoin Token</h1>
                                        <h3 _ngcontent-ryl-c133="" class="ng-tns-c133-1">$SOUR runs on the Binance Smart Chain.</h3>
                                        <br _ngcontent-ryl-c133="" class="ng-tns-c133-1" />
                                        <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">
                                            [change this]
                                            <!-- Use the below line to start text on a new line (line break).
                                            <br _ngcontent-ryl-c133="" class="ng-tns-c133-1" />
                                             -->
                                        </p>
                                    </div>
                                    <img _ngcontent-ryl-c133="" src="assets/images/KCC_1.png" width="558" height="504" draggable="false" id="about-sour-image" alt="" class="col promo-img ng-tns-c133-1" />
                                </div>
                            </div>
                        </section>
                        <div _ngcontent-ryl-c133="" class="wave-background ng-tns-c133-1">
                            <img _ngcontent-ryl-c133="" src="assets/images/services-bg-1.png" draggable="false" style="transform: translateY(210px);" class="ng-tns-c133-1" />
                        </div>
                        <div _ngcontent-ryl-c133="" class="wave-background ng-tns-c133-1">
                            <img _ngcontent-ryl-c133="" src="assets/images/road_map.png" draggable="false" class="responsive-img roadmap-background-image ng-tns-c133-1" height="937" width="189"  alt=""/>
                        </div>
                        <section _ngcontent-ryl-c133="" class="ng-tns-c133-1">
                            <div _ngcontent-ryl-c133="" class="wrapper text-center ng-tns-c133-1" style="min-height: 800px;">
                                <h1 _ngcontent-ryl-c133="" style="margin-bottom: 60px !important;" class="ng-tns-c133-1">Roadmap</h1>
                                <!-- [change this] change these roadmap points -->
                                <div _ngcontent-ryl-c133="" class="row ng-tns-c133-1">
                                    <div _ngcontent-ryl-c133="" class="col-lg-5 offset-lg-5 col-sm-8 offset-sm-4 ng-tns-c133-1">
                                        <div _ngcontent-ryl-c133="" class="road road-2 ng-tns-c133-1">
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="7"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">Emergence and Design of Ideas.</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">
                                                        Build our team. <br _ngcontent-ryl-c133="" class="ng-tns-c133-1" />
                                                        Concept Development.
                                                    </p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="8"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">FairLaunch</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">Add liquidity to koffeeswap, and launch on the MainNet.</p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="9"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">Independence</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">Making the token independent of its developers by having the contract itself provide most of the liquidity.</p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item road__item-active ng-tns-c133-1"
                                                    data-sr-id="10"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">Marketing Campaign</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">Marketing Improvements. Getting feedback and suggestion from our community to improve &amp; future development.</p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="11"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">Supporting The Network</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">Running our own validator on kcc to support our underlying network.</p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="12"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1"></div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="13"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">Dapp</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">Turning the KuDoge website into a dapp.</p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="14"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">Telegram Members</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">We will reach 2500 telegram members.</p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="15"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">Further developments</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">Future projects in the name of KuDoge, expanding upon our dapp.</p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="16"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">Telegram Members</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">We will reach 5000 telegram members.</p>
                                                </div>
                                            </div>
                                            <div
                                                    _ngcontent-ryl-c133=""
                                                    class="road__item ng-tns-c133-1"
                                                    data-sr-id="17"
                                                    style="visibility: visible; transform: matrix3d(0.9, 0, 0, 0, 0, 0.9, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"
                                            >
                                                <div _ngcontent-ryl-c133="" class="road__item-metka ng-tns-c133-1"></div>
                                                <div _ngcontent-ryl-c133="" class="road__item-content ng-tns-c133-1">
                                                    <div _ngcontent-ryl-c133="" class="road__item-title ng-tns-c133-1">KuCoin Listing</div>
                                                    <p _ngcontent-ryl-c133="" class="ng-tns-c133-1">We will have KuDoge listed on KuCoin.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div _ngcontent-ryl-c133="" class="wave-background ng-tns-c133-1">
                            <img _ngcontent-ryl-c133="" src="assets/images/partners-bg.png" draggable="false" style="margin-top: -10rem;" class="ng-tns-c133-1" />
                            <img _ngcontent-ryl-c133="" src="assets/images/services-bg-1.png" draggable="false" style="margin-top: -10rem; max-height: 1240px; transform: translateY(125px);" class="ng-tns-c133-1" />
                            <img _ngcontent-ryl-c133="" src="assets/images/cases-imgs.png" draggable="false" class="rightSideImg ng-tns-c133-1" />
                            <img _ngcontent-ryl-c133="" src="assets/images/cases-bg.png" draggable="false" class="rightSideImg ng-tns-c133-1" style="right: auto; transform: translate(430px, 180px);" />
                        </div>
                        <section _ngcontent-ryl-c133="" style="margin-top: 30rem;" class="ng-tns-c133-1">
                            <div _ngcontent-ryl-c133="" class="wrapper ng-tns-c133-1">
                                <div _ngcontent-ryl-c133="" class="row tokenomics-row ng-tns-c133-1">
                                    <!-- [change this] Put an image in the path `assets/images/token-img-1.png` and make it 740 by 740 px -->
                                    <img _ngcontent-ryl-c133="" src="assets/images/token-img-1.png" draggable="false" id="tokenomics-promo-img" alt="" class="col promo-img responsive-img ng-tns-c133-1" />
                                    <div
                                            _ngcontent-ryl-c133=""
                                            class="promo-content col tokenomics-reveal ng-tns-c133-1"
                                            data-sr-id="18"
                                            style="
                                                    visibility: visible;
                                                    opacity: 1;
                                                    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
                                                    transition: opacity 0.7s cubic-bezier(0.12, 0.26, 0.42, 1) 0.1s, transform 0.7s cubic-bezier(0.12, 0.26, 0.42, 1) 0.1s;
                                                "
                                    >
                                        <h1 _ngcontent-ryl-c133="" class="mb-4 ng-tns-c133-1">Tokenomics</h1>
                                        <!-- [change this] change these values!! -->
                                        <ul _ngcontent-ryl-c133="" class="token__info-list ng-tns-c133-1">
                                            <li _ngcontent-ryl-c133="" class="ng-tns-c133-1"><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Token name:</span><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">SourCoin</span></li>
                                            <li _ngcontent-ryl-c133="" class="ng-tns-c133-1"><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Ticker Symbol:</span><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Sour</span></li>
                                            <li _ngcontent-ryl-c133="" class="ng-tns-c133-1">
                                                <span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Launch Supply:</span><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">1 Quadrillion</span>
                                            </li>
                                            <li _ngcontent-ryl-c133="" class="ng-tns-c133-1">
                                                <span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Current Supply:</span><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">849.4 Trillion</span>
                                            </li>
                                            <li _ngcontent-ryl-c133="" class="ng-tns-c133-1"><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Launch:</span><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Fair Launch</span></li>
                                            <li _ngcontent-ryl-c133="" class="ng-tns-c133-1">
                                                <span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Blockchain:</span><span _ngcontent-ryl-c133="" class="ng-tns-c133-1">KuCoin Community Chain</span>
                                            </li>
                                            <li _ngcontent-ryl-c133="" class="ng-tns-c133-1">
                                                <span _ngcontent-ryl-c133="" class="ng-tns-c133-1">Whitepaper:</span><a _ngcontent-ryl-c133="" href="/assets/pdf/whitepaper.pdf" target="_blank" class="ng-tns-c133-1">Link</a>
                                            </li>
                                        </ul>
                                        <h2 _ngcontent-ryl-c133="" class="mt-5 ng-tns-c133-1">General description</h2>
                                        <p _ngcontent-ryl-c133="" class="mt-3 ng-tns-c133-1">
                                            Every transaction is limited to 0.5% of supply which is bound to change in the future. Instead of doing a shady presale, KuDoge provides nearly all (98%) of tokens to liquidity right at
                                            the start, keeping dev wallets low. Liquidity at the start will be provided by private dev funds and pulled later on, once the contract itself has the majority of it.
                                        </p>
                                        <p _ngcontent-ryl-c133="" class="mt-3 ng-tns-c133-1">
                                            <span _ngcontent-ryl-c133="" class="ng-tns-c133-1">1.5%</span> to liquidity. <br _ngcontent-ryl-c133="" class="ng-tns-c133-1" />
                                            <span _ngcontent-ryl-c133="" class="ng-tns-c133-1">5.0%</span> burned right away. <br _ngcontent-ryl-c133="" class="ng-tns-c133-1" />
                                            <span _ngcontent-ryl-c133="" class="ng-tns-c133-1">0.5%</span> as KCS to the marketing wallet to help out promote the project. <br _ngcontent-ryl-c133="" class="ng-tns-c133-1" />
                                        </p>
                                        <a _ngcontent-ryl-c133="" mat-raised-button="" href="https://pancakeswap.finance/swap?outputCurrency=0x849c55a11bf7ecc2092297dcff2978c68a3debf0" class="mat-focus-indicator mt-3 buy-sour-button ng-tns-c133-1 mat-raised-button mat-button-base" tabindex="0">
                                            <span class="mat-button-wrapper"> BUY SOUR </span><span matripple="" class="mat-ripple mat-button-ripple"></span><span class="mat-button-focus-overlay"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section _ngcontent-ryl-c133="" class="custom-footer mb-0 ng-tns-c133-1">
                            <div _ngcontent-ryl-c133="" class="flex-fill ng-tns-c133-1">
                                <div _ngcontent-ryl-c133="" class="d-flex copyright-footer ng-tns-c133-1">
                                    <img _ngcontent-ryl-c133="" src="assets/icons/sour-logo.png" draggable="false" height="72" width="72" alt="logo" class="header-logo ng-tns-c133-1" />
                                    <h2 _ngcontent-ryl-c133="" class="m-auto ms-2 ng-tns-c133-1">SourCoin</h2>
                                </div>
                            </div>
                            <div _ngcontent-ryl-c133="" class="flex-fill ng-tns-c133-1">
                                <p _ngcontent-ryl-c133="" style="text-align: right;" class="ng-tns-c133-1">Socials</p>
                                <div _ngcontent-ryl-c133="" id="socialItems" class="d-flex flex-row-reverse ng-tns-c133-1">
                                    <a _ngcontent-ryl-c133="" href="https://t.me/SourCoin" target="_blank" class="mat-ripple ng-tns-c133-1">
                                        <img _ngcontent-ryl-c133="" src="assets/svgs/telegram-plane-brands.svg" alt="telegram" draggable="false" class="ng-tns-c133-1" />
                                    </a>
                                    <a _ngcontent-ryl-c133="" href="https://discord.gg/tFMYgvWWFb" target="_blank" class="mat-ripple ng-tns-c133-1">
                                        <img _ngcontent-ryl-c133="" src="assets/svgs/discord-brands.svg" alt="discord" draggable="false" class="ng-tns-c133-1" />
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.5.2/web3.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="script.js"></script>
<script src="index.js"></script>