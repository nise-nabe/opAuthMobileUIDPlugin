<?php

/**
 * sfOpenPNEAuthContainer_MobileUID will handle credential for MobileUID.
 *
 * @package    OpenPNE
 * @subpackage user
 * @author     Kousuke Ebihara <ebihara@tejimaya.com>
 */
class sfOpenPNEAuthContainer_MobileUID extends sfOpenPNEAuthContainer
{
  protected $authModuleName = 'mobileUID';

  /**
   * Fetches data from storage container.
   *
   * @param  sfForm $form
   * @return int    the member id
   */
  public function fetchData($form)
  {
    $mobileUID = sfContext::getInstance()->getRequest()->getMobileUID();
    $memberConfig = MemberConfigPeer::retrieveByNameAndValue('mobile_uid', $mobileUID);

    if ($memberConfig) {
      return $memberConfig->getMemberId();
    }

    return false;
  }

  /**
   * Returns true if the current state is a beginning of register.
   *
   * @return bool returns true if the current state is a beginning of register, false otherwise
   */
  public function isRegisterBegin($member_id = null)
  {
    return false;
  }

  /**
   * Returns true if the current state is a end of register.
   *
   * @return bool returns true if the current state is a end of register, false otherwise
   */
  public function isRegisterFinish($member_id = null)
  {
    return false;
  }

  /**
   * Registers data to storage container.
   *
   * @param  int    $memberId
   * @param  sfForm $form
   * @return bool   true if the data has already been saved, false otherwise
   */
  public function registerData($memberId, $form)
  {
    return false;
  }
}
