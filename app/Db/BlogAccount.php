<?php 
/** 
 * BlogAccount.php
 *
 *    Entity for table blog_accounts
 *
 *  Generated with DaoGen v0.4.8
 *
 * @since    2017-03-18 21:42:54
 * @package  Nofuzz Appliction
 */
#########################################################################################
/*
JSON Model:
{
  "id": 0,
  "created_dt": "1970-01-01 00:00:00",
  "modified_dt": "1970-01-01 00:00:00",
  "uuid": "",
  "login_name": "",
  "first_name": "",
  "last_name": "",
  "email": "",
  "jwt_secret": "",
  "pw_salt": "",
  "pw_hash": "",
  "pw_iterations": 0,
  "status": 0
}
*/
#########################################################################################

namespace App\Db;

/** 
 * Class representing rows in table "blog_accounts"
 */
class BlogAccount extends \App\Db\AbstractBaseEntity
{
  protected $id;                                // id BigInt(20) NOT NULL AUTO_INCREMENT
  protected $created_dt;                        // created_dt DateTime
  protected $modified_dt;                       // modified_dt DateTime
  protected $uuid;                              // uuid NVarChar(64) COLLATE utf8_general_ci
  protected $login_name;                        // login_name NVarChar(32) COLLATE utf8_general_ci
  protected $first_name;                        // first_name NVarChar(32) COLLATE utf8_general_ci
  protected $last_name;                         // last_name NVarChar(32) COLLATE utf8_general_ci
  protected $email;                             // email NVarChar(128) COLLATE utf8_general_ci
  protected $jwt_secret;                        // jwt_secret NVarChar(64) COLLATE utf8_general_ci
  protected $pw_salt;                           // pw_salt NVarChar(128) COLLATE utf8_general_ci
  protected $pw_hash;                           // pw_hash NVarChar(128) COLLATE utf8_general_ci
  protected $pw_iterations;                     // pw_iterations Integer(11) DEFAULT 1
  protected $status;                            // status SmallInt(6) DEFAULT 0

  /**
   * Clear properties to default values
   *
   * @return   self
   */
  public function clear()
  {
    $this->setId(0);
    $this->setCreatedDt((new \DateTime("now",new \DateTimeZone("UTC")))->format("Y-m-d H:i:s"));
    $this->setModifiedDt((new \DateTime("now",new \DateTimeZone("UTC")))->format("Y-m-d H:i:s"));
    $this->setUuid('');
    $this->setLoginName('');
    $this->setFirstName('');
    $this->setLastName('');
    $this->setEmail('');
    $this->setJwtSecret('');
    $this->setPwSalt('');
    $this->setPwHash('');
    $this->setPwIterations(0);
    $this->setStatus(0);

    return $this;
  }

  /**
   * Return object as array
   *
   * @return   array
   */
  public function asArray(): array
  {
    $result['id'] = $this->getId();
    $result['created_dt'] = $this->getCreatedDt();
    $result['modified_dt'] = $this->getModifiedDt();
    $result['uuid'] = $this->getUuid();
    $result['login_name'] = $this->getLoginName();
    $result['first_name'] = $this->getFirstName();
    $result['last_name'] = $this->getLastName();
    $result['email'] = $this->getEmail();
    $result['jwt_secret'] = $this->getJwtSecret();
    $result['pw_salt'] = $this->getPwSalt();
    $result['pw_hash'] = $this->getPwHash();
    $result['pw_iterations'] = $this->getPwIterations();
    $result['status'] = $this->getStatus();

    return $result;
  }

  /**
   * Set properties from array
   *
   * @return   self
   */
  public function fromArray(array $a)
  {
    $this->setId($a['id'] ?? 0);
    $this->setCreatedDt($a['created_dt'] ?? (new \DateTime("now",new \DateTimeZone("UTC")))->format("Y-m-d H:i:s"));
    $this->setModifiedDt($a['modified_dt'] ?? (new \DateTime("now",new \DateTimeZone("UTC")))->format("Y-m-d H:i:s"));
    $this->setUuid($a['uuid'] ?? '');
    $this->setLoginName($a['login_name'] ?? '');
    $this->setFirstName($a['first_name'] ?? '');
    $this->setLastName($a['last_name'] ?? '');
    $this->setEmail($a['email'] ?? '');
    $this->setJwtSecret($a['jwt_secret'] ?? '');
    $this->setPwSalt($a['pw_salt'] ?? '');
    $this->setPwHash($a['pw_hash'] ?? '');
    $this->setPwIterations($a['pw_iterations'] ?? 0);
    $this->setStatus($a['status'] ?? 0);

    return $this;
  }

  public function getId()
  {
    if (!is_null($this->id)) return (int) $this->id;

    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  public function getCreatedDt()
  {

    return $this->created_dt;
  }

  public function setCreatedDt($created_dt)
  {
    if (strcasecmp($created_dt,'0000-00-00 00:00:00')==0) $created_dt = null;

    $this->created_dt = $created_dt;

    if (!is_null($created_dt))
      $this->created_dt = (new \DateTime($created_dt,new \DateTimeZone("UTC")))->format("Y-m-d H:i:s");

    return $this;
  }

  public function getModifiedDt()
  {

    return $this->modified_dt;
  }

  public function setModifiedDt($modified_dt)
  {
    if (strcasecmp($modified_dt,'0000-00-00 00:00:00')==0) $modified_dt = null;

    $this->modified_dt = $modified_dt;

    if (!is_null($modified_dt))
      $this->modified_dt = (new \DateTime($modified_dt,new \DateTimeZone("UTC")))->format("Y-m-d H:i:s");

    return $this;
  }

  public function getUuid()
  {

    return $this->uuid;
  }

  public function setUuid($uuid)
  {
    $this->uuid = $uuid;

    return $this;
  }

  public function getLoginName()
  {

    return $this->login_name;
  }

  public function setLoginName($login_name)
  {
    $this->login_name = $login_name;

    return $this;
  }

  public function getFirstName()
  {

    return $this->first_name;
  }

  public function setFirstName($first_name)
  {
    $this->first_name = $first_name;

    return $this;
  }

  public function getLastName()
  {

    return $this->last_name;
  }

  public function setLastName($last_name)
  {
    $this->last_name = $last_name;

    return $this;
  }

  public function getEmail()
  {

    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  public function getJwtSecret()
  {

    return $this->jwt_secret;
  }

  public function setJwtSecret($jwt_secret)
  {
    $this->jwt_secret = $jwt_secret;

    return $this;
  }

  public function getPwSalt()
  {

    return $this->pw_salt;
  }

  public function setPwSalt($pw_salt)
  {
    $this->pw_salt = $pw_salt;

    return $this;
  }

  public function getPwHash()
  {

    return $this->pw_hash;
  }

  public function setPwHash($pw_hash)
  {
    $this->pw_hash = $pw_hash;

    return $this;
  }

  public function getPwIterations()
  {
    if (!is_null($this->pw_iterations)) return (int) $this->pw_iterations;

    return $this->pw_iterations;
  }

  public function setPwIterations($pw_iterations)
  {
    $this->pw_iterations = $pw_iterations;

    return $this;
  }

  public function getStatus()
  {
    if (!is_null($this->status)) return (int) $this->status;

    return $this->status;
  }

  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

} // EOC

