/**
* @file js/form.js
* uses alpaca http://alpacajs.org
*/

// variables
var schema = "./schemas/schema.json";
var options =  "./schemas/options.json";
var url = new URL(window.location.href);
var entryId = url.searchParams.get("entryId");

// display edit form if there is a entryId
if(entryId){

  // read remote url from config
  $.getJSON('./config.json', function(config){

    // get data from remote
    $.getJSON(config['remote'], function(data){

      // display a form with data using alpaca
      $('#form').alpaca({
        "data" : data[entryId],
        "schemaSource": schema,
        "optionsSource": options
      });
    });
  });
}
else {
  // display an empty form using alpaca
  $('#form').alpaca({
    "schemaSource": schema,
    "optionsSource": options
    });
}
