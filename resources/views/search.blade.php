@extends('layouts.frontend')
<title>Locations</title>
<style>
    #aa-property-header {
        background-image: url("{{asset('images/header11.jpg')}}")!important;
    }
</style>

@section('content')

    <!-- Start menu section -->
    <section id="aa-menu-area">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- Text based logo -->
                    <a class="navbar-brand aa-logo" href="/"> Restaurant <span>Logo</span></a>
                    <!-- Image based logo -->
                    <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                        <li><a href="/">HOME</a></li>

                        <li><a href="{{route('plan_and_price.planAndPrice')}}">PLAN AND PRICE</a></li>
                        <li><a href="{{route('show_all.showAll')}}">SHOW ALL</a></li>
                        <li><a href="{{route('locations.locations')}}">LOCATIONS</a></li>
                        <li><a href="{{route('contact.contact')}}">CONTACT</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu section -->

    <!-- Start Proerty header  -->
    <section id="aa-property-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-property-header-inner">
                        <h2>Search</h2>
                        <ol class="breadcrumb">
                            <li><a href="/">HOME</a></li>
                            <li class="active">Search</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Proerty header  -->


    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>All Search</h2>


                    <span></span>
                    @if(isset($details))
                        <p>The Search results for your query <b>{{$query}}</b> are :</p>

                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        {{--@if(isset($details))--}}
                        @foreach($details as $user)
                            <div class="col-md-4">
                                <article class="aa-properties-item">
                                    <a href="{{route('single_restaurant.restaurant', $user->slug)}}" class="aa-properties-item-img">
                                        <img width="360" height="199" src="{{$user->photo ? $user->photo->file : $user->photoHome()}}" alt="img">
                                    </a>
                                    <div class="aa-tag for-sale">
                                        {{$user->created_at->diffForHumans()}}
                                    </div>
                                    <div class="aa-properties-item-content">
                                        <div class="aa-properties-info">
                                            <span>5 Rooms</span>
                                            <span>2 Beds</span>
                                            <span>3 Baths</span>
                                            <span>1100 SQ FT</span>
                                        </div>
                                        <div class="aa-properties-about" style="height: 12rem">
                                            <h3><a href="{{route('single_restaurant.restaurant', $user->slug)}}">{{$user->title}}</a></h3>
                                            <p>{{Str::limit($user->body, 120)}}</p>
                                        </div>
                                        <div class="aa-properties-detial">
                                            <span class="aa-price">
                                              $35000
                                            </span>
                                            <a href="{{route('single_restaurant.restaurant', $user->slug)}}" class="aa-secondary-btn">View Details</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        @endforeach
                        @elseif(isset($message))
                            <h2>{{$message}}</h2>

                        @endif



                    </div>

                    <div class="container">
                        <div class="row">
                            <h2 id="message2" style="margin-top:20px; text-align:center;">Test</h2>
                            <div id="mappers" style="width: 100%; height: 400px; margin-top: 5rem;">{!! Mapper::render() !!}</div>
                        </div>
                    </div>

                    {{--<div class="row">--}}
                    {{--<div class="col-sm-12 text-center">--}}
                    {{--{{$details->onEachSide(1)->links()}}--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>



            </div>

        </div>

    </section>
    <!-- / Latest property -->


@endsection

@section('footer')
    <script type="text/javascript">

        (function() {
            var Distance, fixed;
            fixed = function(number, digits) {
                var radix;
                if (digits == null) {
                    digits = 0;
                }
                radix = Math.pow(10, digits);
                return (Math.ceil(number * radix) / radix).toFixed(digits);
            };
            Distance = (function() {
                function Distance(distance, unit) {
                    var radians, value, _, _ref;
                    if (!(this instanceof Distance)) {
                        return new Distance(distance, unit);
                    }
                    if (unit) {
                        radians = distance / Distance.unit_conversion[unit];
                        unit = unit;
                    } else if (typeof distance === 'string') {
                        distance = distance.replace(/^\s+|\s+$/g, '').replace(/,/, '.');
                        _ref = distance.match(Distance.distance_regexp) || [], _ = _ref[0], value = _ref[1], unit = _ref[2];
                        if (value) {
                            radians = value / Distance.unit_conversion[unit];
                        }
                    }
                    if (radians == null) {
                        radians = distance * 1.0;
                    }
                    this.radians = radians;
                    this.in_good_unit();
                }
                Distance.prototype.in_unit = function(unit) {
                    this.unit = unit;
                    return this;
                };
                Distance.prototype.in_good_unit = function() {
                    if (this.radians < 1.1 / Distance.unit_conversion['km']) {
                        this.unit = 'm';
                    } else {
                        this.unit = 'km';
                    }
                    return this;
                };
                Distance.prototype.human_readable_in_units = function(large_unit, small_unit) {
                    var dist, unit;
                    unit = large_unit;
                    dist = this.radians * Distance.unit_conversion[unit];
                    if (dist < 1.1) {
                        unit = small_unit;
                        dist = this.radians * Distance.unit_conversion[unit];
                    }
                    return {
                        distance_earth_radians: this.radians,
                        distance: dist < 10 ? fixed(dist, 1) : fixed(dist),
                        unit: unit,
                        toString: function() {
                            return "" + this.distance + " " + this.unit;
                        }
                    };
                };
                Distance.prototype.human_readable = function(system) {
                    system || (system = this.system());
                    switch (system) {
                        case 'customary':
                            return this.human_readable_in_units('mi', 'ft');
                        default:
                            return this.human_readable_in_units('km', 'm');
                    }
                };
                Distance.prototype.system = function() {
                    return Distance.systems[this.unit];
                };
                Distance.prototype.valueOf = function() {
                    return this.radians;
                };
                Distance.prototype.toString = function() {
                    return "" + (this.radians * Distance.unit_conversion[this.unit]) + " " + this.unit;
                };
                return Distance;
            })();
            if (typeof window !== "undefined" && window !== null) {
                window.Distance = Distance;
            } else {
                module.exports = Distance;
            }
            Distance.between = function(A, B) {
                var A_lat, B_lat, d_lng, degrees_to_radians;
                degrees_to_radians = Math.PI / 180;
                A_lat = (A.lat || A[0] || 0) * degrees_to_radians;
                B_lat = (B.lat || B[0] || 0) * degrees_to_radians;
                d_lng = Math.abs((B.lng || B[1] || 0) - (A.lng || A[1] || 0)) * degrees_to_radians;
                return new Distance(Math.atan2(Math.sqrt(Math.pow(Math.cos(B_lat) * Math.sin(d_lng), 2.0) + Math.pow(Math.cos(A_lat) * Math.sin(B_lat) - Math.sin(A_lat) * Math.cos(B_lat) * Math.cos(d_lng), 2.0)), Math.sin(A_lat) * Math.sin(B_lat) + Math.cos(A_lat) * Math.cos(B_lat) * Math.cos(d_lng)));
            };
            Distance.unit_conversion = {
                km: 6372.8,
                m: 6372800,
                meter: 6372800,
                metres: 6372800,
                mi: 3959.9,
                ml: 3959.9,
                mile: 3959.9,
                miles: 3959.9,
                yd: 6969379,
                yard: 6969379,
                yards: 6969379,
                ft: 20908136,
                feet: 20908136
            };
            Distance.systems = {
                km: 'metric',
                m: 'metric',
                meter: 'metric',
                metres: 'metric',
                mi: 'customary',
                ml: 'customary',
                mile: 'customary',
                miles: 'customary',
                yd: 'customary',
                yard: 'customary',
                yards: 'customary',
                ft: 'customary',
                feet: 'customary'
            };
            Distance.distance_regexp = RegExp("^([\\d\\.]+)\\s*(" + (Object.keys(Distance.unit_conversion).join('|')) + ")$");
        }).call(this);



        var all_locations = <?php Print($json); ?>;




        function onMapLoad(map)
        {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {

                        var pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                                acc: position.coords.accuracy
                            },
                            positionOptions
                        var currentLat = pos.lat;
                        var currentLng = pos.lng;

                        var currentLocation = {
                            lat: currentLat,
                            lng: currentLng
                        };

                        positionOptions = {
                            timeout: 5000,
                            maximumAge : 0,
                            enableHighAccuracy : true
                        };

                        var marker = new google.maps.Marker({
                            position: pos,
                            map: map,
                            title: "Location found."
                        });

                        var distance = <?php Print($distance); ?>;
                        var distanceString = distance.toString();

                        if(all_locations != null){
                            for (var j = 0; j < all_locations.length; j++) {
                                var lat = all_locations[j]['lat'];
                                var lng = all_locations[j]['lng'];
                                var marker_lat_lng = {lat, lng};
                                var calculate2 = Distance.between(currentLocation, marker_lat_lng);
                                if(calculate2 <= Distance(distanceString + ' m')){
                                    var new_marker = new google.maps.Marker({
                                        position: marker_lat_lng,
                                        map: map,
                                        title: "Name"
                                    });
                                }else {
                                    document.getElementById("message2").innerHTML = "There is not one restaurant in the selected radius!";
                                    break;
                                }
                            }
                        }else{
                            console.log('There are no registered restaurants in the selected city');
                        }

                            currentLocation = new google.maps.Circle({
                            strokeColor: '#FF0000',
                            strokeOpacity: 0.8,
                            strokeWeight: 2,
                            fillColor: '#FF0000',
                            fillOpacity: 0.35,
                            map: map,
                            center: pos,
                            radius: distance
                        });

                        map.setCenter(pos);
                    }
                );
            }
        }
    </script>
@endsection