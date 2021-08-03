<?php
    try {
        $date = date('d/m/Y H:i:s', time());

        $flag = $_POST["Flag"];
    }  catch (Throwable $e) {
    }

    if(isset($flag) && !empty($flag)) {

        if($flag == "CSA{Pl3ase_h1r3_m3}") {
            try {
                $myfile = fopen("../log.txt", "a");
                fwrite($myfile, $_SERVER['REMOTE_ADDR'] . ' ' . $date . ' - got the flag!' . "\n");
                fclose($myfile);
            }  catch (Throwable $e) {
            }

            $text = "
                <p>
                    Congratulations! :)
                </p>
            ";
            echo '<div class="row correct" id="main-content"><div class="col-12">' . $text . '</div></div>';
        }
        else {
            try{
                $myfile = fopen("../log.txt", "a");
                fwrite($myfile, $_SERVER['REMOTE_ADDR'] . ' ' . $date . ' - got wrong flag!' . ' ' .$flag . "\n");
                fclose($myfile);
            } catch (Throwable $e) {
            }
            echo '<div class="row" id="main-content"><div class="col-12"><p>Incorrect! :\'(</p></div></div>';
        }
    }
    else {
        try {
            $myfile = fopen("../log.txt", "a");
            fwrite($myfile, $_SERVER['REMOTE_ADDR'] . ' ' . $date . ' - got no flag!' . "\n");
            fclose($myfile);
        } catch (Throwable $e) {
        }
        echo '<div class="row" id="main-content"><div class="col-12"><p>Flag not found :\'(</p></div></div>';
    }