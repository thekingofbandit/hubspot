<style>
    .map_canvas {
        height: 400px;
    }

    #multiple li {
        cursor: pointer;
        text-decoration: underline;
    }

</style>
<section id="accordion" class="col-md-9">
    <h3 class="text-center text-primary"><?= lang("order_service") ?></h3>
    <?php if(!empty($error)){ ?>
        <?= "$error" ?>
    <?php } ?>

    <form action="<?= current_url(); ?>" method="post">


        <div class="row">
            <div style="display: none" id="alert" role="alert"
                 class="alert alert-warning notices attentionimg alert-dismissible"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="geocomplete" class="control-label">Search for a place</label>
                    <input class="form-control" id="geocomplete"  type="text" value="<?php //echo lang('riyadh_place') ?>"/><br>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="RequestAddress" class="control-label">Address selected </label>
                    <input id="RequestAddress" class="form-control" readonly="readonly" name="RequestAddress" type="text" value=""><br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lat/lng" class="control-label">lat</label>
                    <input type="text" name="lat" class="form-control" readonly="readonly" value="<?= set_value('lat') ?>"  />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lat/lng" class="control-label">lng</label>
                    <input type="text" name="lng" class="form-control" readonly="readonly" value="<?= set_value('lng') ?>"  />
                </div>
            </div>

            <div class="col-md-12">
                <label for="RequestAddress" class="control-label">select address by marker</label>
                <div class="map_canvas"></div>
                <a id="reset" href="#"></a><br>
             </div>


        <div class="row">
            <div class="col-xs-6 col-xs-offset-5">
                <button type="submit" value="" class="btn btn-success btn-3d btn-lg">save</button>
            </div><!-- /.col -->
        </div>
    </form>
</section>
</article>


<script src="https://maps.googleapis.com/maps/api/js?libraries=places&en=EN&key=AIzaSyDNyLsAhFt4hIZKeNJYC244jPPayM0GhrY"></script>
<script src="<?= base_url() ?>global/site/geocomplete.min.js"></script>
<script>
    $(function () {



        var RequestAddress = document.getElementById("RequestAddress");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showLocation, showError,
                {
                    enableHighAccuracy: true,
                    timeout: 10000 // 10s
                    //maximumAge : 0
                }
            );
        }

        function showLocation(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            $("input[name=lat]").val(latitude);
            $("input[name=lng]").val(longitude);
            getAddress(latitude, longitude);

                $("#geocomplete").geocomplete({
                    map: ".map_canvas",
                    details: "form ",
                    location: [latitude, longitude]
                    // location: [latLng.lat, latLng.ln]

                });

                $("#geocomplete").bind("geocode:click", function (event, latLng) {
                $("input[name=lat]").val(latLng.lat());
                $("input[name=lng]").val(latLng.lng());
                $("input[name=RequestAddress]").geocomplete("find", latLng.lat() + "," + latLng.lng()).val();
                $(this).geocomplete('marker')
                    .setOptions({position:latLng,map:$(this).geocomplete("map")});
                $("#lat,#lng").show();
            });
        }
        function showError(error) {
            var x = document.getElementById("alert");

            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "User denied the request for Geolocation.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable.";
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out.";
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred.";
                    break;
            }
            $(x).show();

            $("#geocomplete").geocomplete({
                map: ".map_canvas",
                details: "form ",
                location: [24.713551699,46.675295699]
            });

            $("#geocomplete").bind("geocode:click", function (event, latLng) {
                $("input[name=lat]").val(latLng.lat());
                $("input[name=lng]").val(latLng.lng());
                $("input[name=RequestAddress]").geocomplete("find", latLng.lat() + "," + latLng.lng()).val();
                $(this).geocomplete('marker')
                    .setOptions({position:latLng,map:$(this).geocomplete("map")});
                $("#lat,#lng").show();
            });
        }


        function getAddress(myLatitude, myLongitude) {

            var geocoder = new google.maps.Geocoder();							// create a geocoder object
            var location = new google.maps.LatLng(myLatitude, myLongitude);		// turn coordinates into an object

            geocoder.geocode({'latLng': location}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {						// if geocode success
                    var ad = results[0].formatted_address;
                    $("input[name=RequestAddress]").val(ad);									// write address to field
                } else {
                    alert("Geocode failure: " + status);								// alert any other error(s)
                    return false;
                }
            });
        }

        $("#reset").click(function () {
            $("#geocomplete").geocomplete("resetMarker");
            $("#reset").hide();
            return false;
        });

    });
</script>
