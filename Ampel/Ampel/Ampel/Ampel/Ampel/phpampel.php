
<?php
class Ampel{
    public static $_status = 0;
    
    public function zustand(){
        /*$GLOBALS['status'] = $GLOBALS['status'] + 1;
        if($GLOBALS['status'] == 4){
            $GLOBALS['status'] = 0;
        }*/
        self::$_status = self::$_status + 1;
        if(self::$_status == 4){
            self::$_status = 0;
        }
        return self::$_status;
    }
}

?>