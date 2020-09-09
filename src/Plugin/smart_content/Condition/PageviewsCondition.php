<?php

namespace Drupal\smart_content_pageviews\Plugin\smart_content\Condition;

use Drupal\smart_content\Condition\ConditionTypeConfigurableBase;

/**
 * Provides a default Smart Condition.
 *
 * @SmartCondition(
 *   id = "pageviews",
 *   label = @Translation("Pageviews"),
 *   type = "number",
 *   group = "browser",
 *   weight = 0,
 * )
 */
class PageviewsCondition extends ConditionTypeConfigurableBase {

  /**
   * @inheritdoc
   */
  public function getLibraries() {
    $libraries = array_unique(array_merge(parent::getLibraries(), ['smart_content_pageviews/condition.pageviews']));
    return $libraries;
  }

}
