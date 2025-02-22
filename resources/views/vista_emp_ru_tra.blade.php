<?php
if ( !isset($_GET["submit"]))
{
	exit();
}

$codigo=$_GET["ID_Empresa_Transp"];
 $tramo=$_GET["ID_Ruta"];
?>
<style type="text/css">
            /* Always set the map height explicitly to define the size of the div
            * element that contains the map. */
            #canvas {
            	height: 70%;
            }

            /* Optional: Makes the sample page fill the window. */
            html,
            body {
            	height: 70%;
            	margin: 0;
            	padding: 0;
            }
        </style>
        
        <script src="js/wicket.js" type="text/javascript">
        </script>
        <script src="js/wicket-gmap3.js" type="text/javascript">
        </script>
      <script src="https://maps.googleapis.com/maps/api/js?libraries=drawing&key=AIzaSyBzi3S9cTrkjwYl6QcizSW2gLz4foG2HsA" type="text/javascript"></script>
        <script type="text/javascript">
        	var app = (function () {
        		return {
        			features: [],
        /**
         * Clears the map contents.
         */
         clearMap: function () {
         	var i;

            // Reset the remembered last string (so that we can clear the map,
            //  paste the same string, and see it again)
            document.getElementById('wkt').last = '';

            for (i in this.features) {
            	if (this.features.hasOwnProperty(i)) {
            		this.features[i].setMap(null);
            	}
            }
            this.features.length = 0;
        },
        /**
         * Clears the current contents of the textarea.
         */
         clearText: function () {
         	document.getElementById('wkt').value = '';
         },
        /**
         * Maps the current contents of the textarea.
         * @return  {Object}    Some sort of geometry object
         */
         mapIt: function () {
         	var el, obj, wkt;

         	el = document.getElementById('wkt');
         	wkt = new Wkt.Wkt();

            if (el.last === el.value) { // Remember the last string
                return; // Do nothing if the WKT string hasn't changed
            } else {
            	el.last = el.value;
            }

            try { // Catch any malformed WKT strings
            	wkt.read(el.value);
            } catch (e1) {
            	try {
            		wkt.read(el.value.replace('\n', '').replace('\r', '').replace('\t', ''));
            	} catch (e2) {
            		if (e2.name === 'WKTError') {
            			alert('Wicket could not understand the WKT string you entered. Check that you have parentheses balanced, and try removing tabs and newline characters.');
            			return;
            		}
            	}
            }

            obj = wkt.toObject(this.gmap.defaults); // Make an object

            // Add listeners for overlay editing events
            if (!Wkt.isArray(obj) && wkt.type !== 'point') {
                // New vertex is inserted
                google.maps.event.addListener(obj.getPath(), 'insert_at', function (n) {
                	app.updateText();
                });
                // Existing vertex is removed (insertion is undone)
                google.maps.event.addListener(obj.getPath(), 'remove_at', function (n) {
                	app.updateText();
                });
                // Existing vertex is moved (set elsewhere)
                google.maps.event.addListener(obj.getPath(), 'set_at', function (n) {
                	app.updateText();
                });
            } else {
            	if (obj.setEditable) {obj.setEditable(false);}
            }

            if (Wkt.isArray(obj)) { // Distinguish multigeometries (Arrays) from objects
            	for (i in obj) {
            		if (obj.hasOwnProperty(i) && !Wkt.isArray(obj[i])) {
            			obj[i].setMap(this.gmap);
            		}

            		if (wkt.type !== 'point') {
                        // New vertex is inserted
                        google.maps.event.addListener(obj[i].getPath(), 'insert_at', function (n) {
                        	app.updateTextPart();
                        });
                        // Existing vertex is removed (insertion is undone)
                        google.maps.event.addListener(obj[i].getPath(), 'remove_at', function (n) {
                        	app.updateTextPart();
                        });
                        // Existing vertex is moved (set elsewhere)
                        google.maps.event.addListener(obj[i].getPath(), 'set_at', function (n) {
                        	app.updateTextPart();
                        });
                    }
                }

                this.features = this.features.concat(obj);
            } else {
                obj.setMap(this.gmap); // Add it to the map
                this.features.push(obj);
            }

            // Pan the map to the feature
            if (obj.getBounds !== undefined && typeof obj.getBounds === 'function') {
                // For objects that have defined bounds or a way to get them
                this.gmap.fitBounds(obj.getBounds());
            } else {
            	if (obj.getPath !== undefined && typeof obj.getPath === 'function') {
                // For Polygons and Polylines
                this.gmap.panTo(obj.getPath().getAt(0));
                } else { // But points (Markers) are different
                	if (obj.getPosition !== undefined && typeof obj.getPosition === 'function') {
                		this.gmap.panTo(obj.getPosition());
                	}
                }
            }

            return obj;
        },
        /**
         * Updates the textarea based on the first available feature.
         */

         updateText: function () {
         	var wkt = new Wkt.Wkt();
         	wkt.fromObject(this.features[0]);
         	document.getElementById('wkt').value = wkt.write();
         },
         updateTextPart: function () {
         	var i, w, v;

         	w = new Wkt.Wkt(this.features[0]);

         	i = 1;
         	while (i < this.features.length) {
         		v = new Wkt.Wkt(this.features[i]);
         		w.merge(v);
         		i += 1;
         	}

         	document.getElementById('wkt').value = w.write();
         },
        /**
         * Formats the textarea contents for a URL.
         * @param   checked {Boolean}   The check state of the associated checkbox
         */
         urlify: function (checked) {
         	var wkt = new Wkt.Wkt();
         	wkt.read(document.getElementById('wkt').value);
         	wkt.delimiter = (checked) ? '+' : ' ';
         	document.getElementById('wkt').value = wkt.write();
         	return wkt;
         },
        /**
         * Application entry point.
         * @return  {<google.maps.Map>} The Google Maps API instance
         */
         init: function () {
         	var gmap;

         	gmap = new google.maps.Map(document.getElementById('canvas'), {
         		center: new google.maps.LatLng(-12.0484232, -75.2376588 ),
         		defaults: {
         			icon: 'red_dot.png',
         			shadow: 'dot_shadow.png',
         			editable: true,
         			strokeColor: '#990000',
         			fillColor: '#EEFFCC',
         			fillOpacity: 0.6
         		},
         		disableDefaultUI: true,
         		mapTypeControl: true,
         		mapTypeId: google.maps.MapTypeId.ROADMAP,
         		mapTypeControlOptions: {
         			position: google.maps.ControlPosition.TOP_LEFT,
         			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
         		},
         		panControl: false,
         		streetViewControl: false,
         		zoom: 12,
         		zoomControl: true,
         		zoomControlOptions: {
         			position: google.maps.ControlPosition.LEFT_TOP,
         			style: google.maps.ZoomControlStyle.SMALL
         		}
         	});

          google.maps.event.addListener(gmap, 'tilesloaded', function () {
            if (!this.loaded) {
                this.loaded = true;

                document.getElementById('wkt').value ='LINESTRING(<?php $data=json_decode(file_get_contents("http://127.0.0.1/wb-pdo/EmpresaTransporte/consulta_tramo_id.php?ID_Ruta=$tramo"),true);

                   $myArray = array();

        foreach( $data as $map)
        {
            
                $myArray[]=  ($map['RT_Longitud_inicio']." ".$map['RT_Latitud_inicio']);

        }
     echo implode( ', ', $myArray );

                ?>)';
                app.mapIt();
            }
        });

          gmap.drawingManager = new google.maps.drawing.DrawingManager({
           drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [
            google.maps.drawing.OverlayType.MARKER,
            google.maps.drawing.OverlayType.POLYLINE,
            google.maps.drawing.OverlayType.POLYGON,
            google.maps.drawing.OverlayType.RECTANGLE
            ]
        },
        markerOptions: gmap.defaults,
        polygonOptions: gmap.defaults,
        polylineOptions: gmap.defaults,
        rectangleOptions: gmap.defaults
    });
          gmap.drawingManager.setMap(gmap);

          google.maps.event.addListener(gmap.drawingManager, 'overlaycomplete', function (event) {
           var wkt;

           app.clearText();
           app.clearMap();

                // Set the drawing mode to "pan" (the hand) so users can immediately edit
                this.setDrawingMode(null);

                // Polygon drawn
                if (event.type === google.maps.drawing.OverlayType.POLYGON || event.type === google.maps.drawing.OverlayType.POLYLINE) {
                    // New vertex is inserted
                    google.maps.event.addListener(event.overlay.getPath(), 'insert_at', function (n) {
                    	app.updateText();
                    });

                    // Existing vertex is removed (insertion is undone)
                    google.maps.event.addListener(event.overlay.getPath(), 'remove_at', function (n) {
                    	app.updateText();
                    });

                    // Existing vertex is moved (set elsewhere)
                    google.maps.event.addListener(event.overlay.getPath(), 'set_at', function (n) {
                    	app.updateText();
                    });
                } else if (event.type === google.maps.drawing.OverlayType.RECTANGLE) { // Rectangle drawn
                    // Listen for the 'bounds_changed' event and update the geometry
                    google.maps.event.addListener(event.overlay, 'bounds_changed', function () {
                    	app.updateText();
                    });
                }

                app.features.push(event.overlay);
                wkt = new Wkt.Wkt();
                wkt.fromObject(event.overlay);
                document.getElementById('wkt').value = wkt.write();
            });

          return gmap;
      }
  };
}()); // Execute immediately
</script>

