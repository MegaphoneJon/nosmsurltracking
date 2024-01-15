<?php

require_once 'nosmsurltracking.civix.php';

function nosmsurltracking_civicrm_postProcess($formName, &$form) {
  if ($formName == 'CRM_SMS_Form_Upload') {
    civicrm_api3('Mailing', 'create', ['id' => $form->_mailingID, 'url_tracking' => 0]);
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function nosmsurltracking_civicrm_config(&$config) {
  _nosmsurltracking_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function nosmsurltracking_civicrm_install() {
  _nosmsurltracking_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function nosmsurltracking_civicrm_enable() {
  _nosmsurltracking_civix_civicrm_enable();
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *
 */
