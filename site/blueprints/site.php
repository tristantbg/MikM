<?php if(!defined('KIRBY')) exit ?>

title: Site
fields:
  generalSettings:
    label: Site Settings
    type: headline
  title:
    label: Title
    type:  text
  subtitle:
    label: Subtitle
    type:  text
  description:
    label: Description
    type:  textarea
  copyright:
  	label: Copyright
  	type: textarea
  keywords:
    label: Keywords
    type:  tags
  mail:
    label: Email contact
    type: email
  customcss:
    label: Custom CSS
    type: textarea
    buttons: false
  googleAnalytics:
    label: Google Analytics ID
    type: text
    icon: code
    help: Tracking ID in the form UA-XXXXXXXX-X. Keep this field empty if you are not using it.
    width: 1/2
  ogimage:
    label: Facebook OpenGraph image
    type: image
    width: 1/2