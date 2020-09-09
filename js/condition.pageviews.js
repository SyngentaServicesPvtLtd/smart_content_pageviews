(function (Drupal, drupalSettings) {
  Drupal.smartContent = Drupal.smartContent || {};
  Drupal.smartContent.plugin = Drupal.smartContent.plugin || {};
  Drupal.smartContent.plugin.Field = Drupal.smartContent.plugin.Field || {};

  Drupal.smartContent.plugin.Field['pageviews'] = function (condition) {
    const pageviewsSoFar = Drupal.smartContent.storage.getValue('sc_pageviews');
    Drupal.smartContent.storage.setValue('sc_pageviews', pageviewsSoFar + 1, -1);
    return pageviewsSoFar;
  };

}(Drupal, drupalSettings));
