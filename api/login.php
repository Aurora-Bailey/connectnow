<?php
/* Required parameters */
// email=string
// password=string

/* Optional parameters */
// first=string
// last=string


header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
exit('{
    "results": [{
        "name": "arthur",
        "location": "lille, nord",
        "age": "50",
        "picture": "https://randomuser.me/api/portraits/men/73.jpg",
        "bio": "Here is my short bio about myself. I am a penguin with exqusite taste in diamonds",
        "tags": ["tag", "tag", "tag", "tag", "tag", "tag", "tag", "tag", "tag", "tag", "tag", "tag", "tag", "tag", "tag"],
        "logged_in": true
    }],
    "info": {
        "seed": "e6daa1e0db1315a7",
        "results": 10,
        "page": 1,
        "version": "1.1"
    }
}');