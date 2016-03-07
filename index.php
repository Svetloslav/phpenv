<?php
echo "Hellow ".(isset($_GET['name']) ? $_GET['name'] : "World");