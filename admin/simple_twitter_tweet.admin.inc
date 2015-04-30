<?php
/**
 * @file
 * Simple Twitter tweet admin page.
 */

/**
 * Settings form.
 */
function simple_twitter_tweet_settings() {
  $form = array();
  $form['simple_twitter_tweet'] = array(
    '#type'   => 'fieldset',
    '#title'  => t('Simple Twitter block settings'),
  );
  $form['simple_twitter_tweet']['simple_twitter_tweet_text'] = array(
    '#type'           => 'textfield',
    '#title'          => t('Text'),
    '#default_value'  => variable_get('simple_twitter_tweet_text', ''),
    '#required'       => TRUE,
  );
  return system_settings_form($form);
}
