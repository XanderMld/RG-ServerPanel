<?php
/*
 *    Copyright (C) 2011 Michael Riedmann <michael.riedmann@gmx.net>    
 *
 *    his file is part of StupidPrlf.
 *
 *    StupidPrlf is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    StupidPrlf is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with StupidPrlf.  If not, see <http://www.gnu.org/licenses/>.
 */

class i18n{
    private static $l = array();

    public static function load(){
        $lang = Environment::get_value('lang');
        foreach(glob(APP_ROOT . "/lang/{$lang}/*.yml") as $filename){
            $l = sfYaml::load($filename);
            self::$l = array_merge(self::$l, $l);
        }
    }
    
    public static function get(){
        $keys = func_get_args();
        $tmp = self::$l;
        foreach($keys as $key){
            if(is_array($tmp))
                $tmp = $tmp[$key];
        }
        if(empty($tmp) || is_array($tmp)){
            $tmp = '$' . implode(' - ', $keys) . '$';
        }
        return $tmp;
    }
}

?>
