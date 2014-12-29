<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRu3owYCjN4ZKDq1_FogBuzsujxxjRO2g">
        </script>  
        <script type="text/javascript">
        
        var ikonPilih = { penginapan: { ikonEndi: 'http://localhost/sig_kendari_fix/gambar/hotel.png' },
                            instansi: { ikonEndi: 'http://localhost/sig_kendari_fix/gambar/bank.png' },
                            peribadatan: { ikonEndi: 'http://localhost/sig_kendari_fix/gambar/mesjid.png' }
                            };
        
        function initialize() {
            var petaKu = new google.maps.Map(document.getElementById("kanvas"), {
                                center: new google.maps.LatLng(-4.008811, 122.5226748),
                                zoom: 12,
                                mapTypeId: 'roadmap'
                              });
            
            var plg_kendari=new google.maps.Polygon({
                          path:pol_kendari(),
                          strokeColor:'black',
                          strokeOpacity:1,
                          strokeWeight:1,
                          fillColor:"grey",
                          fillOpacity:0
                          });
        
            var plg_mandonga=new google.maps.Polygon({
                          path:pol_mandonga(),
                          strokeColor:'red',
                          strokeOpacity:0.2,
                          strokeWeight:5,
                          fillColor:"grey",
                          fillOpacity:0.5
                          });

            var plg_wua_wua=new google.maps.Polygon({
                          path:pol_wua_wua(),
                          strokeColor:'blue',
                          strokeOpacity:0.2,
                          strokeWeight:5,
                          fillColor:"grey",
                          fillOpacity:0.5
                          });
            
            var infoWindow = new google.maps.InfoWindow;
        
            // Change this depending on the name of your PHP file
            downloadUrl("xml_marker.php", function(data) {
                var xml = data.responseXML;
                var posisi2 = xml.documentElement.getElementsByTagName("posisi");
                for (var i = 0; i < posisi2.length; i++) {
                    var nama = posisi2[i].getAttribute("nama");
                    var titik = new google.maps.LatLng(
                                    parseFloat(posisi2[i].getAttribute("lintang")),
                                    parseFloat(posisi2[i].getAttribute("bujur")));
                    var jenis = posisi2[i].getAttribute("jenis");       
                    var teks = "<b>" + nama + "</b>";
                    var ikon = ikonPilih[jenis];
                    var tondo = new google.maps.Marker({
                                    map:petaKu,
                                    position: titik,
                                    icon: ikon.ikonEndi
                                });
                    tampilInfoWindow(tondo, petaKu, infoWindow, teks);
                }
            });
                
            plg_kendari.setMap(petaKu);
            plg_mandonga.setMap(petaKu);
            plg_wua_wua.setMap(petaKu);
        }
        
        function tampilInfoWindow(tondo, petaKu, infoWindow, teks) {
            google.maps.event.addListener(tondo, 'click', function() {
                infoWindow.setContent(teks);
                infoWindow.open(petaKu, tondo);
            });
        }
              
        function downloadUrl(url, callback) {
            var jaluk = window.ActiveXObject ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest;
            jaluk.onreadystatechange = function() {
                if (jaluk.readyState == 4) {
                    jaluk.onreadystatechange = doNothing;
                    callback(jaluk, jaluk.status);
                }
            };
            jaluk.open('GET', url, true);
            jaluk.send(null);
        }
                  
        function doNothing() {
            
        }
        
        function pol_kendari() {
            var t1 = new google.maps.LatLng(-3.947658, 122.610704);
            var t2 = new google.maps.LatLng(-3.937383, 122.527963);
            var t3 = new google.maps.LatLng(-3.910666, 122.506677);
            var t4 = new google.maps.LatLng(-3.910324, 122.481271);
            var t5 = new google.maps.LatLng(-3.940465, 122.452432);
            var t6 = new google.maps.LatLng(-4.017527, 122.440759);
            var t7 = new google.maps.LatLng(-4.054856, 122.481271);
            var t8 = new google.maps.LatLng(-4.091157, 122.527963);
            var t9 = new google.maps.LatLng(-4.052459, 122.605554);
            var t10 = new google.maps.LatLng(-4.004855, 122.649156);
            var titik_kendari = [t1,t2,t3,t4,t5,t6,t7,t8,t9,t10];
            return titik_kendari;
        }
          
        function pol_mandonga() {
            var t1 = new google.maps.LatLng(-3.910175, 122.505851);
            var t2 = new google.maps.LatLng(-3.910517, 122.481475);
            var t3 = new google.maps.LatLng(-3.917368, 122.472892);
            var t4 = new google.maps.LatLng(-3.956414, 122.509627);
            var t5 = new google.maps.LatLng(-3.965662, 122.511344);
            var t6 = new google.maps.LatLng(-3.976622, 122.516150);
            var t7 = new google.maps.LatLng(-3.979704, 122.524390);
            var t8 = new google.maps.LatLng(-3.978677, 122.531600);
            var t9 = new google.maps.LatLng(-3.965662, 122.522673);
            var t10 = new google.maps.LatLng(-3.953332, 122.524047);
            var t11 = new google.maps.LatLng(-3.934494, 122.522330);
            var t12 = new google.maps.LatLng(-3.911202, 122.507224);
            var ruteKu = [t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12];
            
            return ruteKu;
        }
          
        function pol_wua_wua() {
            var t1 = new google.maps.LatLng(-3.996167, 122.499944);
            var t2 = new google.maps.LatLng(-3.988804, 122.505780);
            var t3 = new google.maps.LatLng(-3.985379, 122.492648);
            var t4 = new google.maps.LatLng(-3.976645, 122.490931);
            var t5 = new google.maps.LatLng(-3.992742, 122.479516);
            var t6 = new google.maps.LatLng(-3.999250, 122.468272);
            var t7 = new google.maps.LatLng(-4.011237, 122.485524);
            var t8 = new google.maps.LatLng(-4.013292, 122.499171);
            var t9 = new google.maps.LatLng(-4.009353, 122.514363);
            var t10 = new google.maps.LatLng(-4.007041, 122.511273);
            var t11 = new google.maps.LatLng(-4.000448, 122.513419);
            var t12 = new google.maps.LatLng(-3.996339, 122.500115);
            var ruteKu = [t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12];
            
            return ruteKu;
        }
    
    </script>
    
    </head>
    
    <body onload="initialize()">
        <section id="wrapper">
            <header>                              
                <div id="logo">
                </div>
                <h1 style="text-align: center;">Sistem Informasi Geografis<br>Kota Kendari</h1>
                <nav>
                    <ul>
                        <li><a href="tambah_data.php">TAMBAH DATA</a></li>
                        <li><a href="index.php">HOME</a></li>                      
                    </ul>
                </nav>
            </header>
            <aside>
                <h1>Keterangan</h1>
                    <ul>
                        <li>Masjid <br> <img src="gambar/mesjid.png"></li>
                        <li>Hotel <br> <img src="gambar/hotel.png"></li>
                        <li>Bank <br> <img src="gambar/bank.png"></li>
                    </ul>
                <h1>Kecamatan</h1>
                    <ul>
                        <li>Mandonga</li>
                            <span style="font-size: 9px;">
                                Jumlah Penduduk = 36,163 <br>
                                Warna blok = <span style="color: red;">Merah</span> 
                            </span>
                        <li>Wua-wua</li>
                        <span style="font-size: 9px;">
                                Jumlah Penduduk = 24,407 <br>
                                Warna blok = <span style="color: blue;">Biru</span>
                        </span>
                    </ul>
            </aside>
            <section id="kanvas">
                <h1>Peta</h1>
            </section>
            <footer>
                <h1>By Irfan. S (105410017)</h1>
            </footer>
        </section>
    </body>

</html>