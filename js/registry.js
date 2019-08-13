/**
* @file js/registry.js
* basic js 
*/

// read config file (for remote url and column titles)
$.getJSON('./config.json', function(config){

  // change title and heading according to config file
  $('title').text(config['title']);
  $('h1').text(config['title']);

});
