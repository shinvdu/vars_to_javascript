<?php

namespace Drupal\vars_to_javascript;
use Drupal\vars_to_javascript\JavascriptViewBinder;
use Laracasts\Utilities\JavaScript\PHPToJavaScriptTransformer;
use Drupal\Core\Site\Settings;


/**
 * Class JavascriptService.
 *
 * @package Drupal\vars_to_javascript
 */
class JavascriptService {
  private $javascript;
  /**
   * Constructor.
   */
  public function __construct() {
    $binder = new JavascriptViewBinder;
    $namespace = Settings::get('js_namespace', 'php');

    $this->javascript = new PHPToJavaScriptTransformer($binder, $namespace); 
  }
  public function put($ar){
    $this->javascript->put($ar);
  }
}
