<?php
header('Content-Type: application/json');
$easy = [
    "CS",          // 2 letters
    "IAS",         // 3 letters
    "WIE",         // 3 letters
    "Day",         // 3 letters
    "PES",         // 3 letters
    "IEEE",        // 4 letters
    "ENSIT",       // 5 letters
    "RTC",         // 3 letters
    "RAS",         // 3 letters
    "AESS",        // 4 letters
    "SIGHT",       // 5 letters
    "CSTAM",       // 5 letters
    "Xtreme",      // 6 letters
    "TSYP",        // 4 letters
    "Xplore",      // 6 letters
    "Papers",      // 6 letters
    "Awards",         // 6 letters
    "Ethics",         // 6 letters
];

$medium = [
    "Bootcamp",    // 8 letters
    "workshop",    // 8 letters
    "Computer",    // 8 letters
    "Fellows",        // 7 letters
    "Outreach",       // 8 letters
    "unit",       // 8 letters
    "Sections",       // 8 letters
    "Spectrum",       // 8 letters
    "Resources",      // 9 letters
    "Standards",      // 9 letters
    "Societies",      // 9 letters
    "Engineers",      // 9 letters
    "Robotics",       // 8 letters
    "Education",      // 9 letters
    "Committee",      // 9 letters
    "Research",       // 8 letters
    "Webinar",          // 7 letters
    "Symposium",        // 9 letters
];

$hard = [
    "Leadership",     // 10 letters
    "Networking",     // 11 letters
    "Sponsorship",    // 11 letters
    "Creativity",     // 11 letters
    "Innovation",     // 11 letters
    "Certification",  // 13 letters
    "Initiatives",    // 11 letters
    "Conference",       // 10 letters
    "Automation",       // 10 letters
    "Professional",     // 12 letters
    "Scholarships",     // 12 letters
    "Partnerships",     // 12 letters
    "Publication",      // 11 letters
    "Development",      // 11 letters
    "Collabratec",      // 11 letters
    "Electronics",      // 11 letters
    "Microcontroller",  // 15 letters
    "Programming",      // 11 letters
];


$words = [
    "easy" => $easy,
    "medium" => $medium,
    "hard" => $hard
];

echo json_encode($words);
?>