@extends('layouts.admin')
@section('content')
<body onload="app.gmap=app.init();">
	<h1>Ruta de Transporte</h1>
	<div id="form">
		<div id="canvas">
		</div>
		<form >
			<div class="form-row">
               <div class="form-group col-md-2">
                <label>Nombre de La Empresa</label>
                <input disabled type="text" class="form-control" id="EMT_Nombre">
            </div>
            <div class="form-group col-md-3">
                <label>Ruta</label>
                <input disabled type="text"class="form-control" id="RUT_Nombre">
            </div>
            <div class="form-group col-md-4">
                <label>Descripcion de Ruta</label>
                <textarea disabled type="text" class="form-control" id="RUT_Descripcion"></textarea>

            </div>
            <div class="form-group col-md-3">
                <label>Coordenadas</label>
                <textarea  disabled id="wkt" name="wkt" type="text" class="form-control">
                </textarea>
            </div>

          
        </div>
    </form>


</body>
@endsection
@section('scripts')
<script>
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'http://127.0.0.1/wb-pdo/EmpresaTransporte/cons_ert_id.php?ID_Empresa_Transp=<?php echo $codigo?>', true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
                //console.log(this.responseText);

                //transformar a json
                let datos = JSON.parse(this.responseText);


                console.log(datos);

                document.getElementById('EMT_Nombre').value=datos.EMT_Nombre;
                document.getElementById('RUT_Nombre').value =datos.RUT_Nombre;
                document.getElementById('RUT_Descripcion').value =datos.RUT_Descripcion;
                //document.getElementById('ID_Ruta').value =datos.ID_Ruta;


            }


        }









    </script>
    @endsection



