<?php



class CategorielogementactuelMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CategorielogementactuelMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('categorielogementactuel');
		$tMap->setPhpName('Categorielogementactuel');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('LISTCATEGORIELOGEMENTACTUEL', 'Listcategorielogementactuel', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 