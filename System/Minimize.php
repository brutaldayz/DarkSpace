<?php
   function minify_everything($buffer) {	
        $buffer = preg_replace(array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s','/<!--(.|\s)*?-->/', '/\s+/'), array('>','<','\\1','', ' '), $buffer);	
        return $buffer;
    }
    ob_start("minify_everything");
?>