<script src="mode/ajaxtest.js"></script>
<?php
/*
function putRow($s){
    echo '<div class = "prenotazione"><p>'.$s.'</p></div>';
}

$server = "fdb13.biz.nf";
$user   = "2194486_pren";
$pass   = "IlDatabaseForte1";
$db     = "2194486_pren";

try{
    $conn = new PDO("mysql:host=$server;dbname=$db",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT * FROM prenotazione");
    $stmt->execute(array());
    
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $value) {
        putRow($value["nome"]." - ".$value["cognome"]);
    }
    
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$conn = null;
*/
?>
<div id ="p0"></div>




