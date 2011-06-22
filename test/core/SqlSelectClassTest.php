<?php

class SqlSelectTest extends PHPUnit_Framework_TestCase {

    var $table = 'testTable';
    var $fields = array('id', 'testid', 'tField1', 'testField2');
    var $fields_str;
    var $pk = 'testid';

    function setUp() {
        $this->fields_str = SqlQuery::fields_to_sql($this->fields, $this->table);
    }

    function testArgsTableFieldsPK() {
        $sql = new SqlSelect($this->table, $this->fields, $this->pk);

        $testString = "SELECT {$this->fields_str} FROM {$this->table}";
        $this->assertEquals($testString, (string) $sql);
    }

    function testArgsTableFields() {
        $sql = new SqlSelect($this->table, $this->fields);

        $testString = "SELECT {$this->fields_str} FROM {$this->table}";
        $this->assertEquals($testString, (string) $sql);
    }

    function testArgsTable() {
        $sql = new SqlSelect($this->table);
        
        $testString = "SELECT {$this->table}.* FROM {$this->table}";
        $this->assertEquals($testString, (string) $sql);
    }

}
