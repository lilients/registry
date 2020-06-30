# Registry

basic registry for variable entries

## Features

* overview of entries in a interactive, searchable table
* detailed view of an entry on single pages
* form view to add new or edit an existing entry

## Installation and usage

1. clone this repo
2. run npm install
3. create and adapt config.json (see configure section below), schemas/schema.json and schemas/options.json (based on examples)
4. make data/data.json writeable
5. start adding fancy data in your new registry :)

### Configure

The following settings are available in the config file:

* remote - set path to remote data source or local
* password - set a password for editing access
* columns - define the colums that shall be displayed at the table view

## Built With

* [jQuery](https://jquery.com/) - basic javascript library
* [datatables](https://www.datatables.net/) - js table generator library
* [alpacajs](http://alpacajs.org) - js form generator library
