<?php
class Guild extends BaseModel {
    static $dbname = 'realm';
    static $dbid = null;
    static $table = 'guild';
    static $primary_key = 'guildid';
    static $name_field = 'name';
    static $plural = 'guilds';
    static $fields = array(
        'guildid',
        'name',
        'leaderguid',
        'info',
        'motd',
        'createdate',
        'BankMoney'
    );
    
    static $relations = array(
        'leader' => array(
            'model' => 'Character',
            'type' => 'has_one',
            'field' => 'guid',
            'fk' => 'leaderguid',
            'lambda' => array(
                '$find->realm($lambda->realm->id);'
            )
        )
    );
    
    public function scope_realm($find, $realm_id){
        $find->dbid = $realm_id;
        $find->additions(array('realm' => Realm::find($realm_id)));
        return $find;
    }
    
}
