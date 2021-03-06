<?php
/**
 * BlogTokenDao.php
 *
 *    Dao class for table blog_tokens
 *
 *  Generated with DaoGen v0.4.8
 *
 * @since    2017-03-18 21:42:54
 * @package  App\Db
 */
#########################################################################################

Use App\Db\AbstractBaseEntity as AbstractBaseEntity;

namespace App\Db;

/**
 * Dao class for rows in table "blog_tokens"
 */
class BlogTokenDao extends \App\Db\AbstractBaseDao
{
  /**
   * Constructor
   *
   * @param string  $connectionname    Database ConnectionName
   */
  public function __construct(string $connectionName='')
  {
    parent::__construct($connectionName);
    $this->setTable('blog_tokens');
    $this->setCacheTTL(60);
  }

  /**
   * Make/Generate an Entity
   *
   * @param  array  $fields             Array with key=value for fields
   * @return object
   */
  function makeEntity(array $fields=[]): AbstractBaseEntity
  {
    $item = new \App\Db\BlogToken(array_change_key_case($fields),CASE_LOWER);
    $this->cacheSetItem($item);

    return $item;
  }

  /**
   * Fetch all records in table
   *
   * @return array
   */
  public function fetchAll(): array
  {
    if ($items = $this->cacheGetAll()) return $items;

    $items =
      $this->fetchCustom(
        'SELECT * FROM {table}'
      );

    if ($items) $this->cacheSetAll($items);

    return $items;
  }

  /**
   * Fetch records by Keywords
   *
   * @param  array $keywords            Array with keyword = value
   * @return array
   */
  public function fetchByKeywords(array $keywords=[]): array
  {
    $where = '';
    $order = '';
    $limit = '';
    $binds = [];

    if (isset($keywords['id']) && strlen($keywords['id'])>0) {
      $where .= 'AND (id = :ID) ';
      $binds[':ID'] = $keywords['id'];
    }

    if (isset($keywords['created_dt']) && strlen($keywords['created_dt'])>0) {
      $where .= 'AND (created_dt = :CREATED_DT) ';
      $binds[':CREATED_DT'] = $keywords['created_dt'];
    }

    if (isset($keywords['modified_dt']) && strlen($keywords['modified_dt'])>0) {
      $where .= 'AND (modified_dt = :MODIFIED_DT) ';
      $binds[':MODIFIED_DT'] = $keywords['modified_dt'];
    }

    if (isset($keywords['sessionid']) && strlen($keywords['sessionid'])>0) {
      $where .= 'AND (sessionid LIKE :SESSIONID) ';
      $binds[':SESSIONID'] = $keywords['sessionid'];
    }

    if (isset($keywords['account_id']) && strlen($keywords['account_id'])>0) {
      $where .= 'AND (account_id = :ACCOUNT_ID) ';
      $binds[':ACCOUNT_ID'] = $keywords['account_id'];
    }

    if (isset($keywords['expires_dt']) && strlen($keywords['expires_dt'])>0) {
      $where .= 'AND (expires_dt = :EXPIRES_DT) ';
      $binds[':EXPIRES_DT'] = $keywords['expires_dt'];
    }

    if (isset($keywords['status']) && strlen($keywords['status'])>0) {
      $where .= 'AND (status = :STATUS) ';
      $binds[':STATUS'] = $keywords['status'];
    }

    if (!empty($where))
      $where = 'WHERE '.ltrim($where,'AND ');

    if (!empty($keywords['order'])) // Note here that we use the $keyword['order'] directly in SQL string.
      $order = ' ORDER BY '.$keywords['order'];

    if (!empty($keywords['limit'])) { // Note here that we use the $keyword['limit'] directly in SQL string.
      if (strcasecmp('mysql',$this->getConnection()->getDriver())==0) {
        $limit = ' LIMIT '.$keywords['limit'];
      } else
      if (strcasecmp('firebird',$this->getConnection()->getDriver())==0) {
        $limit = ' ROWS '.$keywords['limit'];
      }
    }

    return
      $this->fetchCustom(
        'SELECT * FROM {table} '.$where.$order.$limit,
        $binds
      );
  }

  /**
   * Insert $item into database
   *
   * @param  AbstractBaseEntity $item      The item we are inserting
   * @return bool
   */
  public function insert(AbstractBaseEntity &$item): bool
  {
    $id =
      $this->execCustomGetLastId(
        'INSERT INTO {table} '.
        '( id, created_dt, modified_dt, sessionid, account_id, expires_dt, status) '.
        'VALUES '.
        '(:ID,:CREATED_DT,:MODIFIED_DT,:SESSIONID,:ACCOUNT_ID,:EXPIRES_DT,:STATUS)',
        [
          ':ID' => $item->getId(),
          ':CREATED_DT' => $item->getCreatedDt(),
          ':MODIFIED_DT' => $item->getModifiedDt(),
          ':SESSIONID' => $item->getSessionid(),
          ':ACCOUNT_ID' => $item->getAccountId(),
          ':EXPIRES_DT' => $item->getExpiresDt(),
          ':STATUS' => $item->getStatus()
        ]
      );

    $item->setId($id);

    $this->cacheSetItem($item);

    return ($id !=0);
  }

  /**
   * Update $item in database
   *
   * @param  AbstractBaseEntity $item      The item we are updating
   * @return bool
   */
  public function update(AbstractBaseEntity $item): bool
  {
    $ok =
      $this->execCustom(
        'UPDATE {table} SET '.
        ' created_dt = :CREATED_DT, '.
        ' modified_dt = :MODIFIED_DT, '.
        ' sessionid = :SESSIONID, '.
        ' account_id = :ACCOUNT_ID, '.
        ' expires_dt = :EXPIRES_DT, '.
        ' status = :STATUS '.
        'WHERE '.
        ' id = :ID ',
        [
          ':CREATED_DT' => $item->getCreatedDt(),
          ':MODIFIED_DT' => $item->getModifiedDt(),
          ':SESSIONID' => $item->getSessionid(),
          ':ACCOUNT_ID' => $item->getAccountId(),
          ':EXPIRES_DT' => $item->getExpiresDt(),
          ':STATUS' => $item->getStatus(),
          ':ID' => $item->getId()
        ]
      );

    if ($ok) $this->cacheSetItem($item);

    return $ok;
  }

} // EOC

