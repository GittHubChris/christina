//We will have the following code on our search page
//results.js
$(function(Query,utils){
  var query = new Query(),
        site = location.protocol + "//" + location.host,
        // some utility functions
        utils = utils;

    query
    .setFromURL('query')
    .getJSON('/data.json')
    .done(function(data) {
        console.log(data);
        // show our results
    });    
}(Query,utils));
