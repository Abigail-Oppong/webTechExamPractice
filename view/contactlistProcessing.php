<?php
        require('../controllers/personcontroller.php');
function item()
{
        $displaylist = displayallcontacts();

        if ($displaylist){


                foreach ($displaylist as $value){
                    //return $value;

                          return $value;

                    }

                    //return $value;

            }else{
                return 'USER_DOES_NOT_EXIST';
            }
}
    ?>
