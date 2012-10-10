<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonySmsCsvSlotStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonySmsCsvSlotStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonySmsCsvSlotStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonySmsCsvSlotStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonySmsCsvSlotStruct item
	 * @return OvhTypeMyArrayOfTelephonySmsCsvSlotStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonySmsCsvSlotStruct item
	 * @return telephonySmsCsvSlotStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonySmsCsvSlotStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonySmsCsvSlotStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonySmsCsvSlotStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonySmsCsvSlotStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonySmsCsvSlotStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonySmsCsvSlotStruct
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'item'
	 */
	public function getAttributeName()
	{
		return 'item';
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>