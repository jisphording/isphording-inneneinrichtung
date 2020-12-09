// CONVERTING VIDEO FILES TO WEBM

// IMPORTING LIBRARIES
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
// requiring ffmpeg for conversion
const ffmpeg = require("ffmpeg-cli");
// require fs to get information from the file system
const fs = require('fs');

// VARIABLES
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
const source = "F:\\JI_BODY_OF_WORK\\CLIENT_Isphording_Inneneinrichtung\\07_Videos\\Datenausgabe\\MOV\\"; // the folder of the source files that have to be converted
const target = "video/"; // the target folder to where the files are saved

// FUNCTIONALITY
// ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
// Touching the file system to see how many video files have to be converted 
let numfiles = 0;
// storing the file names in an array to be used in conversion for loop
let videos = [];

// Touching the file system to look up name and number of files to be converted
fs.readdir(source, (err, files) => {
    if(err) throw err;

    numfiles = files.length;

    // pushing all video files into the array. To remove the extension we simply remove the last 4 characters (including the dot) from the string, because we know that there are only video files with '.mov' extension in there
    for (let i = 0; i < numfiles; i++) {
        videos.push(files[i].slice(0, -4));
    };

    // Show how many files will be converted
    console.log("Ffmpeg will convert " + numfiles + " Files.");

    // running a for loop that calls ffmpeg on all files in array
    for (let i = 0; i < numfiles; i++) {
        console.log("Ffmpeg conversion started on file Nr. " + i + " with file name: " + videos[i]);
    
        // Here we are using ffmpeg-cli to convert the video files to webm
        // The way the variables are passed is a little awkward here, but it works. It is important to note howewer that the whitespaces between the arguments and the quotation marks are important so the argument string is properly recognized
        // the ffmpeg settings below are recommendations by Google
        ffmpeg.runSync("-i " + source + videos[i] + ".mov -c:v libvpx-vp9 -pass 1 -b:v 1000K -threads 0 -speed 4 -y \
        -tile-columns 0 -frame-parallel 0 -auto-alt-ref 1 -lag-in-frames 25 -row-mt 1 \
        -g 9999 -aq-mode 0 -an -f webm " + target + videos[i] + ".webm ");
    
        ffmpeg.runSync("-i " + source + videos[i] + ".mov -c:v libvpx-vp9 -pass 2 -b:v 1000K -threads 0 -speed 1 -y \
        -tile-columns 6 -frame-parallel 1 -auto-alt-ref 1 -lag-in-frames 25 -row-mt 1 \
        -g 9999 -aq-mode 0 -c:a libopus -b:a 64k -f webm " + target + videos[i] + ".webm " );
    
    }
    
});