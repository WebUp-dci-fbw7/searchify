<?php

  /**
   * Return a header string to redirect the user to a search engine
   * @param  [String] $query  The search query to use
   * @param  [String] $engine The search engine str (Enum, one of bing, ddg, google, yahoo)
   * @return [String]         A header string to redirect the browser to the correct search engine or A 404 status code for unknown engines
   */
  function search_header_str($query, $engine) {
    switch ($engine) {
      // Bing search engine
      case 'bing':
        return "Location: http://www.bing.com/search?q={$query}";

      // DuckDuckGo search engine
      case 'ddg':
        return "Location: http://www.duckduckgo.com/?q={$query}";

      // Google search engine
      case 'google':
        return "Location: http://www.google.com/search?q={$query}";
        break;

      // Yahoo search engine
      case 'yahoo':
        return "Location: http://search.yahoo.com/search?q={$query}";
        break;

      // Feel free to add other search engines here

      // Unrecognized search engine will send a 404 not found status code
      default:
        return "HTTP/1.1 404 Not Found";
        break;
    }
  }

  // Variables are below, if you want to support POST parameters, don't forget to switch GET to POST below
  /**
   * Sanitized used input from form, for the `q` GET Param
   * @var [String]
   */
  $q = htmlspecialchars($_GET['q']);
  /**
   * Sanitized used input from form, for the `engine` GET Param
   * @var [String]
   */
  $engine = htmlspecialchars($_GET['engine']);

  /**
   * Variation 2 - Send the header according to the header string, using a function.
   */
  header(search_header_str($q, $engine));

  /**
   * Variation 1 - The variation we've seen in class. If you want to try it out don't forget to comment out Variation 2 above.
   */
  // if($engine == 'bing') {
  //   header("Location: http://www.bing.com/search?q={$q}");
  // } elseif ($engine == 'ddg' ) {
  //   header("Location: http://www.duckduckgo.com/?q={$q}");
  // } elseif ($engine == 'google') {
  //   header("Location: http://www.google.com/search?q={$q}");
  // } elseif ($engine == 'yahoo') {
  //   header("Location: http://search.yahoo.com/search?q={$q}");
  // } else {
  //   header("HTTP/1.1 404 Not Found");
  // }

?>
