
<?php
class Ampel{
    
    private static $_zustand = 0;
    
    
    public function baka(){
       /* $loops = 8; 
        $subloops = 16;
        for ($i = 0; $i < $loops; $i++) {
            $start = microtime(true);
            for ($n = 0; $n < $subloops; $n++) {
          // Send your requests here.
            }
            while ((microtime(true) - $start) < 1) {}
        }  */
        
            sleep(2);
            return "baka";
        
    }
}
/*
$base = new EventBase();
$n = 2;
$e = Event::timer($base, function($n) use (&$e) {
    echo "$n seconds elapsed\n";
    $e->delTimer();
}, $n);
$e->addTimer($n);
$base->loop();
 */
?>