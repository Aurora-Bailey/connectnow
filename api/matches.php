<?php
/* Required parameters */

/* Optional parameters */
// search=string
// tags=string
// sex=string
// proximity=high,low
// age=high,low
// experiance=high,low

/* Example */
// matches.php?search=x&tags=x&sex=x&proximity=high,low&age=high,low&experiance=high,low

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
exit('{
    "results": [{
        "name": {
            "title": "mr",
            "first": "arthur",
            "last": "renard"
        },
        "location": {
            "street": "8236 avenue goerges clémenceau",
            "city": "lille",
            "state": "nord",
            "postcode": 90655
        },
        "dob": "1966-06-23 10:41:19",
        "picture": {
            "large": "https://randomuser.me/api/portraits/men/73.jpg",
            "medium": "https://randomuser.me/api/portraits/med/men/73.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/men/73.jpg"
        }
    }, {
        "name": {
            "title": "mr",
            "first": "caleb",
            "last": "king"
        },
        "location": {
            "street": "2737 blenheim road",
            "city": "rotorua",
            "state": "gisborne",
            "postcode": 94252
        },
        "dob": "1958-09-06 10:46:02",
        "picture": {
            "large": "https://randomuser.me/api/portraits/men/22.jpg",
            "medium": "https://randomuser.me/api/portraits/med/men/22.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/men/22.jpg"
        }
    }, {
        "name": {
            "title": "mr",
            "first": "charlie",
            "last": "kern"
        },
        "location": {
            "street": "7614 drosselweg",
            "city": "teltow-fläming",
            "state": "thüringen",
            "postcode": 95942
        },
        "dob": "1980-03-31 21:31:12",
        "picture": {
            "large": "https://randomuser.me/api/portraits/men/16.jpg",
            "medium": "https://randomuser.me/api/portraits/med/men/16.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/men/16.jpg"
        }
    }, {
        "name": {
            "title": "mr",
            "first": "sohan",
            "last": "perrin"
        },
        "location": {
            "street": "8931 quai charles-de-gaulle",
            "city": "saint-étienne",
            "state": "haute-savoie",
            "postcode": 93508
        },
        "dob": "1971-02-21 12:54:07",
        "picture": {
            "large": "https://randomuser.me/api/portraits/men/13.jpg",
            "medium": "https://randomuser.me/api/portraits/med/men/13.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/men/13.jpg"
        }
    }, {
        "name": {
            "title": "miss",
            "first": "phoebe",
            "last": "gonzalez"
        },
        "location": {
            "street": "5059 grove road",
            "city": "newport",
            "state": "county tyrone",
            "postcode": "T02 4LB"
        },
        "dob": "1960-05-05 23:44:09",
        "picture": {
            "large": "https://randomuser.me/api/portraits/women/63.jpg",
            "medium": "https://randomuser.me/api/portraits/med/women/63.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/women/63.jpg"
        }
    }, {
        "name": {
            "title": "mr",
            "first": "lenni",
            "last": "koistinen"
        },
        "location": {
            "street": "4558 korkeavuorenkatu",
            "city": "kyyjärvi",
            "state": "south karelia",
            "postcode": 73584
        },
        "dob": "1945-06-17 05:11:12",
        "picture": {
            "large": "https://randomuser.me/api/portraits/men/97.jpg",
            "medium": "https://randomuser.me/api/portraits/med/men/97.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/men/97.jpg"
        }
    }, {
        "name": {
            "title": "ms",
            "first": "آیناز",
            "last": "حیدری"
        },
        "location": {
            "street": "9102 میدان 15خرداد",
            "city": "نیشابور",
            "state": "فارس",
            "postcode": 49208
        },
        "dob": "1995-02-06 10:36:17",
        "picture": {
            "large": "https://randomuser.me/api/portraits/women/83.jpg",
            "medium": "https://randomuser.me/api/portraits/med/women/83.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/women/83.jpg"
        }
    }, {
        "name": {
            "title": "mrs",
            "first": "manuela",
            "last": "berkers"
        },
        "location": {
            "street": "3471 plompetorengracht",
            "city": "emmen",
            "state": "limburg",
            "postcode": 73329
        },
        "dob": "1953-05-15 14:59:51",
        "picture": {
            "large": "https://randomuser.me/api/portraits/women/94.jpg",
            "medium": "https://randomuser.me/api/portraits/med/women/94.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/women/94.jpg"
        }
    }, {
        "name": {
            "title": "mrs",
            "first": "emilie",
            "last": "pedersen"
        },
        "location": {
            "street": "3144 morbærvej",
            "city": "beder",
            "state": "danmark",
            "postcode": 89064
        },
        "dob": "1962-02-16 14:41:17",
        "picture": {
            "large": "https://randomuser.me/api/portraits/women/55.jpg",
            "medium": "https://randomuser.me/api/portraits/med/women/55.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/women/55.jpg"
        }
    }, {
        "name": {
            "title": "mrs",
            "first": "emma",
            "last": "macdonald"
        },
        "location": {
            "street": "1979 grand marais ave",
            "city": "delta",
            "state": "northwest territories",
            "postcode": 17807
        },
        "dob": "1988-05-26 04:07:12",
        "picture": {
            "large": "https://randomuser.me/api/portraits/women/58.jpg",
            "medium": "https://randomuser.me/api/portraits/med/women/58.jpg",
            "thumbnail": "https://randomuser.me/api/portraits/thumb/women/58.jpg"
        }
    }],
    "info": {
        "seed": "e6daa1e0db1315a7",
        "results": 10,
        "page": 1,
        "version": "1.1"
    }
}');
