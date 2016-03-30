<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true

fields:
  title:
    label: Title
    type: text
  body:
    label: Body
    type: textarea

  modules:
    label: Modules
    type: modules

    modules:
      types:
        - Hero