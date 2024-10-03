<?php
class Users extends CMSNAV
{
    protected $_table_name = 'users';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class Bank extends CMSNAV
{
    protected $_table_name = 'bank';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class BankAuto extends CMSNAV
{
    protected $_table_name = 'bank_auto';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class momo extends CMSNAV
{
    protected $_table_name = 'momo';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class dongtien extends CMSNAV
{
    protected $_table_name = 'dongtien';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class logs extends CMSNAV
{
    protected $_table_name = 'logs';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class dichvu extends CMSNAV
{
    protected $_table_name = 'dichvu';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class taikhoan extends CMSNAV
{
    protected $_table_name = 'taikhoan';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class ruttien extends CMSNAV
{
    protected $_table_name = 'ruttien';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class orders extends CMSNAV
{
    protected $_table_name = 'orders';
    protected $_key = 'code';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class reports extends CMSNAV
{
    protected $_table_name = 'reports';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}
class cards extends CMSNAV
{
    protected $_table_name = 'cards';
    protected $_key = 'id';
    function __construct()
    {
        parent::connect();
    }
    function __destruct()
    {
        parent::dis_connect();
    }
    function add_new($data)
    {
        return parent::insert($this->_table_name, $data);
    }
    function delete_by_id($id)
    {
        return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
    }
    function update_by_id($data, $id)
    {
        return $this->update($this->_table_name, $data, $this->_key."=".(int)$id);
    }
    function select_by_id($select, $id)
    {
        $sql = "SELECT $select FROM ".$this->_table_name." WHERE ".$this->_key." = ".(int)$id;
        return $this->get_row($sql);
    }
    function get_row_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_row($sql);
    }
    function get_list_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->get_list($sql);
    }
    function num_rows_by_id($where)
    {
        $sql = "SELECT * FROM ".$this->_table_name." WHERE ".$where;
        return $this->num_rows($sql);
    }
}