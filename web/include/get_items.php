<?php
    class GET {
        public function fetch_items($username) {
            global $pdo;
            $query = $pdo->prepare("SELECT item FROM $username ORDER BY instances DESC");
            $query->execute();
            $count = count($query);
            foreach ($query as $this_row) {
                echo '<li class= "odd">',$this_row[0],'</li>';
            }
        }

        public function fetch_numbers($username){
            global $pdo;
            $query = $pdo->prepare("SELECT instances FROM $username ORDER BY instances DESC");

            $query->execute();
            $count = count($query);
            foreach ($query as $this_row) {
                echo '<li class= "nlist">',$this_row[0],'</li>';
            }
        }
    }
?>
