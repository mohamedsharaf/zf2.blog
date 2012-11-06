zf2.blog
========

A Basic Zend Framework 2 Blog Module

Functional Specification
========================

This is a basic functional specification of the module.

Define the application
----------------------

**What is the application supposed to be?**

The application is supposed to be a blog module for the Zend Framework 2 MVC Framework. 

**What is the application supposed to do?**

+ Allow visitors to view and comment on blog posts.
+ Allow administrators to create, edit and delete blog posts.

**Who is going to be using this application?**

Bloggers who wish to publish their own content from within a ZF2 application and their followers and guests.

Sequence Diagrams
-----------------

**Public User View Post**

![Sequence Diagram](http://www.websequencediagrams.com/cgi-bin/cdraw?lz=dGl0bGUgUHVibGljIFVzZXIgVmlldyBTZXF1ZW5jZQoKVXNlci0-Vmlld0NvbnRyb2xsZXI6IFBvc3QgUmVxdWVzdApub3RlIHJpZ2h0IG9mADsFAB8MAC0OIHJldHJpZXZlcyBibG9nIHBvc3RzCgBRDi0-VXMAWgtzcG9uc2UK&s=napkin)

**Admin creates post**

![Sequence Diagram](http://www.websequencediagrams.com/cgi-bin/cdraw?lz=dGl0bGUgQWRtaW4gY3JlYXRlcyBwb3N0CgoADwUtPlBvc3RDb250cm9sbGVyOiBDACAFAB8FIFJlcXVlc3QKbm90ZSByaWdodCBvZiAAIhAANA4gcmV0cmlldmVzIG5ldwBCBmZvcm0KAFsOLT4AgQ8FOiBEaXNwbGF5ACMLYmxhbmsALgYAdAVsZWYAcwUAKgcASCcAgUgXU3VibWkAgQwGIHRvAIE9DwCBOy52YWxpZACCTAVpbnB1dCBhbmQgc3RvcgAMBSBkYXRhYmFzZQCBYBhSZWRpcmVjdHMgdG8gVmlldwCCOAthbmQgZACCEAgAgygGCg&s=napkin)

**Admin edit post**

![Sequence Diagram](http://www.websequencediagrams.com/cgi-bin/cdraw?lz=dGl0bGUgQWRtaW4gZWRpdHMgcG9zdAoKAA0FLT5Qb3N0Q29udHJvbGxlcjoAIgdyZXF1ZXN0cyBsaXN0IG9mAC8Fcwpub3RlIHJpZ2gADwUAKxAAPQ4gcmV0cmlldmUANg8gZnJvbSB0aGUgZGF0YWJhc2UKAHYOLT4AgSgFOiBEaXNwbGF5ADAQc3RvcmVkIGluADcOAIEXBWxlZgCBKgUAOwcAgXAGc2VsZWMAgXEHIHRvAIIBBQCBZxhFZGl0ACMGUgCBfQYAgTw4YW5kIHBvcHVsYXRlAHQHZm9ybQCBSyEAIQkgYWxyZWFkeQA9CWQAgUgbbW9kaWZpAGIHAINDGFN1Ym1pAFYHdG8AgzAPAIMuLnZhbGlkAIFVBWlucHV0AIFpBXVwAAwGAIM3IFJlZGlyAIMMBXRvIFZpZXcAhCkLYW5kIGQAgX8MCgoKCg&s=napkin)

**Admin delete post**

![Sequence Diagram](http://www.websequencediagrams.com/cgi-bin/cdraw?lz=dGl0bGUgQWRtaW4gZGVsZXRlcyBwb3N0CgoADwUtPlBvc3RDb250cm9sbGVyOgAkB3JlcXVlc3RzIGxpc3Qgb2YALwVzCm5vdGUgcmlnaAAPBQArEAA9DiByZXRyaWV2ZQA2DyBmcm9tIHRoZSBkYXRhYmFzZQoAdg4tPgCBKgU6IERpc3BsYXkAMBBzdG9yZWQgaW4ANw4AgRcFbGVmAIEqBQA7BwCBcgZzZWxlY3QAgXIGIHRvAIIBBwCBaRhEAIIhBQAnBlIAggEGAIFKLgCCWwwAgWcGAIEWDgCBKYEXCg&s=napkin)

Visitor/User available pages
----------------------------

+ Index page (of module): displays all blog posts on chronological order.
+ Posts by label: List of all blog posts in a specific category.
+ Post view page: displays a specific post with comments powered by Disqus.

Admin available pages
---------------------

+ All Visitor/User pages (with admin controls, when logged in as admin).
+ Create a new blog post and associate a label.
+ Edit a blog post and modify labels (if required).
+ Delete a blog post.