<?php
    class GET {
        public function fetch_items() {
            global $pdo;
            $query = $pdo->prepare("SELECT item FROM store");
            $query->execute();
            $count = count($query);
            foreach ($query as $this_row) {
                echo '<li class= "odd">',$this_row[0],'</li>';
            }
        }

        public function fetch_numbers(){
            global $pdo;
            $query = $pdo->prepare("SELECT instances FROM store");
            $query->execute();
            $count = count($query);
            foreach ($query as $this_row) {
                echo '<li class= "nlist">',$this_row[0],'</li>';
            }
        }
    }
?>
