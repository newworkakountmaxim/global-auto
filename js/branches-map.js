function initMap() {

  var markers = [{
          "title": "ул. Бородинская 5, ост. «По Требованию»",
          "lat": 47.883255,
          "lng": 35.071780,

          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Правый берег</h3><h4><i class="fa fa-map-marker"></i>ул. Бородинская 5,<br>ост. «По Требованию»</h4><h6><a href="tel:+380683381570">(068) 338-15-70</a><br><a href="tel:+380953844685">(095) 384-46-85</a></h6><a class="button-maps" href="https://lidertas.in.ua/contacts/ul-borodinskaya-5/">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": "ул. Павлокичкасская 57, ост. «Молодёжная»",
          "lat": 47.894144,
          "lng": 35.161110,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Заводской район</h3><h4><i class="fa fa-map-marker"></i> ул. Павлокичкасская 57,<br> ост. «Молодёжная»</h4><h6><a href="tel:+380999490004">(099) 949-00-04</a> <br><a href="tel:+380969290004">(096) 929-00-04</a> </h6><a href="https://lidertas.in.ua/contacts/ul-pavlokichkasskaya-57/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": "пр. Металлургов 8Б, ТЦ «Афина», 3 - этаж",
          "lat": 47.860795,
          "lng": 35.106587,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Днепровский район</h3><h4><i class="fa fa-map-marker"></i> пр. Металлургов, 8Б,<br> р-н Металлургов,<br> ТЦ «Афина», 3 - этаж</h4><h6><a href="tel:+380668294786">(066) 82-94-786</a> <br> <a href="tel:+380976464955">(097) 64-64-955</a></h6><a href="https://lidertas.in.ua/contacts/pr-metallurgov-8b/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Рубана 23',
          "lat": 47.834025,
          "lng": 35.015615,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Хортицкий район</h3><h4><i class="fa fa-map-marker"></i> ул. Рубана 23</h4><h6><a href="tel:+380661471888">(066) 14-71-888</a> <br> <a href="tel:+380961471888">(096) 14-71-888</a></h6><a href="https://lidertas.in.ua/contacts/ul-rubana-23/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Светлая 16Б, ост. Универсам',
          "lat": 47.815160,
          "lng": 35.054522,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Хортицкий район</h3><h4><i class="fa fa-map-marker"></i> ул. Светлая 16Б, ост. Универсам</h4><h6><a href="tel:+380500873888">(050) 087-38-88</a> <br> <a href="tel:+380964496150">(096) 449-61-50</a></h6><a href="https://lidertas.in.ua/contacts/ul-svetlaya-16b/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Патриотическая 52,  ост. "Орбита"',
          "lat": 47.839267,
          "lng": 35.128993,
          "description": '<div class="branch-map-point" id="content"><h3 id="firstHeading" class="branch-area">Вознесеновский район</h3><h4><i class="fa fa-map-marker"></i> ул. Патриотическая 52,  ост. "Орбита"</h4><h6><a href="tel:+380950410042">(095) 041-00-42</a> <br> <a href="tel:+380960410041">(096) 041-00-41</a></h6><a href="https://lidertas.in.ua/contacts/ul-patrioticheskaya-52/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'Бочарова 1, ост. "2-й Шевченковский"',
          "lat": 47.842722,
          "lng": 35.226022,
          "description": '<div class="branch-map-point" id="content"><h3 id="firstHeading" class="branch-area">Шевченковский район</h3><h4><i class="fa fa-map-marker"></i> ул. Бочарова 1, ост. "2-й Шевченковский"</h4><h6><a href="tel:+380664555596">(066) 455-55-96</a> <br><a href="tel:+380964555597">(096) 455-55-97</a> </h6><a href="https://lidertas.in.ua/contacts/ul-bocharova-1/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Школьная 13, мк. р-н Малый рынок, ост. "Школа"',
          "lat": 47.825002,
          "lng": 35.161043,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Александровский район</h3><h4><i class="fa fa-map-marker"></i> ул. Школьная 13, мк. р-н Малый рынок, ост. "Школа"</h4><h6><a href="tel:+380500253888">(050) 025-38-88</a>  <br> <a href="tel:+380972203888">(097) 220-38-88</a></h6><a href="https://lidertas.in.ua/contacts/shkolnaya-13/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": "ул. Новокузнецкая 4, Коммунарский р-н, ост. 1й Южный",
          "lat": 47.784806,
          "lng": 35.183974,
          "description": '<div class="branch-map-point" id="content"><h3 id="firstHeading" class="branch-area">Коммунарский район</h3><h4><i class="fa fa-map-marker"></i> ул. Новокузнецкая 4, Коммунарский р-н, ост. 1й Южный</h4><h6><a href="tel:+380505111175">(050) 511-11-75</a>  <br> <a href="tel:+380985111176">(098) 511-11-76</a></h6><a href="https://lidertas.in.ua/contacts/ul-novokuzneczkaya-4//" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Сытова 7, ост. "АТК"',
          "lat": 47.785936,
          "lng": 35.221914,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Космический район</h3><h4><i class="fa fa-map-marker"></i> ул. Сытова 7, ост. "АТК"</h4><h6><a href="tel:+380508336969">(050) 833-69-69</a>  <br> <a href="tel:+380978335959">(097) 833-59-59</a></h6><a href="https://lidertas.in.ua/contacts/ul-sytova-7/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Победы 2, ост. "Тюленина"',
          "lat": 47.850484,
          "lng": 35.100117,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Вознесеновкий район</h3><h4><i class="fa fa-map-marker"></i> ул. Победы 2, ост. "Тюленина"</h4><h6><a href="tel:+380683246502">(068) 324-65-02</a>  <br> <a href="tel:+380993246502">(099) 324-65-02</a></h6><a href="https://lidertas.in.ua/contacts/ul-pobedy-2/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Жуковского, 55',
          "lat": 47.819384,
          "lng": 35.181162,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Александровский район</h3><h4><i class="fa fa-map-marker"></i> ул. Советская, 34 </h4><h6><a href="tel:+380506777843">(050) 677-78-43</a>  <br> <a href="tel:+380986777843">(098) 677-78-43</a></h6><a href="https://lidertas.in.ua/contacts/ul-zhukovskogo-55/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Южноукраинская, 2',
          "lat": 47.851097,
          "lng": 35.121305,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Вознесеновкий район</h3><h4><i class="fa fa-map-marker"></i>ул. Южноукраинская, 2</h4><h6><a href="tel:+380734124151">(073) 41-24-151</a>  <br> <a href="tel:+380971733006">(097) 173-30-06</a></h6><a href="https://lidertas.in.ua/contacts/ul-yuzhnoukrainskaya-2/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'пр. Соборный 160',
          "lat": 47.838252,
          "lng": 35.142774,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Александровский район</h3><h4><i class="fa fa-map-marker"></i>пр. Соборный 160 </h4><h6><a href="tel:+380986777453">(098) 677-74-53</a>  <br> <a href="tel:+380506777453">(050) 677-74-53</a></h6><a href="https://lidertas.in.ua/contacts/pr-sobornyj-133/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'пр. Моторостроителей, 64А',
          "lat": 47.830513,
          "lng": 35.199734,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Шевченковский район</h3><h4><i class="fa fa-map-marker"></i>пр. Моторостроителей, 64А</h4><h6><a href="tel:+380501087444">(050) 108-74-44</a>  <br> <a href="tel:+380975887444">(097) 588-74-44</a></h6><a href="https://lidertas.in.ua/contacts/pr-motorostroitelej-64a/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Энтузиастов, 9',
          "lat": 47.809982,
          "lng": 35.046142,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Хортицкий район</h3><h4><i class="fa fa-map-marker"></i>ул. Энтузиастов, 9</h4><h6><a href="tel:+380966777459">(096) 677-74-59</a>  <br> <a href="tel:+380506777459">(050) 677-74-59</a></h6><a href="https://lidertas.in.ua/contacts/ul-entuziastov-9/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Счастливая, 9',
          "lat": 47.875877,
          "lng": 35.054473,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Днепровский район</h3><h4><i class="fa fa-map-marker"></i>ул. Счастливая, 9</h4><h6><a href="tel:+380684605553">(068) 460-55-53</a>  <br> <a href="tel:+380664605553">(066) 460-55-53</a></h6><a href="https://lidertas.in.ua/contacts/ul-schastlivaya-9/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      },
      {
          "title": 'ул. Европейская, 16',
          "lat": 47.781262,
          "lng": 35.216903,
          "description": '<div class="branch-map-point"><h3 id="firstHeading" class="branch-area">Коммунарский район</h3><h4><i class="fa fa-map-marker"></i>ул. Европейская, 16</h4><h6><a href="tel:+380984371110">(098) 437-11-10</a>  <br> <a href="tel:+380664371110">(066) 437-11-10</a></h6><a href="https://lidertas.in.ua/contacts/prospekt-mira-69-trcz-ukraina/" class="button-maps">РАСПИСАНИЕ ЗАНЯТИЙ</a></div>'
      }

  ];

  var mapOptions = {
      center: new google.maps.LatLng(47.855915, 35.1282401),
      zoom: 11,
      maxZoom: 16,
      minZoom: 10,
      scrollwheel: false,
      styles: [
        {
            "featureType": "administrative",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "lightness": 33
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "labels",
            "stylers": [
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "labels.text",
            "stylers": [
                {
                    "gamma": "0.75"
                }
            ]
        },
        {
            "featureType": "administrative.neighborhood",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "lightness": "-37"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f9f9f9"
                }
            ]
        },
        {
            "featureType": "landscape.man_made",
            "elementType": "geometry",
            "stylers": [
                {
                    "saturation": "-100"
                },
                {
                    "lightness": "40"
                },
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "landscape.natural",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "saturation": "-100"
                },
                {
                    "lightness": "-37"
                }
            ]
        },
        {
            "featureType": "landscape.natural",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "saturation": "-100"
                },
                {
                    "lightness": "100"
                },
                {
                    "weight": "2"
                }
            ]
        },
        {
            "featureType": "landscape.natural",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "saturation": "-100"
                },
                {
                    "lightness": "80"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "labels",
            "stylers": [
                {
                    "saturation": "-100"
                },
                {
                    "lightness": "0"
                }
            ]
        },
        {
            "featureType": "poi.attraction",
            "elementType": "geometry",
            "stylers": [
                {
                    "lightness": "-4"
                },
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#c5dac6"
                },
                {
                    "visibility": "on"
                },
                {
                    "saturation": "-95"
                },
                {
                    "lightness": "62"
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
                {
                    "saturation": "-100"
                },
                {
                    "gamma": "1.00"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text",
            "stylers": [
                {
                    "gamma": "0.50"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "saturation": "-100"
                },
                {
                    "gamma": "0.50"
                },
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#c5c6c6"
                },
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "lightness": "-13"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "lightness": "0"
                },
                {
                    "gamma": "1.09"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#e4d7c6"
                },
                {
                    "saturation": "-100"
                },
                {
                    "lightness": "47"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "lightness": "-12"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#fbfaf7"
                },
                {
                    "lightness": "77"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "lightness": "-5"
                },
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "saturation": "-100"
                },
                {
                    "lightness": "-15"
                }
            ]
        },
        {
            "featureType": "transit.station.airport",
            "elementType": "geometry",
            "stylers": [
                {
                    "lightness": "47"
                },
                {
                    "saturation": "-100"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#acbcc9"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "saturation": "53"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "lightness": "-42"
                },
                {
                    "saturation": "17"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "lightness": "61"
                }
            ]
        }
    ],
      mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var infoWindow = new google.maps.InfoWindow();
  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
  for (i = 0; i < markers.length; i++) {
      var data = markers[i]
      var myLatlng = new google.maps.LatLng(data.lat, data.lng);
      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          icon: '/wp-content/themes/autoschool-mariupol/img/ico/placeholder.png',
          title: data.title
      });
      infoWindow.setContent(data.description);
      (function(marker, data) {
          google.maps.event.addListener(marker, "click", function(e) {
              infoWindow.setContent(data.description);
              infoWindow.open(map, marker);
          });
      })(marker, data);
  }
}

  var script = document.createElement('script');
  script.type = 'text/javascript';
script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyArSZv68W41NI745hIiQVhk-qdCdmZpd3U&callback=initMap";
  //script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAa6dlujwp4kXQQD1x2ERVChOn5vEzB6uk&callback=initMap"; //как только загрузится гугл-карта, вызвать функцию initialize()
  document.body.appendChild(script);