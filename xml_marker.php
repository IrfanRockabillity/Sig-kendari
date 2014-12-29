<?php
    include "koneksi.php";
    
    function parseToXML($htmlStr) {
        $xmlStr=str_replace('<','&lt;',$htmlStr);
        $xmlStr=str_replace('>','&gt;',$xmlStr);
        $xmlStr=str_replace('"','&quot;',$xmlStr);
        $xmlStr=str_replace("'",'&#39;',$xmlStr);
        $xmlStr=str_replace("&",'&amp;',$xmlStr);
        return $xmlStr;
    }
    
    // Select all the rows in the markers table
    
    $query = "SELECT * FROM penanda WHERE 1";
    $result = mysql_query($query);
    
    if (!$result) {
      die('Invalid query: ' . mysql_error());
    }
    
    header("Content-type: text/xml");
    
    // Start XML file, echo parent node
    echo '<penanda>';
    
    // Iterate through the rows, printing XML nodes for each
    while ($row = @mysql_fetch_assoc($result)) {
      // ADD TO XML DOCUMENT NODE+
        echo '<posisi ';
        echo 'nama="' . parseToXML($row['nama_objek']) . '" ';
        echo 'lintang="' . $row['lintang'] . '" ';
        echo 'bujur="' . $row['bujur'] . '" ';
        echo 'jenis="' . $row['jenis'] . '" ';
        echo '/>';
    }
    echo '</penanda>';

?>