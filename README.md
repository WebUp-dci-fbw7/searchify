# Searchify

 A tiny program to redirect users to their favorite search engine

 How to use:

 1) Clone this project to the root directory of your server (in a LAMP stack that would be `/var/www/html/` by default, if you're using anything other than apache, make sure your server supports PHP).

 2) Start sending GET requests to `/searchify/` on your web address (if you're running it locally that would be `localhost/searchify`).

 Supported query parameters:

 - `q`: _(String)_ The search term you would like to search for
 - `engine`: _(String)_ A string to represent the engine you would like to search with. Possible values:
      1. `"bing"` - To search with Bing
      1. `"ddg"` - To search with DuckDuckGo
      1. `"google"` - To search with Google
      1. `"yahoo"` - To search with yahoo
      1. _Feel free to add different search engines to the program_

For a demo of a search for that uses this program just go to `/searchify/demo.html` on your server's web address.
