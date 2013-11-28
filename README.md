DOM Hunter
==============

Toolkit to crawl the Document Object Model (DOM) of static pages obtained via HTTP requests and work with native PHP objects. This is mainly intended for creating custom APIs. The way it works:

DOM Hunter allows to specify different fields (pray characteristics) that will then be hunted thru the DOM jungle. DOM Hunter has a repository of different data fields that could typically appear in a DOM from an HTML file and then uses regular expressions to search for them. API Hunter then returns an object with the results according to a specified class or just a simple generic PHP object. 
The general flow that makes the magic in API Hunter is:

-Make an HTTP request to an specified URL (has support to include headers in the request as if it was a browser from different devices, Operative Systems or send directly custom headers)
-Parse the DOM using regular expressions
-Populate specified class or a generic object

