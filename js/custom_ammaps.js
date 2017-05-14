$(document).ready(function(){
    if ($('#chartdiv').length > 0){
        var map = AmCharts.makeChart( "chartdiv", {
            "type": "map",
            "theme": "chalk",
            "dataProvider": {
                "map": "worldLow",
                //"passZoomValuesToTarget":true,
                "zoomLevel":1,
                //"getAreasFromMap": true,
                "zoomControl": {
                    "zoomControlEnabled": true,
                    "maxZoomLevel":1,
                    "minZoomLevel":2,
                    "zoomFactor":0.1,
                    "map.dragMap":false
                },
                areas: [{
                    title: "Canada",
                    id: "CA",
                    color: "#f00",
                    //customData: "1986",
                    groupId: "Canada"
                },
          
                    {
                        title: "Peru",
                        id: "PE",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },
                    {
                        title: "Kenya",
                        id: "KE",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },
                    { title: "Uganda",
                        id: "UG",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },


                    { title: "Rwanda",
                        id: "RW",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },

                    {
                        title: "Nigeria",
                        id: "NG",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },
                    {
                        title: "Mozambique",
                        id: "MZ",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },
                    {
                        title: "Mali",
                        id: "ML",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },

                    {
                        title: "Burkina Faso",
                        id: "BF",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },
                    {
                        title: "Afghanistan",
                        id: "AF",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Asia"
                    },

                    {
                        title: "Bolivia",
                        id: "BO",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },

                    {
                        title: "Nicaragua",
                        id: "NI",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },


                    {
                        title: "Colombia",
                        id: "CO",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },

                {
                        title: "Colombia",
                        id: "CO",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },



                    {
                        title: "Kenya",
                        id: "KY",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },

                    {
                        title: "Ethiopia",
                        id: "ET",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },


                    {
                        title: "Syria",
                        id: "SY",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Middle East"
                    },
                    {
                        title: "Malawi",
                        id: "MW",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },

                    {
                        title: "South Sudan",
                        id: "SS",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },

                    {
                        title: "Jordan",
                        id: "JO",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Middle East"
                    },
                    {
                        title: "Iraq",
                        id: "IQ",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Middle East"
                    },
                    {
                        title: "Lebanon",
                        id: "LB",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Middle East"
                    },
                    {
                        title: "Occupied Palestine Territory",
                        id: "PS",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Middle East"
                    },
                    {
                        title: "Nicaragua",
                        id: "NI",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },
                    {
                        title: "Peru",
                        id: "PE",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },
                    {
                        title: "Columbia",
                        id: "CO",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },

                    {
                        title: "Bolivia",
                        id: "BO",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Latin America"
                    },

                    {
                        title: "Bangladesh",
                        id: "BD",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Asia"
                    },

                    {
                        title: "Afghanistan",
                        id: "AF",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Asia"
                    },
                    {
                        title: "Nepal",
                        id: "NP",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Asia"
                    },
                    {
                        title: "Bhutan",
                        id: "BT",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Asia"
                    },
                    {
                        title: "Rwanda",
                        id: "RW",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },
                    {
                        title: "Democratic Republic of Congo",
                        id: "DRC",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },
                    {
                        title: "Somalia",
                        id: "SO",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },

                    {
                        title: "Tanzania",
                        id: "TZ",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },

                    {
                        title: "Sudan",
                        id: "SD",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },
                    {
                        title: "Sudan",
                        id: "SD",
                        color: "#f00",
                        //customData: "1986",
                        groupId: "Africa"
                    },
                ]
            },
            "areasSettings": {
                "autoZoom": true,
                "fixedSize":false,
                "selectedColor": "#CC0000"
                //"adjustOutlineThickness":false
            },
            "smallMap": {},
            "export": {
                "enabled": true,
                "position": "bottom-right"
            },
        });

        var data = {
            'Canada': '#canada',
            "Asia":"#asia",
            "Latin America":"#latin-america_caribbean",
            "Africa":"#africa",
            "Middle East":"#middle-east",
            "South Africa":"#south-africa"
        };

        function handleGoHome() {
            map.dataProvider = continentsDataProvider;
            map.validateNow();
        }

        function handleMapObjectClick( event ) {
            if ( event.mapObject.id == "backButton" ) {
                handleGoHome();
            }
        }

        // monitor when home icon was clicked and also go to continents map
        map.addListener( "homeButtonClicked", handleGoHome );
        map.addListener( "clickMapObject", handleMapObjectClick );

        $('#countries li a.middle_east_group').click(function(){
            map.clickMapObject(map.zoomToGroup('Middle East'));
        });
        $('#countries li a.canada_group').click(function(){
            map.clickMapObject(map.zoomToGroup('Canada'));
        });
        $('#countries li a.asia_group').click(function(){
            map.clickMapObject(map.zoomToGroup('Asia'));
        });
        $('#countries li a.africa_group').click(function(){
            map.clickMapObject(map.zoomToGroup('Africa'));
        });
        $('#countries li a.latin_group').click(function(){
            map.clickMapObject(map.zoomToGroup('Latin America'));
        });

        map.addListener("clickMapObject", function (event) {
            var id = data[event.mapObject.groupId];
            $(id).addClass('active').siblings().removeClass('active');
            $("#countries [href='"+id+"']").parent().addClass('active').siblings().removeClass('active');
        });

        var hah_locations = {
            'canada': 'Canada',
            'asia': 'Asia',
            'africa': 'Africa',
            'latin-caribbean': 'Latin America',
            'middle-east': "Middle East"
        };

        map.addListener('init', function(){
            for (var key in hah_locations){
                var value = hah_locations[key];
                if (window.location.hash == '#' + key){
                    // click the right country and ignore ammaps errors
                    try{ map.clickMapObject(map.zoomToGroup(value)); } catch(err) {};
                    // display the right tab
                    var id = data[value];
                    $(id).addClass('active').siblings().removeClass('active');
                    $("#countries [href='"+id+"']").parent().addClass('active').siblings().removeClass('active');
                }
            }
        });


        $('.link-canada').click(function(e){
            e.preventDefault();
            $("#countries .active").removeClass("active");
            $('#countries li a.canada_group').parent("li").addClass("active");
            $("#countries #canada").addClass("active");
            map.clickMapObject(map.zoomToGroup('Canada'));
        });

        $('.link-asia').click(function(e){
            e.preventDefault();
            $("#countries .active").removeClass("active");
            $('#countries li a.asia_group').parent("li").addClass("active");
            $("#countries #asia").addClass("active");
            map.clickMapObject(map.zoomToGroup('Asia'));
        });

        $('.link-africa').click(function(e){
            e.preventDefault();
            $("#countries .active").removeClass("active");
            $('#countries li a.africa_group').parent("li").addClass("active");
            $("#countries #africa").addClass("active");
            map.clickMapObject(map.zoomToGroup('Africa'));
        });


        $('.link-latin-caribbean').click(function(e){
            e.preventDefault();
            $("#countries .active").removeClass("active");
            $('#countries li a.latin_group').parent("li").addClass("active");
            $("#countries #latin-america_caribbean").addClass("active");
            map.clickMapObject(map.zoomToGroup('Latin America'));
        });

        $('.link-middle-east').click(function(e){
            e.preventDefault();
            $("#countries .active").removeClass("active");
            $('#countries li a.middle_east_group').parent("li").addClass("active");
            $("#countries #middle-east").addClass("active");
            map.clickMapObject(map.zoomToGroup('Middle East'));
        });


        //learn more canada link
        $('.canada-link a').click(function(e){
            e.preventDefault();
            location = "http://www.support.savethechildren.ca/page.aspx?pid=406";
        });

        //canada links to internal pages:
        $('#hope').click(function(e) {
            e.preventDefault();
            location = "http://www.savethechildren.ca/national-indigenous-programs/#journey-of-hope";
        });


        $('#youth-peer').click(function(e) {
            e.preventDefault();
            location = "http://www.savethechildren.ca/national-indigenous-programs/#youth-peer";
        });


        $('#birthing-experience').click(function(e) {
            e.preventDefault();
            location = "http://www.savethechildren.ca/national-indigenous-programs/#birthing-experience";
        });

        $('#adolescent-skills').click(function(e) {
            e.preventDefault();
            location = "http://www.savethechildren.ca/national-indigenous-programs/#adolescent-skills";
        });


        $('#sexploitation').click(function(e) {
            e.preventDefault();
            location = "http://www.savethechildren.ca/national-indigenous-programs/#sexual-exploitation";
        });


        $('#emergency-preparedness').click(function(e) {
            e.preventDefault();
            location = "http://www.savethechildren.ca/national-indigenous-programs/#emergency-preparedness";
        });


    }

});