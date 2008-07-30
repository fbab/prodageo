<?php


abstract class BaseComment extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $post_id;


	
	protected $author;


	
	protected $email;


	
	protected $body;


	
	protected $created_at;

	
	protected $aPost;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getPostId()
	{

		return $this->post_id;
	}

	
	public function getAuthor()
	{

		return $this->author;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getBody()
	{

		return $this->body;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CommentPeer::ID;
		}

	} 
	
	public function setPostId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->post_id !== $v) {
			$this->post_id = $v;
			$this->modifiedColumns[] = CommentPeer::POST_ID;
		}

		if ($this->aPost !== null && $this->aPost->getId() !== $v) {
			$this->aPost = null;
		}

	} 
	
	public function setAuthor($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->author !== $v) {
			$this->author = $v;
			$this->modifiedColumns[] = CommentPeer::AUTHOR;
		}

	} 
	
	public function setEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = CommentPeer::EMAIL;
		}

	} 
	
	public function setBody($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->body !== $v) {
			$this->body = $v;
			$this->modifiedColumns[] = CommentPeer::BODY;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = CommentPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->post_id = $rs->getInt($startcol + 1);

			$this->author = $rs->getString($startcol + 2);

			$this->email = $rs->getString($startcol + 3);

			$this->body = $rs->getString($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Comment object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CommentPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CommentPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(CommentPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CommentPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aPost !== null) {
				if ($this->aPost->isModified()) {
					$affectedRows += $this->aPost->save($con);
				}
				$this->setPost($this->aPost);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CommentPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CommentPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aPost !== null) {
				if (!$this->aPost->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPost->getValidationFailures());
				}
			}


			if (($retval = CommentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CommentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getPostId();
				break;
			case 2:
				return $this->getAuthor();
				break;
			case 3:
				return $this->getEmail();
				break;
			case 4:
				return $this->getBody();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CommentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPostId(),
			$keys[2] => $this->getAuthor(),
			$keys[3] => $this->getEmail(),
			$keys[4] => $this->getBody(),
			$keys[5] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CommentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setPostId($value);
				break;
			case 2:
				$this->setAuthor($value);
				break;
			case 3:
				$this->setEmail($value);
				break;
			case 4:
				$this->setBody($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CommentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPostId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAuthor($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setBody($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CommentPeer::DATABASE_NAME);

		if ($this->isColumnModified(CommentPeer::ID)) $criteria->add(CommentPeer::ID, $this->id);
		if ($this->isColumnModified(CommentPeer::POST_ID)) $criteria->add(CommentPeer::POST_ID, $this->post_id);
		if ($this->isColumnModified(CommentPeer::AUTHOR)) $criteria->add(CommentPeer::AUTHOR, $this->author);
		if ($this->isColumnModified(CommentPeer::EMAIL)) $criteria->add(CommentPeer::EMAIL, $this->email);
		if ($this->isColumnModified(CommentPeer::BODY)) $criteria->add(CommentPeer::BODY, $this->body);
		if ($this->isColumnModified(CommentPeer::CREATED_AT)) $criteria->add(CommentPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CommentPeer::DATABASE_NAME);

		$criteria->add(CommentPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setPostId($this->post_id);

		$copyObj->setAuthor($this->author);

		$copyObj->setEmail($this->email);

		$copyObj->setBody($this->body);

		$copyObj->setCreatedAt($this->created_at);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CommentPeer();
		}
		return self::$peer;
	}

	
	public function setPost($v)
	{


		if ($v === null) {
			$this->setPostId(NULL);
		} else {
			$this->setPostId($v->getId());
		}


		$this->aPost = $v;
	}


	
	public function getPost($con = null)
	{
		if ($this->aPost === null && ($this->post_id !== null)) {
						$this->aPost = PostPeer::retrieveByPK($this->post_id, $con);

			
		}
		return $this->aPost;
	}

} 