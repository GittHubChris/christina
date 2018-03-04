<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="last.css" />
        <script src='search.js'></script>
     <script src='results.js'></script>
    <script src='utils.js'></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Games - Test</title>
  </head>
  <body bgcolor=lime text=purple>
    <blockquote> Licitația Caritabilă \"Artiști pentru artiști<br>
      </blockquote>
    <!--The search form--->
    <form class="search">
     <input type="text" class="search-box" id="search" />
     <input type="submit" class="search-button" value="Search" />
</form>
    <!-- here’s the HTML for our /search page:-->
<!-- /search -->
<div class="search-results-count"></div>
<ul class="search-results"></ul>
<!--results.js-->
.done(function(data) {
    var searchIndex,
        results,
        $resultsCount = $('.search-results-count'),
        $results = $('.search-results'),
        totalScore = 0,
        percentOfTotal;
    <!-- Stage 1-->
    <!--set up the allowable fields-->
    searchIndex = lunr(function() {
        this.field('id');
        this.field('aname');
        this.field('description');
        this.ref('url');
        this.field('img_80');
    });
    <!--Stage 2-->
    <!--add each item from data.json to the index-->
    $.each(data,function(i,item) {
        searchIndex.add(item);
    });

    <!--Stage 3-->
    // search for the query and store the results as an array
    results = searchIndex.search(query.get());
    
    <!--Stage 4-->
    
    for(var result in results) {
        results[result].title = data.filter(function(post) {
            return post.url === results[result].ref;
        })[0].title;
    }

    <!-- show how many results there were, in the DOM-->
    $resultsCount.append(results.length + (results.length === 1 ? ' result' : ' results') + ' for "' + query.get() +'"');

    <!--Stage 5-->
    <!--get the total score of all items, so that we can divide each result into it, giving us a percentage-->
    $.each(results, function(i, result) {
        totalScore+=result.score;
    });

    <!-- Stage 6 Stage 7-->
    <!--append each result link, with a border that corresponds to a color with a strength equal to its percentage-->
    <!-- of the total score-->
    $.each(results, function(i,result) {
        percentOfTotal = result.score/totalScore;

        $results.append('<li><a href="'+ site + result.ref +'">'+result.title+'</a></li>');
        $results.children('li').last().css({
            'border-left': '20px solid '+utils.shade('#ffffff',-percentOfTotal)
        });
    });        
});
    




    <h1>Write code here</h1>
    <h2>
  </body>
</html>
