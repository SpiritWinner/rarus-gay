<?php

  $last = function ($text) {
        if (empty($text)) {
            return null;
        } return $text[strlen($text) - 1];
  };
