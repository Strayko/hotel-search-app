@extends('layouts.frontend-thema')
<title>Search</title>
<style>
    .hidden-a-link {
        color: #fff;
        margin-right: 10px;
    }
    .search-restaurant-margin {
        margin-top: 50px;
        margin-bottom: 70px;
    }
    .restaurant-search-bottom-space {
        margin-bottom: 30px;
    }
</style>
@section('content')
    <!-- START LOGO AND MENU -->
    <section id="menu" class="menu">
        <div class="container-menu">

            <div class="logo alignLeft center-response">
                <a href="/"><img src="img/logo.svg" class="logo-img" alt=""></a>
            </div>

            <a class="toggle-menu-link" href="javascript:void(0);" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </a>

            <nav class="navbar" id="navbar">
                <!--<div class="burger-nav"></div>-->
                <ul class="nav alignRight center-response">
                    <li><a class="mobile-font" href="/">Homepage</a></li>
                    <li><a class="mobile-font" href="{{route('plans-and-pricing.planAndPrice')}}">Plans&Pricing</a></li>
                    <li><a class="mobile-font" href="{{route('restaurants.showAll')}}">Restaurants</a></li>
                    <li><a class="mobile-font" href="{{route("contact.contact")}}">Contact</a></li>
                    <li class="menu-buttons-block">
                    <li class="menu-collapse"><a href="{{route('login')}}" class="sign-in">Sign in</a></li>
                    <li class="menu-collapse top-distance-mobile"><a href="{{route('register.index')}}" class="register">Register</a></li>
                </ul>
            </nav>

        </div>
    </section>
    <!-- END LOGO AND MENU -->

    <!-- START HEADER -->
    <section id="header">
        <div class="container">
            <h2>Restaurants search result</h2>
            <p class="p-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nisi nostrum nulla, omnis temporibus voluptatem.</p>
        </div>
    </section>
    <!-- END HEADER -->

    <div class="container">

        @if(isset($details))
            <p>The Search results for your query <b>{{$query}}</b> are :</p>
        @endif

        <h2 id="message2" style="margin-top:20px; text-align:center;"></h2>
        <div id="mappers" style="width: 100%; height: 400px; margin-top: 5rem;">{!! Mapper::render() !!}</div>


        <div class="search-restaurant-margin">
            @if(isset($details))
                @foreach($details as $user)

                    <a class="hidden-a-link" href="{{route('single_restaurant.restaurant', $user->slug)}}">
                        <div class="restaurant-box restaurant-search-bottom-space">
                            <div class="pic-box">
                                <img src="img/popular_place.png" class="imgs" alt="">
                            </div>
                            <div class="container-box">
                                <div class="container-box-header">
                                    <h4>{{$user->title}}</h4>
                                    <img src="img/star.svg" class="svg star" alt="">
                                    <img src="img/star.svg" class="svg star" alt="">
                                    <img src="img/star.svg" class="svg star" alt="">
                                    <img src="img/star.svg" class="svg star" alt="">
                                    <img src="img/star.svg" class="svg star" alt="">
                                </div>
                                <div class="container-box-footer">
                                    <img src="img/location-minify.svg" class="svg locationAndStar" alt=""><p>{{$user->location->name}}</p>
                                    <hr>
                                    <img src="img/chat-minify.svg" class="svg locationAndStar" alt=""><p>34 Commnets</p>
                                </div>
                            </div>
                        </div>
                    </a>

                @endforeach
            @elseif(isset($message))
                <h2>{{$message}}</h2>

            @endif
        </div>

    </div>

{{--    {{$details->onEachSide(1)->links()}}--}}


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
                                    console.log('There is not one restaurant in the selected radius!');
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