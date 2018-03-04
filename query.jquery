//Send an Ajax request
//We create a “Query” object
//Don’t confuse our Query object with jQuery. 
//Our Query object will serve as a container for everything related to our search.
//I’ve commented the code so you can see what everything does.
//Create a module using an IIFE

function(global,$) {
  
    //We will place  into "strict" mode
    //This  helps us write cleaner JavaScript Code
  
  
  
  'use strict';

  Query.prototype = {
    // this.q is our search query 
    
    set: function(val) {
      this.q = val;
      return this;
    }
    
    // brings us to our search page with a query string attached
    
    goToLocation: function(route) {
      if(typeof this.q !== 'undefined' && typeof this.q === 'string') {
        document.location.href=route+'/?query='+this.q;
      } 
      else {
        return;
      }
    }
    // returns our search query 
    
    get: function() {
      return this.q;
    }
    // "grab" the query from the query string in the URL and set this.q to it
    
    setFromURL: function(name) {
      name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
      var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
          results = regex.exec(location.search);

      this.q = results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));

      return this;        
    }
    
    // a wrapper for jQuery's $.get
    
    getJSON: function(file) {
      return $.get(file);
    }
  }

  // when we initialize a query, we have the option of giving it a query string
  function Query(q) {
    if(typeof q !== 'undefined' && typeof q === 'string') {
      this.q = q;
    }
  }

 // attach the Query object to the window
 
  global.Query = Query;
}(this,$);

// A documentation about the variables
//var query = new Query() — we can create a new “container” to hold our search query
//query.set('id') — this is what we want to search for, for example
//query.goToLocation('my-search-page') — will bring us to /my-search-page?query
//query.get() — returns `“id”, in this case
//query.setFromURL() — when we reached /my-search-page?query=id,
//we can grab the “id” string, and set it (internally, it says this.q = "id")
//query.getJSON('/posts.json') — this just grabs our page, /posts.json and returns the return value 
//of $.get (this is useful because we can call query.getJSON('/posts.json').done(function() {




