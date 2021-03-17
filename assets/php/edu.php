<?php
  function includeFile($file, $variables)
  {
      extract($variables);
      include($file);
  }
