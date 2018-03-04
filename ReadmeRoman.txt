For the first task where i must build a search script that traverse data .json and returns search results based on input,

i will use the following alghoritm:

I will use Jekyll which is a static alghoritm which uses the following comannds:

~$ gem install jekyll bundler
 ~$  jekyll new my-awesome-site
 ~$ cd my-awesome-site
 ~$ bundle exec jekyll serve
 the second task i will use a java script search indexer
 FIRST STAGE OF THE ALGHORITM
 ------------///// WE WILL SET UP A SEARCH INDEX OBJECT WHICH IS JUST AN INITIALIZATION OF LUNR.WE WILL CALL this.field
 -----------///// AND  EVERY FIELD ACTUALLY MATCHES THE FIELDS THAT WE HAVE IN OUR data.json
 SECOND STAGE
 -------------//THEN WE LOOP THROUGH OUR JSON OBJECTS FROM data.json and we add them to searchIndex
 THIRD STAGE
 -------------//We call search(query,get()) on our lunr.object,search Index.So we will call query .set from URL(),so when we call
 query.get() it returns the query string from the URL.
 
