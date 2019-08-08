/**
* @file js/index.js
* uses datatables https://www.datatables.net/
*/

// read config file (for remote url and column titles)
$.getJSON('./config.json', function(config){

  // get data from remote
  $.getJSON(config['remote'], function(data){

      // create table head from config or data itself
      column_titles = [];

      if(config['columns']){
        $.each(config['columns'], function(key, value) {
          column_titles.push({
            "data": value,
            "title": value
          });
        });

      }else{
          $.each(data[0], function(key) {
            column_titles.push({
              "data": key,
              "title": key
            });
          });
      }

      // create data table
      $('#datatable').DataTable({
        responsive: false,
        fixedHeader: true,
        data : data,
        columns: column_titles,
        columnDefs: [
         {
             targets: 0, // display first column as a link to the detail page
             render: function ( data, type, row, meta ) {
                 if(type === 'display'){
                     data = '<a href="display.php?entryId=' + row.id + '">' + data + '</a>';
                 }
                 return data;
             }
         }
      ]
     });
   });
 });
