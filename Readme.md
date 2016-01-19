## script installation ##
+ install gulp and other lib by
  ` npm install `
## create dir and lists.json file
  database is hard to use on career host, so we provide the solution to 
tranform the companies infomation from database convert to json file. and read on the front-end.
you can call the script with your browser:
`http://cesmartcamp.com/career/script/listsCreator.php`
## resize image script ##
the image for represent have format like this
 + the small logo file name must be 'small_logo.gif'
   you can use the gulp task to automate convert
   ` gulp resize ` but, the folder big_logo must be created before. ( big_logo folder contained the big raw logo )
 + every logo reside in there company dir inside years directory.

