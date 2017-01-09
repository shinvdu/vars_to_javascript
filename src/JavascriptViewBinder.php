<?php

namespace Drupal\vars_to_javascript;

use Laracasts\Utilities\JavaScript\ViewBinder;
/**
 * Class JavascriptService.
 *
 * @package Drupal\phpexcel
 */
class JavascriptViewBinder implements ViewBinder {

    // $js will contain your JS-formatted variable initializations
    public function bind($js)
    {
        // Do what you need to do to add this JavaScript to
        // the appropriate place in your app.
      $javascript =<<<JavaScript
     <script  type="text/javascript" charset="utf-8" >
     {$js}
     </script>
JavaScript;

      set_bottom_script($javascript);
    }
}