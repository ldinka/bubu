<?php

class Template {

    public static function showTemplate($nameTemplate, $arrayTemplate = array())
    {
        echo Template::applyTemplate("templates/$nameTemplate.php", $arrayTemplate);
    }

    private static function applyTemplate($tpl_name, $params = Array()){
        $handle = fopen($tpl_name, "r");
        $content = @fread($handle, filesize($tpl_name));
        fclose($handle);
        foreach($params as $k => $p){
            if(!is_int($k)){
                $cmd = '$'.$k.' = $p;';
                eval($cmd);
            }
        }
        ob_start();
        eval('?>'.$content.'<?');
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }
}
