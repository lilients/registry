/**
* @file js/display.js
* uses alpaca http://alpacajs.org
*/

// get source id from url
var url_string = window.location.href;
var url = new URL(url_string);
var entryId = url.searchParams.get("entryId");

// read remote url from config
$.getJSON('./config.json', function(config){

  // get data from remote
  $.getJSON(config['remote'], function(data){

    // create a "view only" form with alpaca
    $('#form').alpaca({
      "schemaSource": "./schemas/schema.json",
      "optionsSource": "./schemas/options.json",
      "data" : data[entryId],
      "view" : "bootstrap-display-horizontal"
      });

  });

});
